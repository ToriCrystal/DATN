<?php

namespace App\Http\Controllers\client\checkout;

use Illuminate\Support\Facades\Cache;
use App\Models\Voucher;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryDetail;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Models\CategoryPost;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->orderInfo = [];
        $dataAll = App::make('App\Http\Controllers\ProductController');
        $dataAll->shareData();
    }
    public function getCartData()
    {
        return session()->get('cart', []);
    }

    public function viewCheckOut()
    {   
        
        $cart = $this->getCartData();
        // session()->forget('cart');
        // dd($cart);
        $totalAfterDiscount = 0;
        if (count($cart) > 0) {
            $ordersController = App::make('App\Http\Controllers\OrdersController');
            $total = $ordersController->calculateTotalPrice($cart);

            // check voucher
            if (Session::has('voucher')) {
                $couponCode = Session::get('coupon_code');
                $discountAmount = Session::get('discount_amount');
                $cart['coupon_code'] = $couponCode;
                $cart['discountAmount'] = $discountAmount;
                session()->put('cart', $cart);
                $totalAfterDiscount = $total - $discountAmount;
            } else {
                $cart['total'] = $total;
                session()->put('cart', $cart);
            }
            // dd($cart);
        } else {
            $groupedCart = [];
            return view('page.cart', compact('cart', 'groupedCart'));
        }
        return view('page.checkout', compact('cart', 'totalAfterDiscount'));
    }

    public function confirmCheckout(Request $request, $order_code)
    {
        $find = Order::where('order_code', $order_code)->first();
        if ($find) {
            return view('page.cart', ['groupedCart' => [], 'cart' => []]);
        }

        $order_info = [];
        $currentDateTime = Carbon::now();
        $orderTime = $currentDateTime->toDateTimeString();
        $cart = $request->session()->get('cart', []);
        $user_id = Auth::user()->id;

        $total_pri_ip = $request->input('total_price');
        $total_price = intval(str_replace(array(',', ' VNĐ'), '', $total_pri_ip));
        $kh_ten = $request->input('kh_ten');
        $kh_dienthoai = $request->input('kh_dienthoai');
        $kh_city = $request->input('kh_city');
        $kq_quan = $request->input('kh_quan');
        $kq_xa = $request->input('kh_xa');
        $kh_sonha = $request->input('kh_sonha');
        $addtype = $request->input('addtype');
        $type_payment = $request->input('selector');
        $discount_amount = $request->input('discount_amount');
        $shipping_fee = $request->input('shipping_fee');

        $diachi = "$kh_sonha / $kq_xa / $kq_quan / $kh_city ($addtype)";

        if ($type_payment == '1') {
            $payment = 'Thanh toán chuyển khoản';
        } elseif ($type_payment == '2') {
            $payment = 'Thanh toán khi nhận hàng';
        } elseif ($type_payment == '3') {
            $payment = 'Thanh toán trực tuyến';
        }

        // Lưu đơn hàng vào cơ sở dữ liệu
        $order = Order::create([
            'user_id' => $user_id,
            'total_price' => $total_price,
            'recipient_name' => $kh_ten,
            'recipient_phone' => $kh_dienthoai,
            'recipient_address' => $diachi,
            'order_code' => $order_code,
            'status' => '0',
            'type_payment' => $type_payment,
            'notification_sent' => false,
        ]);

        $expiresAt = Carbon::now()->addMinutes(10);
        Cache::put('order_code', $order_code, $expiresAt);
        Cache::put('total_price', $total_price, $expiresAt);
        $order_id = $order->id;
        // $orderTime = $order->created_at;

        $order_info['order_info'] = [
            'order_code' => $order_code,
            'city' => $kh_city,
            'quan' => $kq_quan,
            'xa' => $kq_xa,
            'duong_so' => $kh_sonha,
            'total_price' => $total_price,
            'type_payment' => $payment,
            'discount_amount' => $discount_amount,
            'shipping_fee' => $shipping_fee,
            'currentDateTime' => $orderTime,
        ];

        // Lưu chi tiết đơn hàng
        // dd($cart);
        foreach ($cart as $item) {
            if (is_array($item)) {
                OrderDetail::create([
                    'order_id' => $order_id,
                    'product_id' => $item['product_id'],
                    'order_code' => $order_code,
                    'product_name' => $item['product_name'],
                    'amount' => $item['so_luong'],
                    'price' => $item['price'],
                ]);
                // - 1 sản phẩm
                $find_product = Products::find($item['product_id']);
                if ($find_product) {
                    $current_remaining = $find_product->remaining;
                    $quantity_to_subtract = $item['so_luong'];
                
                    if ($current_remaining >= $quantity_to_subtract) {
                        $new_remaining = $current_remaining - $quantity_to_subtract;
                        $find_product->update(['remaining' => $new_remaining]);
                    }
                }
                
                $info = [
                    'product_name' => $item['product_name'],
                    'amount' =>  $item['so_luong'],
                    'price' => $item['price'],
                ];
                $order_info['order'][$item['product_id']] = $info;
            }
        }
        
        if (Session::has('cart')) {
            Session::forget('cart');
        }

        if (Session::has('coupon_code')) {
            Session::forget('coupon_code');
        }

        if (Session::has('discount_amount')) {
            Session::forget('discount_amount');
        }

        if (Session::has('detail')) {
            Session::forget('detail');
        }
        session()->get('detail', []);
        session()->put('detail', $order_info);
        // dd(Session::all());

        // Cập nhật cột usage_limit của bảng vouchers
        $couponCode = $request->session()->get('coupon_code');
        if ($couponCode) {
            $voucher = Voucher::where('code', $couponCode)->first();
            if ($voucher) {
                $voucher->usage_count += 1;
                $voucher->save();
            }
        }
        if ($type_payment == '3') {
            $line_items = [];
            foreach ($cart as $line_item) {
                if (is_array($line_item)) {
                    $line_items[] = [
                        'price_data' => [
                            'currency' => 'vnd',
                            'product_data' => [
                                'name' => $line_item['product_name'],
                            ],
                            'unit_amount' => round($line_item['price']),
                        ],
                        'quantity' => $line_item['so_luong'],
                    ];
                }
            }

            $shippingFeeItem = [
                'price_data' => [
                    'currency' => 'vnd',
                    'product_data' => [
                        'name' => 'Phí vận chuyển',
                    ],
                    'unit_amount' => round($shipping_fee),
                ],
                'quantity' => 1,
            ];

            $line_items[] = $shippingFeeItem;

            $stripe = new \Stripe\StripeClient('sk_test_51NLf9UECOr6JjWZkeAk3ygxurtzIpEBO7tWTXyf5o45U6EtvAgtCSsKLU3BvHhpopAWboaZV5o0VlowBhvM1WLOf00lLDlmmEY');

            $stripe_session = [
                'invoice_creation' => ['enabled' => true],
                'line_items' => $line_items,
                'mode' => 'payment',
                'success_url' => route('stripe.checkout.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
                'cancel_url' =>  route('stripe.checkout.cancel', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            ];
    
            if (Session::has('discount_amount')) {
                $discountAmount = Session::get('discount_amount');
                $coupon = $stripe->coupons->create([
                    'amount_off' => round($discountAmount), // Phần trăm giảm giá (ở đây là 10%),
                    'currency' => 'vnd',
                    'duration' => 'once', // Thời hạn áp dụng (repeating, once, forever...)
                ]);
                $stripe_session = [
                    'invoice_creation' => ['enabled' => true],
                    'line_items' => $line_items,
                    'mode' => 'payment',
                    'discounts' => [
                        [
                            'coupon' => $coupon->id, 
                        ],
                    ],
                    'success_url' => route('stripe.checkout.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
                    'cancel_url' =>  route('stripe.checkout.cancel', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
                ];
            }
            $checkout_session = $stripe->checkout->sessions->create($stripe_session);
            $order->stripe_session_id = $checkout_session->id;
            $order->save();
            return redirect($checkout_session->url);
        }


        

        return redirect()->route('orderDetail');
    }

    public function orderDetail()
    {
        $cart = session()->get('cart', []);

        $order = session()->get('detail', []);

        return view('page.order-detail', compact('order', 'cart'));
    }

    public function pollNewOrders(Request $request)
    {
        // Kiểm tra có đơn hàng mới chưa được thông báo
        $newOrder = Order::where('notification_sent', false)->orderBy('created_at', 'desc')->first();

        if ($newOrder) {

            // Đánh dấu đơn hàng là đã được thông báo
            $newOrder->notification_sent = true;
            $user = User::find($newOrder->user_id);
            $user_name = $user ? $user->name : 'Không rõ';
            $user_img = $user ? $user->image : 'Không rõ';
            $newOrder->save();

            // Trả về thông báo về đơn hàng mới dưới dạng JSON
            return response()->json(['newOrder' => $newOrder, 'user_name' => $user_name, 'user_img' => $user_img]);
        }

        // Nếu không có đơn hàng mới, trả về một phản hồi trống
        return response()->json(null);
    }

    public function cronLsgdBank($order_code, $total_price)
    {
        // $token = '41862e570316b08bef3e6b-cad2-78ca-c3f2-fd091feefe2a';
        $tokenmb = 'A143C495-91C2-6992-6DAA-DAA954780D27';

        $result = $this->curl_get("https://api.web2m.com/historyapimbv3/Cong.danh2003/099999910/$tokenmb");
        print_r($result);
        $prefix = 'ORD';
        foreach ($result['transactions'] as $data) {
            $transactionID     = $data['transactionID'];
            $amount            = $data['amount'];
            $description       = $data['description'];
            $transactionDate   = $data['transactionDate'];
            $type              = $data['type'];
            if ($type == 'OUT') {
                continue;
            }
            $orderID           = $this->parse_order_id($description, $prefix);
            echo "$orderID\r";
            if ($order_code == $prefix . $orderID) {
                if ($amount >= $total_price) {
                    Order::where('order_code', $order_code)->update([
                        'status' => 1
                    ]);
                    print('SUCCESS');
                } else {
                    print('Số tiền thanh toán thấp hơn giá trị đơn hàng');
                }
                break;
            }
        }
    }

    // requests api
    public function curl_get($Action)
    {
        $curl = curl_init();
        $header[] = 'Content-Type: application/json; charset=utf-8';
        $header[] = 'accept: application/json';
        $opt = array(
            CURLOPT_URL => $Action,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_ENCODING => "",
            // CURLOPT_COOKIEJAR => "mb.txt",
            // CURLOPT_COOKIEFILE => "mb.txt",
            CURLOPT_HEADER => FALSE,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_TIMEOUT => 20,
        );
        curl_setopt_array($curl, $opt);
        $body = curl_exec($curl);
        if (is_object(json_decode($body))) {
            return json_decode($body, true);
        }
        return json_decode($body, true);
    }

    // replace order code
    public function parse_order_id($description, $prefix)
    {
        $pattern = '/' . preg_quote($prefix) . '(\d+)/';
        if (preg_match($pattern, $description, $matches)) {
            return $matches[1];
        }
        return null;
    }

    // public function getNewOrders(Request $request)
    // {
    //     // Lấy danh sách các đơn hàng mới (notification_sent = false)
    //     $newOrders = Order::where('notification_sent', false)->get();

    //     // Lấy danh sách đơn hàng hiện có từ session
    //     $existingOrders = $request->session()->get('newOrders', new Collection());

    //     // Loại bỏ các đơn hàng trùng lặp dựa trên id (hoặc bất kỳ trường khóa nào)
    //     $filteredOrders = $newOrders->filter(function ($newOrder) use ($existingOrders) {
    //         return !$existingOrders->contains('id', $newOrder->id);
    //     });

    //     // Cập nhật danh sách đơn hàng trong session
    //     $request->session()->put('newOrders', $existingOrders->concat($filteredOrders));

    //     return response()->json($filteredOrders);
    // }
    public function stripeSuccess(Request $request)
    {
        $stripe = new \Stripe\StripeClient('sk_test_51NLf9UECOr6JjWZkeAk3ygxurtzIpEBO7tWTXyf5o45U6EtvAgtCSsKLU3BvHhpopAWboaZV5o0VlowBhvM1WLOf00lLDlmmEY');
        try {
            $session_id = $request->get('session_id');
            $session = $stripe->checkout->sessions->retrieve($session_id);
            if (!$session) {
                throw new NotFoundHttpException();
            }
            $order = Order::where('stripe_session_id', $session_id)->first();
            if (!$order) {
                throw new NotFoundHttpException();
            }
            if ($order->status == 0) {
                $order->status = 1;
                $order->save();
            }
            session()->forget('cart');
            return redirect()->route('orderDetail');
        } catch (Exception $e) {
            throw new NotFoundHttpException();
        }
    }
    public function stripeCancel()
    {
    }
}

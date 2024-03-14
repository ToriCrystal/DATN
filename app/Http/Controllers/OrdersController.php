<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Events\NewOrderEvent;

use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    public function getCartData()
    {
        return session()->get('cart', []);
    }

    public function calculateTotalPrice($cart)
    {
        $total = 0;
        foreach ($cart as $item) {
            if (is_array($item)) {
                $total += $item['price'] * $item['so_luong'];
            }
        }

        return $total;
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
    
        $cart = $this->getCartData();
    
        if (isset($cart[$id])) {
            $cart[$id]['so_luong']++;
        } else {
            $price = $product->discount_price ?? $product->price;
    
            $cart[$id] = [
                "product_id" => $id,
                "product_name" => $product->product_name,
                "product_image" => $product->product_image,
                "price" => $price,
                "so_luong" => 1,
                "remaining" => $product->remaining,
                'discount_code' => '',
            ];
        }
        
        $total = $this->calculateTotalPrice($cart);
        $cart['total'] = $total;
        session()->put('cart', $cart);
    
        return response()->json(['message' => 'Đã thêm sản phẩm vào giỏ hàng']);
    }
    
    public function applyCoupon(Request $request)
    {
        $cart = $this->getCartData();
        $couponCode = $request->input('coupon_code');
        $total = $this->calculateTotalPrice($cart); // Hàm tính tổng giá

        $voucher = Voucher::where('code', $couponCode)
            ->where(function ($query) {
                $query->whereNull('expires_at')
                    ->orWhere('expires_at', '>', now());
            })
            ->first();

        if (!$voucher) {
            Session::forget('coupon_code');
            Session::forget('discount_amount');

            return response()->json(['success' => false, 'message' => 'Mã giảm giá không hợp lệ']);
        }

        if ($voucher->usage_count >= $voucher->usage_limit) {
            Session::forget('coupon_code');
            Session::forget('discount_amount');

            return response()->json(['success' => false, 'message' => 'Mã giảm giá đã hết lượt sử dụng']);
        }

        $discountAmount = $this->calculateDiscount($voucher, $total);

        if ($discountAmount >= 0) {
            // Lưu mã giảm giá vào session để sử dụng ở những bước tiếp theo


            // Cập nhật giỏ hàng với tổng giá sau khi áp dụng giảm giá
            $newTotal = $total - $discountAmount;

            // Cập nhật giỏ hàng với mã giảm giá
            $cart['coupon_code'] = $couponCode;
            $cart['discount_amount'] = $discountAmount;
            $this->updateCartWithDiscount($cart, $discountAmount);
            session()->put('cart', $cart);
            session()->put('discount_amount', $discountAmount);


            // Tăng giá trị usage_count lên 1 sau mỗi lần sử dụng mã giảm giá
            $voucher->increment('usage_count');

            // Return JSON response với thông tin mới
            return response()->json([
                'success' => true,
                'total_formatted' => number_format($newTotal, 0, ',', '.'),

            ]);
        }

        // Xóa thông tin mã giảm giá nếu không hợp lệ
        Session::forget('coupon_code');
        Session::forget('discount_amount');

        return response()->json(['success' => false]);
    }

    private function calculateDiscount($voucher, $productPrice)
    {
        if (!$voucher) {
            return 0; // Không tìm thấy hoặc không hợp lệ
        }

        // Xác định giảm giá dựa trên loại và giá trị giảm
        if ($voucher->discount_type === 'percent') {
            $discountAmount = ($voucher->discount_value / 100) * $productPrice; // Giảm giá theo phần trăm
        } else {
            $discountAmount = min($voucher->discount_value, $productPrice); // Giảm giá cố định, giữ ở mức tối thiểu là 0
        }

        return max(0, $discountAmount); // Đảm bảo giảm giá không trở thành số âm
    }

    private function updateCartWithDiscount($cart, $discountAmount)
    {
        if (isset($cart['items']) && count($cart['items']) > 0) {
            foreach ($cart['items'] as &$item) {
                $item['price'] -= $discountAmount / $item['quantity'];
            }
        }

        // Cập nhật tổng giá của giỏ hàng
        $cart['total'] -= $discountAmount;

        // Lưu thông tin giỏ hàng mới vào session
        session()->put('cart', $cart);
    }



    // You can move the rest of the functions from CartService to OrdersController


    public function removeCartItem(Request $request)
    {
        $productId = $request->input('product_id');

        // Lấy giỏ hàng từ session
        $cart = $request->session()->get('cart', []);

        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
        if (isset($cart[$productId])) {
            // Xóa sản phẩm khỏi giỏ hàng
            unset($cart[$productId]);

            // Cập nhật lại giỏ hàng trong session
            $request->session()->put('cart', $cart);

            // Tính toán lại tổng giá tiền hoặc các thông tin khác nếu cần

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Sản phẩm không tồn tại trong giỏ hàng']);
        }
    }


    public function updateCart(Request $request)
    {
        $quantities = $request->input('quantities');

        // Validate or sanitize the input as needed

        // Update the cart (you may have your own logic for this)
        // For example, assuming your cart is stored in the session:

        $cart = session('cart', []);

        foreach ($quantities as $productId => $quantity) {
            // Update the quantity for each product in the cart
            if (isset($cart[$productId])) {
                $cart[$productId]['so_luong'] = $quantity;
            }
        }

        session(['cart' => $cart]);

        // Calculate the new total price (you may have your own logic for this)
        $newTotal = $this->calculateTotalPrice($cart);

        // Return a JSON response with success and the new total
        return response()->json(['success' => true, 'total' => $newTotal]);
    }

    // Example function to calculate the total price (customize based on your logic)


    public function findOrder(Request $request)
    {
        $order_code = $request->input('search_value');
        $orders = Order::where('order_code', $order_code)->paginate(10);
        $dataAll = App::make('App\Http\Controllers\ProductController');
        $dataAll->shareData();
        return view('page.donhang', compact('orders'));
    }

    public function cancelOrder(Request $request, $order_code)
    {
        $dataProdcut = App::make('App\Http\Controllers\ProductController');
        $dataProdcut->shareData();

        \DB::table('orders')->where('order_code', $order_code)->update(['status' => 5]);
        $product_order = \DB::table('order_detail')->where('order_code', $order_code)->get(['product_id', 'amount']);
        foreach ($product_order as $item) {
            $product_id = $item->product_id;
            $amount = $item->amount;
            \DB::table('products')->where('id', $product_id)->increment('remaining', $amount);
        }
        $orders = $dataProdcut->donhang($request, $ret = true);
        return view('page.donhang', compact('orders'));
    }
}

<?php

namespace App\Http\Controllers\admin\order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Http\Request;


class AdminOrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin'); // Use the 'admin' middleware instead of 'auth'
    }
    
    public function donhang()
    {
        $show_order = Order::join('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'users.name')
            ->orderBy('created_at', 'desc');

        $order_0 = clone $show_order;
        $order_1 = clone $show_order;
        $order_2 = clone $show_order;
        $order_3 = clone $show_order;
        $order_4 = clone $show_order;
        $order_5 = clone $show_order;

        $wait_for_pay   = $order_0->where('orders.status', 0)->paginate(10); // chờ thanh toán
        $paid           = $order_1->where('orders.status', 1)->paginate(10); // đã thanh toán
        $processing     = $order_2->where('orders.status', 2)->paginate(10); // đang xử lí
        $shipping       = $order_3->where('orders.status', 3)->paginate(10); // đang vận chuyển 
        $completed      = $order_4->where('orders.status', 4)->paginate(10); // hoàn tất
        $cancel         = $order_5->where('orders.status', 5)->paginate(10); // bị hủy
        return view('admin.order.allorder', compact('wait_for_pay', 'paid', 'processing', 'shipping', 'completed', 'cancel'));
    }

    function orderItem($id)
    {
        $order = Order::with('items')->find($id);
        if (!$order) {
            return redirect()->route('admin.allorder')->with('error', 'Không tìm thấy đơn hàng.');
        }

        $donhang = Order::join('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'users.name')
            ->where('orders.id', $id)
            ->first();

        $sanphams = Products::join('order_detail', 'order_detail.product_id', '=', 'products.id')
            ->whereIn('order_detail.order_id', [$id])
            ->select('order_detail.*', 'products.product_image')
            ->get();

        return view('admin.order.orderItem', compact('order', 'donhang', 'sanphams'));
    }

    public function thayDoiTrangThai(Request $request)
    {
        $orderId = $request->input('id_dh');
        $newStatus = 0; // Thay đổi thành trạng thái 1 (Đang vận chuyển), bạn có thể thay đổi tùy theo trường hợp

        $order = Order::findOrFail($orderId);

        if ($order) {
            if ($order->status == 0) {
                $newStatus = 1;
            } elseif ($order->status == 1) {
                $newStatus = 2;
            } elseif ($order->status == 2) {
                $newStatus = 3;
            }

            $order->status = $newStatus;
            $order->save();

            return redirect()->back();
        }
    }
}

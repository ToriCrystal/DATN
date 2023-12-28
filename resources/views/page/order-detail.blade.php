@extends('layouts.layoutUser')

@section('title')
Thông tin đơn hàng
@endsection

@section('noidung')
<link rel="stylesheet" href="/css/checkout/linearicons.css">
<link rel="stylesheet" href="/css/checkout/owl.carousel.css">
<link rel="stylesheet" href="/css/checkout/themify-icons.css">
<link rel="stylesheet" href="/css/checkout/font-awesome.min.css">
<link rel="stylesheet" href="/css/checkout/nice-select.css">
<link rel="stylesheet" href="/css/checkout/nouislider.min.css">
<link rel="stylesheet" href="/css/checkout/bootstrap.css">
<link rel="stylesheet" href="/css/checkout/main.css">

<style>

    .additional-info {
        display: none;
    }

    li#totalPriceItem a::after {
        content: ' ▼';
        margin-left: 5px;
    }
</style>
<section class="order_details section_gap">
    <div class="container">
        <h3 class="title_confirmation">Đơn đặt hàng của bạn đã được nhận</h3>
        
        <div class="row order_d_inner">
            <div class="col-lg-6">
                <div class="details_item">
                    <h4>Thông tin đơn hàng</h4>
                    <ul class="list">
                        <li><a href="#"><span>Mã đơn hàng</span> : {{ $order['order_info']['order_code'] }}</a></li>
                        <li><a href="#"><span>Ngày đặt</span> : {{ $order['order_info']['currentDateTime'] }}</a></li>
                        <li id="totalPriceItem">
                            <a href="#" onclick="toggleAdditionalInfo()">
                                <span>Tổng tiền</span> : {{ number_format($order['order_info']['total_price']) }}
                            </a>
                            <div class="additional-info">
                                <p><span>Phí vận chuyển</span> : {{ number_format($order['order_info']['shipping_fee']) }}</p>
                                <p><span>Giá đã giảm</span> : {{ number_format($order['order_info']['discount_amount']) }}</p>
                            </div>
                        </li>
                        <li><a href="#"><span>Thanh toán</span> : {{ $order['order_info']['type_payment'] }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="details_item">
                    <h4>Địa chỉ nhận hàng</h4>
                    <ul class="list">
                        <li><a href="#"><span>Tỉnh/Thành phố</span> : {{ $order['order_info']['city'] }}</a></li>
                        <li><a href="#"><span>Quận/Huyện</span> : {{ $order['order_info']['quan'] }}</a></li>
                        <li><a href="#"><span>Phường/Xã</span> : {{ $order['order_info']['xa'] }}</a></li>
                        <li><a href="#"><span>Tên đường, số nhà</span> : {{ $order['order_info']['duong_so'] }}</a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-lg-4">
                <div class="details_item">
                    <h4>Địa chỉ giao hàng</h4>
                    <ul class="list">
                        <li><a href="#"><span>Tỉnh/Thành phố</span> : </a></li>
                        <li><a href="#"><span>Quận/Huyện</span> : </a></li>
                        <li><a href="#"><span>Phường/Xã</span> : </a></li>
                        <li><a href="#"><span>Tên đường, số nhà</span> : </a></li>
                    </ul>
                </div>
            </div> -->
        </div>
        <div class="order_details_table">
            <h2>Chi tiết đơn hàng</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng thanh toán</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order['order'] as $item)
                        @if (is_array($item))
                        <tr>
                            <td>
                                <p>{{ $item['product_name'] }}</p>
                            </td>
                            <td>
                                <h5>{{ $item['amount'] }}</h5>
                            </td>
                            <td>
                                <p>{{ $item['price'] }}</p>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleAdditionalInfo() {
        var additionalInfo = document.querySelector('#totalPriceItem .additional-info');
        additionalInfo.style.display = additionalInfo.style.display === 'none' ? 'block' : 'none';
    }
</script>
@endsection

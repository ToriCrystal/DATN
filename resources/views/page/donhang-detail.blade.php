@extends('layouts.layoutUser')

@section('title')
Thanh toán
@endsection

@section('noidung')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
<!-- css vendor -->
<link rel="stylesheet" href="/css/donhang/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/donhang/vendor/owl-carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="/css/donhang/vendor/photoswipe/photoswipe.css">
<link rel="stylesheet" href="/css/donhang/vendor/photoswipe/default-skin/default-skin.css">
<link rel="stylesheet" href="/css/donhang/vendor/select2/css/select2.min.css">
<!-- font - fontawesome -->
<!-- <link rel="stylesheet" href="/css/donhang/vendor/fontawesome/css/all.min.css"> -->
<!-- font - stroyka -->
<link rel="stylesheet" href="/css/donhang/fonts/stroyka/stroyka.css">

<!-- css -->
<link rel="stylesheet" href="/css/donhang/style.css">
<link rel="stylesheet" href="/css/donhang/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/donhang/plugins/sweetalert.css">
<link rel="stylesheet" href="/css/donhang/plugins/toastr.min.css">
<link rel="stylesheet" href="/css/donhang/plugins/sceditor/themes/default.min.css" />
<link rel="stylesheet" href="/css/donhang/main.css">


@auth
<div class="block">
    <div class="container_fix">
        <div class="row">
            <div class="col-11 col-lg-11 m-auto mt-lg-0">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <div class="card-header">
                                <h4>{{ $order_code }} - Chi tiết đơn hàng </h4>
                            </div>
                        </div>
                        <div class="card-divider"></div>
                    </div>

                    <div class="card-divider"></div>
                    <div class="card-body">
                        <div style="font-size: 14px;">
                            <!-- <li class="text-success"> * Trong trường hợp chủ shop không giải quyết hoặc giải quyết không thỏa đáng, hãy bấm vào "Khiếu nại đơn hàng" , để bên mình có thể giữ tiền đơn hàng đó (lâu hơn 3 ngày) trong lúc bạn đợi phản hồi từ người bán.</li>
                            <li class="text-success"> * Bên mình chỉ giữ tiền 3 ngày, trong trường hợp đơn hàng không có khiếu nại gì, tiền sẽ được chuyển cho người bán, vì vậy xin hãy KIỂM TRA KỸ SẢN PHẨM sau khi mua. </li> -->
                            <br>
                        </div>
                        <div class="table-responsive" id="table-orders">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày mua</th>
                                        <th>Mặt hàng</th>
                                        <th class="text-right">Số lượng</th>
                                        <th class="text-right">Đơn giá</th>
                                        <!-- <th class="text-right">Giảm</th> -->
                                        <th class="text-right">Tổng tiền</th>
                                        <th class="text-center">Thanh toán</th>
                                        <th class="text-center">Trạng thái</th>
                                        <th class="text-center">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order_detail as $item)
                                    <tr>
                                        <td>
                                            <a>{{ $item['order_code'] }}</a>
                                        </td>
                                        <td>{{ $item['created_at'] }}</td>
                                        <td>
                                            <a>{{ $item['product_name'] }}</a>
                                        </td>
                                        <td class="text-center">{{ $item['amount'] }}</td>
                                        <td class="text-center">{{ $item['price'] }}</td>
                                        <!-- <td class="text-center">-</td> -->
                                        <td class="text-center">{{ $item['amount'] * $item['price'] }}</td>
                                        <td class="text-center">{{ $item['type_payment'] == 1 ? 'Thanh toán chuyển khoản' : 
                                                                    ($item['type_payment'] == 2 ? 'Thanh toán khi nhận hàng' : 'Thanh toán trực tuyến') }}</td>
                                        <td class="text-center">
                                            <span class="badge badge-info rounded" style="@if($item['status'] == 1 || $item['status'] == 4)  background: rgb(98, 178, 102); @elseif ($item['status'] == 5) background: red; / @endif">
                                                {{ $item['status'] == 0 ? 'Chờ thanh toán' : 
                                                    ($item['status'] == 1 ? 'Đã thanh toán' : 
                                                    ($item['status'] == 2 ? 'Đang xử lý' : 
                                                    ($item['status'] == 3 ? 'Đang vận chuyển' : 
                                                    ($item['status'] == 4 ? 'Hoàn tất' : 
                                                    'Đã hủy')))) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <!-- <a id="cancelLink" href="{{ route('cancelOrder', ['order_code' => $item['order_code']]) }}">{{ $item['status'] != 4 && $item['status'] != 1 ? 'Hủy đơn hàng' : '' }}</a> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Paging-->
                            <div class="pagination justify-content-center">
                                {{ $order_detail->links('pagination::bootstrap-4') }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<script>
    window.location.href = "{{ route('index') }}";
</script>
@endauth
@endsection
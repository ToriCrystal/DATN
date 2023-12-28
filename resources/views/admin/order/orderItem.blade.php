@extends('layouts.layoutAD')

@section('title')
    Quản lý đơn hàng
@endsection

@section('noidung')
<style>
    .primary-btn {
    /* Tùy chỉnh màu sắc nền và màu chữ */
    background-color: #3498db; /* Màu nền */
    color: #fff; /* Màu chữ */

    /* Tùy chỉnh font chữ và padding */
    font-size: 14px;
    font-weight: bold;
    padding: 10px 8px;

    /* Tùy chỉnh viền */
    border: none;
    border-radius: 5px;

    /* Hiệu ứng hover khi di chuột */
    transition: background-color 0.3s ease-in-out;
}

.primary-btn:hover {
    background-color: #2980b9; /* Màu nền khi di chuột qua */
}

</style>
<style>
    .nav-item > #s4{
      color: white;
      background: #4B49AC;
    }

  </style>
    <div class="container-fluid page-body-wrapper">
        <!-- Phần mục lục: ../../partials/_sidebar.html -->
        @include('layouts.menuAD')

        <!-- Phần mục lục -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex align-items-end flex-wrap">
                                <div class="mr-md-3 mr-xl-5">
                                    <h2>Xin chào trở lại,</h2>
                                    <p class="mb-md-0">Giao diện quản lý hệ thống.</p>
                                </div>
                                <div class="d-flex">
                                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Bảng điều khiển&nbsp;/&nbsp;</p>
                                    <p class="text-primary mb-0 hover-cursor">Thống kê</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Chi tiết hóa đơn | <a href="/admin/restore"
                                        style="text-decoration:none; color:black; ">Quay Lại</a></h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered ">
                                        <thead class='thead-dark'>
                                            <tr>
                                                <th class="text-start">Mã đơn hàng</th>
                                                <th class="text-start">Tên người nhận</th>
                                                <th class="text-start">Ảnh sản phẩm</th>
                                                <th>Sản phẩm</th>
                                                <th>Giá</th>
                                                <th class="text-start">Tổng cộng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->items as $item)
                                            <tr>
                                                <td class="text-start">{{ $item->order_code }}</td>
                                                <td class="text-start">{{ $donhang->name }}</td>
                                                <td class="text-start">
                                                    @foreach ($sanphams as $sanpham)
                                                        @if ($sanpham->order_code == $item->order_code)
                                                            <img src="{{ $sanpham->product_image }}" alt="">
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{ $item->product_name }} <span class="text-danger">x{{ $item->amount }}</span></td>
                                                <td>{{ number_format($item->price) }} ₫</td>
                                                <td class="text-start">{{ number_format($item->price * $item->amount) }} ₫</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

         <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Nhóm CFF © 2023 <a href="#" target="_blank">VietNam</a>. Tất cả quyền được bảo lưu.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        </div>
        <!-- Kết thúc bảng điều khiển chính -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
@endsection
<!-- JavaScript -->

@extends('layouts.layoutAD')

@section('title')
    Quản lý bình luận
@endsection

@section('noidung')
    <style>
        .primary-btn {
            /* Tùy chỉnh màu sắc nền và màu chữ */
            background-color: #3498db;
            /* Màu nền */
            color: #fff;
            /* Màu chữ */
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
            background-color: #2980b9;
            /* Màu nền khi di chuột qua */
        }
    </style>

    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts.menuAD')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body d-flex flex-column">
                                <h3 class='text-center'>Xin lỗi, hiện chúng tôi không tìm thấy nội dung bạn cần</h3>
                                <img src="{{asset('images/404_graphic.png')}}" class="col-12 col-lg-6 m-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a
                            href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                            class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
        </div>
        <!-- main-panel ends -->
    </div>
@endsection
<!-- JavaScript -->

@extends('layouts.layoutAD')

@section('title')
    Quản lý đơn hàng
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
     <style>
        .nav-item > #s4{
          color: white;
          background: #4B49AC;
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
                            <div class="card-body">
                                <h2 class="card-title">@yield('title')</h2>
                                <div class="d-flex align-items-end flex-wrap">




                                    <div class="d-flex">
                                        <i class="mdi mdi-home text-muted hover-cursor"></i>
                                        <p class="text-muted mb-0 hover-cursor"><a href="{{ route('admin.dashboard') }}"
                                                class="text-secondary"> Dashboard&nbsp;/&nbsp;</a></p>
                                        <p class="text-primary mb-0">@yield('title')</p>
                                    </div>
                                </div>
                                <br>
                                <ul class="nav nav-tabs" id="myTabs" role="tablist">
                                     <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1"
                                            role="tab" aria-controls="tab1" aria-selected="true">Chờ thanh toán</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2"
                                            role="tab" aria-controls="tab2" aria-selected="true">Đã thanh toán</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tab3-tab" data-bs-toggle="tab" href="#tab3"
                                            role="tab" aria-controls="tab3" aria-selected="false">Đang xử lý</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tab4-tab" data-bs-toggle="tab" href="#tab4"
                                            role="tab" aria-controls="tab4" aria-selected="false">Đang vận chuyển</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tab5-tab" data-bs-toggle="tab" href="#tab5"
                                            role="tab" aria-controls="tab5" aria-selected="false">Hoàn tất</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tab6-tab" data-bs-toggle="tab" href="#tab6"
                                            role="tab" aria-controls="tab6" aria-selected="false">Bị hủy</a>
                                    </li>
                                </ul>
                                <div class="tab-content my-3" id="myTabsContent">
                                    <!-- chờ thanh toán -->
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                        aria-labelledby="tab1-tab">
                                        <div class="table-responsive">
                                            <table id="tab1-listing" class="table table-bordered">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th class="text-start">Mã đơn hàng</th>
                                                        <th>Tên người dùng</th>
                                                        <th>Thời điểm mua</th>
                                                        <th>Chi tiết đơn hàng</th>

                                                        <th>Trạng thái</th>
                                                        <th>Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($wait_for_pay as $product)
                                                        <tr>
                                                            <td class="text-start">{{ $product->order_code }}</td>
                                                            <td>{{ $product->name }}</td>
                                                            <td>{{ $product->created_at->format('H:i:s d-m-Y') }}</td>
                                                            <td><a href="/admin/order/orderItem/{{ $product->id }}"
                                                                    style=" text-decoration: none;"><i
                                                                        class="bi bi-box-arrow-up-right"></i>Chi tiết đơn
                                                                    hàng</a></td>
                                                            <td>Chưa xác nhận</td>
                                                            <td class="text-center">
                                                                <form action="/admin/thaydoitrangthai" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id_dh"
                                                                        value="{{ $product->id }}">
                                                                    <button type="submit" class="primary-btn">Xác
                                                                        nhận</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="pagination justify-content-center">
                                                {{ $wait_for_pay->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- đã thanh toán -->
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                        <div class="table-responsive">
                                            <table id="tab2-listing" class="table table-bordered">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th class="text-start">Mã đơn hàng</th>
                                                        <th>Tên người dùng</th>
                                                        <th>Thời điểm mua</th>
                                                        <th>Chi tiết đơn hàng</th>
                                                        <th>Trạng thái</th>
                                                        <th>Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($paid as $product)
                                                        <tr>
                                                            <td class="text-start">{{ $product->order_code }}</td>
                                                            <td>{{ $product->name }}</td>
                                                            <td>{{ $product->created_at->format('H:i:s d-m-Y') }}</td>
                                                            <td><a href="/admin/order/orderItem/{{ $product->id }}"
                                                                    style=" text-decoration: none;"><i
                                                                        class="bi bi-box-arrow-up-right"></i>Chi tiết đơn
                                                                    hàng</a></td>
                                                            <td>Đang vận chuyển</td>
                                                            <td>
                                                                <form action="/admin/thaydoitrangthai" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id_dh"
                                                                        value="{{ $product->id }}">
                                                                    <button type="submit" class="primary-btn">Đóng gói</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="pagination justify-content-center">
                                                {{ $paid->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- đang xử lý -->
                                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                        <div class="table-responsive">
                                            <table id="tab3-listing" class="table table-bordered">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th class="text-start">Mã đơn hàng</th>
                                                        <th>Tên người dùng</th>
                                                        <th>Thời điểm mua</th>
                                                        <th>Chi tiết đơn hàng</th>
                                                        <th>Trạng thái</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($processing as $product)
                                                        <tr>
                                                            <td class="text-start">{{ $product->order_code }}</td>
                                                            <td>{{ $product->name }}</td>
                                                            <td>{{ $product->created_at->format('H:i:s d-m-Y') }}</td>
                                                            <td><a href="/admin/order/orderItem/{{ $product->id }}"
                                                                    style=" text-decoration: none;"><i
                                                                        class="bi bi-box-arrow-up-right"></i>Chi tiết đơn
                                                                    hàng</a></td>
                                                            <td><form action="/admin/thaydoitrangthai" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id_dh"
                                                                        value="{{ $product->id }}">
                                                                    <button type="submit" class="primary-btn">Vận chuyển</button>
                                                                </form></td>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="pagination justify-content-center">
                                                {{ $processing->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- đang vận chuyển -->
                                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                        <div class="table-responsive">
                                            <table id="tab3-listing" class="table table-bordered">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th class="text-start">Mã đơn hàng</th>
                                                        <th>Tên người dùng</th>
                                                        <th>Thời điểm mua</th>
                                                        <th>Chi tiết đơn hàng</th>
                                                        <th>Trạng thái</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($shipping as $product)
                                                        <tr>
                                                            <td class="text-start">{{ $product->order_code }}</td>
                                                            <td>{{ $product->name }}</td>
                                                            <td>{{ $product->created_at->format('H:i:s d-m-Y') }}</td>
                                                            <td><a href="/admin/order/orderItem/{{ $product->id }}"
                                                                    style=" text-decoration: none;"><i
                                                                        class="bi bi-box-arrow-up-right"></i>Chi tiết đơn
                                                                    hàng</a></td>
                                                            <td>Đang vận chuyển</td>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="pagination justify-content-center">
                                                {{ $shipping->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- hoàn tất -->
                                    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                                        <div class="table-responsive">
                                            <table id="tab3-listing" class="table table-bordered">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th class="text-start">Mã đơn hàng</th>
                                                        <th>Tên người dùng</th>
                                                        <th>Thời điểm mua</th>
                                                        <th>Chi tiết đơn hàng</th>
                                                        <th>Trạng thái</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($completed as $product)
                                                        <tr>
                                                            <td class="text-start">{{ $product->order_code }}</td>
                                                            <td>{{ $product->name }}</td>
                                                            <td>{{ $product->created_at->format('H:i:s d-m-Y') }}</td>
                                                            <td><a href="/admin/order/orderItem/{{ $product->id }}"
                                                                    style=" text-decoration: none;"><i
                                                                        class="bi bi-box-arrow-up-right"></i>Chi tiết đơn
                                                                    hàng</a></td>
                                                            <td>Hoàn tất</td>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="pagination justify-content-center">
                                                {{ $completed->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>      
                                    <!-- bị hủy -->
                                    <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                                        <div class="table-responsive">
                                            <table id="tab3-listing" class="table table-bordered">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th class="text-start">Mã đơn hàng</th>
                                                        <th>Tên người dùng</th>
                                                        <th>Thời điểm mua</th>
                                                        <th>Chi tiết đơn hàng</th>
                                                        <th>Trạng thái</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($cancel as $product)
                                                        <tr>
                                                            <td class="text-start">{{ $product->order_code }}</td>
                                                            <td>{{ $product->name }}</td>
                                                            <td>{{ $product->created_at->format('H:i:s d-m-Y') }}</td>
                                                            <td><a href="/admin/order/orderItem/{{ $product->id }}"
                                                                    style=" text-decoration: none;"><i
                                                                        class="bi bi-box-arrow-up-right"></i>Chi tiết đơn
                                                                    hàng</a></td>
                                                            <td>Bị hủy</td>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="pagination justify-content-center">
                                                {{ $cancel->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>

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
        <!-- main-panel ends -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
@endsection
<!-- JavaScript -->

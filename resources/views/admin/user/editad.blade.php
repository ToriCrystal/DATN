@extends('layouts.layoutAD')

@section('title')
    Quản lý sản phẩm
@endsection

@section('noidung')
<style>
    .nav-item > #s5{
      color: white;
      background: #4B49AC;
    }

  </style>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts.menuAD')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 m-auto grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Cập nhật tài khoản người dùng</h4>
                                <p class="card-description">
                                    Cập nhật trạng thái tài khoản
                                </p>
                                <form action="{{ route('admin.editad', $admin->id) }}" method="post" class="col-7 "
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" id="email"
                                            placeholder="email" value="{{ $admin->email }}" disabled>
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="password" value="{{ $admin->password }}" required>
                                        @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Trạng thái</label>
                                        <select name="status" id="status">
                                            @php
                                                $selectedStatus = $admin->status ?? old('status');
                                                $statusOptions = [
                                                    0 => 'Khóa vĩnh viễn',
                                                    1 => 'Đang hoạt động',
                                                    2 => 'Tạm khóa'
                                                ];
                                            @endphp

                                            {{-- Hiển thị trạng thái hiện tại nhưng ẩn trong danh sách --}}
                                            <option value="{{ $selectedStatus }}">
                                                {{ $statusOptions[$selectedStatus] }}
                                            </option>

                                            {{-- Hiển thị các tùy chọn khác --}}
                                            @foreach ($statusOptions as $key => $option)
                                                @if ($key != $selectedStatus)
                                                    <option value="{{ $key }}">{{ $option }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>



                                    <div>

                                        <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                        <a href="/admin/user/restore_us" class="btn btn-secondary "> Trở về</a>
                                    </div>
                                </form>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
@endsection
<!-- JavaScript -->

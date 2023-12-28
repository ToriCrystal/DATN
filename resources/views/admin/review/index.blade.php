@extends('layouts.layoutAD')

@section('title')
    Quản lý đánh giá sản phẩm
@endsection

@section('noidung')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.menuAD')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">@yield('title')</h2>

                                <div class="table-responsive pt-3">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="admin-tab" data-toggle="tab" href="#admin"
                                                role="tab" aria-controls="admin" aria-selected="true">Đánh giá tốt</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="user-tab" data-toggle="tab" href="#user"
                                                role="tab" aria-controls="user" aria-selected="false">Đánh giá xấu</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="myTabContent">
                                        <!-- For "Đang chờ" tab -->
                                        <div class="tab-pane fade show active" id="admin" role="tabpanel"
                                            aria-labelledby="admin-tab">
                                            <table class="table table-bordered text-center">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>
                                                            Tên người dùng
                                                        </th>

                                                        <th style="width: 30%;">
                                                            Nội dung
                                                        </th>
                                                        <th>
                                                            Đánh giá
                                                        </th>
                                                        <th>
                                                            Tên sản phẩm
                                                        </th>
                                                        <th>
                                                            Thời gian
                                                        </th>
                                                        <th>
                                                            Trạng thái
                                                        </th>
                                                        <th colspan="2">
                                                            Hành động
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i = 1 @endphp
                                                    @foreach ($goodReviews as $item)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $item->user->name }}</td>
                                                            <td>{{ $item->comment }}</td>
                                                            <td>
                                                                @switch($item->rating)
                                                                    @case(1)
                                                                        Rất tệ
                                                                    @break

                                                                    @case(2)
                                                                        Tệ
                                                                    @break

                                                                    @case(3)
                                                                        Trung bình
                                                                    @break

                                                                    @case(4)
                                                                        Khá tốt
                                                                    @break

                                                                    @case(5)
                                                                        Tốt
                                                                    @break

                                                                    @default
                                                                        Không xác định
                                                                @endswitch
                                                            </td>
                                                            <td>{{ optional($item->product)->product_name }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}
                                                            </td>
                                                            <td>
                                                                <form
                                                                    action="{{ route('reviews.updateStatus', $item->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('PATCH')
                                                                    <select class="btn" name="status" onchange="this.form.submit()">
                                                                        <option value="1"
                                                                            {{ $item->status == 1 ? 'selected' : '' }}>Hiện
                                                                        </option>
                                                                        <option value="0"
                                                                            {{ $item->status == 0 ? 'selected' : '' }}>Ẩn
                                                                        </option>
                                                                    </select>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="{{ route('reviews.destroy', $item->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                                </form>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>

                                            <!-- Hiển thị phân trang -->
                                            <div class="pagination justify-content-center">
                                                {{ $goodReviews->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>

                                        <!-- For "Đã hoàn tất" tab -->
                                        <div class="tab-pane fade" id="user" role="tabpanel"
                                            aria-labelledby="user-tab">
                                            <table class="table table-bordered text-center">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>
                                                            Tên người dùng
                                                        </th>

                                                        <th style="width: 30%;">
                                                            Nội dung
                                                        </th>
                                                        <th>
                                                            Đánh giá
                                                        </th>
                                                        <th>
                                                            Tên sản phẩm
                                                        </th>
                                                        <th>
                                                            Thời gian
                                                        </th>
                                                        <th>
                                                            Trạng thái
                                                        </th>
                                                        <th colspan="2">
                                                            Hành động
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i = 1 @endphp
                                                    @foreach ($badReviews as $item)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $item->user->name }}</td>
                                                        <td>{{ $item->comment }}</td>
                                                        <td>
                                                            @switch($item->rating)
                                                                @case(1)
                                                                    Rất tệ
                                                                @break

                                                                @case(2)
                                                                    Tệ
                                                                @break

                                                                @case(3)
                                                                    Trung bình
                                                                @break

                                                                @case(4)
                                                                    Khá tốt
                                                                @break

                                                                @case(5)
                                                                    Tốt
                                                                @break

                                                                @default
                                                                    Không xác định
                                                            @endswitch
                                                        </td>
                                                        <td>{{ optional($item->product)->product_name }}</td>                                                        
                                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}
                                                        </td>
                                                        <td>
                                                            <form
                                                                action="{{ route('reviews.updateStatus', $item->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PATCH')
                                                                <select class="btn" name="status" onchange="this.form.submit()">
                                                                    <option value="1"
                                                                        {{ $item->status == 1 ? 'selected' : '' }}>Hiện
                                                                    </option>
                                                                    <option value="0"
                                                                        {{ $item->status == 0 ? 'selected' : '' }}>Ẩn
                                                                    </option>
                                                                </select>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('reviews.destroy', $item->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </form>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                            <!-- Hiển thị phân trang -->
                                            <div class="pagination justify-content-center">
                                                {{ $badReviews->links('pagination::bootstrap-4') }}
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
    </div>

    <!-- Thêm mã JavaScript sau thẻ tab HTML -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

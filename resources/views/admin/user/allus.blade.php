@extends('layouts.layoutAD')

@section('title')
    Quản lý tài khoản
@endsection

@section('noidung')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts.menuAD')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Tài khoản</h2>
                                <div class="d-flex justify-content-between">
                                    <div class="col pl-0">
                                        <p class="card-description d-flex">
                                            <a href="{{ route('admin.createacc') }}" style="text-decoration: none;"><i
                                                    class="bi bi-patch-plus"></i> Thêm tài khoản</a>
                                            {{-- <button type="button" class="btn btn-primary" onclick="prepareAdd();"><i
                                                    class="fas fa-plus"></i> Thêm mới</button> --}}
                                        </p>
                                    </div>

                                </div>
                                <div class="table-responsive pt-3">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="admin-tab" data-toggle="tab" href="#admin"
                                                role="tab" aria-controls="admin" aria-selected="true">Admin</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="user-tab" data-toggle="tab" href="#user"
                                                role="tab" aria-controls="user" aria-selected="false">User</a>
                                        </li>

                                    </ul>

                                    <div class="tab-content mt-3" id="myTabContent">
                                        <div class="tab-pane fade show active" id="admin" role="tabpanel"
                                            aria-labelledby="admin-tab">
                                            <!-- Nội dung cho tab admin -->
                                            <table class="table table-bordered text-center">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th colspan="2">
                                                            Tên người dùng
                                                        </th>
                                                        <th>
                                                            Email
                                                        </th>

                                                        <th>
                                                            Ngày cập nhật
                                                        </th>

                                                        <th>
                                                            Trạng thái
                                                        </th>
                                                        <th colspan="2">
                                                            Hành động
                                                        </th>
                                                    </tr>
                                                </thead>
                                                @php $i = 1 @endphp
                                                @foreach ($adminUsers as $ad)

                                                        <tr>
                                                            <td>
                                                                {{ $i++ }}
                                                            </td>
                                                            <td>
                                                                {{ $ad->name }}
                                                            </td>
                                                            <td>

                                                                @if ($ad->image)
                                                                    <img src="{{ $ad->image }}"
                                                                        alt="{{ $ad->image }}" width="100"
                                                                        height="100">
                                                                @else
                                                                    <img src="/images/users/userdefault.jpg"
                                                                        alt="chưa cập nhật!" width="100" height="100">
                                                                @endif

                                                            </td>
                                                            <td>
                                                                {{ $ad->email }}
                                                            </td>
                                                            <td>

                                                                {{ date('d-m-Y', strtotime($ad->updated_at)) }}
                                                            </td>
                                                            <td>
                                                                {{ $ad->status == 0 ? 'Khóa vĩnh viễn' : ($ad->status == 1 ? 'Đang hoạt động' : 'Tạm khóa') }}
                                                            </td>

                                                            <td>
                                                                <a href="{{ url('admin/user/editad', $ad->id) }}"><i
                                                                        class="bi bi-pen" style="font-size: 23px"></i></a>
                                                            </td>
                                                            <td>
                                                                <form name="frmXoa" method="POST"
                                                                    action="{{ route('admin.deletead', ['id' => $ad->id]) }}"
                                                                    class="delete-form" data-id = "{{ $ad->id }}">
                                                                    {{ csrf_field() }}
                                                                    <input type="hidden" name="_method" value="DELETE" />
                                                                    <button type="submit" class="btn btn-link"><i
                                                                            class="fas fa-trash-alt function"
                                                                            style="color:red"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                @endforeach

                                            </table>
                                            <div class="pagination justify-content-center">
                                                {{ $adminUsers->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="user" role="tabpanel"
                                            aria-labelledby="user-tab">
                                            <table class="table table-bordered text-center">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th colspan="2">
                                                            Tên người dùng
                                                        </th>
                                                        <th>
                                                            Email
                                                        </th>

                                                        <th>
                                                            Ngày cập nhật
                                                        </th>

                                                        <th>
                                                            Trạng thái
                                                        </th>
                                                        <th colspan="2">
                                                            Hành động
                                                        </th>
                                                    </tr>
                                                </thead>
                                                @php $i = 1 @endphp

                                                @foreach ($userUsers as $us)

                                                        <tr>
                                                            <td>
                                                                {{ $i++ }}
                                                            </td>
                                                            <td>
                                                                {{ $us->name }}
                                                            </td>
                                                            <td>

                                                                @if ($us->image)
                                                                    <img src="{{$us->image}}"
                                                                        alt="{{ $us->image }}" width="100"
                                                                        height="100">
                                                                @else
                                                                    <img src="/images/users/userdefault.jpg"
                                                                        alt="chưa cập nhật!" width="100" height="100">
                                                                @endif

                                                            </td>
                                                            <td>
                                                                {{ $us->email }}
                                                            </td>
                                                            <td>

                                                                {{ date('d-m-Y', strtotime($us->updated_at)) }}
                                                            </td>
                                                            <td>
                                                                {{ $us->status == 0 ? 'Khóa vĩnh viễn' : ($us->status == 1 ? 'Đang hoạt động' : 'Tạm khóa') }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('admin/user/editus', $us->id) }}"><i
                                                                        class="bi bi-pen" style="font-size: 23px"></i></a>
                                                            </td>

                                                            <td>
                                                                <form name="frmXoa" method="POST"
                                                                    action="{{ route('admin.deleteus', ['id' => $us->id]) }}"
                                                                    class="delete-form" data-id = "{{ $us->id }}">
                                                                    {{ csrf_field() }}
                                                                    <input type="hidden" name="_method"
                                                                        value="DELETE" />
                                                                    <button type="submit" class="btn btn-link"><i
                                                                            class="fas fa-trash-alt function"
                                                                            style="color:red"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                @endforeach

                                            </table>
                                            <div class="pagination justify-content-center">
                                                {{ $userUsers->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="sls" role="tabpanel"
                                            aria-labelledby="sls-tab">
                                            <table class="table table-bordered text-center">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th colspan="1">
                                                            Tên người dùng
                                                        </th>
                                                        <th>
                                                            Email
                                                        </th>
                                                        <th>
                                                            Cấp bậc
                                                        </th>
                                                        <th>
                                                            Trạng thái
                                                        </th>
                                                        <th>
                                                            Ngày cập nhật
                                                        </th>
                                                        <th colspan="2">
                                                            Hành động
                                                        </th>
                                                    </tr>
                                                </thead>
                                                @php $i = 1 @endphp

                                    </div>

                                    <!-- Hiển thị phân trang -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
           <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Nhóm CFF © 2023 <a href="#" target="_blank">VietNam</a>. Tất cả quyền được bảo lưu.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- Thêm mã JavaScript sau thẻ tab HTML -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTab a').on('click', function(e) {
                e.preventDefault();
                var tab = $(this).attr('aria-controls');
                $.get('/loadtabdata/' + tab, function(data) {
                    $('#tab-content').html(data);
                });
            });
        });
    </script>

@endsection
<!-- JavaScript -->

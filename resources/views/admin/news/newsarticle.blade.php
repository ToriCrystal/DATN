@extends('layouts.layoutAD')

@section('title')
    Quản lý Tin Tức
@endsection

@section('noidung')
    <style></style>
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
                                <h2 class="card-title">Tin Tức</h2>
                                <div class="d-flex justify-content-between">
                                    <div class="col pl-0">
                                        <p class="card-description d-flex">
                                            <a href="{{ route('admin.newsarticlecreate') }}" style="text-decoration: none;"><i
                                                    class="bi bi-patch-plus"></i> Thêm tin tức</a>
                                        </p>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="card-description d-flex justify-content-end">
                                            <a href="{{ route('admin.news.trash') }}" style="text-decoration: none;">
                                                Thùng rác <i class="bi bi-trash"></i> </a>
                                        </p>
                                    </div>
                                </div>

                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered text-center">
                                        <thead class='thead-dark'>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Tên tin tức
                                                </th>
                                                <th>
                                                    Slug
                                                </th>
                                                <th>
                                                    Trạng thái
                                                </th>
                                                <th>
                                                    Chi tiết
                                                </th>
                                                <th colspan="3">
                                                    Hành động
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($newsarticle as $news)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $news->post_title }}</td>
                                                    <td>{{ $news->post_slug }}</td>
                                                    <td>{{ $news->status == 0 ? 'Ẩn' : 'Hiện' }}</td>
                                                    <td><a href="{{ route('admin.detailsnewsarticle', $news->id) }}">Xem
                                                            chi tiết</a>
                                                    </td>
                                                    <td><a href="{{ route('admin.newsarticleedit', $news->id) }}"><i
                                                                class="bi bi-pen" style="font-size: 23px"></i></a>
                                                    </td>
                                                    <td>
                                                        <form name="frmXoa" method="POST"
                                                            action="{{ route('admin.newsarticledelete', ['id' => $news->id]) }}"
                                                            class="delete-form" data-id = "{{ $news->id }}">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <button type="submit" class="btn btn-link"><i
                                                                    class="fas fa-trash-alt function"
                                                                    style="color:red"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>

                                    <!-- Hiển thị phân trang -->
                                    <div class="pagination justify-content-center pt-4">
                                        {{ $newsarticle->links('pagination::bootstrap-4') }}
                                    </div>
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
@endsection
<!-- JavaScript -->

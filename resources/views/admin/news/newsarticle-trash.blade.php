@extends('layouts.layoutAD')

@section('title')
    Thùng rác - Tin tức
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
                                <h2 class="card-title">Tin tức - Thùng rác</h2>
                                <p class="card-description">
                                    <a href="{{ route('admin.news') }}" style="text-decoration: none;"><i
                                            class="bi bi-patch-plus"></i> Quay lại</a>
                                </p>
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
                                                    Ngày xóa
                                                </th>
                                                <th colspan="2">
                                                    Hành động
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($postsInTrash as $post)
                                                <tr id="p{{ $post->id }}">
                                                    <td>
                                                        {{ $loop->index + 1 }}
                                                    </td>
                                                    <td>
                                                        {{ trim(substr($post->post_title, 0, 10)) }}
                                                    </td>
                                                    <td>
                                                        {{ $post->deleted_at }}
                                                    </td>
                                                    <td>
                                                        <form name="frmKhoiPhuc" method="POST"
                                                            action="{{ route('admin.news.restorePost', $post->id) }}"
                                                            class="restore-form" data-id = "{{ $post->id }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-link"><i class="fa-solid fa-arrow-rotate-left"></i></button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form name="frmXoa" method="POST"
                                                            action="{{ route('admin.news.destroyPost', ['id' => $post->id]) }}"
                                                            class="delete-form" data-id = "{{ $post->id }}">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <button type="submit" class="btn btn-link"><i
                                                                    class="fas fa-trash-alt text-danger"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                    <!-- Hiển thị phân trang -->
                                    <div class="pagination justify-content-center">
                                        {{ $postsInTrash->links('pagination::bootstrap-4') }}
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
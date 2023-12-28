@extends('layouts.layoutAD')

@section('title')
    Thêm danh mục tin tức
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
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">@yield('title')</h4>
                                <form class="forms-sample" action="{{ route('admin.newsCategoryUpdate', $newsCategory->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="post_category_name">Tên danh mục</label>
                                        <input type="text" class="form-control" id="post_category_name"
                                            name="post_category_name" value="{{$newsCategory->post_category_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="post_category_slug">Tên danh mục slug</label>
                                        <input type="text" class="form-control" id="post_category_slug"
                                            name="post_category_slug" value="{{$newsCategory->post_category_slug}}">
                                    </div>

                                    <div class="form-group pt-2">
                                        <label for="status">Trạng thái</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="0" @if ($newsCategory->status == 0) selected @endif>Ẩn
                                            </option>
                                            <option value="1" @if ($newsCategory->status == 1) selected @endif>Hiện
                                            </option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Sửa danh mục tin tức</button>
                                    <a href="{{ route('admin.newsCategory') }}" class="btn btn-light">Quay lại</a>
                                </form>
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

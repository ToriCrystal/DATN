@extends('layouts.layoutAD')

@section('title')
    Thêm tin tức
@endsection

@section('noidung')
    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function() {
                var imgElement = document.getElementById('preview');
                imgElement.src = reader.result;
                imgElement.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    </script>
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
                                <form class="forms-sample" action="{{ route('admin.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
                                    <div class="form-group">
                                        <label for="title">Tên tin tức</label>
                                        <input type="text" class="form-control" id="title" name="post_title"
                                            placeholder="Tên tin tức">
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Bài trích</label>
                                        <input type="text" class="form-control" id="content" name="post_excerpt"
                                            placeholder="Bài trích">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Danh mục</label>
                                        <select class="form-control" id="category" name="post_category_id">
                                            <option value="" selected disabled>Chọn danh mục</option>
                                            @foreach ($newsarticlecreate as $category)
                                                <option value="{{ $category->id }}">{{ $category->post_category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <input type="file" name="post_thumbnail" class="file-upload-default"
                                            onchange="previewImage(event)">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Thêm ảnh">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Đăng
                                                    tải</button>
                                            </span>
                                        </div>
                                    </div>
                                    <img id="preview"
                                        style="max-width: 100%; max-height: 200px; margin-top: 10px; display: none;">
                                    <div class="form-group pt-2">
                                        <label for="published_at">Ngày xuất bản</label>
                                        <input type="date" class="form-control" id="published_at" name="published_at"
                                            min="{{ date('Y-m-d') }}">
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="isHot">Đặc sắc</label>
                                        <select class="form-control" id="isHot" name="isHot">
                                            <option value="0">Không</option>
                                            <option value="1">Có</option>
                                        </select>
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="status">Trạng thái</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiện</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_title">Tiêu đề meta</label>
                                        <input type="text" class="form-control" id="meta_title" name="meta_title"
                                            placeholder="Tiêu đề meta">
                                    </div>
                                    <div class="form-group">
                                        <label for="meta_description">Mô tả meta</label>
                                        <input type="text" class="form-control" id="meta_description"
                                            name="meta_description" placeholder="Mô tả meta">
                                    </div>
                                    <div class="form-group">

                                        <label for="editor">Nội dung</label>
                                        <textarea class="form-control" name="post_content" id="editor" rows="4" style="padding: 10px;"></textarea>
                                    </div>


                                    <button type="submit" class="btn btn-primary mr-2">Đăng bài</button>
                                    <a href="{{ route('admin.news') }}" class="btn btn-light">Hủy bỏ</a>
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

    <script>
        document.getElementById('category').onchange = function() {
            // Nếu người dùng đã chọn danh mục, loại bỏ option mặc định
            var defaultOption = document.querySelector('#category option[value=""]');
            if (defaultOption) {
                defaultOption.remove();
            }
        };
    </script>
@endsection
<!-- JavaScript -->

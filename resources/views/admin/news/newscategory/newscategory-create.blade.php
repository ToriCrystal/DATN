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
                                <form class="forms-sample" action="{{ route('admin.newsCategoryStore') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="post_category_name">Tên danh mục</label>
                                        <input type="text" class="form-control" id="post_category_name"
                                            name="post_category_name" placeholder="Tên danh mục">
                                    </div>

                                    <div class="form-group">
                                        <label for="post_category_slug">Tên danh mục slug</label>
                                        <input type="text" class="form-control" id="post_category_slug"
                                            name="post_category_slug" placeholder="Slug">
                                    </div>

                                    <div class="form-group pt-2">
                                        <label for="status">Trạng thái</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiện</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">Đăng danh mục tin tức</button>
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
    <script>
        $(document).ready(function() {
            // Bắt sự kiện khi người dùng nhập vào trường "Tên danh mục"
            $('#post_category_name').on('input', function() {
                // Lấy giá trị từ trường "Tên danh mục"
                var categoryName = $(this).val();

                // Chuyển đổi và cập nhật giá trị của trường "Tên danh mục slug"
                var categorySlug = slugify(categoryName);
                $('#post_category_slug').val(categorySlug);
            });

            // Hàm chuyển đổi chuỗi thành slug
            function slugify(text) {
                text = removeAccents(text);
                return text.toString().toLowerCase()
                    .replace(/\s+/g, '-') // Thay thế khoảng trắng bằng dấu gạch ngang
                    .replace(/[^\w-]+/g, '') // Loại bỏ các ký tự không phải chữ cái, số, gạch ngang
                    .replace(/--+/g, '-') // Thay thế nhiều dấu gạch ngang liên tiếp bằng một dấu gạch ngang
                    .replace(/^-+/, '') // Loại bỏ các dấu gạch ngang ở đầu chuỗi
                    .replace(/-+$/, ''); // Loại bỏ các dấu gạch ngang ở cuối chuỗi
            }

            // Hàm loại bỏ dấu tiếng Việt
            function removeAccents(str) {
                return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
            }
        });
    </script>
@endsection

<!-- JavaScript -->

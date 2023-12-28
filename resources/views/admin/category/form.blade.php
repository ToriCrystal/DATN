@extends('layouts.layoutAD')

@section('title')
    Quản lý Danh mục
@endsection

@section('noidung')
    <style></style>
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts.menuAD')
        <!-- partial -->
        <style>
            .nav-item > #s2{
              color: white;
              background: #4B49AC;
            }

          </style>
        <div class="main-panel">
            <div class="content-wrapper">
                <form class="forms-sample" method="POST"
                    action="{{ isset($category) ? route('admin.updatedm', $category->id) : route('admin.adddm') }}">
                    @csrf
                    @method(isset($category) ? 'PUT' : 'POST')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">{{ isset($category) ? 'Cập nhật' : 'Thêm' }} danh mục</h4>
                                    <p class="card-description">
                                        Điền thông tin cho danh mục
                                    </p>

                                    <div class="form-group">
                                        <label for="name">Tên danh mục</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Tên danh mục" onchange="generateSlug()"
                                            value="{{ $category->category_name ?? old('name') }}">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control" id="slug"
                                            placeholder="Slug" value="{{ $category->category_slug ?? old('slug') }}">
                                        @error('slug')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Ẩn / Hiện</label>
                                        <select class="form-control" name='isVisible' id="exampleSelectGender">
                                            <option value="1"
                                                {{ isset($category) && $category->isVisible == 1 ? 'selected' : '' }}>Hiện
                                            </option>
                                            <option value="0"
                                                {{ isset($category) && $category->isVisible == 0 ? 'selected' : '' }}>Ẩn
                                            </option>
                                        </select>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary mr-2">{{ isset($category) ? "Cập nhật" : "Thêm" }} danh mục</button>
                                    {{-- <button type="" class="btn btn-light">Hủy</button> --}}
                                    <a href="{{ route('admin.alldm') }}" class="btn btn-light">Hủy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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

<script>
    function generateSlug() {
        var nameInput = document.getElementById('name');
        var slugInput = document.getElementById('slug');

        let name = nameInput.value;
        let slug = name.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');

        slugInput.value = slug;
    }
</script>

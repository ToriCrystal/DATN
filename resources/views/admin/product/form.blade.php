@extends('layouts.layoutAD')

@section('title')
    Quản lý sản phẩm
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

    <div class="container-fluid page-body-wrapper">
        @include('layouts.menuAD')
        <style>
            .nav-item > #s3{
              color: white;
              background: #4B49AC;
            }

          </style>
        <div class="main-panel">
            <div class="content-wrapper">
                <form class="forms-sample" method="POST"
                    action="{{ isset($product) ? route('admin.updatePro', $product->id) : route('admin.addPro') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method(isset($product) ? 'PUT' : 'POST')
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">{{ isset($product) ? 'Cập nhật' : 'Thêm' }} sản phẩm</h4>
                                    <p class="card-description">
                                        Điền thông tin cho sản phẩm
                                    </p>
                                    <!-- Các trường dữ liệu đầu vào -->
                                    <!-- Tên sản phẩm -->
                                    <div class="form-group">
                                        <label for="name">Tên sản phẩm</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Tên sản phẩm" onchange="generateSlug()"
                                            value="{{ $product->product_name ?? old('name') }}" required>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Slug -->
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control" id="slug"
                                            placeholder="Slug" value="{{ $product->product_slug ?? old('slug') }}" required>
                                        @error('slug')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Tác giả -->
                                    @if (isset($product))
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Tác giả</label>
                                        <select class="form-control" name="author" id="exampleSelectGender" required>
                                            <option value="">Chọn tác giả</option>
                                            @foreach ($authors as $author)
                                                <option value="{{ $author->id }}"
                                                    {{ $product->author_id == $author->id ? 'selected' : '' }}>
                                                    {{ $author->author_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('author')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                @else
                                <div class="form-group">
                                    <label for="exampleSelectGender">Tác giả</label>
                                    <select class="form-control" name="author" id="exampleSelectGender" required>
                                        <option value="">Chọn tác giả</option>
                                        @foreach ($authors as $author)
                                            <option value="{{ $author->id }}"
                                               >
                                                {{ $author->author_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('author')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                @endif

                                    <!-- Giá sản phẩm -->
                                    <div class="form-group">
                                        <label for="price">Giá sản phẩm</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary text-white">VNĐ</span>
                                            </div>
                                            <input type="text" name="price" id="price" placeholder="Giá sản phẩm"
                                                class="form-control" aria-label="Amount (to the nearest dollar)"
                                                value="{{ isset($product) ? $product->price : old('price') }}"
                                                min="0" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.000</span>
                                            </div>
                                        </div>
                                        @error('price')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Giá sản phẩm khuyến mãi</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary text-white">VNĐ</span>
                                            </div>
                                            <input type="text" name="discount_price" id="discount_price"
                                                placeholder="Giá sản phẩm" class="form-control"
                                                aria-label="Amount (to the nearest dollar)"
                                                value="{{ isset($product) ? $product->discount_price : old('price') }}"
                                                min="0">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.000</span>
                                            </div>
                                        </div>
                                        @error('discount_price')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Số lượng -->
                                    <div class="form-group">
                                        <label for="name">Số lượng</label>
                                        <input type="number" name="remaining" class="form-control" id="remaining"
                                            placeholder="Số lượng" value="{{ $product->remaining ?? old('remaining') }}"
                                            min="0" required>
                                        @error('remaining')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Ảnh sản phẩm -->
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input type="file" name="product_image" class="file-upload-default" required onchange="previewImage(event)" value="{{ $product->product_image ?? old('') }}" required>
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Thêm ảnh sản phẩm"  value="{{ $product->product_image ?? old('') }}" >
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                        @error('product_image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <img id="preview" style="max-width: 100%; max-height: 200px; margin-top: 10px;" src="{{ isset($product) ? $product->product_image : old('product_image') }}" ><br>

                                    <!-- Độ hot -->

                                    <div class="form-group">
                                        <label for="exampleSelectGender">Độ hot</label>
                                        <select class="form-control" name='isHot' id="exampleSelectGender">
                                            <option value="1"
                                                {{ isset($product) && $product->isHot == 1 ? 'selected' : '' }}>1
                                            </option>
                                            <option value="0"
                                                {{ isset($product) && $product->isHot == 0 ? 'selected' : '' }}>0
                                            </option>
                                        </select>
                                    </div>
                                    <!-- Ẩn / Hiện -->
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Ẩn / Hiện</label>
                                        <select class="form-control" name='isVisible' id="exampleSelectGender">
                                            <option value="1"
                                                {{ isset($product) && $product->isVisible == 1 ? 'selected' : '' }}>Hiện
                                            </option>
                                            <option value="0"
                                                {{ isset($product) && $product->isVisible == 0 ? 'selected' : '' }}>Ẩn
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Thuộc tính sản phẩm</h4>
                                    <p class="card-description">
                                        Điền thông tin sản phẩm
                                    </p>
                                    <!-- Các trường dữ liệu thuộc tính sản phẩm -->
                                    <!-- Bìa -->
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Bìa</label>
                                        <select class="form-control" name="bia" id="bia">
                                            <option value="1" {{ old('bia', $attributes['Định dạng'] ?? '') == 1 ? 'selected' : '' }}>Cứng</option>
                                            <option value="0" {{ old('bia', $attributes['Định dạng'] ?? '') == 0 ? 'selected' : '' }}>Mềm</option>
                                        </select>
                                    </div>
                                    <!-- Số trang -->
                                    <div class="form-group">
                                        <label for="name">Số trang</label>
                                        <input type="number" name="trang" class="form-control" id="trang" placeholder="Số lượng"
                                            value="{{ old('trang', $attributes['Trang'] ?? '') }}" min="0" required>
                                        @error('trang')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Kích thước -->
                                    <div class="form-group">
                                        <label for="price">Kích thước</label>
                                        <div class="input-group">
                                            <input type="text" name="kichthuoc" id="kichthuoc" placeholder="Kích thước" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{ isset($attributes['Kích thước']) ? $attributes['Kích thước'] : '' }}" min="0" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.cm</span>
                                            </div>
                                        </div>
                                        @error('price')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Ngày xuất bản -->
                                    <div class="form-group">
                                        <label for="name">Ngày xuất bản</label>
                                        <input type="date" name="ngayxb" class="form-control" id="ngayxb" placeholder="Ngày xuất bản"
                                            value="{{ isset($attributes['Ngày xuất bản']) ? $attributes['Ngày xuất bản'] : '' }}" required>
                                        @error('nxb')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Nhà xuất bản -->
                                    <div class="form-group">
                                        <label for="name">Nhà xuất bản</label>
                                        <input type="text" name="nhaxb" class="form-control" id="nhaxb" placeholder="Nhà xuất bản"
                                            value="{{ isset($attributes['Nhà xuất bản']) ? $attributes['Nhà xuất bản'] : '' }}" required>
                                        @error('nhaxb')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Ngôn ngữ -->
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Ngôn ngữ</label>
                                        <select class="form-control" name="nn" id="nn">
                                            <option value="1" {{ isset($attributes['Ngôn ngữ']) && $attributes['Ngôn ngữ'] == 1 ? 'selected' : '' }}>EN</option>
                                            <option value="0" {{ isset($attributes['Ngôn ngữ']) && $attributes['Ngôn ngữ'] == 0 ? 'selected' : '' }}>VN</option>
                                        </select>
                                    </div>
                                    <!-- Ghi chú minh họa -->
                                    <div class="form-group">
                                        <label for="ghichu">Ghi chú minh họa</label>
                                        <textarea class="form-control" name="ghichu" id="ghichu" rows="4"
                                            required>{{ isset($attributes['Ghi chú minh họa']) ? $attributes['Ghi chú minh họa'] : '' }}</textarea>
                                    </div>
                                    <!-- Mô tả sản phẩm -->
                                   <div class="form-group">
                                        <label for="exampleTextarea1">Mô tả sản phẩm</label>
                                        <textarea class="form-control" name="description" id="editor" rows="4">{{ $product->product_description ?? old('description') }}</textarea>
                                    </div>
                                    

                                    <!-- Tên Người bán -->

                                    <!-- Trường ẩn cho các thuộc tính -->
                                    <input type="hidden" name="attributes" id="attributes">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 grid-margin stretch-card"
                            style="display: flex; justify-content: center; align-items: center;">
                            <button type="submit"
                                class="btn btn-primary mr-2">{{ isset($product) ? 'Cập nhật' : 'Thêm' }} sản
                                phẩm</button>
                                <a href="{{ route('admin.allsp') }}" class="btn btn-secondary "> Trở
                                    về</a>
                        </div>
                    </div>
                </form>
            </div>
           <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Nhóm CFF © 2023 <a href="#" target="_blank">VietNam</a>. Tất cả quyền được bảo lưu.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        </div>
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



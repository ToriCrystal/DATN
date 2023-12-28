@extends('layouts.layoutAD')

@section('title')
    Quản lý sản phẩm
@endsection

@section('noidung')
    <link rel="stylesheet" href="{{ asset('vendor/css/choices.min.css') }}">
    <script src="{{ asset('vendor/CustomJs/choices.min.js') }}"></script>
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
   <style>
    .nav-item > #s3{
      color: white;
      background: #4B49AC;
    }

  </style>
    @if ($errors->any())
        <div id='error-message' class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container-fluid page-body-wrapper">
        @include('layouts.menuAD')
        <div class="main-panel">
            <div class="content-wrapper">
                <center>
                    <h2 class="card-title">{{ $products->product_name }}</h2>

                </center>

                <form name="frmMain" id = "frmMain" method="POST" action="{{ route('admin.updateinfo') }}"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_id" id="product_id" value="{{ $products->id }}">
                    <div class="form-group row">
                        <label for="tacgia" class="col-sm-2 col-form-label">Nhà sáng tác:</label>
                        <div class="col-sm-10">
                            <select name="author_id[]"id="tacgia" placeholder="Chọn tác giả cho sản phẩm" multiple>
                                @foreach ($ds_tacgia as $tg)
                                    @if (in_array($tg->id, $arr_tacgia))
                                        <option value="{{ $tg->id }}" selected="selected">{{ $tg->author_name }}
                                        </option>
                                    @else
                                        <option value="{{ $tg->id }}">{{ $tg->author_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="danhmuc" class="col-sm-2 col-form-label">Danh mục:</label>
                        <div class="col-sm-10">
                            <select name="category_id[]"id="danhmuc" placeholder="Chọn Danh mục cho sản phẩm" multiple>
                                @foreach ($ds_danhmuc as $dm)
                                    @if (in_array($dm->id, $arr_danhmuc))
                                        <option value="{{ $dm->id }}" selected="selected">{{ $dm->category_name }}
                                        </option>
                                    @else
                                        <option value="{{ $dm->id }}">{{ $dm->category_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="chude" class="col-sm-2 col-form-label">Chủ đề:</label>
                        <div class="col-sm-10">
                            <select name="chu_de_id[]"id="chu_de_id" placeholder="Chọn chủ đề cho sản phẩm" multiple>
                                @foreach ($ds_chu_de as $chu_de)
                                    @if (in_array($chu_de->chu_de_id, $arr_chu_de))
                                        <option value="{{ $chu_de->chu_de_id }}" selected="selected">
                                            {{ $chu_de->chu_de_ten_vn }}</option>
                                    @else
                                        <option value="{{ $chu_de->chu_de_id }}">{{ $chu_de->chu_de_ten_vn }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!--end form-->

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-download"></i> Lưu</button>
                        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-undo-alt"></i> Trở về</button>-->
                        <a href="{{ route('admin.allsp') }}" class="btn btn-primary "><i class="fas fa-undo-alt"></i> Trở
                            về</a>
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

    <script>
        $(document).ready(function() {


            var tacgia = new Choices('#tacgia', {
                removeItemButton: true,
                maxItemCount: 100,
                searchResultLimit: 100,
                renderChoiceLimit: 100,
                loadingText: 'Đang tải...',
                noResultsText: 'Không tìm thấy thông tin',
                noChoicesText: 'Không còn thông tin để chọn',
                itemSelectText: 'Click vào để chọn',
            });
            var danhmuc = new Choices('#danhmuc', {
                removeItemButton: true,
                maxItemCount: 100,
                searchResultLimit: 100,
                renderChoiceLimit: 100,
                loadingText: 'Đang tải...',
                noResultsText: 'Không tìm thấy thông tin',
                noChoicesText: 'Không còn thông tin để chọn',
                itemSelectText: 'Click vào để chọn',
            });
            var chu_de_id = new Choices('#chu_de_id', {
                removeItemButton: true,
                maxItemCount: 100,
                searchResultLimit: 100,
                renderChoiceLimit: 100,
                loadingText: 'Đang tải...',
                noResultsText: 'Không tìm thấy thông tin',
                noChoicesText: 'Không còn thông tin để chọn',
                itemSelectText: 'Click vào để chọn',
            });

            // $('#danhmuc').attr('disabled', 'disabled');
            // $('input[name=san_pham_trang_thai][value={{ $products->san_pham_trang_thai }}]').prop('checked',
            //     'checked');
            // $("#loai_san_pham_id option[value={{ $products->loai_san_pham_id }}]").attr("selected", "selected");

            tinymce.init({
                selector: '#san_pham_mo_ta'
            });


            @if ($errors->any())
                $('#modal').modal('show');
            @endif
            $('.delete-form').submit(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Bạn có chắt chắn?',
                    text: "Dữ liệu khi xóa sẽ không thể phục hồi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Vâng, tôi chắt chắn!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: $(this).attr('method'),
                            url: $(this).attr('action'),
                            data: $(this).serialize(),
                            success: function() {
                                Swal.fire(
                                        'Thành công!',
                                        'Bạn đã xóa thành công.',
                                        'success'
                                    ),
                                    setTimeout(function() {
                                        location.reload();
                                    }, 1000);
                            }
                        });
                    }
                });
            });
        });

        function prepareAdd() {
            ClearErrorMessage();
            $('#danhmuc').val('').attr('disabled', false);

            $('#_method').remove();

            $('#modal').modal('show');
        }


        function prepareEdit(id, action) {
            ClearErrorMessage();
        }

        function ThucHienIn() {

        }
    </script>

@endsection

@extends('layouts.layoutAD')

@section('title')
    Quản lý Tác giả
@endsection
@section('noidung')
<style>
    .nav-item > #s12{
      color: white;
      background: #4B49AC;
    }

  </style>
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
                                <h4 class="card-title">{{ isset($author) ? 'Cập nhật' : 'Thêm' }} tác giả</h4>
                                <p class="card-description">
                                    Điền thông tin cho tác giả
                                </p>
                                <form enctype="multipart/form-data" class="forms-sample" method="POST"
                                    action="{{ isset($author) ? route('admin.updatetg', $author->id) : route('admin.createtg') }}">
                                    @csrf
                                    @method(isset($author) ? 'PUT' : 'POST')
                                    <div class="form-group">
                                        <label for="author_name">Tên tác giả</label>
                                        <input type="text" name="author_name" class="form-control" id="author_name"
                                            placeholder="Tên tác giả"
                                            value="{{ $author->author_name ?? old('author_name') }}">
                                        @error('author_name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="author_img_cloudinary">Hình ảnh</label>
                                        <input type="file" name="author_img_cloudinary" class="form-control-file" id="author_img_cloudinary"
                                            placeholder="Tên tác giả" accept="image/*">

                                            @error('author_img')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        @if (isset($author->author_img_cloudinary))
                                        <img class="mb-3" width="20%" src="{{ $author->author_img_cloudinary }}" alt="">
                                        @endif
                                    <!--<div class="form-group">-->
                                    <!--    <label for="author_img">Hình ảnh</label>-->
                                    <!--    <input type="file" name="author_img" class="form-control-file" id="author_img"-->
                                    <!--        placeholder="Tên tác giả" accept="image/*">-->

                                    <!--        @error('author_img')-->
                                    <!--        <p class="text-danger">{{ $message }}</p>-->
                                    <!--        @enderror-->
                                    <!--    </div>-->
                                    <!--    @if (isset($author->author_img))-->
                                    <!--    <img class="mb-3" width="20%" src="{{ asset('storage/' . $author->author_img) }}"-->
                                    <!--    alt="">-->
                                    <!--    @endif-->
                                    <div class="form-group">
                                        <label for="author_debutDate">Ngày ra mắt</label>
                                        <input type="date" name="author_debutDate" class="form-control"
                                            id="author_debutDate" placeholder="Ngày ra mắt"
                                            value="{{ $author->author_debutDate ?? old('author_debutDate') }}">
                                        @error('author_debutDate')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="author_description">Mô tả về tác giả</label>
                                        <input type="text" name="author_description" class="form-control"
                                            id="author_description" placeholder="Ngày ra mắt"
                                            value="{{ $author->author_description ?? old('author_description') }}">
                                        @error('author_description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary mr-2">{{ isset($author) ? 'Cập nhật' : 'Thêm' }} tác
                                        giả</button>
                                    <button class="btn btn-light">Hủy</button>
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

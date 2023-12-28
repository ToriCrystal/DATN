@extends('layouts.layoutAD')

@section('title')
    Chi tiết tác giả
@endsection

@section('noidung')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.menuAD')
        <style>
            .nav-item > #s12{
              color: white;
              background: #4B49AC;
            }

          </style>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <section class="mh-vh50" style="background-color: #fff;">
                                    <div class="container py-5 h-100">
                                        <div class="row d-flex justify-content-center align-items-start h-100">
                                            <div class="col-12 col-md-6">
                                                <div class="card" style="border-radius: 15px;">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex text-black gap-2">
                                                            <div class="col-3">
                                                                <img src="{{ $author->author_img_cloudinary  }}"
                                                                    alt="Generic placeholder image" class="img-fluid"
                                                                    style="width: 180px; border-radius: 10px;">
                                                            </div>
                                                            <div class="col-9">
                                                                <h5 class="mb-2">{{ $author->author_name }}</h5>
                                                                <p class="mt-2" style="color: #2b2a2a;">Ngày ra mắt:
                                                                    {{ $author->author_debutDate }}</p>
                                                                <p class="mb-2" style="color: #2b2a2a;">Tác phẩm:
                                                                    {{ $author->products_count }}</p>
                                                                <p class="mb-2" style="color: #2b2a2a;">Mô tả về tác giả:
                                                                    {{ $author->author_description }}</p>
                                                                <!--@if (count($productsByAuthor)>0)-->
                                                                <!--<div class="d-flex pt-1">-->
                                                                <!--    <button type="button"-->
                                                                <!--        class="btn btn-outline-primary ">Xem tất cả sản-->
                                                                <!--        phẩm</button>-->
                                                                <!--</div>-->
                                                                <!--@endif-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="card" style="border-radius: 15px;">
                                                    <div class="card-body p-4">
                                                        <h5 class="mb-2">Các tác phẩm nổi bật</h5>
                                                        @forelse ($productsByAuthor as $product)
                                                            <div class="col-12 d-flex mb-3">
                                                                <div class="col-2 d-flex align-items-center">
                                                                    @if ($product->product_image)
                                                                        <img style="max-width: 100%; height: 100%"
                                                                            src="{{ $product->product_image }}"
                                                                            alt="{{ $product->product_image }}"
                                                                            width="100" height="100">
                                                                    @endif
                                                                </div>
                                                                <div class="col-10">
                                                                    <p>{{ $product->product_name }}</p>
                                                                    <p>{{ $product->price }} VNĐ</p>
                                                                    <p>{{ $product->views }} lượt xem</p>
                                                                </div>
                                                            </div>

                                                        @empty
                                                            <p>Tác giả này hiện chưa có tác phẩm trên hệ thống của chúng tôi.</p>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
{{-- @extends('layouts\layoutAD')

@section('title')
    Quản lý sản phẩm
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
                                <section class="mh-vh50" style="background-color: #fff;">
                                    <div class="container py-5 h-100">
                                        <div class="row d-flex justify-content-center align-items-start h-100">
                                            <div class="col-12 col-md-6">
                                                <div class="card" style="border-radius: 15px;">
                                                    <div class="card-body p-4">
                                                        <div class="d-flex text-black gap-2">
                                                            <div class="col-3">
                                                                <img src="{{ $author->author_img_cloudinary }}"
                                                                    alt="Generic placeholder image" class="img-fluid"
                                                                    style="width: 180px; border-radius: 10px;">
                                                            </div>
                                                            <div class="col-9">
                                                                <h5 class="mb-2">{{ $author->author_name }}</h5>
                                                                <p class="mt-2" style="color: #2b2a2a;">Ngày ra mắt:
                                                                    {{ $author->author_debutDate }}</p>
                                                                <p class="mb-2" style="color: #2b2a2a;">Tác phẩm:
                                                                    {{ $author->products_count }}</p>
                                                                <p class="mb-2" style="color: #2b2a2a;">Mô tả về tác giả:
                                                                    {{ $author->author_description }}</p>
                                                                <div class="d-flex pt-1">
                                                                    <button type="button"
                                                                        class="btn btn-outline-primary ">Xem tất cả sản
                                                                        phẩm</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="card" style="border-radius: 15px;">
                                                    <div class="card-body p-4">
                                                        <h5 class="mb-2">Các tác phẩm nổi bật</h5>
                                                        @foreach ($author->products as $product)
                                                            <div class="col-12 d-flex mb-3">
                                                                <div class="col-2 d-flex align-items-center">
                                                                        @if ($product->product_image)
                                                                            <img style="max-width: 100%; height: 100%" src="{{ $product->product_image }}"
                                                                                alt="{{ $product->product_image }}" width="100"
                                                                                height="100">
                                                                        @endif
                                                                </div>
                                                                <div class="col-10">
                                                                    <p>{{ $product->product_name }}</p>
                                                                    <p>{{ $product->price }}</p>
                                                                    <p>{{ $product->views }}</p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a
                            href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                            class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>

@endsection --}}
<!-- JavaScript -->

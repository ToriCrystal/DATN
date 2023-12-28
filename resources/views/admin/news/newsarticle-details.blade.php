@extends('layouts.layoutAD')

@section('title')
    Thêm tin tức
@endsection

@section('noidung')
    <div class="container-fluid page-body-wrapper">

        @include('layouts.menuAD')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="col-6">
                                                <h4 class="card-title">Tiêu đề bài viết</h4>
                                                <p>{{ $newsarticledetails->post_title }}</p>

                                            </div>
                                            <div class="col-6">
                                                <h4 class="card-title">Tiêu đề slug bài viết</h4>
                                                <p>{{ $newsarticledetails->post_slug }}</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Ẩn hiện | Hot</h4>
                                        <div class="row">
                                            <div class="col-md-6 d-flex align-items-center">
                                                <div class="d-flex flex-row align-items-center">
                                                    <p class="mb-0 ml-1">
                                                        Ẩn / Hiện : {{ $newsarticledetails->status == 0 ? 'Ẩn ' : 'Hiện' }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex align-items-center">
                                                <div class="d-flex flex-row align-items-center">
                                                    <p class="mb-0 ml-1">
                                                        Hot : {{ $newsarticledetails->isHot == 0 ? 'Không' : 'Hot' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Hình ảnh</h4>
                                <blockquote class="blockquote">
                                    <img src="{{ $newsarticledetails->post_thumbnail}}"
                                        style="max-width: 150px;">
                                </blockquote>
                            </div>

                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-md-6">
                                        <blockquote class="blockquote blockquote-primary">
                                            <p>Tác giả : {{ $newsarticledetails->author_name }}
                                            </p>
                                            <p>Ngày xuất hiện:
                                                {{ \Carbon\Carbon::parse($newsarticledetails->published_at)->format('d/m/Y') }}
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-6">
                                        <blockquote class="blockquote blockquote-primary">
                                            <p>Tiêu đề bài viết : {{ $newsarticledetails->meta_title }}
                                            </p>
                                            <p>Mô tả bài viết : {{ $newsarticledetails->meta_description }}</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nội dung</h4>
                                <p>
                                    {!! $newsarticledetails->post_content !!}
                                </p>
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

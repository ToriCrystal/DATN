@extends('layouts.layoutAD')

@section('title')
    Quản lý sản phẩm
@endsection

@section('noidung')
<style>
    .nav-item > #s3{
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
                                <h2 class="card-title">Chi tiết sản phẩm "{{ $product->product_name }}"</h2>
                                <div class="d-flex justify-content-between">
                                    <div class="col pl-0">
                                        <p class="card-description d-flex">
                                            <a href="{{ route('admin.editPro', $product->product_slug) }}"
                                                style="text-decoration: none;"><i class="bi bi-pen"></i> Chỉnh sửa
                                                sản phẩm</a>
                                        </p>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="card-description d-flex justify-content-end">
                                            <a href="{{ route('admin.allspintrash') }}" style="text-decoration: none;">
                                                Thùng rác <i class="bi bi-trash"></i> </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-3">
                                        <img src="{{ $product->product_image }}" class="w-100" />
                                    </div>
                                    <div class="col-9">
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Thông tin sản phẩm
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <b>Tên sản phẩm:</b> {{ $product->product_name }}
                                                            </li>
                                                            <li class="list-group-item">
                                                                <b>Mô tả sản phẩm:</b> {!! $product->product_description !!}
                                                            </li>
                                                            <li class="list-group-item">
                                                                <b>Xem sản phẩm:</b> <a
                                                                href="{{ route('detail', $product->product_slug ) }}">{{ $product->product_name }}</a>
                                                                {{-- {{ route('admin.editPro', $product->product_slug) }} --}}
                                                            </li>
                                                            <li class="list-group-item ">
                                                                <b>Danh mục</b>
                                                                <ul class=" list-group">
                                                                    @forelse ($product->categories as $category)
                                                                        <li class="list-group-item border-0">
                                                                            <a
                                                                                href="#">{{ $category->category_name }}</a>
                                                                        </li>
                                                                    @empty
                                                                        <li class="list-group-item border-0">
                                                                            <a href="#">Không xác định</a>
                                                                        </li>
                                                                    @endforelse
                                                                </ul>
                                                            </li>

                                                            <li class="list-group-item ">
                                                                <b>Tác giả</b>
                                                                <ul class="list-group">
                                                                    @forelse ($product->authors as $author)
                                                                        <li class="list-group-item border-0">
                                                                            <a href="#">{{ $author->name ?? 's' }}</a>
                                                                        </li>
                                                                    @empty
                                                                        <li class="list-group-item border-0">
                                                                            <a href="#">Không xác định</a>
                                                                        </li>
                                                                    @endforelse
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed"
                                                            type="button" data-toggle="collapse" data-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Thống kê
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Some placeholder content for the second accordion panel. This panel
                                                        is hidden by default.
                                                    </div>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            ...
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        And lastly, the placeholder content for the third and final
                                                        accordion panel. This panel is hidden by default.
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
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
        </div>
        <!-- main-panel ends -->
    </div>
@endsection
<!-- JavaScript -->

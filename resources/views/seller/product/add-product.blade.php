@extends('layouts.layoutSeller')

@section('title')
    Thêm sản phẩm
@endsection

@section('noidung')
    {{-- <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Người bán hàng</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">@yield('title')</a></li>
                </ol>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="background-color: #ffffff;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td style="font-size: 16px;">{{ $loop->iteration }}</td>
                                <td style="font-size: 16px;"><a
                                        href="{{ route('seller.product.product-detail', $product->product_slug) }}">{{ $product->product_name }}</a>
                                </td>
                                <td><img class="img-fluid" src="{{ asset('storage/' . $product->product_image) }}"
                                        alt="" style="max-height: 80px; max-width: 80px;"></td>
                                <td style="font-size: 16px;">
                                    @if ($product->discount_price)
                                        <del>{{ number_format($product->price, 0, ',', '.') }} VNĐ</del>
                                        {{ number_format($product->discount_price, 0, ',', '.') }} VNĐ
                                    @else
                                        {{ number_format($product->price, 0, ',', '.') }} VNĐ
                                    @endif
                                </td>
                                <td style="font-size: 16px">{{ $product->remaining }}</td>
                                <td style="font-size: 16px;">
                                    <a href="#"><i class="fa-solid fa-pen-to-square"></i></a> /
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div> --}}

    <div class="content-body">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Product Submission Form</h4>
                            <form action="/submit_product" method="post">
                                <!-- Add your form fields here -->
                                <div class="form-group">
                                    <label for="productName">Tên sản phẩm:</label>
                                    <input type="text" class="form-control" id="productName" name="productName" required>
                                </div>
                                <div class="form-group">
                                    <label for="productPrice">Giá:</label>
                                    <input type="number" class="form-control" id="productPrice" name="productPrice"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="productPrice">Danh mục:</label>
                                    <input type="number" class="form-control" id="productPrice" name="productPrice"
                                        required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

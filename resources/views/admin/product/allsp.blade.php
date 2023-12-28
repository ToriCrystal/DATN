@extends('layouts.layoutAD')

@section('title')
    Quản lý sản phẩm
@endsection

@section('noidung')
    <style>
        .sidebar .nav .nav-item.active>.nav-link i,
        .sidebar .nav .nav-item.active>.nav-link .menu-title,
        .sidebar .nav .nav-item.active>.nav-link .menu-arrow {
            color: white;
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
                                <h2 class="card-title">Sản phẩm</h2>
                                <div class="d-flex justify-content-between">
                                    <div class="col pl-0">
                                        <p class="card-description d-flex">
                                            <a href="{{ route('admin.createPro') }}" style="text-decoration: none;"><i
                                                    class="bi bi-patch-plus"></i> Thêm sản phẩm</a>
                                        </p>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="card-description d-flex justify-content-end">
                                            <a href="{{ route('admin.allspintrash') }}" style="text-decoration: none;">
                                                Thùng rác <i class="bi bi-trash"></i> </a>
                                        </p>
                                    </div>
                                </div>

                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered text-center">
                                        <thead class='thead-dark'>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th colspan="2">
                                                    Tên sản phẩm
                                                </th>
                                                <th>
                                                    Danh mục
                                                </th>
                                                <th>
                                                    Giá
                                                </th>
                                                <th>
                                                    Sale
                                                </th>
                                                <th>
                                                    Tác giả
                                                </th>

                                                <th colspan="4">
                                                    Hành động
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product as $pro)
                                                <tr id="p{{ $pro->id }}">
                                                    <td>
                                                        {{ $loop->index + 1 }}
                                                    </td>
                                                    <td>
                                                        {{ trim(substr($pro->product_name, 0, 10)) }}
                                                    </td>
                                                    <td>
                                                        <center>
                                                            @if ($pro->product_image)
                                                                @php
                                                                    $imageUrl = $pro->product_image;
                                                                    $prefix = 'https://res.cloudinary.com';
                                                                    if (strpos($imageUrl, $prefix) === 0) {
                                                                        $newImageUrl = $imageUrl;
                                                                    } else {
                                                                        $newImageUrl = asset('storage/' . $imageUrl);
                                                                    }
                                                                @endphp
                                                                <img src="{{ $newImageUrl }}"
                                                                    alt="{{ $pro->name }}" width="100"
                                                                    height="100">
                                                            @endif
                                                        </center>
                                                    </td>
                                                    <td>
                                                        @if ($pro->categories->isEmpty())
                                                            Không xác định
                                                        @else
                                                            @foreach ($pro->categories as $dm)
                                                                {{ $dm->category_name }}
                                                                @if (!$loop->last)
                                                                    <br>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ number_format($pro->price) }}đ
                                                    </td>
                                                    <td>
                                                        {{ number_format($pro->discount_price) }}đ
                                                    </td>
                                                    <td>
                                                        @if ($pro->authors->isEmpty())
                                                            Không xác định
                                                        @else
                                                            @foreach ($pro->authors as $author)
                                                                {{ $author->author_name }}
                                                                @if (!$loop->last)
                                                                    <br>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td><a href="{{ route('admin.onePro', $pro->product_slug) }}">Xem
                                                            chi tiết</a></td>
                                                    <td>
                                                        <a href="{{ route('admin.editPro', $pro->product_slug) }}"><i
                                                                class="bi bi-pen" style="font-size: 23px"></i></a>
                                                    </td>

                                                    <td>
                                                        <a class="fas fa-cog function" style="color:blue" title="Sửa"
                                                            href="{{ route('admin.editfun', ['id' => $pro->id]) }}"></a>
                                                    </td>
                                                    <td>
                                                        {{-- <a
                                                            href="javascript:void(0)"onclick="deleteProduct({{ $pro->id }})">
                                                            <i class="bi bi-trash" style="font-size: 23px"></i>
                                                        </a> --}}
                                                        <form name="frmXoa" method="POST"
                                                            action="{{ route('admin.delete', ['id' => $pro->id]) }}"
                                                            class="delete-form" data-id = "{{ $pro->id }}">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <button type="submit" class="btn btn-link"><i
                                                                    class="fas fa-trash-alt function"
                                                                    style="color:red"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                    <!-- Hiển thị phân trang -->
                                    <div class="pagination justify-content-center mt-3">
                                        {{ $product->links('pagination::bootstrap-4') }}
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
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
@endsection
<!-- JavaScript -->

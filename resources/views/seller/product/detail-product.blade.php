@extends('layouts.layoutSeller')

@section('title')
    Sản phẩm chi tiết
@endsection

@section('noidung')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Layout</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Blank</a></li>
                </ol>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade show active" id="first">
                                            <img class="img-fluid" src="images/product/1.jpg" alt="">
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="second">
                                            <img class="img-fluid" src="images/product/2.jpg" alt="">
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="third">
                                            <img class="img-fluid" src="images/product/3.jpg" alt="">
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="for">
                                            <img class="img-fluid" src="images/product/4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                        <!-- Nav tabs -->
                                        <ul class="nav slide-item-list mt-3" role="tablist">
                                            <li role="presentation" class="show">
                                                <a href="#first" role="tab" data-bs-toggle="tab">
                                                    <img class="img-fluid" src="images/tab/1.jpg" alt=""
                                                        width="50">
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#second" role="tab" data-bs-toggle="tab"><img class="img-fluid"
                                                        src="images/tab/2.jpg" alt="" width="50"></a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#third" role="tab" data-bs-toggle="tab"><img class="img-fluid"
                                                        src="images/tab/3.jpg" alt="" width="50"></a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#for" role="tab" data-bs-toggle="tab"><img class="img-fluid"
                                                        src="images/tab/4.jpg" alt="" width="50"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Tab slider End-->
                                <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                        <!--Product details-->
                                        <div class="new-arrival-content pr">
                                            <h4 style="font-size: 15px">{{ $product->product_name }}</h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>

                                                </ul>
                                            </div>
                                            <div class="d-table mb-2">
                                                <p class="price float-start d-block">
                                                    {{ number_format($product->price, 0, ',', '.') }}
                                                    VNĐ</p>
                                            </div>
                                            <p style="font-size: 15px">Tình trạng:
                                                <span style="font-size: 15px;" class="item">
                                                    @if ($product->remaining > 0)
                                                        Còn hàng ({{ $product->remaining }} sản phẩm) <i
                                                            class="fa fa-shopping-basket"></i>
                                                    @else
                                                        Hết hàng <i class="fa fa-times"></i>
                                                    @endif
                                                </span>
                                            </p>

                                            </p>
                                            <p style="font-size: 15px">Mã sản phẩm: <span class="item"
                                                    style="font-size: 15px">{{ $product->id }}</span> </p>
                                            @foreach ($categories as $category)
                                                <p style="font-size: 15px">Danh mục: <span class="item"
                                                        style="font-size: 15px">{{ $category->category_name }}</span></p>
                                            @endforeach
                                            {{-- <p>Tags sản phẩm:&nbsp;&nbsp;
                                                @foreach ($chude as $cd)
                                                    <span class="badge badge-success light">{{ $cd->chu_de_ten }}</span>
                                                @endforeach
                                            </p> --}}
                                            <p class="text-content" style="font-size: 15px">
                                                {{ $product->product_description }}.</p>
                                            <a href="" style="font-size: 15px">Sửa sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- review -->
                <div class="modal fade" id="reviewModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Review</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="text-center mb-4">
                                        <img class="img-fluid rounded" width="78" src="images/avatar/1.jpg"
                                            alt="DexignZone">
                                    </div>
                                    <div class="mb-3">
                                        <div class="rating-widget mb-4 text-center">
                                            <!-- Rating Stars Box -->
                                            <div class="rating-stars">
                                                <ul id="stars">
                                                    <li class="star" title="Poor" data-value="1">
                                                        <i class="fa fa-star fa-fw"></i>
                                                    </li>
                                                    <li class="star" title="Fair" data-value="2">
                                                        <i class="fa fa-star fa-fw"></i>
                                                    </li>
                                                    <li class="star" title="Good" data-value="3">
                                                        <i class="fa fa-star fa-fw"></i>
                                                    </li>
                                                    <li class="star" title="Excellent" data-value="4">
                                                        <i class="fa fa-star fa-fw"></i>
                                                    </li>
                                                    <li class="star" title="WOW!!!" data-value="5">
                                                        <i class="fa fa-star fa-fw"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                                    </div>
                                    <button class="btn btn-success btn-block">RATE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

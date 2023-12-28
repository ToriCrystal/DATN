@extends('layouts.layoutUser')

@section('title')
    Sản phẩm chi tiết
@endsection

@section('noidung')
    <style>
        .review-item {
            display: flex;
            /* Sử dụng flexbox để các phần tử con cùng hàng */
            align-items: center;
            /* Canh giữa các phần tử theo chiều dọc */
        }



        .avatar img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }

        .info {
            margin-left: 10px;
            /* Khoảng cách giữa avatar và thông tin */
        }

        .info p {
            margin: 0;
            /* Loại bỏ margin mặc định của các phần tử <p> */
        }

        .star-rating {
            display: inline-block;
            font-size: 24px;
            cursor: pointer;
        }

        .star-rating i {
            color: #ddd;
        }

        .star-rating i:hover,
        .star-rating i.active {
            color: #FFD700;
            /* Màu vàng hoặc màu bạn chọn cho sao được chọn */
        }
    </style>
    <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600"
        data-parallax="scroll" data-image-src="/images/parallax/bgparallax-07.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-innerbannercontent">
                        <h1>@yield('title')</h1>
                        <ol class="tg-breadcrumb">
                            <li><a href="/">Trang chủ</a></li>
                            <li class="tg-active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main id="tg-main" class="tg-main tg-haslayout">

        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-twocolumns" class="tg-twocolumns">
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                            <div class="tg-productdetail">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="tg-postbook">
                                            <figure class="tg-featureimg"><img
                                                    src="{{ $product->product_image }}"
                                                    alt="image description"></figure>
                                            <div class="tg-postbookcontent">
                                                <span class="tg-bookprice">
                                                    @if ($product->discount_price)
                                                        <ins>{{ number_format($product->discount_price, 0, ',', '.') }} VNĐ</ins>
                                                        <del>{{ number_format($product->price, 0, ',', '.') }}
                                                            VNĐ</del>
                                                    @else
                                                        <ins>{{ number_format($product->price, 0, ',', '.') }} VNĐ</ins>
                                                    @endif
                                                </span>


                                                @if ($product->discount_price)
                                                    @php
                                                        $saving = $product->price - $product->discount_price;
                                                    @endphp
                                                  <span class="tg-bookwriter">Bạn đã tiết kiệm
                                                    {{ number_format($saving, 0, ',', '.') }} VNĐ</span>

                                                @else
                                                    <span class="tg-bookwriter">Không có giá khuyến mãi</span>
                                                @endif

                                                <ul class="tg-delevrystock">
                                                    <li><i class="icon-rocket"></i><span>Giao hàng miễn phí trong nội
                                                            thành</span></li>
                                                    <li>
                                                        <i class="icon-store"></i>
                                                        <span>
                                                            Tình trạng:
                                                            @if ($product->remaining > 0)
                                                                <em>Còn hàng</em>
                                                            @else
                                                                <em>Hết hàng</em>
                                                            @endif
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="tg-quantityholder">
                                                    <em class="minus">-</em>
                                                    <input type="text" class="result" value="0" id="quantity1"
                                                        name="quantity">
                                                    <em class="plus">+</em>
                                                </div>

                                                {{-- <a class="tg-viewShop" href="{{ route('viewShop', ['seller_id'=> $product -> seller_id]) }}"><i class="bi bi-shop"></i><span>Xem shop</span></a> --}}

                                                <a class="tg-btn tg-active btn-add-to-cart"
                                                    href="{{ route('add-to-cart', ['id' => $product->id]) }}"
                                                    data-product-id="{{ $product->id }}"
                                                    data-route="{{ route('add-to-cart', ['id' => $product->id]) }}">
                                                    <i class="fa fa-shopping-basket"></i>
                                                    <span>Thêm vào giỏ hàng</span>
                                                </a>

                                                @if (auth()->check())
                                                    <a class="tg-btnaddtowishlist" href="#"
                                                        data-user-id="{{ auth()->user()->id }}"
                                                        data-product-id="{{ $product->id }}" style="font-size: 12px">
                                                        <i class="icon-heart"></i>
                                                        <span>Thêm vào yêu thích</span>
                                                    </a>
                                                @else
                                                    <a class="tg-btnaddtowishlist" href="{{ route('login') }}"
                                                        style="font-size: 12px">
                                                        <i class="icon-heart"></i>
                                                        <span>Thêm vào yêu thích</span>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                        <div class="tg-productcontent">
                                            <div class="tg-bookscategories"
                                                style="padding: 10px; min-height: 80px; overflow-y: auto; height: 50px;">
                                                @if ($product->chude->isNotEmpty())
                                                    @foreach ($product->chude as $chuDe)
                                                        <span class="tg-themetag" style="margin-bottom:2%; margin-right: 10px;"><a href="#"
                                                                class="color-chude" style="color: white;">{{ $chuDe->chu_de_ten_vn }}&nbsp;&nbsp;&nbsp;</a></span>
                                                    @endforeach
                                                @else
                                                    <span class="tg-themetag" style="margin-bottom:25%">Sản phẩm
                                                        ưa
                                                        chuộng&nbsp;</span><br>
                                                    <span>&nbsp;</span><br><br>
                                                @endif

                                            </div>
                                            <div class="tg-themetagbox">
                                                @if ($product->discount_price !== null)
                                                    <span class="tg-themetag">Giảm giá</span>
                                                @endif
                                            </div>
                                            <div class="tg-booktitle">
                                                <h3>{{ $product->product_name }}</h3>
                                            </div>
                                            <span class="tg-bookwriter">Bởi: <a href="javascript:void(0);">
                                                    @if ($product->authors->isNotEmpty())
                                                        @if ($product->authors->count() == 1)
                                                            @foreach ($product->authors as $author)
                                                                {{ $author->author_name }}
                                                            @endforeach
                                                        @else
                                                            Cộng đồng tác giả
                                                        @endif
                                                    @else
                                                        Không xác định
                                                    @endif
                                                </a></span>
                                            <span class="tg-addreviews">
                                                <span>
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $averageRating)
                                                            <!-- Full star for each whole rating -->
                                                            <i class="fa-solid fa-star" style="color: #FCD01E;"></i>
                                                        @else
                                                            <!-- Empty star for remaining ratings -->
                                                            <i class="far fa-star" style="color: #FCD01E;"></i>
                                                        @endif
                                                    @endfor
                                                </span>
                                            </span>
                                            <span class="tg-addreviews">
                                                @if (auth()->check())
                                                    <a href="javascript:void(0);" data-toggle="modal"
                                                        data-target="#reviewModal">Thêm đánh giá của bạn</a>
                                                @else
                                                    <a href="/login">Thêm đánh giá của bạn</a>
                                                @endif
                                            </span>

                                            <div class="tg-share">
                                                <span>Chia sẻ:</span>
                                                <ul class="tg-socialicons">
                                                    <li class="tg-facebook"><a href="https://www.facebook.com/"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                    <li class="tg-twitter"><a href="https://www.x.com/"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                    <li class="tg-linkedin"><a href="https://www.instagram.com/"><i
                                                                class="fa fa-linkedin"></i></a></li>
                                                    <li class="tg-googleplus"><a href="https://www.linkedin.com/"><i
                                                                class="fa fa-google-plus"></i></a></li>
                                                    <li class="tg-rss"><a href="https://www.google.com/"><i
                                                                class="fa fa-rss"></i></a></li>
                                                </ul>
                                            </div>

                                            <div class="tg-sectionhead">
                                                <h2>Chi tiết sản phẩm</h2>
                                            </div>
                                            <ul class="tg-productinfo">
                                                <li>
                                                    <span>Định dạng:</span>
                                                    <span>
                                                        @if (isset($attributes['Định dạng']))
                                                            {{ $attributes['Định dạng'] == 0 ? 'Mền' : 'Cứng' }}
                                                        @endif
                                                    </span>
                                                </li>
                                    
                                                <li><span>Số trang:</span><span>
                                                         @if (isset($attributes['Trang']))
                                                            {{ $attributes['Trang'] }}
                                                        @endif
                                                    </span></li>
                                                <li><span>Kích thước:</span><span>
                                                         @if (isset($attributes['Kích thước']))
                                                            {{ $attributes['Kích thước'] }}
                                                        @endif cm
                                                    </span>
                                                </li>
                                                <li><span>Ngày xuất bản:</span><span>
                                                          @if (isset($attributes['Ngày xuất bản']))
                                                            {{ $attributes['Ngày xuất bản'] }}
                                                        @endif
                                                    </span>
                                                </li>
                                                <li><span>Nhà xuất bản:</span><span>
                                                        @if (isset($attributes['Nhà xuất bản']))
                                                            {{ $attributes['Nhà xuất bản'] }}
                                                        @endif
                                                    </span></li>
                                          
                                                <li>
                                                    <span>Ngôn ngữ:</span>
                                                    <span>
                                                        @if (isset($attributes['Ngôn ngữ']))
                                                            @if ($attributes['Ngôn ngữ'] == 0)
                                                                Tiếng Việt
                                                            @else ($attributes['Ngôn ngữ'] == 1)
                                                                Tiếng Anh
                                                            @endif
                                                        @endif
                                                    </span>
                                                </li>
                                                <li><span>Ghi chú minh họa:</span><span>
                                                        @if (isset($attributes['Ghi chú minh họa']))
                                                            {{ $attributes['Ghi chú minh họa'] }}
                                                        @endif
                                                    </span></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-productdescription">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="tg-sectionhead" style="margin-top: 25px">
                                            <h2>Thông tin sản phẩm</h2>
                                        </div>
                                        <ul class="tg-themetabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#description"
                                                    data-toggle="tab">Mô tả sản phẩm</a></li>
                                            <li role="presentation"><a href="#review" data-toggle="tab">Đánh giá sản
                                                    phẩm</a></li>
                                        </ul>
                                        <div class="tg-tab-content tab-content">
                                            <div role="tabpanel" class="tg-tab-pane tab-pane active" id="description">
                                                <div class="tg-description">
                                                   @if (str_word_count(strip_tags($product->product_description)) > 250)
    <div id="description-container">
        <div id="short-description">
            {!! substr(strip_tags($product->product_description), 0, 250) !!}
        </div>
        <div id="full-description" style="display:none;">
            {!! $product->product_description !!}
        </div>
        <a href="javascript:void(0);" onclick="toggleDescription()">...Xem thêm</a>
    </div>
@else
    <p>{!! $product->product_description !!}</p>
@endif

                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tg-tab-pane tab-pane" id="review">
                                                <div class="tg-description">
                                                    @foreach ($reviews->take(3) as $review)
                                                            @if ($review->status == 1)

                                                        <div class="review-item">
                                                            <div class="avatar">
                                                                <img src="{{ $review->user->image != '' ?  $review->user->image : '/images/users/userdefault.jpg' }}"
                                                                    alt="User Avatar"
                                                                    class="avatar img-circle img-thumbnail" style="height: 75px; /* Ensure the height matches the width to create a perfect circle */border-radius: 50%;object-fit: cover;width: 75px;">
                                                            </div>
                                                            <div class="info">
                                                                <p class="user-name">{{ $review->user->name }} -
                                                                    {{ $review->created_at->diffForHumans() }}
                                                                </p>
                                                                <p>
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                        @if ($i <= $review->rating)
                                                                            <!-- Full star for each whole rating -->
                                                                            <i class="fa-solid fa-star"
                                                                                style="color: #FCD01E;"></i>
                                                                        @else
                                                                            <!-- Empty star for remaining ratings -->
                                                                            <i class="far fa-star"
                                                                                style="color: #FCD01E;"></i>
                                                                        @endif
                                                                    @endfor
                                                                </p>
                                                                <p class="comment">{{ $review->comment }}</p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    @endif
                                                    @endforeach

                                                    <div id="hidden-reviews" style="display: none;">
                                                        @foreach ($reviews->skip(3) as $review)
                                                            <div class="review-item">
                                                                    <div class="avatar">
                                                                <img src="{{ $review->user->image != '' ?  $review->user->image : '/images/users/userdefault.jpg' }}"
                                                                    alt="User Avatar"
                                                                    class="avatar img-circle img-thumbnail"
                                                                    style="height: 75px; /* Ensure the height matches the width to create a perfect circle */border-radius: 50%;object-fit: cover;width: 75px;">
                                                            </div>
                                                                <div class="info">
                                                                    <p class="user-name">{{ $review->user->name }} -
                                                                        {{ $review->created_at->diffForHumans() }}
                                                                    </p>
                                                                    <p>
                                                                        @for ($i = 1; $i <= 5; $i++)
                                                                            @if ($i <= $review->rating)
                                                                                <!-- Full star for each whole rating -->
                                                                                <i class="fa-solid fa-star"
                                                                                    style="color: #FCD01E;"></i>
                                                                            @else
                                                                                <!-- Empty star for remaining ratings -->
                                                                                <i class="far fa-star"
                                                                                    style="color: #FCD01E;"></i>
                                                                            @endif
                                                                        @endfor
                                                                    </p>
                                                                    <p class="comment">{{ $review->comment }}</p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                        @endforeach
                                                    </div>
                                                    @if ($reviews->count() > 3)
                                                        <button id="read-more-btn" style="display: contents; color: red"
                                                            onclick="toggleHiddenReviews()">Hiện
                                                            thêm</button>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog"
                                    aria-labelledby="reviewModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="reviewModalLabel">Thêm đánh giá của bạn</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Review form -->
                                                <form action="{{ route('submit.review') }}" method="post"
                                                    id="reviewForm">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                    <!-- Assuming you pass the product ID to the view -->
                                                    <div class="form-group">
                                                        <label for="starRating">Mức độ hài lòng:</label>
                                                        <select name="starRating" id="starRating" class="form-control">
                                                            <option value="1">Rất tệ</option>
                                                            <option value="2">Tệ</option>
                                                            <option value="3">Trung bình</option>
                                                            <option value="4">Khá tốt</option>
                                                            <option value="5">Tốt</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="reviewContent">Nội dung đánh giá:</label>
                                                        <textarea name="reviewContent" class="form-control" id="reviewContent" rows="3"
                                                            placeholder="Viết đánh giá của bạn"></textarea>
                                                        <span id="reviewContentError"
                                                            style="color: red; font-size: 13px; height: 10px;"></span>
                                                    </div>

                                                    <button type="button" class="btn btn-primary"
                                                        onclick="submitReview(document.getElementById('reviewForm'))">Gửi
                                                        đánh giá</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-aboutauthor">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="tg-sectionhead">
                                            <h2>Thông tin tác giả</h2>
                                        </div>
                                        @if (isset($author))
                                            <div class="tg-authorbox">
                                                <figure class="tg-authorimg">
                                                        <img style="height: 100px; /* Ensure the height matches the width to create a perfect circle */border-radius: 50%;object-fit: cover;width: 100px"
                                                        id="avatar-preview" src="{{ $author->author_img_cloudinary }}"
                                                        class="avatar img-circle img-thumbnail" alt="avatar">
                                                </figure>
                                                <div class="tg-authorinfo">
                                                    <div class="tg-authorhead">
                                                        <div class="tg-leftarea">
                                                            <div class="tg-authorname">
                                                                <h2>{{ $author->author_name }}</h2>
                                                                <span>Ngày tác giả debut:
                                                                    {{ $author->author_debutDate }}</span>
                                                            </div>

                                                        </div>

                                                        <div class="tg-rightarea">
                                                            <ul class="tg-socialicons">
                                                                <li class="tg-facebook"><a href="https://www.facebook.com/"><i
                                                                            class="fa fa-facebook"></i></a></li>
                                                                <li class="tg-twitter"><a href="https://twitter.com/"><i
                                                                            class="fa fa-twitter"></i></a></li>
                                                                <li class="tg-linkedin"><a href="https://www.linkedin.com/"><i
                                                                            class="fa fa-linkedin"></i></a></li>
                                                                <li class="tg-googleplus"><a href="https://www.google.com/"><i
                                                                            class="fa fa-google-plus"></i></a></li>
                                                                <li class="tg-rss"><a href="https://rss.com/"><i
                                                                            class="fa fa-rss"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>
                                                            {{ $author->author_description }}
                                                        </p>
                                                    </div>
                                                    <a class="tg-btn tg-active"
                                                        href="{{ route('author', ['author_id' => $author->id]) }}">Xem
                                                        sách của tác giả</a>
                                                </div>

                                            </div>
                                        @else
                                            <p>Không xác định được tác giả.</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="tg-relatedproducts">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="tg-sectionhead">
                                            <h2><span>Sản phẩm tương tự</span>Có thể bạn sẽ thích</h2>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div id="tg-relatedproductslider"
                                            class="tg-relatedproductslider tg-relatedbooks owl-carousel">

                                            @foreach ($relatedProducts as $item)
                                                <div class="item">
                                                    <div class="tg-postbook">
                                                        <figure class="tg-featureimg">
                                                            <div class="tg-bookimg">
                                                                <div class="tg-frontcover"><img
                                                                        src="{{ $item->product_image }}"
                                                                        alt="image description"></div>
                                                                <div class="tg-backcover"><img
                                                                        src="{{ $item->product_image }}"
                                                                        alt="image description"></div>
                                                            </div>


                                                            @if (auth()->check())
                                                                <a class="tg-btnaddtowishlist" href="#"
                                                                    data-user-id="{{ auth()->user()->id }}"
                                                                    data-product-id="{{ $item->id }}"
                                                                    style="font-size: 12px">
                                                                    <i class="icon-heart"></i>
                                                                    <span>Thêm vào yêu thích</span>
                                                                </a>
                                                            @else
                                                                <a class="tg-btnaddtowishlist"
                                                                    href="{{ route('login') }}" style="font-size: 12px">
                                                                    <i class="icon-heart"></i>
                                                                    <span>Thêm vào yêu thích</span>
                                                                </a>
                                                            @endif
                                                        </figure>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-bookscategories"
                                                                style="padding: 10px; min-height: 40px; overflow-y: auto;">
                                                                @if ($product->chude->isNotEmpty())
                                                                    @foreach ($product->chude as $chuDe)
                                                                        <span class="tg-themetag"
                                                                            style="margin-bottom:2%"><a href="#"
                                                                                class="color-chude" style="color: white ">{{ $chuDe->chu_de_ten_vn }}&nbsp;&nbsp;&nbsp;</a></span>
                                                                    @endforeach
                                                                @else
                                                                    <span class="tg-themetag"
                                                                        style="margin-bottom:25%">Sản phẩm ưa
                                                                        chuộng&nbsp;</span><br>
                                                                    <span>&nbsp;</span><br><br>
                                                                @endif

                                                            </div>
                                                            @if ($product->discount_price !== null)
                                                                <span class="tg-themetag">Giảm giá</span>
                                                            @endif
                                                            <div class="tg-booktitle">
                                                                <h3>
                                                                    <a
                                                                        href="{{ route('detail', $item->product_slug) }}">{{ $item->product_name }}</a>
                                                                </h3>
                                                            </div>
                                                            <span class="tg-bookwriter">Bởi:
                                                                @if ($item->authors->isNotEmpty())
                                                                    @php $author = $item->authors->first(); @endphp
                                                                    <a
                                                                        href="{{ route('author', ['author_id' => $author->id ?? '']) }}">
                                                                        @if ($item->authors->count() == 1)
                                                                            {{ $author->author_name }}
                                                                        @else
                                                                            Cộng đồng tác giả
                                                                        @endif
                                                                    </a>
                                                                @else
                                                                    Không xác định
                                                                @endif
                                                            </span>

                                                            @php
                                                                $averageRating = $item->averageRating();
                                                            @endphp

                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $averageRating)
                                                                    <i class="fa-solid fa-star"
                                                                        style="color: #FCD01E;"></i>
                                                                @else
                                                                    <i class="fa-regular fa-star"
                                                                        style="color: #ccc;"></i>
                                                                @endif
                                                            @endfor

                                                            <span class="tg-bookprice">
                                                                @if (!$item->discount_price)
                                                                        <ins>{{ number_format($item->price, 0, ',', '.') }}
                                                                        VNĐ</ins>
                                                                @else
                                                                    <ins>{{ number_format($item->price, 0, ',', '.') }}
                                                                        VNĐ</ins>
                                                                    <del>{{ number_format($item->discount_price, 0, ',', '.') }}
                                                                        VNĐ</del>
                                                                @endif
                                                            </span>


                                                            <a style="font-size: 12px"
                                                                class="tg-btn tg-btnstyletwo  btn-add-to-cart"
                                                                href="{{ route('add-to-cart', ['id' => $item->id]) }}"
                                                                data-product-id="{{ $item->id }}"
                                                                data-route="{{ route('add-to-cart', ['id' => $item->id]) }}">
                                                                <i class="fa fa-shopping-basket"></i>
                                                                <em>Thêm vào giỏ hàng</em>
                                                            </a>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                            <aside id="tg-sidebar" class="tg-sidebar">
                                <div class="tg-widget tg-widgetsearch">
                                    <form class="tg-formtheme tg-formsearch" action="{{ route('search') }}"
                                        method="GET">
                                        <div class="form-group">
                                            <button type="submit"><i class="icon-magnifier"></i></button>
                                            <input type="search" name="search" class="form-group"
                                                placeholder="Tìm kiếm theo từ khóa" data-aos="fade-up"
                                                data-aos-delay="200">
                                        </div>
                                    </form>

                                </div>
                                <div class="tg-widget tg-catagories">
                                    <div class="tg-widgettitle">
                                        <h3>Thể loại</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>

                                            @if ($category)
                                                @foreach ($category as $cat)
                                                    <li role="presentation">
                                                        <a
                                                            href="{{ route('productFillter', ['slug' => $cat->category_slug]) }}">
                                                            <!-- aria-controls="artandphotography" role="tab" data-toggle="tab" -->
                                                            {{ $cat->category_name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="tg-widget tg-widgettrending">
                                    <div class="tg-widgettitle">
                                        <h3>Sản phẩm trending</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>
                                            @foreach ($topProducts as $product)
                                                <li>
                                                    <article class="tg-post">
                                                        <figure><a href="javascript:void(0);"><img
                                                                    src="{{ $product->product_image }}"
                                                                    alt="image description"></a></figure>
                                                        <div class="tg-postcontent">
                                                            <div class="tg-posttitle">
                                                                <h3><a
                                                                        href="{{ $product->product_slug }}">{{ $product->product_name }}</a>
                                                                </h3>
                                                            </div>
                                                            @if ($product->authors->isNotEmpty())
                                                                @if ($product->authors->count() == 1)
                                                                    @foreach ($product->authors as $author)
                                                                        {{ $author->author_name }}
                                                                    @endforeach
                                                                @else
                                                                    Cộng đồng tác giả
                                                                @endif
                                                            @else
                                                                Không xác định
                                                            @endif
                                                        </div>
                                                    </article>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="tg-widget tg-widgetinstagram">
                                    <div class="tg-widgettitle">
                                        <h3>Instagram</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>
                                            <li>
                                                <figure>
                                                    <img src="/images/instagram/img-01.jpg" alt="image description">
                                                    <figcaption><a href="javascript:void(0);"><i
                                                                class="icon-heart"></i><em>50,134</em></a></figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/instagram/img-02.jpg" alt="image description">
                                                    <figcaption><a href="javascript:void(0);"><i
                                                                class="icon-heart"></i><em>50,134</em></a></figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/instagram/img-03.jpg" alt="image description">
                                                    <figcaption><a href="javascript:void(0);"><i
                                                                class="icon-heart"></i><em>50,134</em></a></figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/instagram/img-04.jpg" alt="image description">
                                                    <figcaption><a href="javascript:void(0);"><i
                                                                class="icon-heart"></i><em>50,134</em></a></figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/instagram/img-05.jpg" alt="image description">
                                                    <figcaption><a href="javascript:void(0);"><i
                                                                class="icon-heart"></i><em>50,134</em></a></figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/instagram/img-06.jpg" alt="image description">
                                                    <figcaption><a href="javascript:void(0);"><i
                                                                class="icon-heart"></i><em>50,134</em></a></figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/instagram/img-07.jpg" alt="image description">
                                                    <figcaption><a href="javascript:void(0);"><i
                                                                class="icon-heart"></i><em>50,134</em></a></figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/instagram/img-08.jpg" alt="image description">
                                                    <figcaption><a href="javascript:void(0);"><i
                                                                class="icon-heart"></i><em>50,134</em></a></figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/instagram/img-09.jpg" alt="image description">
                                                    <figcaption><a href="javascript:void(0);"><i
                                                                class="icon-heart"></i><em>50,134</em></a></figcaption>
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tg-widget tg-widgetblogers">
                                    <div class="tg-widgettitle">
                                        <h3>Top tác giả</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>
                                            @foreach ($topAuthors as $author)
                                                <li>
                                                    <div class="tg-author">
                                                        <figure>
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ $author->author_img_cloudinary }}"
                                                                    alt="{{ $author->author_name }}">
                                                            </a>
                                                        </figure>
                                                        <div class="tg-authorcontent">
                                                            <h2><a
                                                                    href="{{ route('author', ['author_id' => $author->id]) }}">{{ $author->author_name }}</a>
                                                            </h2>
                                                            <span>{{ $author->products_count }} sách phát hành</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <script>
        function toggleDescription() {
            var shortDescription = document.getElementById('short-description');
            var fullDescription = document.getElementById('full-description');

            if (shortDescription.style.display === 'none') {
                shortDescription.style.display = 'inline';
                fullDescription.style.display = 'none';
            } else {
                shortDescription.style.display = 'none';
                fullDescription.style.display = 'inline';
            }
        }

        // function submitReview() {
        //     var reviewContent = document.getElementById("reviewContent").value;

        //     // Check if the textarea is empty
        //     if (reviewContent.trim() === "") {
        //         // Display an error message in the span
        //         document.getElementById("reviewContentError").innerText = "* Nội dung đánh giá không được bỏ trống";
        //     } else {
        //         // If not empty, submit the form
        //         document.getElementById("reviewForm").submit();
        //     }
        //     var form = document.getElementById('reviewForm');

        //     // Example: Use AJAX for form submission
        //     // You may need to adjust this based on your actual form submission logic
        //     $.ajax({
        //         type: form.method,
        //         url: form.action,
        //         data: $(form).serialize(),
        //         success: function(data) {
        //             // Display SweetAlert upon successful submission
        //             Swal.fire({
        //                 title: 'Đánh giá đã được gửi!',
        //                 text: 'Cảm ơn bạn đã đóng góp ý kiến.',
        //                 icon: 'success',
        //                 confirmButtonText: 'OK',
        //             });

        //             // Optionally, you can reset the form or perform other actions
        //             form.reset();
        //         },
        //         error: function(error) {
        //             // Handle errors if needed
        //             console.log('Error:', error);
        //         }
        //     });
        // }

        function submitReview(form) {
            // Get the value of the reviewContent textarea
            var reviewContent = form.reviewContent.value.trim();

            // Check if the reviewContent is empty
            if (reviewContent === '') {
                // Display an error message
                $('#reviewContentError').text('* Vui lòng nhập nội dung đánh giá.');
                return;
            }

            // Clear any previous error message
            $('#reviewContentError').text('');

            $.ajax({
                type: form.method,
                url: form.action,
                data: $(form).serialize(),
                success: function(data) {
                    // Display SweetAlert upon successful submission
                    Swal.fire({
                        title: 'Đánh giá đã được gửi!',
                        text: 'Cảm ơn bạn đã đóng góp ý kiến.',
                        icon: 'success',
                        confirmButtonText: 'OK',
                    });

                    // Optionally, you can reset the form or perform other actions
                    form.reset();
                },
                error: function(error) {
                    // Handle errors if needed
                    console.log('Error:', error);
                }
            });
        }



        function toggleHiddenReviews() {
            var hiddenReviews = document.getElementById('hidden-reviews');
            var readMoreBtn = document.getElementById('read-more-btn');

            if (hiddenReviews.style.display === 'none') {
                hiddenReviews.style.display = 'block';
                readMoreBtn.innerHTML = 'Ẩn đi';
            } else {
                hiddenReviews.style.display = 'none';
                readMoreBtn.innerHTML = 'Hiện thêm';
            }
        }
    </script>


@endsection

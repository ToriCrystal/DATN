@extends('layouts.layoutUser')

@section('title')
    Home CFF
@endsection

@section('noidung')
    <style>
        * {}

        @-webkit-keyframes my {
            0% {
                color: #F8CD0A;
            }

            50% {
                color: teal;
            }

            100% {
                color: #F8CD0A;
            }
        }

        @-moz-keyframes my {
            0% {
                color: #F8CD0A;
            }

            50% {
                color: pink;
            }

            100% {
                color: #F8CD0A;
            }
        }

        @-o-keyframes my {
            0% {
                color: #F8CD0A;
            }

            50% {
                color: red;
            }

            100% {
                color: #F8CD0A;
            }
        }

        @keyframes my {
            0% {
                color: #F8CD0A;
            }

            50% {
                color: blue;
            }

            100% {
                color: #F8CD0A;
            }
        }

        .test {


            font-weight: bold;
            -webkit-animation: my 700ms infinite;
            -moz-animation: my 700ms infinite;
            -o-animation: my 700ms infinite;
            animation: my 700ms infinite;
        }

        .color-chude {
            color: white
        }

        ul {
            margin-bottom: 10px;
            /* Thêm khoảng cách dưới danh sách */
        }

        li {
            margin-bottom: 5px;
            /* Thêm khoảng cách dưới mỗi chủ đề */
        }


        .tg-collectioncounter {
            flex: 0 0 100%;
            transition: transform 0.5s ease-in-out;
        }
    </style>
    <script>
        // Lấy danh sách các phần tử slide
        const slideElements = document.querySelectorAll('.tg-collectioncounter');

        // Khởi tạo biến index để theo dõi slide hiện tại
        let currentIndex = 0;

        // Hàm để chuyển slide
        function slideNext() {
            // Ẩn slide hiện tại bằng cách di chuyển nó qua bên trái
            slideElements[currentIndex].style.transform = 'translateX(-100%)';

            // Tăng index để chuyển đến slide tiếp theo
            currentIndex = (currentIndex + 1) % slideElements.length;

            // Hiển thị slide tiếp theo bằng cách di chuyển nó từ bên phải vào
            slideElements[currentIndex].style.transform = 'translateX(0)';
        }

        // Thiết lập thời gian tự động trượt slide (ví dụ: mỗi 3 giây)
        setInterval(slideNext, 3000);
    </script>

    <main id="tg-main" class="tg-main tg-haslayout">
        @if (!is_null($mainEvent))
            <link rel="stylesheet" href="/css/eventcarousel.css">
            <section class="tg-haslayout mb-3 events-carousel" style="">
                <div class="carousel">
                    <div class="slides">
                        @php
                            $data = json_decode($mainEvent->attributes, true);
                        @endphp
                        @foreach ($data['imageHeader'] as $image)
                            <img src="{{ $image }}" alt="slide image" class="slide">
                        @endforeach
                    </div>
                    <div class="controls">
                        <div class="control prev-slide">&#9668;</div>
                        <div class="control next-slide">&#9658;</div>
                    </div>
                </div>
            </section>
            <script src="/js/eventCarousel.js"></script>
        @endif

        <section class="tg-sectionspace tg-haslayout">

            <div class="container" style="margin-top:-5%">
                <div style=" margin-bottom:5%;">
                    <center>
                        <h2 class="test">Chúc bạn có một kì {{ $mainEvent->event_name ?? '' }} vui vẻ!</h2>
                    </center>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>Sự Lựa Chọn Của Mọi Người
                                </span>Sản phẩm bán chạy</h2>
                            <a class="tg-btn" href="/product">Xem tất cả</a>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="tg-bestsellingbooksslider"
                            class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                              @foreach ($products as $product)
                                <div class="item">
                                    <div class="tg-postbook">
                                        <figure class="tg-featureimg">
                                            <div class="tg-bookimg">
                                                <div class="tg-frontcover"><img
                                                        src="{{ $product->product_image }}"
                                                        alt="image description" style="max-height: 180px"></div>

                                                <div class="tg-backcover"><img
                                                        src="$product->product_image }}"
                                                        alt="image description" style="max-height: 180px"></div>
                                            </div>
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

                                        </figure>
                                        <div class="tg-postbookcontent">
                                            <div class="tg-bookscategories"
                                                style="padding: 10px; min-height: 40px; overflow-y: auto;">
                                                @if ($product->chude->isNotEmpty())
                                                    @foreach ($product->chude as $chuDe)
                                                        <span class="tg-themetag" style="margin-bottom: 25%"><a href="#"
                                                                class="color-chude" style="color: white">{{ $chuDe->chu_de_ten_vn }}&nbsp;&nbsp;&nbsp;</a></span>
                                                    @endforeach
                                                @else
                                                    <span class="tg-themetag" style="margin-bottom:25%">Sản phẩm ưa
                                                        chuộng&nbsp;</span><br>
                                                    <span>&nbsp;</span><br><br>
                                                @endif

                                            </div>
                                            <div class="tg-themetagbox">
                                                @if ($product->discount_price !== null)
                                                    <span class="tg-themetag">Giảm giá</span>
                                                @endif
                                            </div>

                                            <div class="tg-booktitle"style=" min-height: 57px; overflow-y: auto;">
                                                <h3><a
                                                        href="{{ route('detail', $product->product_slug) }}">{{ $product->product_name }}</a>
                                                </h3>
                                            </div>
                                            @php
                                                $averageRating = $product->averageRating();
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $averageRating)
                                                    <i class="fa-solid fa-star" style="color: #FCD01E;"></i>
                                                @else
                                                    <i class="fa-regular fa-star" style="color: #ccc;"></i>
                                                @endif
                                            @endfor
                                            <span class="tg-bookwriter">Bởi:
                                                @if ($product->authors->isNotEmpty())
                                                    @if ($product->authors->count() == 1)
                                                        <a
                                                            href="{{ route('author', ['author_id' => $product->authors->first()->id]) }}">
                                                            {{ $product->authors->first()->author_name }}
                                                        </a>
                                                    @else
                                                        Cộng đồng tác giả
                                                    @endif
                                                @else
                                                    Không xác định
                                                @endif
                                            </span>

                                            <span class="tg-bookprice">
                                                <input type="hidden" name="price"
                                                    value="{{ $product->discount_price ?? $product->price }}">
                                                <ins>{{ number_format($product->discount_price ?? $product->price, 0, ',', '.') }}
                                                    VNĐ</ins>
                                                @if ($product->discount_price)
                                                    <del>{{ number_format($product->price, 0, ',', '.') }}
                                                        VNĐ</del>
                                                @endif
                                            </span>

                                            <a class="tg-btn tg-btnstyletwo  btn-add-to-cart" style="font-size: 12px"
                                                href="{{ route('add-to-cart', ['id' => $product->id]) }}"
                                                data-product-id="{{ $product->id }}"
                                                data-route="{{ route('add-to-cart', ['id' => $product->id]) }}">
                                                <i class="fa fa-shopping-basket"></i>
                                                <em>Thêm vào giỏ hàng</em>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tg-bglight tg-haslayout" style="box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.3);">
            <div class="container">
                <div class="row">
                    <div class="tg-featureditm">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-sm hidden-xs">
                            <figure>
                                <img src="{{ $extraHotProduct->product_image }}"
                                    alt="image description" style="max-height: 400px; width: 100%;">
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <div class="tg-featureditmcontent">
                                @if ($extraHotProduct->isHot == 1)
                                    <div class="tg-themetagbox">
                                        <span class="tg-themetag text1" style="font-size: 20px; padding: 8px 12px;">Sản phẩm
                                            xem nhiều nhất</span>
                                    </div>
                                @endif
                                <div class="tg-booktitle">
                                    <h3><a
                                            href="{{ route('detail', $extraHotProduct->product_slug) }}">{{ $extraHotProduct->product_name }}</a>
                                    </h3>
                                </div>

            
                                
                                <span class="tg-bookwriter">Bởi:
                                        @if ($extraHotProduct->authors->isNotEmpty())
                                                 @if ($extraHotProduct->authors->count() == 1)
                                                <a
                                                            href="{{ route('author', ['author_id' => $extraHotProduct->authors->first()->id]) }}">
                                                            {{ $extraHotProduct->authors->first()->author_name }}
                                                        </a>
                                                    @else
                                                        Cộng đồng tác giả
                                                    @endif
                                                @else
                                                    Không xác định
                                                @endif
                                    </span>

                                @php
                                    $averageRating = $extraHotProduct->averageRating();
                                @endphp

                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $averageRating)
                                        <i class="fa-solid fa-star" style="color: #FCD01E;"></i>
                                    @else
                                        <i class="fa-regular fa-star" style="color: #ccc;"></i>
                                    @endif
                                @endfor

                                <div class="tg-priceandbtn">
                                    <span class="tg-bookprice">
                                        <input type="hidden" name="price"
                                            value="{{ $extraHotProduct->discount_price ?? $extraHotProduct->price }}">
                                        <ins>{{ number_format($extraHotProduct->discount_price ?? $extraHotProduct->price, 0, ',', '.') }}
                                            VNĐ</ins>
                                    </span>
                                    @if ($extraHotProduct->discount_price !== null)
                                     <span class="tg-bookprice">
                                            <del>{{ number_format($extraHotProduct->discount_price, 0, ',', '.') }}
                                                VNĐ</del>
                                    </span>
                                    
                                    @endif

                                    <a class="tg-btn tg-btnstyletwo  btn-add-to-cart"
                                        href="{{ route('add-to-cart', ['id' => $extraHotProduct->id]) }}"
                                        data-product-id="{{ $extraHotProduct->id }}"
                                        data-route="{{ route('add-to-cart', ['id' => $extraHotProduct->id]) }}">
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>Thêm vào giỏ hàng</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-newrelease">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="tg-sectionhead">

                                <h2><span>Trải nghiệm gia vị mới</span>Sách Phát Hành Mới
                                </h2>
                            </div>
                            <div class="tg-description">
                                <p>Trải nghiệm những tác phẩm mới do các nhà xuất bản mang đến cho bạn.</p>
                            </div>
                            <div class="tg-btns">
                                <a class="tg-btn tg-active" href="{{ route('newsProduct') }}">Xem tất cả</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="tg-newreleasebooks">
                                    @foreach ($latestProducts as $item)
                                        <div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
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
                                                        <a class="tg-btnaddtowishlist" href="{{ route('login') }}"
                                                            style="font-size: 12px">
                                                            <i class="icon-heart"></i>
                                                            <span>Thêm vào yêu thích</span>
                                                        </a>
                                                    @endif

                                                </figure>
                                                <div class="tg-postbookcontent">
                                                    <div class="tg-bookscategories"
                                                        style="padding: 10px; min-height: 40px; overflow-y: auto;">
                                                        @if ($item->chude->isNotEmpty())
                                                            @foreach ($item->chude as $chuDe)
                                                                <span class="tg-themetag" style="margin-bottom: 25%"><a
                                                                        href="#"
                                                                        class="color-chude">{{ $chuDe->chu_de_ten_vn }}&nbsp;&nbsp;&nbsp;</a></span>
                                                            @endforeach
                                                        @else
                                                            <span class="tg-themetag" style="margin-bottom: 25%">Sản phẩm
                                                                ưa
                                                                chuộng&nbsp;</span><br>
                                                            <span>&nbsp;</span><br><br>
                                                        @endif
                                                    </div>
                                                    
                                                    <div class="tg-themetagbox">
                                                        @if ($item->discount_price !== null)
                                                            <span class="tg-themetag">Giảm giá</span>
                                                        @endif
                                                    </div>
                                                    <div class="tg-booktitle" style=" min-height: 60px; overflow-y: auto;">
                                                        <h3><a
                                                                href="{{ route('detail', $item->product_slug) }}">{{ $item->product_name }}</a>
                                                        </h3>
                                                    </div>
                                                    <span class="tg-bookwriter">Bởi:
                                                        @if ($item->authors->isNotEmpty())
                                                            @if ($item->authors->count() == 1)
                                                                @foreach ($item->authors as $singleAuthor)
                                                                    <a
                                                                        href="{{ route('author', ['author_id' => $singleAuthor->id]) }}">{{ $singleAuthor->author_name }}</a>
                                                                @endforeach
                                                            @else
                                                                Cộng đồng tác giả
                                                            @endif
                                                        @else
                                                            Không xác định
                                                        @endif
                                                    </span>


                                                    @php
                                                        $averageRating = $item->averageRating();
                                                    @endphp

                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $averageRating)
                                                            <i class="fa-solid fa-star" style="color: #FCD01E;"></i>
                                                        @else
                                                            <i class="fa-regular fa-star" style="color: #ccc;"></i>
                                                        @endif
                                                    @endfor


                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tg-parallax tg-bgcollectioncount tg-haslayout" data-z-index="-100" data-appear-top-offset="600"
            data-parallax="scroll" data-image-src="images/parallax/bgparallax-04.jpg">
            <div class="tg-sectionspace tg-collectioncount tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
                            <div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials owl-carousel">

                                @php $chunkedCategories = $category->chunk(4); @endphp
                                @foreach ($chunkedCategories as $chunk)
                                    <div class="tg-collectioncounters">
                                        @foreach ($chunk as $cate)
                                            <div class="tg-collectioncounter tg-drama">
                                                <div class="tg-titlepluscounter">
                                                    <a href="{{ route('productFillter', ['slug' => $cate->category_slug]) }}">{{ $cate->category_name }}</a>
                                                    <p data-from="0" data-to="{{ $cate->products_count }}"
                                                        data-speed="8000" data-refresh-interval="50">
                                                        Số sách {{ number_format($cate->products_count, 0, ',', ',') }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>Một Số Cuốn Sách Hay
                                </span>Được đánh giá tốt nhất</h2>
                            <a class="tg-btn" href="/goodreviews">Xem tất cả</a>
                        </div>
                    </div>
                    <div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">


                        <!-- Trong index.blade.php -->
                        @foreach ($goodProducts as $product)
                            <div class="item">
                                <div class="tg-postbook">
                                    <figure class="tg-featureimg">
                                        <div class="tg-bookimg">
                                            <div class="tg-frontcover"><img
                                                    src="{{ $product->product_image }}"
                                                    alt="image description" style="max-height: 180px"></div>
                                        </div>
                                        <div class="tg-hovercontent">
                                            <div class="tg-description">
                                                <p>{{ $product['Ghi chú minh họa'] }}</p>
                                            </div>
                                            @if (isset($attributes[$product->id]['Trang']))
                                                <strong class="tg-bookpage">Trang:
                                                    {{ $attributes[$product->id]['Trang'] }}</strong>
                                            @endif
                                            @if (isset($attributes[$product->id]['Nhà xuất bản']))
                                                <strong class="tg-bookpage">Nhà xuất bản:
                                                    {{ $attributes[$product->id]['Nhà xuất bản'] }}</strong>
                                            @endif
                                  
                                            <span class="tg-bookprice">
                                                <input type="hidden" name="price"
                                                    value="{{ $product->discount_price ?? $product->price }}">
                                                <ins>{{ number_format($product->discount_price ?? $product->price, 0, ',', '.') }}
                                                    VNĐ</ins>
                                                @if ($product->discount_price)
                                                    <del>{{ number_format($product->price, 0, ',', '.') }}
                                                        VNĐ</del>
                                                @endif
                                            </span>
                                            <div class="tg-ratingbox">
                                                @if ($item->discount_price !== null)
                                                    <span class="tg-themetag">Giảm giá</span>
                                                @endif
                                            </div>
                                            <div class="tg-ratingbox">

                                                @php
                                                    $averageRating = $product->averageRating();
                                                @endphp

                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $averageRating)
                                                        <i class="fa-solid fa-star" style="color: #FCD01E;"></i>
                                                    @else
                                                        <i class="fa-regular fa-star" style="color: #ccc;"></i>
                                                    @endif
                                                @endfor

                                            </div>
                                        </div>
                                    </figure>
                                    <div class="tg-postbookcontent">
                                        <div class="tg-booktitle">
                                            <h3><a
                                                    href="{{ route('detail', $product->product_slug) }}">{{ $product->product_name }}</a>
                                            </h3>
                                        </div>
                                        <span class="tg-bookwriter">Bởi:
                                            @if ($product->authors->isNotEmpty())
                                                @if ($product->authors->count() == 1)
                                                    <a
                                                        href="{{ route('author', ['author_id' => $product->authors->first()->id]) }}">
                                                        {{ $product->authors->first()->author_name }}
                                                    </a>
                                                @else
                                                    Cộng đồng tác giả
                                                @endif
                                            @else
                                                Không xác định
                                            @endif
                                        </span>
                                        <a class="tg-btn tg-btnstyletwo btn-add-to-cart"
                                            href="{{ route('add-to-cart', ['id' => $product->id]) }}"
                                            data-product-id="{{ $product->id }}"
                                            data-route="{{ route('add-to-cart', ['id' => $product->id]) }}">
                                            <i class="fa fa-shopping-basket"></i>
                                            <em>Thêm vào giỏ hàng</em>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

     

        <section class="tg-parallax tg-bgcalltoaction tg-haslayout" data-z-index="-100" data-appear-top-offset="600"
            data-parallax="scroll" data-image-src="images/parallax/bgparallax-06.jpg">
            <div class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-calltoaction">
                                <h2>Giảm giá sách định kì</h2>
                                <h3>Chương trình khuyến mãi sách sẽ được thực hiện định kì mỗi tuần.</h3>
                                <a class="tg-btn tg-active" href="{{ route('promote') }}">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>Tin tức &amp; Bài viết</span>Tin tức hấp dẫn</h2>
                            <a class="tg-btn" href="javascript:void(0);">Xem tất cả</a>
                        </div>
                    </div>
                    <div id="tg-postslider" class="tg-postslider tg-blogpost owl-carousel">

                        @foreach ($popularPosts as $news)
                            <article class="item tg-post">
                                <figure><a href="javascript:void(0);"><img
                                            src="{{ $news->post_thumbnail }}"
                                            alt="image description"></a></figure>
                                <div class="tg-postcontent">
                                    <ul class="tg-bookscategories">
                                        <li><a
                                                href="{{ route('newsCategoryShow', $news->post_category_id) }}">{{ $news->post_category_name }}</a>
                                        </li>
                                    </ul>
                                    @if ($news->isHot == 1)
                                        <div class="tg-themetagbox">
                                            <span class="tg-themetag">Đặc sắc</span>
                                        </div>
                                    @endif
                                    <div class="tg-posttitle">
                                        <h3><a
                                                href="{{ route('newsDetail', $news->id) }}">{{ $news->post_title }}</a>
                                        </h3>
                                    </div>
                                    <span class="tg-bookwriter">Bởi: <a
                                            href="">{{ $news->author_name }}</a></span>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

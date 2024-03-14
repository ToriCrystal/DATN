@extends('layouts.layoutUser')


@section('title')
    Tác giả
@endsection

@section('noidung')
    <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600"
        data-parallax="scroll" data-image-src="/images/parallax/bgparallax-07.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-innerbannercontent">
                        <h1>Tác giả {{ $author->author_name }}</h1>
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
        <!--************************************
                                                                                                                        Author Detail Start
                                                                                                                *************************************-->
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-authordetail">
                            <figure class="tg-authorimg">
                                <img src="{{ $author->author_img_cloudinary }}"
                                    alt=""
                                    style="height: 150px; /* Ensure the height matches the width to create a perfect circle */border-radius: 50%;object-fit: cover;width: 150px">
                            </figure>

                            <div class="tg-authorcontentdetail">
                                <div class="tg-sectionhead">
                                    <h2>
                                        <span>{{ $productCount }} sách phát hành</span>
                                        <h1>Tác giả {{ $author->author_name }}</h1>
                                    </h2>
                                    <ul class="tg-socialicons">
                                        <li class="tg-facebook"><a href="https://www.facebook.com/"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li class="tg-twitter"><a href="https://twitter.com/"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="tg-linkedin"><a href="https://www.linkedin.com/"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                        <li class="tg-googleplus"><a href="https://www.google.com/"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                        <li class="tg-rss"><a href="https://rss.com/"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                                <h3>Mô tả tác giả</h3>
                                <div class="tg-description">
                                    <p>{{ $author->author_description }}</p>
                                </div>
                                <div class="tg-booksfromauthor">
                                    <div class="tg-sectionhead">
                                        <h2>Sách thuộc tác giả</h2>
                                    </div>
                                    <div class="row">
                                        @foreach ($products as $product)
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3" style="height: 600px;">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img
                                                                    src="{{ $product->product_image }}"
                                                                    alt="image description" style="max-height: 180px"></div>

                                                            <div class="tg-backcover"><img
                                                                    src="{{ $product->product_image }}"
                                                                    alt="image description" style="max-height: 180px"></div>
                                                        </div>


                                                        @if (auth()->check())
                                                            <a class="tg-btnaddtowishlist" href="#"
                                                                data-user-id="{{ auth()->user()->id }}"
                                                                data-product-id="{{ $product->id }}"
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
                                                            style="padding: 10px; min-height: 80px; overflow-y: auto;">
                                                            @if ($product->topic->isNotEmpty())
                                                                @foreach ($product->topic as $topic)
                                                                    <span class="tg-themetag" style="margin-bottom:2%"><a
                                                                            href="#"
                                                                            class="color-topic" style="color: white;">{{ $topic->chu_de_ten_vn }}&nbsp;&nbsp;&nbsp;</a></span>
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
                                                            <h3>
                                                                <a
                                                                    href="{{ route('detail', $product->product_slug) }}">{{ $product->product_name }}</a>
                                                            </h3>
                                                        </div>
                                                        <span class="tg-bookwriter">Bởi: <a
                                                                href="{{ route('author', ['author_id' => $author->id]) }}">
                                                                {{ $author->author_name }}</a></span>

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

                                                        <span class="tg-bookprice">
                                                            <span class="tg-bookprice">
                                                                @if ($product->discount_price)
                                                                    <ins>{{ number_format($product->price, 0, ',', '.') }}
                                                                        VNĐ</ins>
                                                                    <del>{{ number_format($product->discount_price, 0, ',', '.') }}
                                                                        VNĐ</del>
                                                                @else
                                                                    <ins>{{ number_format($product->price, 0, ',', '.') }}
                                                                        VNĐ</ins>
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
                                    <div class="pagination justify-content-center">
                                        {{ $products->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                                                                                                                        Author Detail End
                                                                                                                *************************************-->
    </main>
@endsection

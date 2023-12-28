@extends('layouts.layoutUser')

@section('title')
    kết quả tìm kiếm
@endsection

@section('noidung')
    <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600"
        data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-innerbannercontent">
                        <h1>Sản phẩm</h1>
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
                            <div id="tg-content" class="tg-content">
                                <div class="tg-products">
                                    <div class="tg-productgrid">
                                        <div class="tg-refinesearch">
                                            <span>
                                                Hiển thị 1 đến 16 sản phẩm của
                                                @if (request('priceFilter') == 1)
                                                    {{ $productCounts['under_100k'] }} sản phẩm (Dưới 100.000 VNĐ)
                                                @elseif (request('priceFilter') == 2)
                                                    {{ $productCounts['over_100k'] }} sản phẩm (Trên 100.000 VNĐ)
                                                @else
                                                    {{ $productCounts['all'] }} sản phẩm (Tất cả)
                                                @endif
                                            </span>
                                            <form class="tg-formtheme tg-formsortshoitems" method="GET"
                                                action="{{ route('product') }}">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <label>Lọc giá:</label>
                                                        <span class="tg-select">
                                                            <select id="priceFilter" name="priceFilter"
                                                                onchange="this.form.submit()">
                                                                <option value="0">Tất cả</option>
                                                                <option value="1"
                                                                    {{ request('priceFilter') == 1 ? 'selected' : '' }}>Dưới
                                                                    100.000 VNĐ</option>
                                                                <option value="2"
                                                                    {{ request('priceFilter') == 2 ? 'selected' : '' }}>Trên
                                                                    100.000 VNĐ</option>
                                                            </select>
                                                        </span>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                        @if ($results->isEmpty())
                                            <p>Không tìm thấy sản phẩm nào.</p>
                                        @else
                                            @foreach ($results as $result)
                                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3" style="height: 600px;">
                                                    <div class="tg-postbook">
                                                        <figure class="tg-featureimg">
                                                            <div class="tg-bookimg">
                                                                <input type="hidden" name="product_id"
                                                                    value="{{ $result->id }}">
                                                                <input type="hidden" name="product_image"
                                                                    value="{{ $result->product_image }}">
                                                                <div class="tg-frontcover"><img
                                                                        src="{{ $result->product_image }}"
                                                                        alt="image description"></div>

                                                                <div class="tg-backcover"><img
                                                                        src="{{ $result->product_image }}"
                                                                        alt="image description"></div>
                                                            </div>

                                                            @if (auth()->check())
                                                                <a class="tg-btnaddtowishlist"
                                                                    href="{{ route('add-to-wishlist', ['user_id' => auth()->user()->id, 'product_id' => $result->id]) }}">
                                                                    <i class="icon-heart"></i>
                                                                    <span>Thêm vào yêu thích</span>
                                                                </a>
                                                            @else
                                                                <a class="tg-btnaddtowishlist" href="{{ route('login') }}">
                                                                    <i class="icon-heart"></i>
                                                                    <span>Thêm vào yêu thích</span>
                                                                </a>
                                                            @endif


                                                        </figure>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-bookscategories"
                                                                style="padding: 10px; min-height: 80px; overflow-y: auto;">
                                                                @if ($result->chude->isNotEmpty())
                                                                    @foreach ($result->chude as $chuDe)
                                                                        <span class="tg-themetag"
                                                                            style="margin-bottom:2%"><a href="#"
                                                                                class="color-chude" style="color: white">{{ $chuDe->chu_de_ten_vn }}&nbsp;&nbsp;&nbsp;</a></span>
                                                                    @endforeach
                                                                @else
                                                                    <span class="tg-themetag" style="margin-bottom:25%">Sản
                                                                        phẩm
                                                                        ưa
                                                                        chuộng&nbsp;</span><br>
                                                                    <span>&nbsp;</span><br><br>
                                                                @endif

                                                            </div>
                                                            <div class="tg-themetagbox">
                                                                @if ($result->discount_price !== null)
                                                                    <span class="tg-themetag">Giảm giá</span>
                                                                @endif
                                                            </div>

                                                            <div class="tg-booktitle">

                                                                <h3>
                                                                    <input type="hidden" name="product_name"
                                                                        value="{{ $result->product_name }}">
                                                                    <a
                                                                        href="{{ route('detail', $result->product_slug) }}">{{ $result->product_name }}</a>
                                                                </h3>
                                                            </div>
                                                            <span class="tg-bookwriter">Bởi: <a
                                                                    href="javascript:void(0);">{{ $result->author }}</a></span>
                                                            @php
                                                                $averageRating = $result->averageRating();
                                                            @endphp

                                                            <span class="star-rating">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    @if ($i <= $averageRating)
                                                                        <i class="fa-solid fa-star"
                                                                            style="color: #FCD01E;"></i>
                                                                    @else
                                                                        <i class="fa-regular fa-star"
                                                                            style="color: #ccc;"></i>
                                                                    @endif
                                                                @endfor
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <input type="hidden" name="price"
                                                                    value="{{ $result->discount_price ?? $result->price }}">
                                                                <ins>{{ number_format($result->discount_price ?? $result->price, 0, ',', '.') }}
                                                                    VNĐ</ins>
                                                                @if ($result->discount_price)
                                                                    <del>{{ number_format($result->price, 0, ',', '.') }}
                                                                        VNĐ</del>
                                                                @endif
                                                            </span>


                                                            <a class="tg-btn tg-btnstyletwo btn-add-to-cart"
                                                                href="{{ route('add-to-cart', ['id' => $result->id]) }}"
                                                                data-product-id="{{ $result->id }}"
                                                                data-route="{{ route('add-to-cart', ['id' => $result->id]) }}">
                                                                <i class="fa fa-shopping-basket"></i>
                                                                <em>Thêm vào giỏ hàng</em>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>
                                    <div class="pagination justify-content-center">
                                        {{ $results->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                            <aside id="tg-sidebar" class="tg-sidebar">
                                <div class="tg-widget tg-widgetsearch">
                                    <form class="tg-formtheme tg-formsearch" action="{{ route('search') }}" method="GET">
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
    </main>
@endsection

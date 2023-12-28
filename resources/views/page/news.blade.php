@extends('layouts.layoutUser')

@section('title')
    Tin tức
@endsection

@section('noidung')
    <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600"
        data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
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
                            <div id="tg-content" class="tg-content">
                                <div class="tg-newsgrid">
                                    <div class="tg-sectionhead">
                                        <h2><span>Tin tức &amp; bài viết mới nhất</span>Tin tức hấp dẫn</h2>
                                    </div>
                                    <div class="row">
                                        @foreach ($news as $post)
                                            <div class="col-xs-6 col-sm-12 col-md-6 col-lg-4">
                                                <article class="tg-post">
                                                    <figure><a href="javascript:void(0);"><img
                                                                src="{{ $post->post_thumbnail }}"
                                                                alt="image description"></a></figure>
                                                    <div class="tg-postcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li>
                                                                <a
                                                                    href="{{ route('newsCategoryShow', $post->post_category_slug) }}">{{ $post->post_category_name }}</a>
                                                            </li>
                                                        </ul>
                                                        @if ($post->isHot == 1)
                                                            <div class="tg-themetagbox">
                                                                <span class="tg-themetag">Đặc sắc</span>
                                                            </div>
                                                        @endif
                                                        <div class="tg-posttitle">
                                                            <h3><a
                                                                    href="{{ route('newsDetail', $post->id) }}">{{ $post->post_title }}</a>
                                                            </h3>
                                                        </div>
                                                        <span class="tg-bookwriter">Bởi: <a
                                                                href="#">{{ $post->author_name }}</a></span>
                                                        <ul class="tg-postmetadata">
                                                            <li><a href="javascript:void(0);"><i
                                                                        class="fa fa-comment-o"></i><i>{{ $post->comments_count }}
                                                                        Bình luận</i></a></li>
                                                            <li><a href="javascript:void(0);"><i
                                                                        class="fa fa-eye"></i><i>{{ $post->views }}
                                                                        Lượt xem</i></a></li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                        @endforeach




                                    </div>
                                    <div class="pagination justify-content-center" style="margin-top: 20px;">
                                        {{ $news->links('pagination::bootstrap-4') }}
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
                                                placeholder="Tìm kiếm theo từ khóa" data-aos="fade-up" data-aos-delay="200">
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

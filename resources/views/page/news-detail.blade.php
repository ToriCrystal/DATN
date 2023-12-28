@extends('layouts.layoutUser')

@section('title')
    {{ $newsDetail->post_title }}
@endsection

@section('noidung')
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
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <figure class="tg-newsdetailimg">
                                <figcaption class="tg-author">
                                    <img src="{{ $newsDetail->author_image  }}" alt="hình author"
                                        style="max-height: 75px; object-fit: cover;">
                                    <div class="tg-authorinfo">
                                        <span class="tg-bookwriter">Bởi: <a
                                                href="javascript:void(0);">{{ $newsDetail->author_name }}</a></span>
                                        <ul class="tg-postmetadata">
                                            <li><a href="javascript:void(0);"><i
                                                        class="fa fa-comment-o"></i><i>{{ $newsDetail->comment_count }}
                                                        Bình luận</i></a></li>
                                            <li><a href="javascript:void(0);"><i
                                                        class="fa fa-eye"></i><i>{{ $newsDetail->views }}
                                                        Lượt xem</i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                            <div id="tg-content" class="tg-content">
                                <div class="tg-newsdetail">
                                    <ul class="tg-bookscategories">
                                        <li><a
                                                href="{{ route('newsCategoryShow', $newsDetail->post_category_slug) }}">{{ $newsDetail->post_category_name }}</a>
                                        </li>
                                    </ul>
                                    @if ($newsDetail->isHot == 1)
                                        <div class="tg-themetagbox"><span class="tg-themetag">Đặc sắc</span></div>
                                    @endif
                                    <div class="tg-posttitle">
                                        <h3><a href="javascript:void(0);">{{ $newsDetail->post_title }}</a></h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>{!! $newsDetail->post_content !!}</p>
                                    </div>

                                    @if ($newsDetail->author && $newsDetail->author->comments)
                                        <h2>Author's Comments</h2>
                                        <ul class="tg-comments">
                                            @foreach ($newsDetail->author->comments as $comment)
                                                @if ($comment->status == 1)
                                                    <li>
                                                        <div class="tg-authorbox">
                                                            <figure class="tg-authorimg">
                                                                <img src="" alt="image description">
                                                            </figure>
                                                            <div class="tg-authorinfo">
                                                                <div class="tg-authorhead">
                                                                    <div class="tg-leftarea">
                                                                        <div class="tg-authorname">
                                                                            <h2>{{ $comment->user->name }}</h2>
                                                                            <span>{{ $comment->created_at }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tg-description">
                                                                    <p>{{ $comment->message }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="tg-bottomarrow"></div>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif


                                    <div class="tg-nextprevpost">
                                        <div class="tg-prevpost">
                                            @if ($previousPost)
                                                <a href="{{ route('newsCategoryPrevious', ['id' => $newsDetail->id]) }}">
                                                    <figure style="max-width: 100px">
                                                        <img src="{{ $previousPost->post_thumbnail }}"
                                                            alt="{{ $previousPost->post_title }}">
                                                    </figure>
                                                    <div class="tg-posttitle">
                                                        <h3>{{ $previousPost->post_title }}</h3>
                                                        <span>Tin trước đó</span>
                                                    </div>
                                                </a>
                                            @endif
                                        </div>
                                        <div class="tg-nextpost">
                                            @if ($nextPost)
                                                <a href="{{ route('newsCategoryNext', ['id' => $newsDetail->id]) }}">
                                                    <figure style="max-width: 100px">
                                                        <img src="{{ $nextPost->post_thumbnail }}"
                                                            alt="{{ $nextPost->post_title }}">
                                                    </figure>
                                                    <div class="tg-posttitle">
                                                        <h3>{{ $nextPost->post_title }}</h3>
                                                        <span>Tin kế tiếp</span>
                                                    </div>
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="tg-commentsarea">
                                        <div class="tg-sectionhead">
                                            @if ($newsDetail->comment_count > 0)
                                                <h2>{{ $newsDetail->comment_count }} bình luận</h2>
                                            @else
                                                <h2>Hiện không có bình luận</h2>
                                            @endif
                                        </div>

                                        <!-- Update the comments list with an id attribute -->
                                        <ul id="tg-comments" class="tg-comments">
                                         @foreach ($comments as $comment)
                                            @if ($comment->isVisible == 1)
                                                <li class="comment-item">
                                                    <div class="tg-authorbox">
                                                        <figure class="tg-authorimg">
                                                            <img src="{{ $comment->getImageAttribute() }}"
                                                                style="height: 75px; /* Ensure the height matches the width to create a perfect circle */border-radius: 50%;object-fit: cover;width: 75px; "
                                                                alt="image description">
                                                        </figure>
                                                        <div class="tg-authorinfo">
                                                            <div class="tg-authorhead">
                                                                <div class="tg-leftarea">
                                                                    <div class="tg-authorname">
                                                                        <h2>{{ $comment->getNameAttribute() }}</h2>
                                                                        <span>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tg-description">
                                                                <p>{{ $comment->message }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="tg-bottomarrow"></div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach


                                            @if ($newsDetail->comment_count > 3)
                                                <li class="tg-loadmore" style="display:none;">
                                                    <a class="tg-btn tg-active view-all-comments"
                                                        href="javascript:void(0);">Xem tất cả</a>
                                                    <a class="tg-btn tg-active show-less-comments"
                                                        href="javascript:void(0);">Ẩn bớt</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>

                                    @if (auth()->guard('admin')->check() ||
                                            auth()->guard('web')->check())
                                        <!-- Hiển thị form bình luận -->
                                        <div class="tg-leaveyourcomment">
                                            <div class="tg-sectionhead">
                                                <h2>Để lại bình luận</h2>
                                            </div>
                                            <form class="tg-formtheme tg-formleavecomment" id="commentForm"
                                                action="{{ route('newsCommentStore') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="post_id" value="{{ $newsDetail->id }}">
                                                <div class="tg-authorbox">
                                                    @if (auth()->guard('admin')->check())
                                                        <figure class="tg-authorimg">
                                                            <img src="{{ auth()->guard('admin')->user()->image }}"
                                                                style="height: 75px; /* Ensure the height matches the width to create a perfect circle */border-radius: 50%;object-fit: cover;width: 75px; "
                                                                alt="image description" alt="image description">
                                                        </figure>
                                                    @elseif (auth()->guard('web')->check())
                                                        <figure class="tg-authorimg">
                                                            <img src="{{ auth()->user()->image}} "
                                                                style="height: 75px; /* Ensure the height matches the width to create a perfect circle */border-radius: 50%;object-fit: cover;width: 75px; "
                                                                alt="image description">
                                                        </figure>
                                                    @endif
                                                    <div class="tg-authorinfo">
                                                        <div class="tg-authorhead">
                                                            <div class="tg-leftarea">
                                                                <div class="tg-authorname">
                                                                    <h2>
                                                                        @if (auth()->guard('admin')->check())
                                                                            {{ auth()->guard('admin')->user()->name }}
                                                                        @elseif (auth()->guard('web')->check())
                                                                            {{ auth()->user()->name }}
                                                                        @endif
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                            <div class="tg-description">
                                                                <textarea placeholder="Bình luận" name="comment"
                                                                    style="width: 100%; height: 120px; resize: none; border-radius: 15px;" maxlength="150"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="button" id="submitComment"
                                                            class="tg-btn tg-active">Đăng bình luận</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    @endif
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

    </main>
    <script>
        $(document).ready(function() {
            // Set the number of initially visible comments
            var visibleComments = 3;

            // Function to toggle visibility of comments
            function toggleComments() {
                // Toggle visibility of comments based on the 'visibleComments' variable
                $('.comment-item:lt(' + visibleComments + ')').show();
                $('.comment-item:gt(' + (visibleComments - 1) + ')').hide();
            }

            // Initial toggle
            toggleComments();

            // Show All Comments
            $('.view-all-comments').on('click', function() {
                visibleComments = $('.comment-item').length;
                toggleComments();
                $('.tg-loadmore').show();
            });

            // Show Less Comments
            $('.show-less-comments').on('click', function() {
                visibleComments = 3;
                toggleComments();
            });
        });
    </script>
@endsection

<style>
    /* Ẩn menu ban đầu */
</style>
@if (session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif

<header id="tg-header" class="tg-header tg-headervtwo tg-haslayout">
    {{-- <div class="tg-topbar">
        <div class="tg-middlecontainer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <strong class="tg-logo"><a href="/"><img src="/images/logo.png"
                                    alt="tên công ty"></a></strong>
                        <div class="tg-searchbox">
                            <form class="tg-formtheme tg-formsearch" action="{{ route('search') }}" method="GET">
                                <fieldset>
                                    <input type="text" name="search" class="typeahead form-control"
                                        placeholder="Tìm kiếm theo tên sản phẩm..." data-aos="fade-up"
                                        data-aos-delay="200">
                                    <button type="submit" class="tg-btn" id="submit">Tìm kiếm</button>
                                </fieldset>
                                <a href="">+ Tìm kiếm nâng cao</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="tg-topbar">

        <div class="tg-middlecontainer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <strong class="tg-logo"><a href="/"><img src="/images/logo.png"
                                    alt="tên công ty"></a></strong>
                        <div class="tg-searchbox">
                            <form class="tg-formtheme tg-formsearch" action="{{ route('search') }}" method="GET">
                                <fieldset>
                                    <input type="text" name="search" class="typeahead form-control"
                                        placeholder="Tìm kiếm theo tên sản phẩm..." data-aos="fade-up"
                                        data-aos-delay="200">
                                    <button type="submit" class="tg-btn" id="submit">Tìm kiếm</button>
                                </fieldset>
                                <a href="">+ Tìm kiếm nâng cao</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tg-navigationarea">
        <div class="container">
            <div class="row s1">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-navigationholder">
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#tg-navigation" aria-expanded="false">
                                    <span class="sr-only">Chuyển đổi điều hướng</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                <ul>
                                    <li class="menu-item-has-children menu-item-has-mega-menu">
                                        <a href="javascript:void(1); ">Tất cả danh mục</a>
                                        <div class="mega-menu">
                                            <ul class="tg-themetabnav" role="tablist">
                                                @foreach ($category as $category)
                                                    <li role="presentation">
                                                        <a href="#{{ $category->category_slug }}"
                                                            aria-controls="artandphotography" role="tab"
                                                            data-toggle="tab">{{ $category->category_name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <div class="tab-content tg-themetabcontent">
                                                @foreach ($groupedData as $categorySlug => $categories)
                                                    <div role="tabpanel" class="tab-pane active"
                                                        id="{{ $categorySlug }}">

                                                        <ul>
                                                            @foreach ($categories as $name => $items)
                                                                <li>
                                                                    <div class="tg-linkstitle">
                                                                        <h2>{{ $name }}</h2>
                                                                    </div>
                                                                    <ul>
                                                                        @foreach ($items as $item)
                                                                            <li><a
                                                                                    href="products.html">{{ $item }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                    <a class="tg-btnviewall" href="products.html">Xem
                                                                        tất cả</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                        <ul>
                                                            <li>
                                                                <figure><img src="images/img-01.png" alt="Hình ảnh">
                                                                </figure>
                                                                <div class="tg-textbox">
                                                                    <h3>Hơn <span>{{ $sumPro }}</span> Tuyển
                                                                        tập Sách</h3>
                                                                    <div class="tg-description">
                                                                        <p>
                                                                            Sách hay, cũng như bạn tốt, ít và được
                                                                            lựa chọn; chọn lựa càng nhiều, thưởng
                                                                            thức càng nhiều.</p>
                                                                    </div>
                                                                    <a class="tg-btn" href="products.html">Xem tất
                                                                        cả</a>
                                                                </div>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                @endforeach



                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children current-menu-item">
                                        <a href="/">Trang chủ</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('product') }}">Sản phẩm</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('promote') }}">Sản phẩm khuyến mãi</a></li>
                                            <li><a href="/goodreviews">Sản phẩm chất lượng</a></li>
                                            <li><a href="{{ route('newsProduct') }}">Sản phẩm mới</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="/news">Tin tức</a>
                                        <ul class="sub-menu">
                                            
                                            @forelse ($newsPostCategory as $item)
                                                <li><a
                                                        href="{{ route('newsCategoryShow', $item->post_category_slug) }}">{{ $item->post_category_name }}</a>
                                                </li>
                                            @empty
                                            @endforelse
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Liên hệ</a></li>
                                    @auth('web')
                                        @php
                                            $user = Auth::user();
                                        @endphp

                                        <li class="menu-item-has-children tga-themedropdownmenu">
                                            <a href="">{{ $user->name }}</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="/profile">
                                                        <i class="bi bi-people"></i>
                                                        <span>Thông tin cá nhân</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/donhang">
                                                        <i class="bi bi-shop-window"></i>
                                                        <span>Đơn hàng</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a class="nav-link" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                                            <i class="bi bi-box-arrow-right"></i>
                                                            <span>{{ __('Đăng xuất') }}</span>
                                                        </a>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        @elseauth('admin')
                                        @php
                                            $adminUser = Auth::guard('admin')->user();
                                        @endphp

                                        <li class="menu-item-has-children tga-themedropdownmenu">
                                            <a href="">{{ $adminUser->name }}</a>
                                            <ul class="sub-menu" style="margin-right: -125px">
                                                <!-- Add admin-specific menu items here -->
                                                <li>
                                                    <a href="{{ route('admin.dashboard') }}">
                                                        <i class="bi bi-database-lock"></i>
                                                        <span>Quản trị</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <form method="POST" action="{{ route('admin.logout') }}">
                                                        @csrf
                                                        <a class="nav-link" href="{{ route('admin.logout') }}"
                                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                                            <i class="bi bi-box-arrow-right"></i>
                                                            <span>{{ __('Đăng xuất') }}</span>
                                                        </a>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <!-- Hiển thị nút đăng nhập -->
                                        <li>
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>


                            <div class="tg-wishlistandcart" style="right: 30px">
                                <div class="dropdown tg-themedropdown tg-wishlistdropdown" style="height: 60px;">
                                    <a href="#" style="color: white;" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i style="font-size: 19px; font-weight: bold;" class="icon-heart"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width: 250px">
                                        <ul class="tg-wishlist-items" style="margin-left: -20px">
                                            @if (auth()->check())
                                                @if ($user = auth()->user())
                                                    @php
                                                        $wishlist = json_decode($user->wishlist, true);
                                                    @endphp
                                                    @if (!empty($wishlist))
                                                        @foreach ($wishlist as $wishlistItem)
                                                            <div class="row wishlist-item">
                                                                <div class="col-md-6">
                                                                    <figure>
                                                                        <img src="{{ $wishlistItem['product_image'] }}"
                                                                            alt="Product Image"
                                                                            style="max-height: 80px; max-width: 60px;">
                                                                    </figure>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="tg-minicarproductdata">
                                                                        <h5><a
                                                                                href="javascript:void(0);">{{ $wishlistItem['product_name'] }}</a>
                                                                        </h5>
                                                                        <h6>
                                                                            <a href="javascript:void(0);">{{ number_format($wishlistItem['price'], 0, ',', '.') }}
                                                                                VNĐ</a>
                                                                            <a href=""
                                                                                class="tg-btnremovefromwishlist"
                                                                                data-user-id="{{ auth()->user()->id }}"
                                                                                data-product-id="{{ $wishlistItem['id'] }}">
                                                                                <i class="fa fa-trash"
                                                                                    aria-hidden="true"></i>
                                                                            </a>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <p style="margin: 10px 10px; margin-left: 30px;">Không có sản phẩm
                                                            trong danh sách yêu thích.</p>
                                                    @endif
                                                @else
                                                    <p style="margin: 10px 10px;  margin-left: 30px;">Không có người dùng.
                                                    </p>
                                                @endif
                                            @else
                                                <p style="margin: 10px 10px;  margin-left: 30px;">Vui lòng đăng nhập để xem
                                                    danh sách yêu thích.
                                                </p>
                                            @endif

                                        </ul>
                                    </div>
                                </div>
                                <div class="dropdown tg-themedropdown tg-wishlistdropdown" style="height: 60px;">
                                    <a href="" style="color: white;" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i style="font-size: 19px; font-weight: bold;" class="icon-cart"></i>
                                    </a>


                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width: 250px">
                                        <ul class="tg-wishlist-items" style="margin-left: -20px">
                                            @forelse ($cart as $cartItem)
                                                @if (is_array($cartItem))
                                                    <div class="tg-minicarproduct">
                                                        <figure>
                                                            <img src="{{ $cartItem['product_image'] }}"
                                                                style="max-width: 80px; margin-left: 30px; margin-top: 5px;"
                                                                alt="image description">
                                                        </figure>
                                                        <div class="tg-minicarproductdata">
                                                            <h5><a
                                                                    href="javascript:void(0);">{{ $cartItem['product_name'] }}</a>
                                                            </h5>
                                                            <h6><a href="javascript:void(0);">{{ number_format($cartItem['price'] ?? 0, 0, ',', '.') }}
                                                                    VNĐ x {{ $cartItem['so_luong'] }}</a></h6>
                                                        </div>
                                                    </div>
                                                @endif
                                            @empty
                                                <p style="margin: 10px 10px; margin-left: 30px;">Không có sản phẩm nào
                                                    trong giỏ hàng</p>
                                            @endforelse
                                            <a style="margin-left: 30px; font-weight: bold;" href="/cart">Xem giỏ
                                                hàng</a>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

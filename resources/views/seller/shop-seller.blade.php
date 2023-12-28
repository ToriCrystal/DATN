@extends('layouts.layoutUser')

@section('title')
Thông tin shop
@endsection

@section('noidung')
<link rel="stylesheet" href="/css/seller/main.css">
<link rel="stylesheet" href="/css/seller/body.css">
<link rel="stylesheet" href="/css/seller/style.css">


<body style="visibility: visible; width: auto;">
    <div id="main">

        <div>
            <div style="display: contents;">
                <div class="">
                    <div class="GgsYCB">
                        <div>
                            <div class="tracking-impression-placeholder" style="position: fixed; z-index: 99999; bottom: 0px; left: 0px;"></div>
                            <svg class="scroll-to-top" xmlns="http://www.w3.org/2000/svg" width="44" height="44" version="1" style="display: none;">
                                <defs>
                                    <circle id="scroll-to-top-b" cx="22" cy="21" r="20"></circle>
                                    <filter id="scroll-to-top-a" width="118%" height="118%" x="-9%" y="-6%" filterUnits="objectBoundingBox">
                                        <feOffset dy="1" in="SourceAlpha" result="f"></feOffset>
                                        <feGaussianBlur in="f" result="f" stdDeviation="1"></feGaussianBlur>
                                        <feComposite in="f" in2="SourceAlpha" operator="out" result="f"></feComposite>
                                        <feColorMatrix in="f" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"></feColorMatrix>
                                    </filter>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <use fill="#000" filter="url(#scroll-to-top-a)" xlink:href="#b"></use>
                                    <use fill="#fff" xlink:href="#scroll-to-top-b"></use>
                                    <circle cx="22" cy="21" r="20"></circle>
                                    <path fill="#EE4D2D" d="M12 13h20v2H12zm11 7v13h-2V20l-6 6-1-2 8-8 9 8-2 2z"></path>
                                </g>
                            </svg>
                            <div class="shop-page">
                                <div role="main">
                                    <div class="shop-page__info">
                                        <div class="section-seller-overview-horizontal container">
                                            <div class="section-seller-overview-horizontal__leading">
                                                <div class="section-seller-overview-horizontal__leading-background" style="background-image: url(&quot;https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/shopmicrofe/dc2a8ae5803b2531c9a537ae6432ce08.jpg&quot;);"></div>
                                                <div class="section-seller-overview-horizontal__leading-background-mask"></div>
                                                <div class="section-seller-overview-horizontal__leading-content">
                                                    <div class="section-seller-overview-horizontal__seller-portrait UgJq78"><a class="section-seller-overview-horizontal__seller-portrait-link" href="/extremezero.vn">
                                                            <div class="shopee-avatar wEpezN">
                                                                <div class="shopee-avatar__placeholder"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon icon-headshot">
                                                                        <g>
                                                                            <circle cx="7.5" cy="4.5" fill="none" r="3.8" stroke-miterlimit="10"></circle>
                                                                            <path d="m1.5 14.2c0-3.3 2.7-6 6-6s6 2.7 6 6" fill="none" stroke-linecap="round" stroke-miterlimit="10"></path>
                                                                        </g>
                                                                    </svg></div><img class="shopee-avatar__img" src="https://down-bs-vn.img.susercontent.com/d66799400a95f4c4a0eb49ae1709c79d_tn">
                                                            </div>
                                                        </a>
                                                        <div class="section-seller-overview-horizontal__portrait-info">
                                                            <h1 style="color: white;" class="section-seller-overview-horizontal__portrait-name">Extreme Zero Online</h1>
                                                            <div class="section-seller-overview-horizontal__portrait-status">
                                                                <div class="section-seller-overview-horizontal__active-time">Online 6 phút trước</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="section-seller-overview-horizontal__buttons"><a class="section-seller-overview-horizontal__button"><button class="shopee-button-outline shopee-button-outline--complement shopee-button-outline--fill"><span class="section-seller-overview-horizontal__icon"><svg enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon icon-plus-sign">
                                                                        <polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon>
                                                                    </svg></span>theo dõi</button></a><a argettype="chatButton" class="section-seller-overview-horizontal__button"><button class="shopee-button-outline shopee-button-outline--complement shopee-button-outline--fill"><span class="section-seller-overview-horizontal__icon"><svg viewBox="0 0 16 16" class="shopee-svg-icon">
                                                                        <g fill-rule="evenodd">
                                                                            <path d="M15 4a1 1 0 01.993.883L16 5v9.932a.5.5 0 01-.82.385l-2.061-1.718-8.199.001a1 1 0 01-.98-.8l-.016-.117-.108-1.284 8.058.001a2 2 0 001.976-1.692l.018-.155L14.293 4H15zm-2.48-4a1 1 0 011 1l-.003.077-.646 8.4a1 1 0 01-.997.923l-8.994-.001-2.06 1.718a.5.5 0 01-.233.108l-.087.007a.5.5 0 01-.492-.41L0 11.732V1a1 1 0 011-1h11.52zM3.646 4.246a.5.5 0 000 .708c.305.304.694.526 1.146.682A4.936 4.936 0 006.4 5.9c.464 0 1.02-.062 1.608-.264.452-.156.841-.378 1.146-.682a.5.5 0 10-.708-.708c-.185.186-.445.335-.764.444a4.004 4.004 0 01-2.564 0c-.319-.11-.579-.258-.764-.444a.5.5 0 00-.708 0z"></path>
                                                                        </g>
                                                                    </svg></span>chat</button></a></div>
                                                </div>
                                            </div>
                                            <div class="section-seller-overview-horizontal__seller-info-list">
                                                <div class="section-seller-overview__item section-seller-overview__item--clickable">
                                                    <div class="section-seller-overview__item-icon-wrapper"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" stroke-width="0" class="shopee-svg-icon">
                                                            <path d="m13 1.9c-.2-.5-.8-1-1.4-1h-8.4c-.6.1-1.2.5-1.4 1l-1.4 4.3c0 .8.3 1.6.9 2.1v4.8c0 .6.5 1 1.1 1h10.2c.6 0 1.1-.5 1.1-1v-4.6c.6-.4.9-1.2.9-2.3zm-11.4 3.4 1-3c .1-.2.4-.4.6-.4h8.3c.3 0 .5.2.6.4l1 3zm .6 3.5h.4c.7 0 1.4-.3 1.8-.8.4.5.9.8 1.5.8.7 0 1.3-.5 1.5-.8.2.3.8.8 1.5.8.6 0 1.1-.3 1.5-.8.4.5 1.1.8 1.7.8h.4v3.9c0 .1 0 .2-.1.3s-.2.1-.3.1h-9.5c-.1 0-.2 0-.3-.1s-.1-.2-.1-.3zm8.8-1.7h-1v .1s0 .3-.2.6c-.2.1-.5.2-.9.2-.3 0-.6-.1-.8-.3-.2-.3-.2-.6-.2-.6v-.1h-1v .1s0 .3-.2.5c-.2.3-.5.4-.8.4-1 0-1-.8-1-.8h-1c0 .8-.7.8-1.3.8s-1.1-1-1.2-1.7h12.1c0 .2-.1.9-.5 1.4-.2.2-.5.3-.8.3-1.2 0-1.2-.8-1.2-.9z"></path>
                                                        </svg></div>
                                                    <div class="section-seller-overview__item-text">
                                                        <div class="section-seller-overview__item-text-name">Sản phẩm:&nbsp;</div>
                                                        <div class="section-seller-overview__item-text-value">217</div>
                                                    </div>
                                                </div>
                                                <div class="section-seller-overview__item">
                                                    <div class="section-seller-overview__item-icon-wrapper"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon">
                                                            <g>
                                                                <circle cx="5.5" cy="5" fill="none" r="4" stroke-miterlimit="10"></circle>
                                                                <path d="m8.4 7.5c.7 0 1.1.7 1.1 1.6v4.9h-8v-4.9c0-.9.4-1.6 1.1-1.6" fill="none" stroke-linejoin="round" stroke-miterlimit="10"></path>
                                                                <path d="m12.6 6.9c.7 0 .9.6.9 1.2v5.7h-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path>
                                                                <path d="m9.5 1.2c1.9 0 3.5 1.6 3.5 3.5 0 1.4-.9 2.7-2.1 3.2" fill="none" stroke-linecap="round" stroke-miterlimit="10"></path>
                                                            </g>
                                                        </svg></div>
                                                    <div class="section-seller-overview__item-text">
                                                        <div class="section-seller-overview__item-text-name">Người theo dõi:&nbsp;</div>
                                                        <div class="section-seller-overview__item-text-value">619</div>
                                                    </div>
                                                </div>
                                                <div class="section-seller-overview__item">
                                                    <div class="section-seller-overview__item-icon-wrapper"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon">
                                                            <g>
                                                                <circle cx="7" cy="4.5" fill="none" r="3.8" stroke-miterlimit="10"></circle>
                                                                <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="12" x2="12" y1="11.2" y2="14.2"></line>
                                                                <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="10.5" x2="13.5" y1="12.8" y2="12.8"></line>
                                                                <path d="m1.5 13.8c0-3 2.5-5.5 5.5-5.5 1.5 0 2.9.6 3.9 1.6" fill="none" stroke-linecap="round" stroke-miterlimit="10"></path>
                                                            </g>
                                                        </svg></div>
                                                    <div class="section-seller-overview__item-text">
                                                        <div class="section-seller-overview__item-text-name">Đang Theo dõi:&nbsp;</div>
                                                        <div class="section-seller-overview__item-text-value">17</div>
                                                    </div>
                                                </div>
                                                <div class="section-seller-overview__item section-seller-overview__item--clickable">
                                                    <div class="section-seller-overview__item-icon-wrapper"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon icon-rating">
                                                            <polygon fill="none" points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                        </svg></div>
                                                    <div class="section-seller-overview__item-text">
                                                        <div class="section-seller-overview__item-text-name">đánh giá:&nbsp;</div>
                                                        <div class="section-seller-overview__item-text-value">4.7 (107 đánh giá)</div>
                                                    </div>
                                                </div>
                                                <div class="section-seller-overview__item">
                                                    <div class="section-seller-overview__item-icon-wrapper"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon">
                                                            <g>
                                                                <polygon fill="none" points="14 10.8 7 10.8 3 13.8 3 10.8 1 10.8 1 1.2 14 1.2" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                <circle cx="4" cy="5.8" r="1" stroke="none"></circle>
                                                                <circle cx="7.5" cy="5.8" r="1" stroke="none"></circle>
                                                                <circle cx="11" cy="5.8" r="1" stroke="none"></circle>
                                                            </g>
                                                        </svg></div>
                                                    <div class="section-seller-overview__item-text">
                                                        <div class="section-seller-overview__item-text-name">Tỉ lệ phản hồi Chat:&nbsp;</div>
                                                        <div class="section-seller-overview__item-text-value">70% (trong vài giờ)<div class="section-seller-overview__inline-icon section-seller-overview__inline-icon--help"><svg width="10" height="10">
                                                                    <g fill="currentColor" fill-rule="nonzero" color="currentColor" stroke-width="0">
                                                                        <path d="M5 10A5 5 0 1 1 5 0a5 5 0 0 1 0 10zM5 .675a4.325 4.325 0 1 0 0 8.65 4.325 4.325 0 0 0 0-8.65z"></path>
                                                                        <path d="M6.235 5.073c.334-.335.519-.79.514-1.264a1.715 1.715 0 0 0-.14-.684 1.814 1.814 0 0 0-.933-.951A1.623 1.623 0 0 0 5 2.03a1.66 1.66 0 0 0-.676.14 1.772 1.772 0 0 0-.934.948c-.093.219-.14.454-.138.691a.381.381 0 0 0 .106.276c.07.073.168.113.27.11a.37.37 0 0 0 .348-.235c.02-.047.031-.099.03-.15a1.006 1.006 0 0 1 .607-.933.954.954 0 0 1 .772.002 1.032 1.032 0 0 1 .61.93c.003.267-.1.525-.288.716l-.567.537c-.343.35-.514.746-.514 1.187a.37.37 0 0 0 .379.382c.1.002.195-.037.265-.108a.375.375 0 0 0 .106-.274c0-.232.097-.446.29-.642l.568-.534zM5 6.927a.491.491 0 0 0-.363.152.53.53 0 0 0 0 .74.508.508 0 0 0 .726 0 .53.53 0 0 0 0-.74A.491.491 0 0 0 5 6.927z"></path>
                                                                    </g>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="section-seller-overview__item">
                                                    <div class="section-seller-overview__item-icon-wrapper"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon">
                                                            <g>
                                                                <circle cx="6.8" cy="4.2" fill="none" r="3.8" stroke-miterlimit="10"></circle>
                                                                <polyline fill="none" points="9.2 12.5 11.2 14.5 14.2 11" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                                                <path d="m .8 14c0-3.3 2.7-6 6-6 2.1 0 3.9 1 5 2.6" fill="none" stroke-linecap="round" stroke-miterlimit="10"></path>
                                                            </g>
                                                        </svg></div>
                                                    <div class="section-seller-overview__item-text">
                                                        <div class="section-seller-overview__item-text-name">tham gia:&nbsp;</div>
                                                        <div class="section-seller-overview__item-text-value">8 năm trước</div>
                                                    </div>
                                                </div>
                                                <div class="section-seller-overview__item">
                                                    <div class="section-seller-overview__item-icon-wrapper"><svg width="13" height="14">
                                                            <g fill="currentColor" fill-rule="nonzero" stroke-width="0.4">
                                                                <path d="M9.49.903h.453c.498 0 .903.404.903.903v4.993a.452.452 0 1 0 .904 0V1.806C11.75.808 10.94 0 9.944 0H9.49a.452.452 0 1 0 0 .903zM5.879 12.645H1.813a.903.903 0 0 1-.903-.902V1.806c0-.499.405-.903.903-.903h.452a.451.451 0 0 0 0-.903h-.452C.816 0 .007.808.007 1.806v9.936c0 .998.809 1.806 1.806 1.806h4.065a.452.452 0 0 0 0-.903z"></path>
                                                                <path d="M2.265 0H9.49a.451.451 0 1 1 0 .903H2.265a.452.452 0 0 1 0-.903zm.904 3.613H9.04a.452.452 0 1 1 0 .903H3.169a.452.452 0 1 1 0-.903zm0 2.71h3.613a.452.452 0 1 1 0 .904H3.169a.452.452 0 0 1 0-.904zm0 2.709h1.806a.452.452 0 1 1 0 .905H3.169a.452.452 0 0 1 0-.905zm6.322 4.065a2.258 2.258 0 1 0 0-4.515 2.258 2.258 0 0 0 0 4.515zm0 .903a3.161 3.161 0 1 1 0-6.323 3.161 3.161 0 0 1 0 6.323z"></path>
                                                                <path d="M7.575 12.117l3.193-3.194a.451.451 0 1 1 .638.639l-3.192 3.192a.451.451 0 0 1-.639-.637z"></path>
                                                            </g>
                                                        </svg></div>
                                                    <div class="section-seller-overview__item-text">
                                                        <div class="section-seller-overview__item-text-name">Tỉ lệ Shop hủy đơn:&nbsp;</div>
                                                        <div class="section-seller-overview__inline-icon section-seller-overview__inline-icon--warning"><svg width="10" height="10">
                                                                <path d="M5 10c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm.765-7.435c0-.385-.395-.695-.775-.695-.385 0-.765.31-.765.695l.2 2.89c0 .385.175.695.56.695.385 0 .58-.31.58-.695l.2-2.89zM5.01 6.52a.783.783 0 0 0-.785.785c0 .435.35.785.785.785.435 0 .785-.35.785-.785 0-.43-.35-.785-.785-.785z" fill="currentColor" fill-rule="nonzero" stroke-width="0"></path>
                                                            </svg></div>
                                                        <div class="section-seller-overview__item-text-value">14%<div class="section-seller-overview__inline-icon section-seller-overview__inline-icon--help"><svg width="10" height="10">
                                                                    <g fill="currentColor" fill-rule="nonzero" color="currentColor" stroke-width="0">
                                                                        <path d="M5 10A5 5 0 1 1 5 0a5 5 0 0 1 0 10zM5 .675a4.325 4.325 0 1 0 0 8.65 4.325 4.325 0 0 0 0-8.65z"></path>
                                                                        <path d="M6.235 5.073c.334-.335.519-.79.514-1.264a1.715 1.715 0 0 0-.14-.684 1.814 1.814 0 0 0-.933-.951A1.623 1.623 0 0 0 5 2.03a1.66 1.66 0 0 0-.676.14 1.772 1.772 0 0 0-.934.948c-.093.219-.14.454-.138.691a.381.381 0 0 0 .106.276c.07.073.168.113.27.11a.37.37 0 0 0 .348-.235c.02-.047.031-.099.03-.15a1.006 1.006 0 0 1 .607-.933.954.954 0 0 1 .772.002 1.032 1.032 0 0 1 .61.93c.003.267-.1.525-.288.716l-.567.537c-.343.35-.514.746-.514 1.187a.37.37 0 0 0 .379.382c.1.002.195-.037.265-.108a.375.375 0 0 0 .106-.274c0-.232.097-.446.29-.642l.568-.534zM5 6.927a.491.491 0 0 0-.363.152.53.53 0 0 0 0 .74.508.508 0 0 0 .726 0 .53.53 0 0 0 0-.74A.491.491 0 0 0 5 6.927z"></path>
                                                                    </g>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-page-menu">
                                        <div class="navbar-with-more-menu navbar-with-more-menu--narrow">
                                            <div class="container navbar-with-more-menu__wrapper navbar-with-more-menu__wrapper--no-shadow" style="background-color: rgb(255, 255, 255);">
                                                <div class="navbar-with-more-menu__items"><a class="navbar-with-more-menu__item navbar-with-more-menu__item--active" href="/extremezero.vn"><span>Dạo</span></a><a class="navbar-with-more-menu__item" href="/extremezero.vn#product_list"><span>TẤT CẢ SẢN PHẨM</span></a><a class="navbar-with-more-menu__item" href="/extremezero.vn?originalCategoryId=11035954#product_list"><span>Máy Tính &amp; Laptop</span></a><a class="navbar-with-more-menu__item" href="/extremezero.vn?originalCategoryId=11036670#product_list"><span>Nhà Cửa &amp; Đời Sống</span></a><a class="navbar-with-more-menu__item" href="/extremezero.vn?originalCategoryId=11036132#product_list"><span>Thiết Bị Điện Tử</span></a><a class="navbar-with-more-menu__item" href="/extremezero.vn?originalCategoryId=11116484#product_list"><span>Dụng cụ và thiết bị tiện ích</span></a>
                                                    <div class="navbar-with-more-menu__item navbar-with-more-menu__more">
                                                        <div class="navbar-with-more-menu__more-label">Thêm</div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon icon-down-arrow-filled">
                                                            <path d="m6.5 12.9-6-7.9s-1.4-1.5.5-1.5h13s1.8 0 .6 1.5l-6 7.9c-.1 0-.9 1.3-2.1 0z"></path>
                                                        </svg>
                                                        <div>
                                                            <div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="shop-decoration">
                                            <div>
                                                <div>
                                                    <div>
                                                        <div class="shop-collection-view">
                                                            <div class="shopee-header-section shopee-header-section--simple">
                                                                <div class="shopee-header-section__header">
                                                                    <div class="shopee-header-section__header__title">Gợi ý cho bạn</div>
                                                                    <a class="shopee-header-section__header-link" tabindex="-1" href="/shop/3709515/recommendation-landing?catId=100013&amp;itemId=22049618821&amp;step2_upstream=search&amp;upstream=pdp">
                                                                        <button class="shopee-button-no-outline">Xem tất cả&nbsp;<svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-right">
                                                                                <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                                                            </svg>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                                <div class="shopee-header-section__content">
                                                                    <div class="row">
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Bộ-box-phone-farm-đầy-đủ-box-phonefarm-lắp-cho-các-20-máy-điện-thoại-i.3709515.22049618821?xptdk=f753f381-fe88-4bfd-9659-3a25008ceea4">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img width="invalid-value" height="invalid-value" alt="Bộ box phone farm đầy đủ , box phonefarm lắp cho các 20 máy điện thoại" class="HWfRmU K-LtEw" style="object-fit: contain" src="https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-ljphi62ejqgk13_tn">
                                                                                                <div class="_3vzxD8">
                                                                                                    <div class="kciHnY"><span class="Nv7uAa">-25%</span></div>
                                                                                                </div>
                                                                                                <div class="LiYqE6">
                                                                                                    <div aria-hidden="true"><svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="shopee-svg-icon _1+rirL icon-video-play2">
                                                                                                            <path d="m10 20c5.5228 0 10-4.4772 10-10 0-5.5228-4.4772-10-10-10-5.5228 0-10 4.4772-10 10 0 5.5228 4.4772 10 10 10z" clip-rule="evenodd" fill-opacity=".5" fill-rule="evenodd"></path>
                                                                                                            <path d="m7 6.1263c0-0.55798 0.4141-0.78618 0.91986-0.50718l6.6976 3.8599c0.506 0.27899 0.506 0.73534 0 1.0143l-6.6976 3.8876c-0.50603 0.279-0.91986 0.0508-0.91986-0.5072v-7.7474z" fill="#fff"></path>
                                                                                                        </svg> </div>
                                                                                                </div>
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA" data-sqe="name">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Bộ box phone farm đầy đủ , box phonefarm lắp cho các 20 máy điện thoại</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="eQZeWo">
                                                                                                <div class="_4m2-Os HtOmnS giYDgR" aria-hidden="true">₫1.790.000</div>
                                                                                                <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">1.339.000</span></div>
                                                                                            </div>
                                                                                            <div class="_3ZeHP-">
                                                                                                <div class="n4HTgY" data-sqe="rating">
                                                                                                    <div class="shopee-rating-stars">
                                                                                                        <div class="shopee-rating-stars__stars">
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="_2VNMCr _8zpprh">Đã bán 25</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Mouse-Pad-bàn-di-chuột-lót-di-chuột-tích-hợp-Led-RGB-ROG-sáng-viền-kích-thước-80cm-x-30cm-dày-4mm-i.3709515.3388312847?xptdk=3c6afc8f-aea0-4d91-aee7-6553eae82218">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img width="invalid-value" height="invalid-value" alt="Mouse Pad, bàn di chuột, lót di chuột tích hợp Led RGB ROG sáng viền, kích thước 80cm x 30cm dày 4mm" class="HWfRmU K-LtEw" style="object-fit: contain" src="https://down-vn.img.susercontent.com/file/30497f5818b21c3dc35f351ca6a4d919_tn">
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA" data-sqe="name">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Mouse Pad, bàn di chuột, lót di chuột tích hợp Led RGB ROG sáng viền, kích thước 80cm x 30cm dày 4mm</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="eQZeWo">
                                                                                                <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">210.000</span></div>
                                                                                            </div>
                                                                                            <div class="_3ZeHP-">
                                                                                                <div class="n4HTgY" data-sqe="rating"></div>
                                                                                                <div class="_2VNMCr">Đã bán 2</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Bàn-di-chuột-chuyên-game-chống-nước-G-Net-size-30x70x0.4cm-di-cực-đã-I-Gaming-Mouse-Pad-GNet-Speed-i.3709515.2953795237?xptdk=515ededc-350e-4e26-b0ef-72b6ec3f3f65">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img width="invalid-value" height="invalid-value" alt="Bàn di chuột chuyên game, chống nước G-Net size 30x70x0.4cm, di cực đã I Gaming Mouse Pad GNet Speed" class="HWfRmU K-LtEw" style="object-fit: contain" src="https://down-vn.img.susercontent.com/file/d39f89b6477a842c47af6cf8a29b8123_tn">
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA" data-sqe="name">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Bàn di chuột chuyên game, chống nước G-Net size 30x70x0.4cm, di cực đã I Gaming Mouse Pad GNet Speed</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="eQZeWo">
                                                                                                <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">69.000</span></div>
                                                                                            </div>
                                                                                            <div class="_3ZeHP-">
                                                                                                <div class="n4HTgY" data-sqe="rating">
                                                                                                    <div class="shopee-rating-stars">
                                                                                                        <div class="shopee-rating-stars__stars">
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="_2VNMCr _8zpprh">Đã bán 1</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Microphone-Thronmax-Mdrill-Zero-M4-Jet-Black-i.3709515.9552235666?xptdk=68dc5e5a-e335-4587-b37a-039329d3fadb">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img width="invalid-value" height="invalid-value" alt="Microphone Thronmax Mdrill Zero M4 Jet Black" class="HWfRmU K-LtEw" style="object-fit: contain" src="https://down-vn.img.susercontent.com/file/f3e0e83f9ce3e44d3cee5f97e8a8d878_tn">
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA" data-sqe="name">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Microphone Thronmax Mdrill Zero M4 Jet Black</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="eQZeWo">
                                                                                                <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">1.380.000</span></div>
                                                                                            </div>
                                                                                            <div class="_3ZeHP-">
                                                                                                <div class="n4HTgY" data-sqe="rating"></div>
                                                                                                <div class="_2VNMCr"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Bàn-gaming-E-Dra-Z-Tank-V3-chính-hãng-Bảo-hành-12-tháng-i.3709515.16359797115?xptdk=8a6d6b98-9af3-4b41-875c-7cab316bfe0d">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img width="invalid-value" height="invalid-value" alt="Bàn gaming E-Dra Z Tank V3 chính hãng - Bảo hành 12 tháng" class="HWfRmU K-LtEw" style="object-fit: contain" src="https://down-vn.img.susercontent.com/file/db996098b106e93f6eb55aaf0207b52b_tn">
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA" data-sqe="name">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Bàn gaming E-Dra Z Tank V3 chính hãng - Bảo hành 12 tháng</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="eQZeWo">
                                                                                                <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">1.090.000</span></div>
                                                                                            </div>
                                                                                            <div class="_3ZeHP-">
                                                                                                <div class="n4HTgY" data-sqe="rating"></div>
                                                                                                <div class="_2VNMCr"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Quạt-Tản-Nhiệt-Fan-CPU-Coolmoon-UFO-X-Led-RGB-Tự-Động-Đổi-Màu-Và-Hiệu-Ứng-i.3709515.10602288200?xptdk=4b758585-c345-4ba9-aa3b-e8c93110d93b">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img width="invalid-value" height="invalid-value" alt="Quạt Tản Nhiệt, Fan CPU Coolmoon UFO X Led RGB - Tự Động Đổi Màu Và Hiệu Ứng" class="HWfRmU K-LtEw" style="object-fit: contain" src="https://down-vn.img.susercontent.com/file/6c670fab3c364af7e9ed5349785297b1_tn">
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA" data-sqe="name">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Quạt Tản Nhiệt, Fan CPU Coolmoon UFO X Led RGB - Tự Động Đổi Màu Và Hiệu Ứng</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="eQZeWo">
                                                                                                <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">110.000</span></div>
                                                                                            </div>
                                                                                            <div class="_3ZeHP-">
                                                                                                <div class="n4HTgY" data-sqe="rating">
                                                                                                    <div class="shopee-rating-stars">
                                                                                                        <div class="shopee-rating-stars__stars">
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                            <div class="shopee-rating-stars__star-wrapper">
                                                                                                                <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                    </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                                    <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="_2VNMCr _8zpprh">Đã bán 1</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Uv2Hyq" style="margin-bottom: 20px;"></div>
                                            </div>

                                            <div>
                                                <div>
                                                    <div>
                                                        <div class="shop-collection-view">
                                                            <div class="shopee-header-section pt5OYl shopee-header-section--simple">
                                                                <div class="shopee-header-section__header">
                                                                    <div style="color: red;" class="shopee-header-section__header__title"><svg class="EcH3u1" fill="none" height="18" viewBox="0 0 14 18" width="14" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="m5.16508 17.5562c-.95125-.5637-1.6325-1.5549-1.67125-2.7212-.05625-2.1788 1.4575-3.2475 2.35375-4.7075 1.2825-2.1.9325-3.4025.9325-3.4025s1.07.6025 1.6925 2.83875c.19376.66125.23375 1.32375.175 1.94625-.09625 1.575-.7775 2.9937-.7775 2.9937s1.18625-.2524 1.51626-2.4112c.54624.5637 1.05126 1.38 1.10876 2.2362.0975 1.4788-.77627 2.8388-2.10002 3.4213 2.29122-.525 3.92872-2.4688 4.49252-3.8888.7187-1.7875.525-3.3824.4075-4.7637-.155-1.885.505-3.28625.505-3.28625s-1.2638.37-2.1975 1.905c-.4275.70125-.6025 1.73-.6025 1.73s.0975-.9125-.5063-2.585c-.60122-1.63375-1.14746-2.21625-1.47871-3.42125-.42626-1.615.52499-3.19.52499-3.19s-3.77.70125-5.4825 3.98625c-1.51625 2.91625-.89375 4.6675-.89375 4.6675s-.6425-.60375-.9725-1.44-.25625-1.59375-.25625-1.59375-2.679996 2.955-1.376246 6.67c.874996 2.605 2.564996 4.3163 4.606246 5.0162z" fill="currentColor"></path>
                                                                        </svg><span class="uO7bzV">DEAL HOT, MUA NGAY KẺO LỠ!</span></div><a class="shopee-header-section__header-link" tabindex="-1" href="/shop/3709515/hot-deals?step2_upstream=search&amp;upstream=pdp"><button class="shopee-button-no-outline">Xem tất cả&nbsp;<svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-right">
                                                                                <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                                                            </svg></button></a>
                                                                </div>
                                                                <div class="shopee-header-section__content">
                                                                    <div class="row">
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Bộ-box-phone-farm-đầy-đủ-box-phonefarm-lắp-cho-các-20-máy-điện-thoại-i.3709515.22049618821">
                                                                                <div class="gaWLJv">
                                                                                    <div class="ld6OGH">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="z6MmV8">
                                                                                                    <div class="OjJ6Gi"><span class="pFu+wP">-25%</span></div>
                                                                                                </div>
                                                                                                <div class="O-I55m">
                                                                                                    <div aria-hidden="true"><svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="shopee-svg-icon _8c4EK6 icon-video-play2">
                                                                                                            <path d="m10 20c5.5228 0 10-4.4772 10-10 0-5.5228-4.4772-10-10-10-5.5228 0-10 4.4772-10 10 0 5.5228 4.4772 10 10 10z" clip-rule="evenodd" fill-opacity=".5" fill-rule="evenodd"></path>
                                                                                                            <path d="m7 6.1263c0-0.55798 0.4141-0.78618 0.91986-0.50718l6.6976 3.8599c0.506 0.27899 0.506 0.73534 0 1.0143l-6.6976 3.8876c-0.50603 0.279-0.91986 0.0508-0.91986-0.5072v-7.7474z" fill="#fff"></path>
                                                                                                        </svg> </div>
                                                                                                </div>
                                                                                                <div class="Nemjnz">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pDhCae">
                                                                                            <div class="_93Ziyh">
                                                                                                <div class="hb41Ql">
                                                                                                    <div aria-hidden="true" class="Od5Z3o GdLhE0">Bộ box phone farm đầy đủ , box phonefarm lắp cho các 20 máy điện thoại</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_6GsRWq xoEWrp">
                                                                                                <div class="_4m2-Os J1Rl+i"><span aria-label="current price"></span><span class="kKfVjl">₫</span><span class="N1QFzH">1.339.000</span></div>
                                                                                                <div class="domF6I +GG1C3">Đã bán 25</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Ghế-Gaming-E-Dra-Citizen-EGC200-Ghế-chơi-game-cao-cấp-Đỏ-Đen-Trắng-và-Xanh-Green-Bảo-hành-12-tháng-i.3709515.9552222608">
                                                                                <div class="gaWLJv">
                                                                                    <div class="ld6OGH">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="z6MmV8">
                                                                                                    <div class="OjJ6Gi"><span class="pFu+wP">-12%</span></div>
                                                                                                </div>
                                                                                                <div class="Nemjnz">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pDhCae">
                                                                                            <div class="_93Ziyh">
                                                                                                <div class="hb41Ql">
                                                                                                    <div aria-hidden="true" class="Od5Z3o GdLhE0">Ghế Gaming E-Dra Citizen EGC200 - Ghế chơi game cao cấp - Đỏ, Đen, Trắng và Xanh Green - Bảo hành 12 tháng</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_6GsRWq xoEWrp">
                                                                                                <div class="_4m2-Os J1Rl+i"><span aria-label="current price"></span><span class="kKfVjl">₫</span><span class="N1QFzH">2.189.000</span></div>
                                                                                                <div class="domF6I +GG1C3">Đã bán 2</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Chuột-văn-phòng-không-dây-DAREU-LM115G-Pink-Black-White-Hàng-chính-hãng-i.3709515.18783206752">
                                                                                <div class="gaWLJv">
                                                                                    <div class="ld6OGH">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="z6MmV8">
                                                                                                    <div class="OjJ6Gi"><span class="pFu+wP">-24%</span></div>
                                                                                                </div>
                                                                                                <div class="O-I55m">
                                                                                                    <div aria-hidden="true"><svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="shopee-svg-icon _8c4EK6 icon-video-play2">
                                                                                                            <path d="m10 20c5.5228 0 10-4.4772 10-10 0-5.5228-4.4772-10-10-10-5.5228 0-10 4.4772-10 10 0 5.5228 4.4772 10 10 10z" clip-rule="evenodd" fill-opacity=".5" fill-rule="evenodd"></path>
                                                                                                            <path d="m7 6.1263c0-0.55798 0.4141-0.78618 0.91986-0.50718l6.6976 3.8599c0.506 0.27899 0.506 0.73534 0 1.0143l-6.6976 3.8876c-0.50603 0.279-0.91986 0.0508-0.91986-0.5072v-7.7474z" fill="#fff"></path>
                                                                                                        </svg> </div>
                                                                                                </div>
                                                                                                <div class="Nemjnz">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pDhCae">
                                                                                            <div class="_93Ziyh">
                                                                                                <div class="hb41Ql">
                                                                                                    <div aria-hidden="true" class="Od5Z3o GdLhE0">Chuột văn phòng không dây DAREU LM115G Pink / Black / White - Hàng chính hãng</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_6GsRWq xoEWrp">
                                                                                                <div class="_4m2-Os J1Rl+i"><span aria-label="current price"></span><span class="kKfVjl">₫</span><span class="N1QFzH">113.000</span></div>
                                                                                                <div class="domF6I +GG1C3"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Ghế-chơi-game-cao-cấp-Edra-Hunter-EGC206-Da-Pu-Tải-trọng-150-Kg-Kê-tay-4D-Trụ-thủy-lực-Class-4-Hàng-chính-hãng-i.3709515.16959795547">
                                                                                <div class="gaWLJv">
                                                                                    <div class="ld6OGH">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="z6MmV8">
                                                                                                    <div class="OjJ6Gi"><span class="pFu+wP">-13%</span></div>
                                                                                                </div>
                                                                                                <div class="O-I55m">
                                                                                                    <div aria-hidden="true"><svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="shopee-svg-icon _8c4EK6 icon-video-play2">
                                                                                                            <path d="m10 20c5.5228 0 10-4.4772 10-10 0-5.5228-4.4772-10-10-10-5.5228 0-10 4.4772-10 10 0 5.5228 4.4772 10 10 10z" clip-rule="evenodd" fill-opacity=".5" fill-rule="evenodd"></path>
                                                                                                            <path d="m7 6.1263c0-0.55798 0.4141-0.78618 0.91986-0.50718l6.6976 3.8599c0.506 0.27899 0.506 0.73534 0 1.0143l-6.6976 3.8876c-0.50603 0.279-0.91986 0.0508-0.91986-0.5072v-7.7474z" fill="#fff"></path>
                                                                                                        </svg> </div>
                                                                                                </div>
                                                                                                <div class="Nemjnz">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-f2cc3194d4aaf3724844632a74c086e1" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pDhCae">
                                                                                            <div class="_93Ziyh">
                                                                                                <div class="hb41Ql">
                                                                                                    <div aria-hidden="true" class="Od5Z3o GdLhE0">Ghế chơi game cao cấp Edra Hunter EGC206 - Da Pu - Tải trọng 150 Kg - Kê tay 4D - Trụ thủy lực Class 4 - Hàng chính hãng</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_6GsRWq xoEWrp">
                                                                                                <div class="_4m2-Os J1Rl+i"><span aria-label="current price"></span><span class="kKfVjl">₫</span><span class="N1QFzH">4.879.000</span></div>
                                                                                                <div class="domF6I +GG1C3"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Ghế-chơi-game-cao-cấp-EDra-EGC229-Level-E-Kê-tay-2D-Da-Pu-Trụ-thủy-lực-Class-4-Hàng-chính-hãng-i.3709515.16759795598">
                                                                                <div class="gaWLJv">
                                                                                    <div class="ld6OGH">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="z6MmV8">
                                                                                                    <div class="OjJ6Gi"><span class="pFu+wP">-7%</span></div>
                                                                                                </div>
                                                                                                <div class="Nemjnz">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pDhCae">
                                                                                            <div class="_93Ziyh">
                                                                                                <div class="hb41Ql">
                                                                                                    <div aria-hidden="true" class="Od5Z3o GdLhE0">Ghế chơi game cao cấp EDra EGC229 Level E - Kê tay 2D - Da Pu - Trụ thủy lực Class 4 - Hàng chính hãng</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_6GsRWq xoEWrp">
                                                                                                <div class="_4m2-Os J1Rl+i"><span aria-label="current price"></span><span class="kKfVjl">₫</span><span class="N1QFzH">2.789.000</span></div>
                                                                                                <div class="domF6I +GG1C3"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Ghế-xoay-gaming-cao-cấp-Edra-Hercules-EGC203-V2-Kê-tay-3D-Đệm-đúc-nguyên-khối-Chất-liệu-Da-PU-Hàng-chính-hãng-i.3709515.10294519409">
                                                                                <div class="gaWLJv">
                                                                                    <div class="ld6OGH">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="z6MmV8">
                                                                                                    <div class="OjJ6Gi"><span class="pFu+wP">-19%</span></div>
                                                                                                </div>
                                                                                                <div class="Nemjnz">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-f2cc3194d4aaf3724844632a74c086e1" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pDhCae">
                                                                                            <div class="_93Ziyh">
                                                                                                <div class="hb41Ql">
                                                                                                    <div aria-hidden="true" class="Od5Z3o GdLhE0">Ghế xoay gaming cao cấp Edra Hercules EGC203 V2 - Kê tay 3D - Đệm đúc nguyên khối - Chất liệu Da PU - Hàng chính hãng</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_6GsRWq xoEWrp">
                                                                                                <div class="_4m2-Os J1Rl+i"><span aria-label="current price"></span><span class="kKfVjl">₫</span><span class="N1QFzH">3.479.000</span></div>
                                                                                                <div class="domF6I +GG1C3"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Uv2Hyq" style="margin-bottom: 20px;"></div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div>
                                                        <div class="shop-collection-view">
                                                            <div class="shopee-header-section shopee-header-section--simple">
                                                                <div class="shopee-header-section__header">
                                                                    <div class="shopee-header-section__header__title">Tìm kiếm hàng đầu</div>
                                                                    <div class="shopee-header-section__header-link"><button class="shopee-button-no-outline">Xem tất cả&nbsp;<svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-right">
                                                                                <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                                                            </svg></button></div>
                                                                </div>
                                                                <div class="shopee-header-section__content">
                                                                    <div class="row">
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Đĩa-trắng-CD-R-NEO-700MB-(Số-lượng-1-chiếc)-i.3709515.9952245654">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="awdT7q">
                                                                                                    <div class="xks51- y2sThf"></div>
                                                                                                </div>
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o XwV4kb">Đĩa trắng CD-R NEO 700MB (Số lượng 1 chiếc)</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_7Z5vht eQZeWo">
                                                                                                <div class="_4m2-Os ep6d57"><span aria-label="current price"></span><span class="_7cqGEG">₫</span><span class="S63hAh">5.000</span></div>
                                                                                                <div class="_2VNMCr _9H5QPy"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Đĩa-trắng-CD-R-Maxell-700MB-xuất-xứ-China-và-Đài-Loan-(SL-1-cái)-i.3709515.2953804487">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="awdT7q">
                                                                                                    <div class="xks51- TIHqWt"></div>
                                                                                                </div>
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o XwV4kb">Đĩa trắng CD-R Maxell 700MB xuất xứ China và Đài Loan (SL: 1 cái)</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_7Z5vht eQZeWo">
                                                                                                <div class="_4m2-Os ep6d57"><span aria-label="current price"></span><span class="_7cqGEG">₫</span><span class="S63hAh">5.500</span></div>
                                                                                                <div class="_2VNMCr _9H5QPy"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Switch-Gateron-Milky-KS-3X1-thay-thế-Bàn-Phím-Cơ-(loại-5-pin)-i.3709515.3045656602">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="awdT7q">
                                                                                                    <div class="xks51- B8HK2J"></div>
                                                                                                </div>
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o XwV4kb">Switch Gateron Milky KS-3X1 thay thế Bàn Phím Cơ (loại 5 pin)</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_7Z5vht eQZeWo">
                                                                                                <div class="_4m2-Os ep6d57"><span aria-label="current price"></span><span class="_7cqGEG">₫</span><span class="S63hAh">6.000</span></div>
                                                                                                <div class="_2VNMCr _9H5QPy"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Pin-CMOS-Lắp-Cho-Mainboard-Máy-Tính-Để-Bàn-Bộ-Hub-Coolmoon-i.3709515.10602288260">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="awdT7q">
                                                                                                    <div class="xks51- oDfFlT"></div>
                                                                                                </div>
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o XwV4kb">Pin CMOS Lắp Cho Mainboard Máy Tính Để Bàn / Bộ Hub Coolmoon</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_7Z5vht eQZeWo">
                                                                                                <div class="_4m2-Os ep6d57"><span aria-label="current price"></span><span class="_7cqGEG">₫</span><span class="S63hAh">10.000</span></div>
                                                                                                <div class="_2VNMCr _9H5QPy">Đã bán 2</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Đĩa-trắng-DVD-R-Maxell-4.7GB-loại-tốt-Xuất-xứ-Đài-Loan-(SL-1-cái)-i.3709515.9952245509">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="awdT7q">
                                                                                                    <div class="xks51- WDYnYU"></div>
                                                                                                </div>
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o XwV4kb">Đĩa trắng DVD-R Maxell 4.7GB loại tốt Xuất xứ Đài Loan (SL: 1 cái)</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_7Z5vht eQZeWo">
                                                                                                <div class="_4m2-Os ep6d57"><span aria-label="current price"></span><span class="_7cqGEG">₫</span><span class="S63hAh">10.000</span></div>
                                                                                                <div class="_2VNMCr _9H5QPy"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="col-xs-2 shop-collection-view__item"><a data-sqe="link" href="/Ốp-tai-nghe-quylin-A6-A7-(-1-đôi)-i.3709515.9952223752">
                                                                                <div class="k+FIyK">
                                                                                    <div class="MLk4IP">
                                                                                        <div style="pointer-events: none;">
                                                                                            <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                                <div class="wAQWvG">
                                                                                                    <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                            <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                                        </svg></div>
                                                                                                </div>
                                                                                                <div class="awdT7q">
                                                                                                    <div class="xks51- gKvdCf"></div>
                                                                                                </div>
                                                                                                <div class="bxnDSn">
                                                                                                    <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="BnjBdc">
                                                                                            <div class="wGBjtA">
                                                                                                <div class="_5Z7GUX">
                                                                                                    <div aria-hidden="true" class="Od5Z3o XwV4kb">Ốp tai nghe quylin A6,A7 ( 1 đôi)</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="_7Z5vht eQZeWo">
                                                                                                <div class="_4m2-Os ep6d57"><span aria-label="current price"></span><span class="_7cqGEG">₫</span><span class="S63hAh">13.000</span></div>
                                                                                                <div class="_2VNMCr _9H5QPy">Đã bán 28</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Uv2Hyq" style="margin-bottom: 20px;"></div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="shopee-header-section shopee-header-section--simple">
                                                        <div class="shopee-header-section__header">
                                                            <div class="shopee-header-section__header__title">Danh Mục</div>
                                                            <a class="shopee-header-section__header-link" tabindex="-1" href="/shop/3709515/search">
                                                                <button class="shopee-button-no-outline">Xem tất cả&nbsp;<svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-right">
                                                                        <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                                                    </svg></button></a>
                                                        </div>
                                                        <div class="shopee-header-section__content">
                                                            <div class="UWlaEc row">
                                                                <a class="col-xs-1-2 nWAtOj" href="/extremezero.vn?originalCategoryId=11035954#product_list">
                                                                    <div class="KaU4az NwYv+N">
                                                                        <div class="pBzbuU ux9rCA"></div>
                                                                        <div class="wAQWvG">
                                                                            <div class="dsW6QN"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="b6fBkr">Máy Tính &amp; Laptop</div>
                                                                </a>
                                                                <a class="col-xs-1-2 nWAtOj" href="/extremezero.vn?originalCategoryId=11035954#product_list">
                                                                    <div class="KaU4az NwYv+N">
                                                                        <div class="pBzbuU ux9rCA"></div>
                                                                        <div class="wAQWvG">
                                                                            <div class="dsW6QN"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="b6fBkr">Máy Tính &amp; Laptop</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Uv2Hyq" style="margin-bottom: 20px;"></div>
                                            </div>
                                        </div>
                                        <div class="shop-page__all-products-section">
                                            <div class="_1Jkvaf">
                                                <div class="qrfDUQ"><svg viewBox="0 0 12 10" class="shopee-svg-icon T8PBeP icon-all-cate">
                                                        <g fill-rule="evenodd" stroke="none" stroke-width="1">
                                                            <g transform="translate(-373 -208)">
                                                                <g transform="translate(155 191)">
                                                                    <g transform="translate(218 17)">
                                                                        <path d="m0 2h2v-2h-2zm4 0h7.1519633v-2h-7.1519633z"></path>
                                                                        <path d="m0 6h2v-2h-2zm4 0h7.1519633v-2h-7.1519633z"></path>
                                                                        <path d="m0 10h2v-2h-2zm4 0h7.1519633v-2h-7.1519633z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>Danh Mục</div>
                                                <div>
                                                    <div class="zvVwjQ rxoNY+"><svg viewBox="0 0 4 7" class="shopee-svg-icon dnZwG1 icon-down-arrow-right-filled">
                                                            <polygon points="4 3.5 0 0 0 7"></polygon>
                                                        </svg>Sản Phẩm</div>
                                                    <div>
                                                        <div class="zvVwjQ"><svg viewBox="0 0 4 7" class="shopee-svg-icon dnZwG1 icon-down-arrow-right-filled">
                                                                <polygon points="4 3.5 0 0 0 7"></polygon>
                                                            </svg>Máy Tính &amp; Laptop</div>
                                                    </div>
                                                    <div>
                                                        <div class="zvVwjQ"><svg viewBox="0 0 4 7" class="shopee-svg-icon dnZwG1 icon-down-arrow-right-filled">
                                                                <polygon points="4 3.5 0 0 0 7"></polygon>
                                                            </svg>Nhà Cửa &amp; Đời Sống</div>
                                                    </div>
                                                    <div>
                                                        <div class="zvVwjQ"><svg viewBox="0 0 4 7" class="shopee-svg-icon dnZwG1 icon-down-arrow-right-filled">
                                                                <polygon points="4 3.5 0 0 0 7"></polygon>
                                                            </svg>Thiết Bị Điện Tử</div>
                                                    </div>
                                                    <div>
                                                        <div class="zvVwjQ"><svg viewBox="0 0 4 7" class="shopee-svg-icon dnZwG1 icon-down-arrow-right-filled">
                                                                <polygon points="4 3.5 0 0 0 7"></polygon>
                                                            </svg>Dụng cụ và thiết bị tiện ích</div>
                                                    </div>
                                                    <div>
                                                        <div class="zvVwjQ"><svg viewBox="0 0 4 7" class="shopee-svg-icon dnZwG1 icon-down-arrow-right-filled">
                                                                <polygon points="4 3.5 0 0 0 7"></polygon>
                                                            </svg>Giặt Giũ &amp; Chăm Sóc Nhà Cửa</div>
                                                    </div>
                                                    <div>
                                                        <div class="zvVwjQ"><svg viewBox="0 0 4 7" class="shopee-svg-icon dnZwG1 icon-down-arrow-right-filled">
                                                                <polygon points="4 3.5 0 0 0 7"></polygon>
                                                            </svg>Điện Thoại &amp; Phụ Kiện</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-page_product-list">
                                                <div class="shop-all-product-view">
                                                    <fieldset class="shopee-sort-bar" style="border: 0px;">
                                                        <legend style="display: none;"></legend>
                                                        <div class="shopee-sort-bar__label">Sắp xếp theo</div>
                                                        <div class="shopee-sort-by-options">
                                                            <section class="shopee-sort-by-options__option-group"><button aria-label="" aria-pressed="true" class="shopee-sort-by-options__option shopee-sort-by-options__option--selected" style="background-color: rgb(238, 77, 45);"><span aria-hidden="true">Phổ biến</span></button><button aria-label="" aria-pressed="false" class="shopee-sort-by-options__option"><span aria-hidden="true">Mới nhất</span></button><button aria-label="" aria-pressed="false" class="shopee-sort-by-options__option"><span aria-hidden="true">Bán chạy</span></button></section>
                                                            <section>
                                                                <div style="pointer-events: auto;"><button type="button" role="combobox" aria-controls="radix-3" aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed" data-placeholder="" class="sort-price-select"><span style="pointer-events: none;">Giá</span><svg viewBox="0 0 10 6" class="shopee-svg-icon icon-arrow-down-small">
                                                                            <path d="M9.7503478 1.37413402L5.3649665 5.78112957c-.1947815.19574157-.511363.19651982-.7071046.00173827a.50153763.50153763 0 0 1-.0008702-.00086807L.2050664 1.33007451l.0007126-.00071253C.077901 1.18820749 0 1.0009341 0 .79546595 0 .35614224.3561422 0 .7954659 0c.2054682 0 .3927416.07790103.5338961.20577896l.0006632-.00066318.0226101.02261012a.80128317.80128317 0 0 1 .0105706.0105706l3.3619016 3.36190165c.1562097.15620972.4094757.15620972.5656855 0a.42598723.42598723 0 0 0 .0006944-.00069616L8.6678481.20650022l.0009529.0009482C8.8101657.07857935 8.9981733 0 9.2045341 0 9.6438578 0 10 .35614224 10 .79546595c0 .20495443-.077512.39180497-.2048207.53283641l.0003896.00038772-.0096728.00972053a.80044712.80044712 0 0 1-.0355483.03572341z" fill-rule="nonzero"></path>
                                                                        </svg></button></div>
                                                            </section>
                                                        </div>
                                                        <div class="shopee-mini-page-controller">
                                                            <div class="shopee-mini-page-controller__state"><span class="shopee-mini-page-controller__current">1</span>/<span class="shopee-mini-page-controller__total">7</span></div><button class="shopee-button-outline shopee-mini-page-controller__prev-btn shopee-button-outline--disabled" disabled=""><svg viewBox="0 0 7 11" class="shopee-svg-icon icon-arrow-left-small">
                                                                    <path d="M4.694078 9.8185598L.2870824 5.4331785c-.1957415-.1947815-.1965198-.511363-.0017382-.7071046a.50867033.50867033 0 0 1 .000868-.0008702L4.7381375.2732784 4.73885.273991c.1411545-.127878.3284279-.205779.5338961-.205779.4393237 0 .7954659.3561422.7954659.7954659 0 .2054682-.077901.3927416-.205779.5338961l.0006632.0006632-.0226101.0226101a.80174653.80174653 0 0 1-.0105706.0105706L2.4680138 4.7933195c-.1562097.1562097-.1562097.4094757 0 .5656855a.45579485.45579485 0 0 0 .0006962.0006944l3.3930018 3.3763607-.0009482.0009529c.128869.1413647.2074484.3293723.2074484.5357331 0 .4393237-.3561422.7954659-.7954659.7954659-.2049545 0-.391805-.077512-.5328365-.2048207l-.0003877.0003896-.0097205-.0096728a.80042023.80042023 0 0 1-.0357234-.0355483z" fill-rule="nonzero"></path>
                                                                </svg></button><button class="shopee-button-outline shopee-mini-page-controller__next-btn"><svg viewBox="0 0 7 11" class="shopee-svg-icon icon-arrow-right-small">
                                                                    <path d="M2.305922 9.81856l4.4069956-4.385381c.1957415-.194782.1965198-.511364.0017382-.707105a.26384055.26384055 0 0 0-.000868-.00087L2.2618625.273278 2.26115.273991C2.1199955.146113 1.9327221.068212 1.7272539.068212c-.4393237 0-.7954659.356142-.7954659.795466 0 .205468.077901.392741.205779.533896l-.0006632.000663.0226101.02261c.0034906.003557.0070143.00708.0105706.010571L4.5319862 4.79332c.1562097.156209.1562097.409475 0 .565685-.0002318.000232-.0004639.000463-.0006962.000694L1.1382882 8.73606l.0009482.000953c-.128869.141365-.2074484.329372-.2074484.535733 0 .439324.3561422.795466.7954659.795466.2049545 0 .391805-.077512.5328365-.204821l.0003877.00039.0097205-.009673c.012278-.011471.0241922-.023327.0357234-.035548z" fill-rule="nonzero"></path>
                                                                </svg></button>
                                                        </div>
                                                    </fieldset>
                                                    <div class="shop-search-result-view">
                                                        <div class="row">
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Bộ-box-phone-farm-đầy-đủ-box-phonefarm-lắp-cho-các-20-máy-điện-thoại-i.3709515.22049618821?sp_atk=94c84251-2748-4e4f-b299-8ade2e00ac5e&amp;xptdk=94c84251-2748-4e4f-b299-8ade2e00ac5e">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="_3vzxD8">
                                                                                        <div class="kciHnY"><span class="Nv7uAa">-25%</span></div>
                                                                                    </div>
                                                                                    <div class="LiYqE6">
                                                                                        <div aria-hidden="true"><svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="shopee-svg-icon _1+rirL icon-video-play2">
                                                                                                <path d="m10 20c5.5228 0 10-4.4772 10-10 0-5.5228-4.4772-10-10-10-5.5228 0-10 4.4772-10 10 0 5.5228 4.4772 10 10 10z" clip-rule="evenodd" fill-opacity=".5" fill-rule="evenodd"></path>
                                                                                                <path d="m7 6.1263c0-0.55798 0.4141-0.78618 0.91986-0.50718l6.6976 3.8599c0.506 0.27899 0.506 0.73534 0 1.0143l-6.6976 3.8876c-0.50603 0.279-0.91986 0.0508-0.91986-0.5072v-7.7474z" fill="#fff"></path>
                                                                                            </svg> </div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Bộ box phone farm đầy đủ , box phonefarm lắp cho các 20 máy điện thoại</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os HtOmnS giYDgR" aria-hidden="true">₫1.790.000</div>
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">1.339.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 25</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Bàn-di-chuột-chuyên-game-chống-nước-G-Net-size-30x70x0.4cm-di-cực-đã-I-Gaming-Mouse-Pad-GNet-Speed-i.3709515.2953795237?sp_atk=29713c8e-983c-480b-bf1a-76a3b26895e1&amp;xptdk=29713c8e-983c-480b-bf1a-76a3b26895e1">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Bàn di chuột chuyên game, chống nước G-Net size 30x70x0.4cm, di cực đã I Gaming Mouse Pad GNet Speed</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">69.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 1</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Pin-CMOS-Lắp-Cho-Mainboard-Máy-Tính-Để-Bàn-Bộ-Hub-Coolmoon-i.3709515.10602288260?sp_atk=99103ce4-2e95-46c0-a03f-fbab7315cd04&amp;xptdk=99103ce4-2e95-46c0-a03f-fbab7315cd04">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Pin CMOS Lắp Cho Mainboard Máy Tính Để Bàn / Bộ Hub Coolmoon</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">10.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 2</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Bàn-di-chuột-DAREU-ESP101-QUEEN-ESP100-BLACK-(350-x-300-x-5mm)-i.3709515.3045644509?sp_atk=dcb3f728-8a6e-4175-986a-4770e6e87c8f&amp;xptdk=dcb3f728-8a6e-4175-986a-4770e6e87c8f">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Bàn di chuột DAREU ESP101 QUEEN/ ESP100 BLACK (350 x 300 x 5mm)</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">75.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Mouse-Pad-bàn-di-chuột-lót-di-chuột-tích-hợp-Led-RGB-ROG-sáng-viền-kích-thước-80cm-x-30cm-dày-4mm-i.3709515.3388312847?sp_atk=ebc360de-b554-4d12-a85d-d94737180d9a&amp;xptdk=ebc360de-b554-4d12-a85d-d94737180d9a">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Mouse Pad, bàn di chuột, lót di chuột tích hợp Led RGB ROG sáng viền, kích thước 80cm x 30cm dày 4mm</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">210.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr">Đã bán 2</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Tai-nghe-chụp-tai-chơi-game-Qinlian-A6-tai-nghe-gaming-A6-dùng-cho-quán-nét-Hàng-chính-hãng-i.3709515.5533660978?sp_atk=03bacbbf-32b1-464a-9886-c31334e03dc2&amp;xptdk=03bacbbf-32b1-464a-9886-c31334e03dc2">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="LiYqE6">
                                                                                        <div aria-hidden="true"><svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="shopee-svg-icon _1+rirL icon-video-play2">
                                                                                                <path d="m10 20c5.5228 0 10-4.4772 10-10 0-5.5228-4.4772-10-10-10-5.5228 0-10 4.4772-10 10 0 5.5228 4.4772 10 10 10z" clip-rule="evenodd" fill-opacity=".5" fill-rule="evenodd"></path>
                                                                                                <path d="m7 6.1263c0-0.55798 0.4141-0.78618 0.91986-0.50718l6.6976 3.8599c0.506 0.27899 0.506 0.73534 0 1.0143l-6.6976 3.8876c-0.50603 0.279-0.91986 0.0508-0.91986-0.5072v-7.7474z" fill="#fff"></path>
                                                                                            </svg> </div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Tai nghe chụp tai chơi game Qinlian A6, tai nghe gaming A6 dùng cho quán nét - Hàng chính hãng</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">69.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 32</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Mouse-Pad-bàn-di-chuột-lót-di-chuột-tích-hợp-Led-RGB-sáng-viền-phiên-bản-Overlay-2-kích-thước-80cm-x-30cm-dày-4mm-i.3709515.5488228664?sp_atk=eded9182-2ce5-4db7-a2ec-17843e816173&amp;xptdk=eded9182-2ce5-4db7-a2ec-17843e816173">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Mouse Pad, bàn di chuột, lót di chuột tích hợp Led RGB sáng viền,phiên bản Overlay 2 kích thước 80cm x 30cm dày 4mm</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">189.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Ốp-tai-nghe-đa-năng-dùng-cho-tai-nghe-Wangming-8900-9600-9800-(Cặp)-i.3709515.9452241637?sp_atk=fff24700-8d78-4665-885a-8ac7a0e4c52b&amp;xptdk=fff24700-8d78-4665-885a-8ac7a0e4c52b">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Ốp tai nghe đa năng dùng cho tai nghe Wangming 8900, 9600, 9800 (Cặp)</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">30.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Mouse-Pad-bàn-di-chuột-lót-di-chuột-tích-hợp-Led-RGB-ROG-Version-2-sáng-viền-kích-thước-80cm-x-30cm-dày-4mm-i.3709515.10202289261?sp_atk=77a1ad7b-8b73-4a0a-8c67-52a473dfd396&amp;xptdk=77a1ad7b-8b73-4a0a-8c67-52a473dfd396">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Mouse Pad, bàn di chuột, lót di chuột tích hợp Led RGB ROG Version 2 sáng viền, kích thước 80cm x 30cm dày 4mm</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">210.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Bộ-Hub-Kết-Nối-Nguồn-Và-Điều-Khiển-Fan-Led-RGB-Coolmoon-Có-Led-Trên-Hub-Phiên-Bản-Mới-Nhất-i.3709515.10402288151?sp_atk=7c0774e7-d43b-40ff-ac8c-7a1466e8b51c&amp;xptdk=7c0774e7-d43b-40ff-ac8c-7a1466e8b51c">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Bộ Hub Kết Nối Nguồn Và Điều Khiển Fan Led RGB Coolmoon Có Led Trên Hub - Phiên Bản Mới Nhất</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">95.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Đĩa-trắng-CD-R-Maxell-700MB-có-vỏ-hàng-sản-xuất-Đài-Loan-(SL-1-cái)-i.3709515.2953804580?sp_atk=230ab001-6ecc-4b5c-b2f9-5c738ebf9e22&amp;xptdk=230ab001-6ecc-4b5c-b2f9-5c738ebf9e22">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Đĩa trắng CD-R Maxell 700MB có vỏ hàng sản xuất Đài Loan (SL: 1 cái)</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">15.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 0%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 15</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Bộ-Hub-Và-Remote-Coolmoon-Hỗ-trợ-Aura-Sync-Gigabyte-Fusion-Mystic-Light-Sync-Thay-Đổi-Hiệu-Ứng-Theo-Nhạc-i.3709515.10402288176?sp_atk=70d576b8-26ba-4361-8217-d4d9093392ea&amp;xptdk=70d576b8-26ba-4361-8217-d4d9093392ea">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Bộ Hub Và Remote Coolmoon, Hỗ trợ Aura Sync, Gigabyte Fusion, Mystic Light Sync - Thay Đổi Hiệu Ứng Theo Nhạc</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">120.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 3</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Chuột-văn-phòng-không-dây-DAREU-LM115G-Pink-Black-White-Hàng-chính-hãng-i.3709515.18783206752?sp_atk=7679209b-ef38-45d1-95a8-4fe385d8194a&amp;xptdk=7679209b-ef38-45d1-95a8-4fe385d8194a">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="_3vzxD8">
                                                                                        <div class="kciHnY"><span class="Nv7uAa">-24%</span></div>
                                                                                    </div>
                                                                                    <div class="LiYqE6">
                                                                                        <div aria-hidden="true"><svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="shopee-svg-icon _1+rirL icon-video-play2">
                                                                                                <path d="m10 20c5.5228 0 10-4.4772 10-10 0-5.5228-4.4772-10-10-10-5.5228 0-10 4.4772-10 10 0 5.5228 4.4772 10 10 10z" clip-rule="evenodd" fill-opacity=".5" fill-rule="evenodd"></path>
                                                                                                <path d="m7 6.1263c0-0.55798 0.4141-0.78618 0.91986-0.50718l6.6976 3.8599c0.506 0.27899 0.506 0.73534 0 1.0143l-6.6976 3.8876c-0.50603 0.279-0.91986 0.0508-0.91986-0.5072v-7.7474z" fill="#fff"></path>
                                                                                            </svg> </div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Chuột văn phòng không dây DAREU LM115G Pink / Black / White - Hàng chính hãng</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os HtOmnS giYDgR" aria-hidden="true">₫149.000</div>
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">113.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Đĩa-trắng-CD-R-NEO-700MB-(Số-lượng-1-chiếc)-i.3709515.9952245654?sp_atk=b31a0c33-9467-4def-92bb-4a04e8f29cda&amp;xptdk=b31a0c33-9467-4def-92bb-4a04e8f29cda">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Đĩa trắng CD-R NEO 700MB (Số lượng 1 chiếc)</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">5.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Microphone-Thronmax-Mdrill-Zero-M4-Jet-Black-i.3709515.9552235666?sp_atk=03fab2ff-6517-4de4-8551-30fc4aff8333&amp;xptdk=03fab2ff-6517-4de4-8551-30fc4aff8333">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Microphone Thronmax Mdrill Zero M4 Jet Black</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">1.380.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Quạt-Tản-Nhiệt-Fan-CPU-Coolmoon-UFO-X-Led-RGB-Tự-Động-Đổi-Màu-Và-Hiệu-Ứng-i.3709515.10602288200?sp_atk=a29d46c6-be96-4b8c-b303-fe698180faff&amp;xptdk=a29d46c6-be96-4b8c-b303-fe698180faff">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Quạt Tản Nhiệt, Fan CPU Coolmoon UFO X Led RGB - Tự Động Đổi Màu Và Hiệu Ứng</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">110.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 1</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Quạt-Tản-Nhiệt-Fan-Case-Coolmoon-V2-Led-RGB-2-Vòng-Ring-Không-Cần-Hub-i.3709515.4042047728?sp_atk=eda1c8d4-af9d-4e20-bedd-182500beb415&amp;xptdk=eda1c8d4-af9d-4e20-bedd-182500beb415">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Quạt Tản Nhiệt, Fan Case Coolmoon V2 Led RGB 2 Vòng Ring - Không Cần Hub</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">44.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 15</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Ốp-tai-nghe-quylin-A6-A7-(-1-đôi)-i.3709515.9952223752?sp_atk=1045f722-5cef-4f6d-84a2-e2229f4bbe48&amp;xptdk=1045f722-5cef-4f6d-84a2-e2229f4bbe48">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Ốp tai nghe quylin A6,A7 ( 1 đôi)</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">13.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 28</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Tai-nghe-Game-Thủ-có-Mic-Wang-Ming-8900L-Chuyên-game-có-Led-I-Gaming-Headphone-WangMing-8900L-LED-i.3709515.3588313434?sp_atk=9b58ba95-de11-44c3-8512-b52ab761b276&amp;xptdk=9b58ba95-de11-44c3-8512-b52ab761b276">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Tai nghe Game Thủ, có Mic, Wang Ming 8900L Chuyên game có Led I Gaming Headphone WangMing 8900L LED</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">179.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 0%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 0%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 0%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 0%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 3</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Tai-nghe-chụp-tai-chơi-game-có-dây-Wangming-8900-headphone-chụp-tai-gaming-Wangming-8900-Hàng-chính-hãng-i.3709515.9352241590?sp_atk=99d46165-493f-400c-8563-cb2234010af3&amp;xptdk=99d46165-493f-400c-8563-cb2234010af3">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Tai nghe chụp tai chơi game có dây Wangming 8900, headphone chụp tai gaming Wangming 8900 - Hàng chính hãng</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">185.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 5</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Lót-chuột-Bàn-di-chuột-Pad-chuột-E-Dra-EMP903-EMP904-Lạc-Hồng-(Hàng-chính-hãng)-i.3709515.16959792558?sp_atk=f9fcead7-cb57-40fb-be21-f191d10f2706&amp;xptdk=f9fcead7-cb57-40fb-be21-f191d10f2706">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Lót chuột / Bàn di chuột / Pad chuột E-Dra EMP903 / EMP904 Lạc Hồng (Hàng chính hãng)</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">129.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Miếng-đệm-ốp-tai-nghe-Dareu-i.3709515.3743818523?sp_atk=b7f807a2-9b31-4b5a-9c37-f97896dbea41&amp;xptdk=b7f807a2-9b31-4b5a-9c37-f97896dbea41">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Miếng đệm ốp tai nghe Dareu</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">35.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 33.3333%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 16</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Bàn-gaming-E-Dra-Z-Tank-V3-chính-hãng-Bảo-hành-12-tháng-i.3709515.16359797115?sp_atk=a768a28c-cff2-4c6b-bde7-07ad2628b68f&amp;xptdk=a768a28c-cff2-4c6b-bde7-07ad2628b68f">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Bàn gaming E-Dra Z Tank V3 chính hãng - Bảo hành 12 tháng</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">1.090.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Bàn-Phím-Cơ-EDRA-EK312-Hồng-Trắng-Đen-LED-Rainbow-(Blue-brown-Red-E-Dra-switch-)-i.3709515.16659791409?sp_atk=e1a4c694-80db-4e96-b35e-1debdab3c1e7&amp;xptdk=e1a4c694-80db-4e96-b35e-1debdab3c1e7">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Bàn Phím Cơ EDRA EK312 Hồng / Trắng / Đen LED Rainbow (Blue , brown , Red E-Dra switch )</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">699.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 6</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Quạt-Tản-Nhiệt-Fan-Led-RGB-Coolmoon-X2-16-Triệu-Màu-366-Hiệu-Ứng-Đồng-Bộ-Hub-i.3709515.10402288233?sp_atk=77981f06-bd40-49bd-9378-638e026dfbb8&amp;xptdk=77981f06-bd40-49bd-9378-638e026dfbb8">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Quạt Tản Nhiệt, Fan Led RGB Coolmoon X2, 16 Triệu Màu, 366 Hiệu Ứng - Đồng Bộ Hub</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">85.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 4</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Giá-treo-tai-nghe-E-Dra-EHS01-Được-làm-bằng-kim-loại-nguyên-khối-Nặng-1-5kg-Cam-kết-chính-hãng-i.3709515.10102285741?sp_atk=8d40df40-92b5-49a2-abd8-24506d14ea17&amp;xptdk=8d40df40-92b5-49a2-abd8-24506d14ea17">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Giá treo tai nghe E-Dra EHS01 - Được làm bằng kim loại nguyên khối - Nặng 1,5kg - Cam kết chính hãng</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">250.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr">Đã bán 1</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/-Thanh-lý-bỏ-mẫu-Quạt-tản-nhiệt-Fan-case-RGB-Led-sáng-viền-cắm-trực-tiếp-không-cần-Hub-i.3709515.2953801857?sp_atk=56d7cb0a-ef59-49ce-8488-305b15e63ff5&amp;xptdk=56d7cb0a-ef59-49ce-8488-305b15e63ff5">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">[Thanh lý bỏ mẫu] Quạt tản nhiệt, Fan case RGB, Led sáng viền, cắm trực tiếp không cần Hub</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">39.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 1</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Đĩa-trắng-CD-R-Maxell-700MB-xuất-xứ-China-và-Đài-Loan-(SL-1-cái)-i.3709515.2953804487?sp_atk=73744095-6b0c-4fbd-a41a-5ac6ab3212ee&amp;xptdk=73744095-6b0c-4fbd-a41a-5ac6ab3212ee">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Đĩa trắng CD-R Maxell 700MB xuất xứ China và Đài Loan (SL: 1 cái)</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">5.500</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Tai-nghe-chụp-tai-chơi-game-có-dây-Wangming-9600-headphone-chụp-tai-gaming-Wangming-9600-Hàng-chính-hãng-i.3709515.18293685950?sp_atk=785a3708-2a8e-43ea-bfcb-d605e0f8cc87&amp;xptdk=785a3708-2a8e-43ea-bfcb-d605e0f8cc87">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Tai nghe chụp tai chơi game có dây Wangming 9600, headphone chụp tai gaming Wangming 9600 - Hàng chính hãng</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">290.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating"></div>
                                                                                    <div class="_2VNMCr"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            <div class="shop-search-result-view__item col-xs-2-4"><a data-sqe="link" href="/Quạt-Tản-Nhiệt-Fan-Led-RGB-Coolmoon-X-Plus-Đồng-Bộ-Hub-i.3709515.3688312450?sp_atk=f856d293-bb29-47be-919a-52b3983c6ce9&amp;xptdk=f856d293-bb29-47be-919a-52b3983c6ce9">
                                                                    <div class="k+FIyK">
                                                                        <div class="MLk4IP">
                                                                            <div style="pointer-events: none;">
                                                                                <div class="KaU4az _083352"><img class="HWfRmU ux9rCA">
                                                                                    <div class="wAQWvG">
                                                                                        <div class="shopee-image-placeholder"><svg enable-background="new 0 0 54 61" viewBox="0 0 54 61" role="img" class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                                                                                <path stroke="none" d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                    <div class="bxnDSn">
                                                                                        <div class="customized-overlay-image"><img alt="overlay image" src="https://down-vn.img.susercontent.com/file/vn-50009109-ff0b3cc0cfa955212d76b58349713387" width="" height=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="BnjBdc">
                                                                                <div class="wGBjtA" data-sqe="name">
                                                                                    <div class="_5Z7GUX">
                                                                                        <div aria-hidden="true" class="Od5Z3o _2sze40 XwV4kb">Quạt Tản Nhiệt, Fan Led RGB Coolmoon X Plus - Đồng Bộ Hub</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="eQZeWo">
                                                                                    <div class="_4m2-Os e5pdAI"><span aria-label="current price"></span><span class="_6czwxx">₫</span><span class="MQbiLE">75.000</span></div>
                                                                                </div>
                                                                                <div class="_3ZeHP-">
                                                                                    <div class="n4HTgY" data-sqe="rating">
                                                                                        <div class="shopee-rating-stars">
                                                                                            <div class="shopee-rating-stars__stars">
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="shopee-rating-stars__star-wrapper">
                                                                                                    <div class="shopee-rating-stars__lit" style="width: 100%;"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__gold-star icon-rating-solid">
                                                                                                            <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                        </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon shopee-rating-stars__dark-star icon-rating-solid">
                                                                                                        <polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_2VNMCr _8zpprh">Đã bán 11</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                    <div class="shopee-page-controller"><button class="shopee-icon-button shopee-icon-button--left "><svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-left">
                                                                <g>
                                                                    <path d="m8.5 11c-.1 0-.2 0-.3-.1l-6-5c-.1-.1-.2-.3-.2-.4s.1-.3.2-.4l6-5c .2-.2.5-.1.7.1s.1.5-.1.7l-5.5 4.6 5.5 4.6c.2.2.2.5.1.7-.1.1-.3.2-.4.2z"></path>
                                                                </g>
                                                            </svg></button><button class="shopee-button-solid shopee-button-solid--primary">1</button><button class="shopee-button-no-outline">2</button><button class="shopee-button-no-outline">3</button><button class="shopee-button-no-outline">4</button><button class="shopee-button-no-outline">5</button><button class="shopee-button-no-outline shopee-button-no-outline--non-click">...</button><button class="shopee-icon-button shopee-icon-button--right "><svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-right">
                                                                <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                                            </svg></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

@endsection
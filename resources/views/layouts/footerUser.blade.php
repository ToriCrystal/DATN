<footer id="tg-footer" class="tg-footer tg-haslayout">
    <div class="tg-footerarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="tg-clientservices">
                        <li class="tg-devlivery">
                            <span class="tg-clientserviceicon"><i class="icon-rocket"></i></span>
                            <div class="tg-titlesubtitle">
                                <h4 style="font-size: 120%">Chuyển Phát Nhanh
                                </h4>
                                <p>Vận chuyển đa quốc gia</p>
                            </div>
                        </li>
                        <li class="tg-discount">
                            <span class="tg-clientserviceicon"><i class="icon-tag"></i></span>
                            <div class="tg-titlesubtitle">
                                <h4 style="font-size: 120%">Thẻ khuyến mãi
                                </h4>
                                <p>Cung cấp chiết khấu mở

                                </p>
                            </div>
                        </li>
                        <li class="tg-quality">
                            <span class="tg-clientserviceicon"><i class="icon-leaf"></i></span>
                            <div class="tg-titlesubtitle">
                                <h4 style="font-size: 120%">Chất lượng
                                </h4>
                                <p>Quan tâm tới chất lượng</p>
                            </div>
                        </li>
                        <li class="tg-support">
                            <span class="tg-clientserviceicon"><i class="icon-heart"></i></span>
                            <div class="tg-titlesubtitle">
                                <h4 style="font-size: 120%">Hỗ trợ 24/7
                                </h4>
                                <p>Phục vụ mọi khoảnh khắc

                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tg-threecolumns">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-footercol">
                            <strong class="tg-logo"><a href="javascript:void(0);"><img src="/images/flogo.png"
                                        alt="image description"></a></strong>
                            <ul class="tg-contactinfo">
                                <li>
                                    <i class="icon-apartment"></i>
                                    <address>FPT Polytechnic Hồ Chí Minh
                                    </address>
                                </li>
                                <li>
                                    <i class="icon-phone-handset"></i>
                                    <span>
                                        <em>+84 123 456 789</em>
                                        <em>+84 456 423 321</em>
                                    </span>
                                </li>
                                <li>
                                    <i class="icon-clock"></i>
                                    <span>Phục vụ từ 9h - 21h trong tuần</span>
                                </li>
                                <li>
                                    <i class="icon-envelope"></i>
                                    <span>
                                        <em><a href="mailto:cffbook@gmail.com">cffbook@gmail.com</a></em>
                                        <em><a href="mailto:info@domain.com">info@cff.com</a></em>
                                    </span>
                                </li>
                            </ul>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook"><a href="https://www.facebook.com/"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="tg-twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="tg-linkedin"><a href="https://www.linkedin.com/"><i
                                            class="fa fa-linkedin"></i></a></li>
                                <li class="tg-googleplus"><a href="https://www.google.com/"><i
                                            class="fa fa-google-plus"></i></a></li>
                                <li class="tg-rss"><a href="https://rss.com/"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-footercol tg-widget tg-widgetnavigation">
                            <div class="tg-widgettitle">
                                <h3>Thông Tin Và Trợ Giúp
                                </h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <ul>
                                    <li><a href="/term-of-use">Điều khoản sử dụng</a></li>
                                    <li><a href="/contact">Liên hệ</a></li>
                                    <li><a href="/vision-mission">Tầm nhìn &amp; Mục tiêu</a></li>
                                </ul>
                                <ul>
                                    <li><a href="/promotional">Sách khuyến mãi</a></li>
                                    <li><a href="/askanswer">Các câu hỏi thường gặp</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="tg-footercol tg-widget tg-widgettopsellingauthors">
                            <div class="tg-widgettitle">
                                <h3>Top tác giả
                                </h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <ul>
                                    @foreach ($topAuthors as $author)
                                        <li>
                                            <figure>
                                                <a href="" style="width: 75px;">
                                                    <img src="{{ $author->author_img_cloudinary }}"
                                                        alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-authornamebooks">
                                                <h4>
                                                    <a href="{{ route('author', ['author_id' => $author->id]) }}">
                                                        {{ $author->author_name }}
                                                    </a>
                                                </h4>
                                                <p>{{ $author->products_count }} tác phẩm</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tg-footerbar">
        <a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i class="icon-chevron-up"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <span class="tg-paymenttype"><img src="/images/paymenticon.png" alt="image description"></span>
                    <span class="tg-copyright">2023 All Rights Reserved By &copy; CFF</span>
                </div>
            </div>
        </div>
    </div>
</footer>

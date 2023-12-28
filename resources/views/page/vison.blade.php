@extends('layouts.layoutUser')


@section('title')
    Tầm nhìn & mục tiêu
@endsection

@section('noidung')
    <style>
        h2 {
            color: #333;
            font-size: 20px;
        }

        article {
            margin-bottom: 20px;
        }
    </style>
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
        <!--************************************
                                                                                                                Author Detail Start
                                                                                                        *************************************-->
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="text-center">Tầm nhìn & mục tiêu</h1>

                        <section id="tamdinh">
                            <h2 style="font-weight: bold; font-size: 22px">Tầm Nhìn</h2>
                            <p>
                                Chúng tôi mơ ước xây dựng một cộng đồng đọc giả đa dạng, nơi mà sự tò mò được thúc đẩy, và
                                mọi người có thể khám phá sự phong phú của thế giới thông qua những trang sách. Tầm nhìn của
                                chúng tôi là trở thành điểm đến chính cho những người yêu sách, nơi họ có thể chia sẻ, thảo
                                luận, và tìm kiếm kiến thức.
                            </p>
                        </section>
                        <hr>
                        <section id="muctieu">
                            <h2 style="font-weight: bold; font-size: 22px">Mục tiêu</h2>
                            <p>
                                Mục tiêu của chúng tôi là tạo ra một môi trường trực tuyến thân thiện, nơi mà đam mê về văn
                                hóa đọc được khích lệ và lan tỏa. Chúng tôi cam kết cung cấp một bộ sưu tập sách đa dạng và
                                phong phú, từ những tác phẩm kinh điển đến những xu hướng mới nhất, để đáp ứng đa dạng sở
                                thích và nhu cầu của độc giả.
                            </p>
                            <p>
                                Ngoài ra, chúng tôi luôn nỗ lực để cung cấp trải nghiệm mua sắm trực tuyến thuận lợi và tin
                                cậy nhất, đồng thời hỗ trợ cộng đồng thông qua các chương trình khuyến mãi, sự kiện, và chia
                                sẻ thông tin hữu ích về sách và đọc sách.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                                                                                                                Author Detail End
                                                                                                        *************************************-->
    </main>
@endsection

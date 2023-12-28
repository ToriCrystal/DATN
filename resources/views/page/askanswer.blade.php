@extends('layouts.layoutUser')


@section('title')
    Các câu hỏi thường gặp
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
                        <h1 class="text-center">Các câu hỏi thường gặp</h1>
                        <br>
                        <h2>1. Làm thế nào để đặt một đơn hàng trên trang web của bạn?</h2>
                        <article>
                            <p>Để đặt đơn hàng, bạn chỉ cần chọn sản phẩm mong muốn, thêm vào giỏ hàng, và làm theo bước
                                thanh toán.</p>
                        </article>

                        <h2>2. Các phương thức thanh toán nào được chấp nhận trên trang web của bạn?</h2>
                        <article>
                            <p>Chúng tôi chấp nhận thanh toán thông qua thẻ tín dụng, chuyển khoản ngân hàng và các dịch vụ
                                thanh toán trực tuyến phổ biến.</p>
                        </article>

                        <h2>3. Làm cách nào để kiểm tra tình trạng đơn hàng của tôi?</h2>
                        <article>
                            <p>Bạn có thể kiểm tra tình trạng đơn hàng bằng cách đăng nhập vào tài khoản và truy cập mục
                                "Lịch sử Đơn hàng".</p>
                        </article>

                        <h2>4. Bạn có chính sách vận chuyển gì cho đơn hàng của tôi?</h2>
                        <article>
                            <p>Chúng tôi cung cấp dịch vụ giao hàng nhanh và chính sách vận chuyển miễn phí cho đơn hàng với
                                giá trị nhất định.</p>
                        </article>

                        <h2>5. Làm sao để theo dõi vận chuyển của đơn hàng?</h2>
                        <article>
                            <p>Khi đơn hàng được vận chuyển, bạn sẽ nhận được một email xác nhận với thông tin theo dõi để
                                theo dõi quá trình giao hàng.</p>
                        </article>

                        <h2>6. Tôi có thể đổi hoặc trả sản phẩm không?</h2>
                        <article>
                            <p>Có, chúng tôi chấp nhận đổi hoặc trả sản phẩm trong khoảng thời gian nhất định. Để biết thêm
                                thông tin, xem Chính sách Đổi trả của chúng tôi.</p>
                        </article>
                        <h2>7. Làm thế nào để đánh giá và viết nhận xét về một sản phẩm?</h2>
                        <article>
                            <p>Sau khi mua hàng, bạn có thể truy cập trang sản phẩm và để lại đánh giá và nhận xét.</p>
                        </article>

                        <h2>8. Làm cách nào để tôi đổi địa chỉ giao hàng sau khi đã đặt đơn hàng?</h2>
                        <article>
                            <p>Liên hệ với chúng tôi qua trang Liên hệ hoặc Dịch vụ Khách hàng để cập nhật thông tin giao
                                hàng của bạn.</p>
                        </article>

                        <h2>9. Có ưu đãi giảm giá nào đang diễn ra tại thời điểm này không?</h2>
                        <article>
                            <p>Kiểm tra trang Chương trình Khuyến mãi để cập nhật các ưu đãi và mã giảm giá hiện đang diễn
                                ra.</p>
                        </article>

                        <h2>10. Làm thế nào để tôi cập nhật thông tin tài khoản của mình?</h2>
                        <article>
                            <p>Đăng nhập vào tài khoản và chọn mục "Thông tin Cá nhân" để cập nhật thông tin của bạn.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                                                                                                            Author Detail End
                                                                                                    *************************************-->
    </main>
@endsection

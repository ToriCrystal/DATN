@extends('layouts.layoutUser')


@section('title')
    Điều khoản sử dụng
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
                    <div class="tg-contactus">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <h2><span>Xin chào!</span>Điều khoản sử dụng
                                </h2>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <p>1. <strong>Chấp Nhận Điều Khoản</strong></p>
                            <p>Bằng cách truy cập và sử dụng trang web này, bạn đồng ý tuân thủ các điều khoản
                                và điều kiện sau đây cùng với tất cả các luật lệ và quy định liên quan. Nếu bạn
                                không đồng ý với bất kỳ phần nào của các điều khoản này, vui lòng không sử dụng
                                trang web.</p>

                            <p>2. <strong>Bản Quyền</strong></p>
                            <p>Tất cả nội dung trên trang web này, bao gồm nhưng không giới hạn các văn bản,
                                hình ảnh, đồ họa, biểu tượng, và video, là tài sản của chúng tôi hoặc các đối
                                tác của chúng tôi và được bảo vệ bởi luật bản quyền. Bạn không được sao chép,
                                sửa đổi, phân phối, tái tạo hoặc sử dụng bất kỳ nội dung nào trên trang web này
                                mà không có sự cho phép bằng văn bản từ chúng tôi.</p>

                            <p>3. <strong>Thông Tin Khách Hàng</strong></p>
                            <p>Chúng tôi cam kết bảo vệ thông tin cá nhân của bạn. Khi bạn đăng ký hoặc mua sắm
                                trên trang web, chúng tôi sẽ thu thập một số thông tin cá nhân nhất định. Xem
                                chi tiết chính sách quyền riêng tư để biết thêm thông tin về cách chúng tôi thu
                                thập, sử dụng và bảo vệ thông tin cá nhân của bạn.</p>

                            <p>4. <strong>Mua Sắm Và Thanh Toán</strong></p>
                            <p>Khi bạn mua sách trên trang web của chúng tôi, bạn cam kết cung cấp thông tin
                                thanh toán chính xác và đầy đủ. Chúng tôi sử dụng các dịch vụ thanh toán an toàn
                                để đảm bảo giao dịch của bạn được xử lý một cách an toàn và bảo mật.</p>

                            <p>5. <strong>Quyền Lợi Và Trách Nhiệm</strong></p>
                            <p>Chúng tôi cam kết cung cấp sách với chất lượng tốt nhất và đáp ứng nhanh chóng
                                đối với mọi vấn đề phát sinh từ phía khách hàng. Tuy nhiên, chúng tôi không chịu
                                trách nhiệm đối với mất mát hoặc thiệt hại phát sinh từ việc sử dụng trang web
                                hoặc từ việc mua sắm sách trực tuyến.</p>

                            <p>6. <strong>Thay Đổi Điều Khoản</strong></p>
                            <p>Chúng tôi có quyền cập nhật hoặc thay đổi bất kỳ phần nào của các điều khoản này
                                mà không cần thông báo trước. Việc tiếp tục sử dụng trang web sau khi các thay
                                đổi có hiệu lực đồng nghĩa với việc bạn chấp nhận và tuân thủ các điều khoản
                                mới.</p>

                            <p>7. <strong>Liên Hệ</strong></p>
                            <p>Nếu bạn có bất kỳ câu hỏi hoặc ý kiến đối với các điều khoản sử dụng này, vui
                                lòng liên hệ chúng tôi qua email: <a
                                    href="mailto:cffbook@gmail.com">cffbook@gmail.com</a>.</p>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    
    </main>
@endsection

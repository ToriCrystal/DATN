@extends('layouts.layoutUser')

@section('title')
    Liên hệ
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
        <!--************************************
                                                                                                        Contact Us Start
                                                                                                *************************************-->
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-contactus">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <h2><span>Xin chào!</span>Liên Hệ Với Chúng Tôi
                                </h2>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img src="https://cafeandbooks.files.wordpress.com/2015/07/dscn4570.jpg" alt=""
                                srcset="">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <form id="contactForm" class="tg-formtheme tg-formcontactus"
                                action="{{ route('contactSubmit') }}" method="post">

                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label for="name">Họ và tên:</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Họ và tên"
                                            value="{{ auth()->check() ? auth()->user()->name : '' }}">
                                        <small></small>

                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email" value="{{ auth()->check() ? auth()->user()->email : '' }}">
                                        <small></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="subject">Chủ đề:</label>
                                        <select name="subject" id="subject" class="form-control">
                                            <option value="Đơn hàng">Đơn hàng</option>
                                            <option value="Sản phẩm">Sản phẩm</option>
                                            <option value="Dịch vụ">Dịch vụ</option>
                                            <option value="Chương trình khuyến mãi">Chương trình khuyến mãi</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                        <small></small>
                                    </div>


                                    <div class="form-group tg-hastextarea">
                                        <label for="comment">Nội dung:</label>
                                        <textarea name="comment" id="comment" placeholder="Nội dung"></textarea>
                                        <small></small>

                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="tg-btn tg-active">Gửi</button>
                                    </div>
                                </fieldset>
                            </form>

                            <div class="tg-contactdetail">
                                <div class="tg-sectionhead">
                                    <h2>Liên Hệ Với Chúng Tôi</h2>
                                </div>
                                <ul class="tg-contactinfo">
                                    <li>
                                        <i class="icon-apartment"></i>
                                        <address>Suit # 07, Rose world Building, Street # 02, AT246T Manchester</address>
                                    </li>
                                    <li>
                                        <i class="icon-phone-handset"></i>
                                        <span>
                                            <em>0800 12345 - 678 - 89</em>
                                            <em>+4 1234 - 4567 - 67</em>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i>
                                        <span> Phục vụ từ 9h - 21h trong tuần</span>
                                    </li>
                                    <li>
                                        <i class="icon-envelope"></i>
                                        <span>
                                            <em><a href="mailto:cffbook@gmail.com">cffbook@gmail.com</a></em>
                                            <em><a href="mailto:info@domain.com">info@domain.com</a></em>
                                        </span>
                                    </li>
                                </ul>
                                <ul class="tg-socialicons">
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="tg-googleplus"><a href="javascript:void(0);"><i
                                                class="fa fa-google-plus"></i></a></li>
                                    <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var contactForm = document.getElementById('contactForm');

            contactForm.addEventListener('submit', function(event) {
                event.preventDefault();

                // Perform form submission using AJAX
                fetch(contactForm.action, {
                        method: 'POST',
                        body: new FormData(contactForm),
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Check if the submission was successful
                        if (data.success) {
                            // Show SweetAlert on success
                            Swal.fire({
                                icon: 'success',
                                title: 'Gửi thành công!',
                                text: 'Ý kiến của bạn đã được gửi.',
                            });

                            // Reset the form if needed
                            contactForm.reset();
                        }
                    })
                    .catch(error => {
                        // Handle errors if necessary
                        console.error('Error:', error);
                    });
            });
        });
    </script>

    <script src="/js/contact.js"></script>
@endsection

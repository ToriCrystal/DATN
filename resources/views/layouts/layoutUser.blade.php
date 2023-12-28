<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book Library - @yield('title')</title>
    <meta name="description" content="">
    <link rel="icon"
        href="https://png.pngtree.com/png-vector/20221019/ourlarge/pngtree-education-icon-an-open-book-with-a-bookmark-or-notebook-vector-png-image_15053878.jpg"
        type="image/x-icon">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- Thêm link CSS của Bootstrap -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/transitions.css">
    <link rel="stylesheet" href="/css/cart.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/main.css?v={{rand()}}">
    <link rel="stylesheet" href="/css/color-purple.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DKCNVS6VJK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DKCNVS6VJK');
</script>
</head>

<style>
    .collapse {
        visibility: visible;
    }

    .loader {
        position: fixed;
        top: 0;
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f7f9fb;
        transition: opacity 0.75s, visibility 0.75s, filter 0.75s;
        z-index: 9999;
        opacity: 1;
        visibility: visible;
        backdrop-filter: blur(5px);
        /* Add blur effect to the entire loader background */
    }

    .loader-hidden {
        opacity: 0;
        visibility: hidden;
        filter: blur(0px);
        /* Remove blur effect */
    }

    .loader::after {
        content: "";
        width: 75px;
        height: 75px;

        border: 15px solid #dddddd;
        border-top-color: #766DF4;
        border-radius: 50%;
        animation: loading 1.5s infinite linear;
        backdrop-filter: blur(5px);
    }

    @keyframes loading {
        form {
            transform: rotate(0turn);
        }

        to {
            transform: rotate(1turn);
        }
    }
</style>



{{--  --}}

<body class="tg-home tg-homevtwo">
    <div class="loader"></div>
    @php
        $mainEvent = App\Models\Event::where('start_date', '<=', Carbon\Carbon::now())
            ->where('end_date', '>=', Carbon\Carbon::now())
            ->orderBy('priority', 'desc')
            ->orderBy('start_date', 'desc')
            ->first();
    @endphp
    @if (!is_null($mainEvent))
        @php
            $themeColor = json_encode(json_decode($mainEvent->attributes)->colorEvent);
            $themeColor = htmlspecialchars_decode($themeColor);
        @endphp
        <style>
            a,
            p a,
            p a:hover,
            a:hover,
            a:focus,
            a:active,
            .tg-stars span:after,
            .tg-textbox h3 span,
            .tg-bookprice ins,
            .tg-newsletter h4,
            .tg-404errorcontent span,
            .tg-widget ul li:hover a,
            .tg-widget ul li a:hover,
            .tg-widget ul li:hover a span,
            .tg-widget ul li:hover a em,
            .tg-relatedbooks .tg-postbook .tg-bookprice ins {
                color: <?=str_replace('"', '', $themeColor) ?>;
            }

            .tg-btn:hover,
            .tg-btn.tg-active,
            .tg-navigationarea,
            .owl-prev:hover,
            .owl-next:hover,
            .tg-testimonial figure:before,
            .tg-headervtwo .tg-formsearch fieldset button,
            .tg-homeslidervtwo .tg-slidercontent .tg-btns .tg-btn:hover,
            .tg-homeslidervtwo .tg-slidercontent .tg-btns .tg-btn.tg-active,
            .tg-breadcrumb,
            #seconds,
            .tg-quantityholder .minus:hover,
            .tg-quantityholder .plus:hover,
            .tg-themetabs li a:before,
            .tg-tag:hover,
            .tg-btnreply:hover {
                background: <?=str_replace('"', '', $themeColor) ?>;
            }

            textarea:focus,
            .tg-btn:hover,
            .tg-btn.tg-active,
            input:focus,
            .select select:focus,
            .form-control:focus,
            .tg-themedropdownmenu,
            .owl-prev:hover,
            .owl-next:hover,
            .tg-pickedbyauthor .tg-postbook:hover,
            .tg-testimonial figure img,
            .tg-footer,
            .tg-quantityholder .minus:hover,
            .tg-quantityholder .plus:hover,
            .tg-tag:hover,
            .tg-comments li .tg-authorbox:hover,
            .tg-comments li .tg-authorbox:hover .tg-bottomarrow,
            .tg-btnreply:hover {
                border-color: <?=str_replace('"', '', $themeColor) ?>;
            }

            .tg-pickedbyauthor .tg-postbook .tg-bookimg:before {
                background: <?=str_replace('"', '', $themeColor) ?>ed;
            }
        </style>
    @endif

    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        @include('layouts.menuUser')
        @if (session('success'))
            <script>
                alert('{{ session('success') }}');
            </script>
        @endif

        @if (session('info'))
            <script>
                alert('{{ session('info') }}');
            </script>
        @endif

        @if (session('error'))
            <script>
                alert('{{ session('error') }}');
            </script>
        @endif


        <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
            @yield('noidung')
        </div>
        @include('layouts.footerUser')


        <!--================ End footer Area  =================-->
        <script src="/js/vendor/jquery-library.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/jquery.vide.min.js"></script>
        <script src="/js/countdown.js"></script>
        <script src="/js/jquery-ui.js"></script>
        <script src="/js/parallax.js"></script>
        <script src="/js/countTo.js"></script>
        <script src="/js/appear.js"></script>
        <script src="/js/gmap3.js"></script>
        <script src="/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


        
</body>

<script>
    window.addEventListener("load", () => {
        const loader = document.querySelector(".loader");
        loader.classList.add("loader-hidden");
        loader.addEventListener("transitionend", () => {
            document.body.removeChild(loader);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const addToCartButtons = document.querySelectorAll('.btn-add-to-cart');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                const productId = this.getAttribute('data-product-id');
                const route = this.getAttribute('data-route');

                addToCart(productId, route);
            });
        });

        function addToCart(productId, route) {
            $.ajax({
                url: `/add-to-cart/${productId}`,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    // Handle success
                    showSuccessNotification(response.message);
                    updateCartDisplay(response.cart); // Update cart display
                },
                error: function(error) {
                    // Handle error
                    showErrorNotification('Failed to add to cart');
                }
            });


            function showSuccessNotification(message) {
                Swal.fire({
                    icon: 'success',
                    title: 'Thành công!',
                    text: message,
                    showConfirmButton: false,
                    timer: 1500
                });
            }

            function showErrorNotification(message) {
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: message,
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }

    });


    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.tg-btnaddtowishlist').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();
                addToWishlist(element);
            });
        });

        function addToWishlist(element) {
            let userId = element.getAttribute('data-user-id');
            let productId = element.getAttribute('data-product-id');

            axios.post('{{ route('add-to-wishlist') }}', {
                    user_id: userId,
                    product_id: productId
                })
                .then(function(response) {
                    console.log('Server Response:', response.data);

                    if (response.status === 200 && response.data.status === 'success') {
                        Swal.fire('Thành công', response.data.message, 'success');
                        updateWishlistContainer(response.data.wishlistHTML);
                    } else if (response.data.status === 'info') {
                        if (response.data.message.includes('đăng nhập')) {
                            // Handle login-related message
                            Swal.fire('Lỗi', response.data.message, 'error');
                        } else {
                            Swal.fire('Thông báo', response.data.message, 'info');
                        }
                    } else {
                        Swal.fire('Lỗi', response.data.message, 'error');
                    }
                })
                .catch(function(error) {
                    console.error('Error:', error);
                    Swal.fire('Lỗi', 'Đăng nhập để thêm sản phẩm vào yêu thích!', 'error');
                });
        }

        function updateWishlistContainer(newHTML) {
            let wishlistContainer = document.getElementById('wishlist-container');
            if (wishlistContainer) {
                wishlistContainer.innerHTML = newHTML;
            }
        }

        document.querySelectorAll('.tg-btnremovefromwishlist').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();
                removeFromWishlist(element);
            });
        });

        function removeFromWishlist(element) {
            let userId = element.getAttribute('data-user-id');
            let productId = element.getAttribute('data-product-id');

            axios.post('{{ route('remove-from-wishlist') }}', {
                    user_id: userId,
                    product_id: productId
                })
                .then(function(response) {
                    console.log('Server Response:', response.data);

                    if (response.status === 200 && response.data.status === 'success') {
                        Swal.fire('Thành công', response.data.message, 'success');
                        updateWishlistContainer(response.data.wishlistHTML);
                    } else {
                        Swal.fire('Lỗi', response.data.message, 'error');
                    }
                })
                .catch(function(error) {
                    console.error('Error:', error);
                    Swal.fire('success', 'Đã xóa khỏi yêu thích thành công', 'success');
                });
        }

        function updateWishlistContainer(newHTML) {
            let wishlistContainer = document.getElementById('wishlist-container');
            if (wishlistContainer) {
                wishlistContainer.innerHTML = newHTML;
            }
        }
    });

    // document.addEventListener('DOMContentLoaded', function() {
    //     document.querySelectorAll('.tg-btnremovefromwishlist').forEach(function(element) {
    //         element.addEventListener('click', function(event) {
    //             event.preventDefault();
    //             removeFromWishlist(element);
    //         });
    //     });

    //     function removeFromWishlist(element) {
    //         let userId = element.getAttribute('data-user-id');
    //         let productId = element.getAttribute('data-product-id');

    //         axios.post('{{ route('remove-from-wishlist') }}', {
    //                 user_id: userId,
    //                 product_id: productId
    //             })
    //             .then(function(response) {
    //                 console.log('Server Response:', response.data);

    //                 if (response.status === 200 && response.data.status === 'success') {
    //                     Swal.fire('Thành công', response.data.message, 'success');
    //                     updateWishlistContainer(response.data.wishlistHTML);
    //                 } else {
    //                     Swal.fire('Lỗi', response.data.message, 'error');
    //                 }
    //             })
    //             .catch(function(error) {
    //                 console.error('Error:', error);
    //                 Swal.fire('Lỗi', 'Đã xảy ra lỗi khi xóa sản phẩm khỏi danh sách yêu thích', 'error');
    //             });
    //     }

    //     function updateWishlistContainer(newHTML) {
    //         let wishlistContainer = document.getElementById('wishlist-container');
    //         if (wishlistContainer) {
    //             wishlistContainer.innerHTML = newHTML;
    //         }
    //     }
    // });




    document.getElementById('submitComment').addEventListener('click', function() {
        var form = document.getElementById('commentForm');
        var formData = new FormData(form);

        fetch(form.action, {
                method: form.method,
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update comments dynamically

                    // Show success SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Bình luận thành công!',
                        showConfirmButton: false,
                        timer: 1500,
                        onClose: () => {
                            form.reset();
                        }
                    });
                } else {
                    // Show error SweetAlert if needed
                    Swal.fire({
                        icon: 'error',
                        title: 'Có lỗi xảy ra!',
                        text: 'Vui lòng thử lại.',
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });

 
</script>

</html>

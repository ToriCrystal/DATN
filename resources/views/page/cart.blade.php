@extends('layouts.layoutUser')

@section('title')
    Giỏ hàng
@endsection

@section('noidung')
    <style>
        .disable-button {
            cursor: not-allowed;
            pointer-events: none;
        }
    </style>
    <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600"
        data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-innerbannercontent">
                        <h1>Giỏ hàng</h1>
                        <ol class="tg-breadcrumb">
                            <li><a href="javascript:void(0);">Trang chủ</a></li>
                            <li class="tg-active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main id="tg-main" class="tg-main tg-haslayout" style="width: 100%;">

        <div class="container padding-bottom-3x mb-1">
            <!-- Alert-->
            <div class="alert alert-info alert-dismissible fade show text-center" style="margin-bottom: 30px;"><span
                    class="alert-close" data-dismiss="alert"></span><img class="d-inline align-center"
                    src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAzIDUxMi4wMDMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDMgNTEyLjAwMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8Zz4KCTxnPgoJCTxnPgoJCQk8cGF0aCBkPSJNMjU2LjAwMSw2NGMtNzAuNTkyLDAtMTI4LDU3LjQwOC0xMjgsMTI4czU3LjQwOCwxMjgsMTI4LDEyOHMxMjgtNTcuNDA4LDEyOC0xMjhTMzI2LjU5Myw2NCwyNTYuMDAxLDY0eiAgICAgIE0yNTYuMDAxLDI5OC42NjdjLTU4LjgxNiwwLTEwNi42NjctNDcuODUxLTEwNi42NjctMTA2LjY2N1MxOTcuMTg1LDg1LjMzMywyNTYuMDAxLDg1LjMzM1MzNjIuNjY4LDEzMy4xODQsMzYyLjY2OCwxOTIgICAgIFMzMTQuODE3LDI5OC42NjcsMjU2LjAwMSwyOTguNjY3eiIgZmlsbD0iIzUwYzZlOSIvPgoJCQk8cGF0aCBkPSJNMzg1LjY0NCwzMzMuMjA1YzM4LjIyOS0zNS4xMzYsNjIuMzU3LTg1LjMzMyw2Mi4zNTctMTQxLjIwNWMwLTEwNS44NTYtODYuMTIzLTE5Mi0xOTItMTkycy0xOTIsODYuMTQ0LTE5MiwxOTIgICAgIGMwLDU1Ljg1MSwyNC4xMjgsMTA2LjA2OSw2Mi4zMzYsMTQxLjE4NEw2NC42ODQsNDk3LjZjLTEuNTM2LDQuMTE3LTAuNDA1LDguNzI1LDIuODM3LDExLjY2OSAgICAgYzIuMDI3LDEuNzkyLDQuNTY1LDIuNzMxLDcuMTQ3LDIuNzMxYzEuNjIxLDAsMy4yNDMtMC4zNjMsNC43NzktMS4xMDlsNzkuNzg3LTM5Ljg5M2w1OC44NTksMzkuMjMyICAgICBjMi42ODgsMS43OTIsNi4xMDEsMi4yNCw5LjE5NSwxLjI4YzMuMDkzLTEuMDAzLDUuNTY4LTMuMzQ5LDYuNjk5LTYuNGwyMy4yOTYtNjIuMTQ0bDIwLjU4Nyw2MS43MzkgICAgIGMxLjA2NywzLjE1NywzLjU0MSw1LjYzMiw2LjY3Nyw2LjcyYzMuMTM2LDEuMDY3LDYuNTkyLDAuNjQsOS4zNjUtMS4yMTZsNTguODU5LTM5LjIzMmw3OS43ODcsMzkuODkzICAgICBjMS41MzYsMC43NjgsMy4xNTcsMS4xMzEsNC43NzksMS4xMzFjMi41ODEsMCw1LjEyLTAuOTM5LDcuMTI1LTIuNzUyYzMuMjY0LTIuOTIzLDQuMzczLTcuNTUyLDIuODM3LTExLjY2OUwzODUuNjQ0LDMzMy4yMDV6ICAgICAgTTI0Ni4wMTcsNDEyLjI2N2wtMjcuMjg1LDcyLjc0N2wtNTIuODIxLTM1LjJjLTMuMi0yLjExMi03LjMxNy0yLjM4OS0xMC42ODgtMC42NjFMOTQuMTg4LDQ3OS42OGw0OS41NzktMTMyLjIyNCAgICAgYzI2Ljg1OSwxOS40MzUsNTguNzk1LDMyLjIxMyw5My41NDcsMzUuNjA1TDI0Ni43LDQxMS4yQzI0Ni40ODcsNDExLjU2MywyNDYuMTY3LDQxMS44NCwyNDYuMDE3LDQxMi4yNjd6IE0yNTYuMDAxLDM2Mi42NjcgICAgIEMxNjEuOSwzNjIuNjY3LDg1LjMzNSwyODYuMTAxLDg1LjMzNSwxOTJTMTYxLjksMjEuMzMzLDI1Ni4wMDEsMjEuMzMzUzQyNi42NjgsOTcuODk5LDQyNi42NjgsMTkyICAgICBTMzUwLjEwMywzNjIuNjY3LDI1Ni4wMDEsMzYyLjY2N3ogTTM1Ni43NTksNDQ5LjEzMWMtMy40MTMtMS43MjgtNy41MDktMS40NzItMTAuNjg4LDAuNjYxbC01Mi4zNzMsMzQuOTIzbC0zMy42NDMtMTAwLjkyOCAgICAgYzQwLjM0MS0wLjg1Myw3Ny41ODktMTQuMTg3LDEwOC4xNi0zNi4zMzFsNDkuNTc5LDEzMi4yMDNMMzU2Ljc1OSw0NDkuMTMxeiIgZmlsbD0iIzUwYzZlOSIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K"
                    width="18" height="18" alt="Medal icon">&nbsp;&nbsp;With this purchase you will earn
                <strong>290</strong> Reward Points.
            </div>
            <div class="table-responsive shopping-cart">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="30%">Tên sản phẩm</th>
                            <th width="20%" class="text-center">Số lượng</th>
                            <th width="20%" class="text-center">Giá tiền</th>
                            <th width="20%" class="text-center">Thành tiền</th>
                            <th width="10%" class="text-center"><a class="btn btn-sm btn-outline-danger"
                                    href="#">Xóa giỏ hàng</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($groupedCart as $item)
                            <tr class="cart-item" data-id="{{ $item['product_id'] }}">
                                <td>
                                    <div class="product-item">
                                        <a class="product-thumb" href="#"><img
                                                src="{{ $item['product_image'] }}"
                                                style="max-width: 100px;" alt="Product"></a>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="#">{{ $item['product_name'] }}</a></h4>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="count-input">
                                        <input type="number" name="quantities[{{ $item['product_id'] }}]"
                                            value="{{ $item['so_luong'] }}" min="1" max="{{ $item['remaining'] }}"
                                            class="form-control quantity-input" data-product-id="{{ $item['product_id'] }}">
                                    </div>
                                </td>

                                <td class="text-center text-lg text-medium product-total-price">
                                    {{ $item['price'] }} VNĐ
                                </td>
                                <td class="text-center text-lg text-medium product-subtotal">
                                    <span id="product-total-{{ $item['product_id'] }}">
                                        {{ $item['price'] * $item['so_luong'] }} VNĐ
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a class="cart_remove" href="#" data-toggle="tooltip" title=""
                                        data-original-title="Remove item" data-id="{{ $item['product_id'] }}"
                                        onclick="removeCartItem({{ $item['product_id'] }})">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <p>Không có sản phẩm nào trong giỏ hàng</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="shopping-cart-footer">
                <div class="column">
                    <form class="coupon-form" id="coupon-form" method="post">
                        @csrf
                        <input class="form-control form-control-sm" id="coupon-code" type="text"
                            placeholder="Mã giảm giá" required="">
                        <button class="btn btn-outline-primary btn-sm" type="button" onclick="applyCoupon()">Sử dụng mã
                            giảm giá</button>
                    </form>
                </div>

                @php
                    $total = 0;
                @endphp

                @foreach ($cart as $item)
                    @php
                        if (is_array($item)) {
                            $total += $item['price'] * $item['so_luong'];
                        }
                    @endphp
                @endforeach

                <div class="column text-lg total-price" id="total-price">Tổng giá: <span
                        class="text-medium">{{ number_format($total, 0, ',', '.') }} VNĐ</span></div>
            </div>

            <div class="shopping-cart-footer">
                <div class="column"><a class="btn btn-outline-secondary" href="/product"><i
                            class="icon-arrow-left"></i>&nbsp;Tiếp tục mua sắm</a></div>
                @if (count($cart) > 0)
                    <div class="column">
                        <button class="btn btn-success" onclick="updateCart()">Cập nhập</button>
                        <a class="btn btn-success" href="{{ route('viewCheckOut') }}" id="checkoutLink">Thanh
                            toán</a>
                    </div>
                @else
                    <div class="column">
                        <button class="btn btn-success" disabled>Cập nhập</button>
                        <a class="btn btn-success" href="{{ route('viewCheckOut') }}" id="checkoutLink" disabled>Thanh
                            toán</a>
                    </div>
                @endif


            </div>

        </div>
    </main>

    <!-- <script>
        document.getElementById('checkoutLink').addEventListener('click', function(event) {
            event.preventDefault();
        });
    </script> -->
    <script>
        //         window.onpopstate = function(event) {
        //     // Gọi hàm xử lý khi quay lại từ trang Checkout về trang Cart ở đây
        //     backToCartFromCheckout();
        // };

        function removeCartItem(productId) {
            $.ajax({
                type: 'POST',
                url: '/removeCartItem',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: productId
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: 'Sản phẩm đã được xóa khỏi giỏ hàng.',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        // Cập nhật giao diện người dùng sau khi xóa thành công
                        $('.cart-item[data-id="' + productId + '"]').remove();

                        // Check if the 'newTotal' property exists in the response
                        if ('newTotal' in response) {
                            // Update the total price dynamically
                            updateTotalPrice(response.newTotal);

                            // Update the individual product prices
                            updateProductPrices(response.productPrices);
                        } else {
                            console.error('Invalid server response:', response);
                        }
                    } else {
                        // Hiển thị thông báo SweetAlert nếu có lỗi
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi!',
                            text: 'Đã xảy ra lỗi, vui lòng thử lại.'
                        });
                    }
                },
                error: function() {
                    // Hiển thị thông báo SweetAlert nếu có lỗi
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi!',
                        text: 'Đã xảy ra lỗi, vui lòng thử lại.'
                    });
                }
            });
        }






        function updateTotalPrice(newTotal) {
            // Update the total price on the page
            $('#total-price').html('Tổng giá: <span class="text-medium">' + newTotal + ' VNĐ</span>');
        }



        function applyCoupon() {
            var couponCode = document.getElementById('coupon-code').value;
            console.log('Coupon code sent:', couponCode);
            // Send the coupon code to the server using AJAX
            $.ajax({
                type: 'POST',
                url: '/apply-coupon', // Verify that this route is correct
                data: {
                    _token: '{{ csrf_token() }}',
                    coupon_code: couponCode
                },
                success: function(response) {
                    if (response.success) {
                        // Update the total price
                        document.getElementById('total-price').innerHTML =
                            'Tổng giá: <span class="text-medium">' + response.total_formatted + ' VNĐ</span>';
                        alert('Mã giảm giá đã được áp dụng.');
                    } else {
                        alert('Mã giảm giá không hợp lệ.');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown); // Log any AJAX errors
                    alert('Đã xảy ra lỗi, vui lòng thử lại.');
                    // alert('Đã xảy ra lỗi, vui lòng thử lại.\n' + 'Status: ' + textStatus + '\nError: ' + errorThrown);
                }
            });
        }


        function updateCart() {
            var quantities = {};

            // Get updated quantities from input fields
            $('.quantity-input').each(function() {
                var productId = $(this).data('product-id');
                var quantity = $(this).val();
                quantities[productId] = quantity;
            });

            // Send AJAX request to update cart
            $.ajax({
                type: 'POST',
                url: '{{ route('updateCart') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    quantities: quantities
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: 'Giỏ hàng đã được cập nhật.',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        // Update the total price on the page
                        updateTotalPrice(response.total);

                        // Update individual product prices
                        updateProductPrices(response.productPrices);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi!',
                            text: 'Đã xảy ra lỗi, vui lòng thử lại.'
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi!',
                        text: 'Đã xảy ra lỗi, vui lòng thử lại.'
                    });
                }
            });
        }


        function updateProductPrices(productPrices) {
            for (const productId in productPrices) {
                const subtotal = productPrices[productId];
                updateProductPrice(productId, subtotal);
            }
        }


        function checkRemainingQuantity(remainingQuantities) {
            for (const productId in remainingQuantities) {
                const remainingQuantity = remainingQuantities[productId];
                const updatedQuantity = $('.quantity-input[data-product-id="' + productId + '"]').val();

                if (parseInt(updatedQuantity) > parseInt(remainingQuantity)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Số lượng giới hạn!',
                        text: 'Sản phẩm "' + productId + '" chỉ còn ' + remainingQuantity + ' sản phẩm.'
                    });
                }
            }
        }

        $('.btn.btn-success').on('click', function() {
            // Call the updateCart function when the button is clicked
            updateCart();
        });
    </script>
@endsection

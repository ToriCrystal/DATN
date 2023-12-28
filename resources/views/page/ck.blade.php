@extends('layouts.layoutUser')

@section('title')
    Thanh toán
@endsection


@section('noidung')
    @auth
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <style>
            .payment-online {
                display: none;
                padding-top: 100px;
                background-color: rgb(0, 0, 0);
                background-color: rgba(0, 0, 0, 0.4);
                position: fixed;
                inset: 0;
                z-index: 1000;
                overflow: auto;
            }

            .body-qr {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
            }

            .jw-modal {
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 95%;
                max-width: 650px;
                max-height: 750px;
                background-color: #fff;
                border-radius: 10px;
            }

            .close {
                color: #aaaaaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

            .item-left {
                flex: 40%;
                background: linear-gradient(134deg, #04a468 0%, #0d788c 100%);
                border-radius: 10px;
                padding: 15px
            }

            .item-left p {
                font-size: 15px;
                padding: 15px 0;
                color: #fff;
                font-weight: 500;
                border-bottom: 1px dotted #fff
            }

            .item-left h3 {
                font-size: 20px;
                color: #fff;
                text-align: center;
                font-weight: 700;
            }

            .item-left p a {
                color: #ffbc0e;
                font-weight: 700;
            }

            .item-right {
                flex: 60%;
                padding: 30px
            }

            .item-right p {
                text-align: center;
                font-size: 15px;
                margin: 10px 0 5px;
                color: #04a468;
                font-weight: 500;
            }

            #luu-y {
                color: #ffbc0e;
                font-weight: 500;
                margin-bottom: 20px;
            }

            #btn-payment {
                padding: 8px;
            }
        </style>
        <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600"
            data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-innerbannercontent">
                            <h1>Thanh toán</h1>
                            <ol class="tg-breadcrumb">
                                <li><a href="javascript:void(0);">Trang chủ</a></li>
                                <li class="tg-active">@yield('title')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
        $genOdercode = 'ORD' . time();
        $lastFiveDigits = substr($genOdercode, 5);
        $user_id = isset(Auth::user()->id);
        $order_code = 'ORD' . $user_id . $lastFiveDigits;

        @endphp
        <main role="main">
            <div class="container mt-4">
                <form class="needs-validation" name="frmthanhtoan" method="post"
                    action="{{ route('confirmCheckout', ['order_code' => $order_code]) }}">
                    @csrf

                    <div class="py-5 text-center">
                        <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                        <h2>Thanh toán</h2>
                        <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                    </div>

                    <!-- div page checkout -->
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Giỏ hàng</span>
                                <span class="badge badge-secondary badge-pill">{{ count($cart) }}</span>
                            </h4>
                            <!-- ul load products in cart -->
                            <ul class="list-group mb-3">
                                @php
                                    $tong = 0;
                                @endphp
                                @foreach ($cart as $item)
                                    @php
                                        $tong += $item['price'] * $item['so_luong'];
                                    @endphp
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0">{{ $item['product_name'] }}</h6>
                                            <small class="text-muted">{{ $item['price'] }} x {{ $item['so_luong'] }}</small>
                                        </div>
                                        <span class="text-muted">{{ $item['price'] * $item['so_luong'] }}</span>
                                    </li>
                                @endforeach
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Tổng thành tiền</span>
                                    <strong>{{ $tong }}</strong>
                                    <input type="hidden" name="total_price" value="{{ $tong }}">
                                </li>
                            </ul>
                            <!-- end ul load products in cart -->

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">Xác nhận thanh toán</button>
                                </div>
                            </div>
                        </div>

                        <!-- div info user -->
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Thông tin khách hàng</h4>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="kh_ten">Họ và tên</label>
                                    <input type="text" class="form-control" name="kh_ten" id="kh_ten" required=""
                                        value="{{ Auth::user()->name }}">
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_dienthoai">Số điện thoại</label>
                                    <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai"
                                        required="" value="{{ isset(Auth::user()->phone) ? Auth::user()->phone : old('') }}">
                                </div>

                                <div class="col-md-12">
                                    <label for="city">Chọn tỉnh/thành:</label>
                                    <select class="form-control" name="province" id="province" required>
                                        <option disabled selected>Chọn tỉnh/thành</option>
                                    </select>
                                </div>
                                <input type="hidden" name="kh_city" id="kh_city" value="" />

                                <div class="col-md-12">
                                    <label for="district">Chọn quận/huyện:</label>
                                    <select class="form-control" name="district" id="district" required>
                                        <option disabled selected>Chọn quận/huyện</option>
                                    </select>
                                </div>
                                <input type="hidden" name="kh_quan" id="kh_quan" value="" />

                                <div class="col-md-12">
                                    <label for="ward">Chọn xã/phường:</label>
                                    <select class="form-control" name="ward" id="ward" required>
                                        <option disabled selected>Chọn xã/phường</option>
                                    </select>
                                </div>
                                <input type="hidden" name="kh_xa" id="kh_xa" value="" />

                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var provinceSelect = document.getElementById("province");
                                        var districtSelect = document.getElementById("district");
                                        var wardSelect = document.getElementById("ward");
                                        var khCity = document.getElementById("kh_city");
                                        var khQuan = document.getElementById("kh_quan");
                                        var khXa = document.getElementById("kh_xa");

                                        function updateDistrictOptions(districts) {
                                            while (districtSelect.options.length > 0) {
                                                districtSelect.remove(0);
                                            }

                                            districts.forEach(function(district) {
                                                var option = document.createElement('option');
                                                option.value = district.code;
                                                option.text = district.name;
                                                districtSelect.add(option);
                                            });

                                            // Chọn giá trị đầu tiên nếu không được chọn
                                            if (districtSelect.selectedIndex === -1) {
                                                districtSelect.selectedIndex = 0;
                                            }

                                            // Cập nhật trường ẩn cho quận/huyện
                                            khQuan.value = districtSelect.options[districtSelect.selectedIndex].text;

                                            // Cập nhật trường ẩn cho tỉnh/thành
                                            khCity.value = provinceSelect.options[provinceSelect.selectedIndex].text;
                                        }

                                        function updateWardOptions(wards) {
                                            while (wardSelect.options.length > 0) {
                                                wardSelect.remove(0);
                                            }

                                            wards.forEach(function(ward) {
                                                var option = document.createElement('option');
                                                option.value = ward.code;
                                                option.text = ward.name;
                                                wardSelect.add(option);
                                            });

                                            // Chọn giá trị đầu tiên nếu không được chọn
                                            if (wardSelect.selectedIndex === -1) {
                                                wardSelect.selectedIndex = 0;
                                            }

                                            // Cập nhật trường ẩn cho xã/phường
                                            khXa.value = wardSelect.options[wardSelect.selectedIndex].text;
                                        }

                                        provinceSelect.addEventListener("change", function() {
                                            var selectedProvinceCode = provinceSelect.value;

                                            fetch("https://provinces.open-api.vn/api/p/" + selectedProvinceCode + "?depth=3")
                                                .then(response => response.json())
                                                .then(data => {
                                                    if (data.districts && Array.isArray(data.districts)) {
                                                        updateDistrictOptions(data.districts);
                                                        updateWardOptions(data.districts[0].wards);
                                                    } else {
                                                        console.error(
                                                            "Lỗi khi lấy danh sách quận/huyện: Dữ liệu không phải là mảng.",
                                                            data);
                                                    }
                                                })
                                                .catch(error => console.error("Lỗi khi lấy danh sách quận/huyện và xã/phường: ",
                                                    error));
                                        });

                                        districtSelect.addEventListener("change", function() {
                                            var selectedDistrictCode = districtSelect.value;
                                            var selectedProvinceCode = provinceSelect.value;

                                            fetch("https://provinces.open-api.vn/api/d/" + selectedDistrictCode + "?depth=2")
                                                .then(response => response.json())
                                                .then(data => {
                                                    if (data.wards && Array.isArray(data.wards)) {
                                                        updateWardOptions(data.wards);
                                                    } else {
                                                        console.error(
                                                            "Lỗi khi lấy danh sách xã/phường: Dữ liệu không phải là mảng.", data
                                                        );
                                                    }

                                                    // Cập nhật trường ẩn cho quận/huyện khi bạn chọn một quận/huyện khác
                                                    khQuan.value = districtSelect.options[districtSelect.selectedIndex].text;
                                                });

                                            // Cập nhật trường ẩn cho tỉnh/thành khi bạn chọn một quận/huyện khác
                                            khCity.value = provinceSelect.options[provinceSelect.selectedIndex].text;
                                        });
                                        wardSelect.addEventListener("change", function() {
                                            khXa.value = wardSelect.options[wardSelect.selectedIndex].text;
                                        });

                                        // Lấy danh sách tỉnh/thành phố ban đầu
                                        fetch("https://provinces.open-api.vn/api/p/")
                                            .then(response => response.json())
                                            .then(data => {
                                                if (Array.isArray(data)) {
                                                    data.forEach(function(province) {
                                                        var option = document.createElement('option');
                                                        option.value = province.code;
                                                        option.text = province.name;
                                                        provinceSelect.add(option);
                                                    });

                                                    // Kích hoạt sự kiện change ban đầu để thiết lập giá trị mặc định cho select của quận/huyện và xã/phường
                                                    provinceSelect.dispatchEvent(new Event('change'));
                                                } else {
                                                    console.error("Lỗi khi lấy danh sách tỉnh/thành phố: Dữ liệu không phải là mảng.",
                                                        data);
                                                }
                                            })
                                            .catch(error => console.error("Lỗi khi lấy danh sách tỉnh/thành phố: ", error));
                                    });
                                </script>


                                <div class="col-md-12">
                                    <label for="kh_sonha">Đường/Hẻm/Số nhà</label>
                                    <input type="text" class="form-control" name="kh_sonha" id="kh_sonha" required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_type_diachi">Loại địa chỉ</label>
                                    <select class="form-control" id="addtype" name="addtype" required>
                                        <option value="Nhà riêng">Nhà riêng</option>
                                        <option value="Công ty">Công ty</option>
                                    </select>
                                </div>

                            </div>

                            <h4 class="mb-3">Hình thức thanh toán</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input"
                                        required="" value="1">
                                    <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input"
                                        required="" value="2">
                                    <label class="custom-control-label" for="httt-2">Chuyển khoản</label>

                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input"
                                        required="" value="3">
                                    <label class="custom-control-label" for="httt-3">Ship COD</label>
                                </div>
                            </div>

                            <div id="paymentOnline" class="payment-online" style="display: none;">
                                <div class="jw-modal">
                                    <span class="close">&times;</span>
                                    <div class="jw-modal-body">
                                        <div class="body-qr">
                                            <div class="item-left">
                                                <h3>THÔNG TIN THANH TOÁN</h3>
                                                <div>
                                                    <p> Ngân hàng: <span>Mb bank</span></p>
                                                    <p> Số tài khoản: <br><span>099999910</span></p>
                                                    <p> Chủ tài khoản: <br><span>NGUYEN CONG DANH</span></p>
                                                    <p> Số tiền cần thanh toán: <br><span>{{ $tong }} VNĐ</span></p>
                                                    <p> Nội dung chuyển khoản: <br><span>{{ $order_code }}</span>
                                                    </p>
                                                </div>
                                                <p class="content-sub"> Hệ thống sẽ tự động duyệt đơn hàng của bạn sau khoảng
                                                    1-5 phút. Nếu quá 2 tiếng đơn hàng của bạn chưa được duyệt vui lòng liên hệ
                                                    <a href="https://t.me/danhnguyenn" target="_blank">Telegram</a> để được hỗ
                                                    trợ.
                                                </p>
                                            </div>
                                            <div class="item-right">
                                                <h3>Quét mã QR để thanh toán</h3>
                                                <p> Sử dụng <span>App Internet Banking</span> hoặc ứng dụng camera hỗ trợ QR
                                                    code để quét mã </p>
                                                <div class="img-item"><img alt="QR code"
                                                        src="https://apiqr.web2m.com/api/generate/MB/099999910/NGUYEN CONG DANH?amount={{ $tong }}&memo={{ $order_code }}&is_mask=0&bg=16">
                                                </div>
                                                <br>
                                                <p id="luu-y"> Khi quét mã thanh toán xong vui lòng bấm xác nhận đặt hàng
                                                    bên dưới để hoàn tất thanh toán đơn hàng. </p>
                                                <button id="btn-payment" class="btn btn-primary btn-lg btn-block"
                                                    type="submit" name="btnDatHang">
                                                    Đặt hàng
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                const chuyenKhoanRadio = document.getElementById('httt-2');
                                const paymentOnlineDiv = document.getElementById('paymentOnline');
                                const openPopupButton = document.getElementById('openPopup');
                                const popup = document.getElementById('popup');
                                const closePopupButton = document.getElementById('closePopup');
                                var span = document.getElementsByClassName("close")[0];

                                chuyenKhoanRadio.addEventListener('change', function() {
                                    if (chuyenKhoanRadio.checked) {
                                        paymentOnlineDiv.style.display = 'block';
                                    } else {
                                        paymentOnlineDiv.style.display = 'none';
                                    }
                                });

                                span.onclick = function() {
                                    paymentOnlineDiv.style.display = "none";
                                }
                                openPopupButton.addEventListener('click', function() {
                                    popup.style.display = 'block';
                                });
                                closePopupButton.addEventListener('click', function() {
                                    popup.style.display = 'none';
                                });
                            </script>

                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">
                                Đặt hàng
                            </button>
                            <br><br>
                            <div id="dataDisplay"></div>
                        </div>
                        <!-- end div info user -->
                    </div>
                    <!-- end div page checkout -->
                </form>
            </div>
            <!-- End block content -->
        </main>
    @else
        <script>
            window.location.href = "{{ route('login') }}";
        </script>
    @endauth
@endsection

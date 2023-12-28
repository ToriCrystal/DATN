@extends('layouts.layoutUser')

@section('title')
Thanh toán
@endsection


@section('noidung')
@auth
<link rel="stylesheet" href="/css/checkout/style.css">

@php
$genOdercode = 'ORD' . time();
$lastFiveDigits = substr($genOdercode, 6);
$user_id = isset(Auth::user()->id);
$order_code = 'ORD' . $user_id . $lastFiveDigits;
@endphp
<div class="uIpYTt">
    <div class="YqIqug">
        <div class="container">
            <div class="jb8bh0">
                <a class="_4+lJqn" href="/">
                    <!-- <h1 class="eSRYBr">Thanh toán</h1> -->
                </a>
            </div>
        </div>
    </div>
    <div role="main" class="OX-2Lj">
        <div class="-p7ULT">
            <!-- <form class="row contact_form" id="frmthanhtoan" name="frmthanhtoan" method="post" action="{{ route('confirmCheckout', ['order_code' => $order_code]) }}">
                @csrf -->
                <div class="vtrWey">
                    <div class="_8jJlG8">
                        <div class="nU2ylc">
                            <div class="MqmqK4">
                                <div class="Iafoll">
                                    <svg height="16" viewBox="0 0 12 16" width="12" class="shopee-svg-icon icon-location-marker">
                                        <path d="M6 3.2c1.506 0 2.727 1.195 2.727 2.667 0 1.473-1.22 2.666-2.727 2.666S3.273 7.34 3.273 5.867C3.273 4.395 4.493 3.2 6 3.2zM0 6c0-3.315 2.686-6 6-6s6 2.685 6 6c0 2.498-1.964 5.742-6 9.933C1.613 11.743 0 8.498 0 6z" fill-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h2>Địa chỉ nhận hàng</h2>
                            </div>
                        </div>
                        <div class="from-row col-lg-12">
                            <div class="row">
                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" id="fullname" name="kh_ten" placeholder="Họ và tên" title="You have to enter 8-20 number characters." onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')" oninvalid="this.setCustomValidity('Vui lòng nhập tên')" required>
                                </div>

                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" pattern="^[0-9]{9,20}$" id="number" name="kh_dienthoai" placeholder="Số điện thoại" title="You have to enter 8-20 number characters." onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')" oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại hợp lệ')" required>
                                </div>
                            </div>

                            <div class="col-md-12 form-group p_star">
                                <label for="city">Chọn tỉnh/thành:</label>
                                <select class="form-control" name="province" id="province" required>
                                    <option disabled selected>Chọn tỉnh/thành</option>
                                </select>
                            </div>
                            <input type="hidden" name="kh_city" id="kh_city" value="" />

                            <div class="col-md-12 form-group p_star">
                                <label for="district">Chọn quận/huyện:</label>
                                <select class="form-control" name="district" id="district" required>
                                    <option disabled selected>Chọn quận/huyện</option>
                                </select>
                            </div>
                            <input type="hidden" name="kh_quan" id="kh_quan" value="" />

                            <div class="col-md-12 form-group p_star">
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
                                        while (wardSelect.options.length > 1) {
                                            wardSelect.remove(1);
                                        }

                                        wardSelect.options[0].text = 'Chọn xã/phường';

                                        districts.forEach(function(district) {
                                            var option = document.createElement('option');
                                            option.value = district.DistrictID;
                                            option.text = district.DistrictName;
                                            districtSelect.add(option);
                                        });

                                        // Chọn giá trị đầu tiên nếu không được chọn
                                        // if (districtSelect.selectedIndex === -1) {
                                        //     districtSelect.selectedIndex = 0;
                                        // }
                                        // districtSelect.options[0].text = 'Chọn quận/huyện';

                                        // Cập nhật trường ẩn cho quận/huyện
                                        khQuan.value = districtSelect.options[districtSelect.selectedIndex].text;

                                        // Cập nhật trường ẩn cho tỉnh/thành
                                        khCity.value = provinceSelect.options[provinceSelect.selectedIndex].text;
                                    }

                                    function updateWardOptions(wards) {
                                        while (wardSelect.options.length > 0) {
                                            wardSelect.remove(0);
                                        }
                                        // wardSelect.options[0].text = 'Chọn xã/phường';

                                        wards.forEach(function(ward) {
                                            var option = document.createElement('option');
                                            option.value = ward.WardCode;
                                            option.text = ward.WardName;
                                            wardSelect.add(option);
                                        });

                                        // Chọn giá trị đầu tiên nếu không được chọn
                                        // if (wardSelect.selectedIndex === -1) {
                                        //     wardSelect.selectedIndex = 0;
                                        // }

                                        // Cập nhật trường ẩn cho xã/phường
                                        khXa.value = wardSelect.options[wardSelect.selectedIndex].text;
                                    }

                                    provinceSelect.addEventListener("change", function() {
                                        var selectedProvinceCode = provinceSelect.value;

                                        // fetch("https://provinces.open-api.vn/api/p/" + selectedProvinceCode + "?depth=3")
                                        //     .then(response => response.json())
                                        //     .then(data => {
                                        //         if (data.districts && Array.isArray(data.districts)) {
                                        //             // code_districts = data.code
                                        //             // console.log(code_districts);
                                        //             updateDistrictOptions(data.districts);
                                        //             updateWardOptions(data.districts[0].wards);
                                        //         } else {
                                        //             console.error(
                                        //                 "Lỗi khi lấy danh sách quận/huyện: Dữ liệu không phải là mảng.",
                                        //                 data);
                                        //         }
                                        //     }).catch(error => console.error("Lỗi khi lấy danh sách quận/huyện và xã/phường.",error));

                                        const url_district =
                                            `https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/district?province_id=${selectedProvinceCode}`;
                                        fetch(url_district, {
                                                method: 'GET',
                                                headers: {
                                                    'Content-Type': 'application/json',
                                                    'token': '03a196a7-9195-11ee-8bfa-8a2dda8ec551'
                                                }
                                            })
                                            .then(response => response.json())
                                            .then(data => {
                                                // console.log(data);
                                                if (data.data && Array.isArray(data.data)) {
                                                    updateDistrictOptions(data.data);
                                                } else {
                                                    console.error(
                                                        "Lỗi khi lấy danh sách quận/huyện: Dữ liệu không phải là mảng.",
                                                        data);
                                                }
                                            }).catch(error => console.error('Error:', error));
                                    });

                                    districtSelect.addEventListener("change", function() {
                                        var selectedDistrictCode = parseInt(districtSelect.value, 10);
                                        var selectedProvinceCode = provinceSelect.value;
                                        // console.log("selectedDistrictCode =>", selectedDistrictCode);
                                        // console.log("selectedProvinceCode =>", selectedProvinceCode);

                                        // fetch("https://provinces.open-api.vn/api/d/" + selectedDistrictCode + "?depth=2")
                                        fetch('https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/ward', {
                                                method: 'POST',
                                                headers: {
                                                    'Content-Type': 'application/json',
                                                    'token': '03a196a7-9195-11ee-8bfa-8a2dda8ec551'
                                                },
                                                body: JSON.stringify({
                                                    "district_id": selectedDistrictCode
                                                })
                                            })
                                            .then(response => response.json())
                                            .then(data => {
                                                console.log(data);
                                                if (data.data && Array.isArray(data.data)) {
                                                    updateWardOptions(data.data);
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
                                    // fetch("https://provinces.open-api.vn/api/p/")
                                    fetch("https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/province", {
                                            method: 'GET',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'Token': '03a196a7-9195-11ee-8bfa-8a2dda8ec551'
                                            },
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (Array.isArray(data.data)) {
                                                data.data.forEach(function(province) {
                                                    var option = document.createElement('option');
                                                    option.value = province.ProvinceID;
                                                    option.text = province.ProvinceName;
                                                    provinceSelect.add(option);
                                                });
                                                // Kích hoạt sự kiện change ban đầu để thiết lập giá trị mặc định cho select của quận/huyện và xã/phường
                                                provinceSelect.dispatchEvent(new Event('change'));
                                            } else {
                                                console.error("Lỗi khi lấy danh sách tỉnh/thành phố: Dữ liệu không phải là mảng.",
                                                    data);
                                            }
                                        }).catch(error => console.error("Lỗi khi lấy danh sách tỉnh/thành phố: ", error));
                                });
                            </script>
                            <script>
                                document.getElementById('district').addEventListener('change', calculate);
                                document.getElementById('ward').addEventListener('change', calculate);

                                function calculate() {
                                    var district_id = document.getElementById("district").value;
                                    var ward_code_1 = document.getElementById("ward").value;
                                    console.log("ward_code 1", ward_code_1);
                                    var ward_code_2 = document.getElementById("kh_xa").value;
                                    console.log("ward_code 2", ward_code_2);

                                    var ward_code = ward_code_1 == "Chọn xã/phường" ? ward_code_2 : ward_code_1;

                                    const data = {
                                        "from_district_id": 1454,
                                        "from_ward_code": "21207",
                                        "service_id": 53320,
                                        "service_type_id": null,
                                        "to_district_id": parseInt(district_id, 10),
                                        "to_ward_code": ward_code,
                                        "height": 50,
                                        "length": 20,
                                        "weight": 200,
                                        "width": 20,
                                        "insurance_value": 10000,
                                        "cod_failed_amount": 0,
                                        "coupon": null
                                    };

                                    fetch('https://dev-online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'Token': '03a196a7-9195-11ee-8bfa-8a2dda8ec551',
                                                'ShopId': '190366',
                                            },
                                            body: JSON.stringify(data)
                                        })
                                        .then(response => response.json())
                                        .then(result => {
                                            console.log(result);
                                            total = result.data.total;
                                            var total_product = "{{ session('cart.total', 0) }}";
                                            total_amount = parseInt(total_product, 10);
                                            console.log(total_amount);

                                            // phí ship
                                            document.getElementById("fee_ship").innerText = '₫' + total.toLocaleString();
                                            document.getElementById("fee_ship1").innerText = '₫' + total.toLocaleString();
                                            document.getElementById("shipping_fee").value = total;

                                            // total payment
                                            var discount_amount = "{{ session('cart.discount_amount', 0) }}";
                                            console.log(total_amount, total, parseInt(discount_amount))
                                            total_payment = total_amount + total - parseInt(discount_amount);
                                            document.getElementById("total_payment").innerText = '₫' + total_payment.toLocaleString();
                                            document.getElementById("total_payment_qr").innerText = '₫' + total_payment.toLocaleString();
                                            document.getElementById("total_price").value = total_payment.toLocaleString();

                                            // qr code
                                            var orderCode = "{{ $order_code }}";
                                            var qrCodeUrl = "https://apiqr.web2m.com/api/generate/MB/099999910/NGUYEN CONG DANH?" +
                                                "amount=" + encodeURIComponent(total_payment) +
                                                "&memo=" + encodeURIComponent(orderCode) +
                                                "&is_mask=0&bg=16";

                                            // Set the src attribute of the img tag
                                            var qrCodeImage = document.getElementById("qrCodeImage");
                                            qrCodeImage.src = qrCodeUrl;


                                        }).catch(error => console.error('Error:', error));
                                };
                            </script>

                            <div class="col-md-12 form-group p_star">
                                <label for="kh_sonha">Đường/Hẻm/Số nhà</label>
                                <input type="text" class="form-control" name="kh_sonha" id="kh_sonha" required="">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="kh_type_diachi">Loại địa chỉ</label>
                                <select class="form-control" id="addtype" name="addtype" required>
                                    <option value="Nhà riêng">Nhà riêng</option>
                                    <option value="Công ty">Công ty</option>
                                </select>
                            </div>

                            <input type="hidden" name="total_price" id="total_price" value="{{ session('cart.total', 0) }}">
                            <input type="hidden" name="shipping_fee" id="shipping_fee" value="₫0">
                            <input type="hidden" name="discount_amount" id="discount_amount" value="{{ session('cart.discount_amount', 0) }}">
                        </div>
                    </div>
                </div>
            <!-- </form> -->

            <div class="sqxwIi">
                <div class="_3cPNXP">
                    <div class="V-sVj2">
                        <div class="jNp+ZB ktatB-">
                            <h2 class="_6HCfS6">Sản phẩm</h2>
                        </div>
                        <div class="jNp+ZB _04sLFc"></div>
                        <div class="jNp+ZB">Đơn giá</div>
                        <div class="jNp+ZB">Số lượng</div>
                        <div class="jNp+ZB LBqTli">Thành tiền</div>
                    </div>
                </div>
                <div>
                    <div class="o6P-mw">
                        <div>
                            @php $count_sp = 0; @endphp
                            @foreach ($cart as $item)
                            @if (is_array($item))
                            @php $count_sp++; @endphp
                            <div class="Z7qspM">
                                <div class="KxX-H6">
                                    <div class="_2OGC7L xBI6Zm">
                                        <div class="h3ONzh EOqcX3">
                                            <img class="rTOisL" alt="product image" src="{{ asset('storage/' . $item['product_image']) }}" width="40" height="40">
                                            <span class="oEI3Ln"><span class="gHbVhc">{{ $item['product_name'] }}</span></span></div>
                                        <div class="h3ONzh Le31ox"></div>
                                        <div class="h3ONzh">₫{{ $item['price'] }}</div>
                                        <div class="h3ONzh">{{ $item['so_luong'] }}</div>
                                        <div class="h3ONzh fHRPUO">₫{{ $item['price'] * $item['so_luong'] }}</div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="wVzdz-">
                            <div class="U4A1mu">
                                <div class="OUah6W Fzg+Gz">
                                    <div class="Oa38lC">Đơn vị vận chuyển:</div>
                                    <div class="_9HO6as">
                                        <div>Giao hàng nhanh ( Tiêu chuẩn )</div>
                                    </div>
                                    <div class="GEI150"></div>
                                    <!-- <div class="_3zds3i">Nhận hàng vào 10 Th12 - 14 Th12</div> -->
                                    <div class="dnXfYW">
                                        <div id="fee_ship">₫0</div>
                                    </div>
                                </div>
                            </div>
                            <div class="U4A1mu"></div>
                        </div>
                        <div class="Nivkv-">
                            <div class="ULZMSb">
                                <h3 class="bwwaGp iL6wsx -snVIl">
                                    <div>Tổng số tiền ({{ $count_sp }} sản phẩm):</div>
                                </h3>
                                <div class="bwwaGp R3a05f -snVIl kMV1h4" id="total_amount">₫{{ session('cart.total', 0) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="DS2ZYY">
                <div class="DQ7t9K">
                    <div class="checkout-payment-method-view__current checkout-payment-setting">
                        <div class="checkout-payment-method-view__current-title">Phương thức thanh toán</div>
                        <div class="checkout-payment-setting__payment-methods-tab">
                            <!-- <div role="radiogroup">
                            <span>
                                <button class="product-variation" tabindex="0" role="radio" aria-label="Thanh toán chuyển khoản" aria-disabled="false" aria-checked="false">Thanh toán chuyển khoản</button>
                            </span>
                            <span>
                                <button class="product-variation" tabindex="0" role="radio" aria-label="Thanh toán trực tuyến" aria-disabled="true" aria-checked="false">Thanh toán trực tuyến</button>
                            </span>
                            <span>
                                <button class="product-variation" tabindex="0" role="radio" aria-label="Thanh toán khi nhận hàng" aria-disabled="false" aria-checked="false">Thanh toán khi nhận hàng</button>
                            </span>
                            </div> -->
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector" value="1">
                                    <label for="f-option5">Chuyển khoản</label>
                                    <div class="check"></div>
                                </div>
                            </div>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option7" name="selector" value="3">
                                    <label for="f-option7">Thanh toán trực tuyến</label>
                                    <div class="check"></div>
                                </div>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector" value="2" checked>
                                    <label for="f-option6">Thanh toán khi nhận hàng </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                            </div>
                            <!-- <div aria-live="polite"></div> -->
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
                                                    <p> Số tiền cần thanh toán: <br><span id="total_payment_qr">₫{{ session('cart.total', 0) }}
                                                            VNĐ</span></p>
                                                    <p> Nội dung chuyển khoản: <br><span>{{ $order_code }}</span>
                                                    </p>
                                                </div>
                                                <p class="content-sub"> Hệ thống sẽ tự động duyệt đơn hàng của bạn sau
                                                    khoảng
                                                    1-5 phút. Nếu quá 2 tiếng đơn hàng của bạn chưa được duyệt vui lòng
                                                    liên hệ
                                                    <a href="https://t.me/danhnguyenn" target="_blank">Telegram</a> để
                                                    được hỗ
                                                    trợ.
                                                </p>
                                            </div>
                                            <div class="item-right">
                                                <h3>Quét mã QR để thanh toán</h3>
                                                <p> Sử dụng <span>App Internet Banking</span> hoặc ứng dụng camera hỗ
                                                    trợ QR
                                                    code để quét mã </p>
                                                <div class="img-item">
                                                    <img alt="QR code" id="qrCodeImage" src="https://apiqr.web2m.com/api/generate/MB/099999910/NGUYEN CONG DANH?amount={{ session('cart.total', 0) }}&memo={{ $order_code }}&is_mask=0&bg=16">
                                                </div>
                                                <br>
                                                <p id="luu-y"> Khi quét mã thanh toán xong vui lòng bấm xác nhận
                                                    đặt hàng
                                                    bên dưới để hoàn tất thanh toán đơn hàng. </p>
                                                <button id="btn-payment" form="frmthanhtoan" class="primary-btn" style="margin: auto;" type="submit" name="btnDatHang">Xác nhận
                                                    thanh toán</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                const chuyenKhoanRadio = document.getElementById('f-option5');
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
                        </div>
                    </div>
                </div>
                <div class="KQyCj0" aria-live="polite">
                    <h2 class="a11y-visually-hidden">Tổng thanh toán</h2>
                    <h3 class="bwwaGp iL6wsx BcITa9">Tổng tiền hàng</h3>
                    <div class="bwwaGp R3a05f BcITa9">{{ session('cart.total', 0) }}</div>
                    <h3 class="bwwaGp iL6wsx RY9Grr">Phí vận chuyển</h3>
                    <div class="bwwaGp R3a05f RY9Grr" id="fee_ship1">₫0</div>
                    <!-- <h3 class="bwwaGp iL6wsx RY9Grr">Giá đã giảm</h3>
                    <div class="bwwaGp R3a05f RY9Grr">₫{{ session('cart.discount_amount', 0) }}</div> -->
                    <h3 class="bwwaGp iL6wsx _5y8V6a">Tổng thanh toán</h3>
                    <div class="bwwaGp l2Nmnm R3a05f _5y8V6a" id="total_payment">₫0</div>
                    <div class="uTFqRt">
                        <div class="k4VpYA">
                            <div class="C-NSr-">Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo <a href="#" target="_blank" rel="noopener noreferrer">Điều khoản của chúng tôi.</a></div>
                        </div>
                        <button class="stardust-button stardust-button--primary stardust-button--large apLZEG" id="btn-payment" form="frmthanhtoan" style="margin: auto;" type="submit" name="btnDatHang">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn form tự động gửi

        // Lấy giá trị của input ngoài form
        var inputElement = document.getElementById("f-option6");
        var selectedValue = inputElement.checked ? 'on' : 'off';

        // Tạo một ẩn input để gửi giá trị này với form
        var hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'external_selector';
        hiddenInput.value = selectedValue;

        // Thêm ẩn input vào form
        document.querySelector('form').appendChild(hiddenInput);

        // Sau khi đã thêm ẩn input, gửi form
        event.target.submit();
    });
</script>
@else
<script>
    window.location.href = "{{ route('login') }}";
</script>
@endauth
@endsection
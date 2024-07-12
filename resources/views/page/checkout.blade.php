@extends('layouts.layoutUser')

@section('title')
    Thanh toán
@endsection


@section('noidung')
    @auth
        <link rel="stylesheet" href="/css/checkout/linearicons.css">
        <link rel="stylesheet" href="/css/checkout/owl.carousel.css">
        <link rel="stylesheet" href="/css/checkout/themify-icons.css">
        <link rel="stylesheet" href="/css/checkout/font-awesome.min.css">
        <link rel="stylesheet" href="/css/checkout/nice-select.css">
        <link rel="stylesheet" href="/css/checkout/nouislider.min.css">
        <link rel="stylesheet" href="/css/checkout/bootstrap.css">
        <link rel="stylesheet" href="/css/checkout/main.css">
        <link rel="stylesheet" href="/css/checkout/qr.css">

        @php
            $genOdercode = 'ORD' . time();
            $lastFiveDigits = substr($genOdercode, 6);
            $user_id = isset(Auth::user()->id);
            $order_code = 'ORD' . $user_id . $lastFiveDigits;

        @endphp

        <section class="checkout_area section_gap">
            <div class="container">
                <div class="billing_details">
                    <form class="row contact_form" id="frmthanhtoan" name="frmthanhtoan" method="post"
                        action="{{ route('confirmCheckout', ['order_code' => $order_code]) }}">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="py-5 text-center">
                                    <h2>Thanh toán</h2>
                                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt
                                        hàng.</p>
                                </div>
                                <h3>Chi tiết thanh toán</h3>
                                <!-- <form class="row contact_form" id="frmthanhtoan" name="frmthanhtoan" method="post" action="{{ route('confirmCheckout', ['order_code' => $order_code]) }}"> -->
                                @csrf


                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" id="fullname" name="kh_ten"
                                        placeholder="Họ và tên" title="You have to enter 8-20 number characters."
                                        onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')"
                                        oninvalid="this.setCustomValidity('Vui lòng nhập tên')" required>
                                </div>

                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" pattern="^[0-9]{9,20}$" id="number"
                                        name="kh_dienthoai" placeholder="Số điện thoại"
                                        title="You have to enter 8-20 number characters."
                                        onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')"
                                        oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại hợp lệ')" required>
                                </div>
                                <!-- <div class="col-md-6 form-group p_star">
                                                                <input type="text" class="form-control" id="email" name="compemailany" placeholder="Email của bạn">
                                                            </div> -->

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
                                                total_amount = parseInt(document.getElementById("total_amount").innerText, 10);
                                                console.log(total_amount);

                                                // phí ship
                                                document.getElementById("fee_ship").innerText = total.toLocaleString() + ' VNĐ';
                                                document.getElementById("shipping_fee").value = total;

                                                // total payment
                                                var discount_amount = "{{ session('cart.discount_amount', 0) }}";
                                                total_payment = total_amount + total - parseInt(discount_amount);
                                                document.getElementById("total_payment").innerText = total_payment.toLocaleString() + ' VNĐ';
                                                document.getElementById("total_payment_qr").innerText = total_payment.toLocaleString() + ' VMĐ';
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

                                <input type="hidden" name="total_price" id="total_price"
                                    value="{{ session('cart.total', 0) }}">
                                <input type="hidden" name="shipping_fee" id="shipping_fee" value="0">
                                <input type="hidden" name="discount_amount" id="discount_amount"
                                    value="{{ session('cart.discount_amount', 0) }}">
                                <!-- </form> -->
                            </div>

                            <div class="col-lg-4">
                                <div class="order_box">
                                    <h2>Đơn hàng của bạn</h2>
                                    <ul class="list">
                                        <li><a href="#">Sản phẩm <span>Tổng</span></a></li>

                                        @foreach ($cart as $item)
                                            @if (is_array($item))
                                                <li>
                                                    <a href="#" class="limited-text">
                                                        {{ mb_strimwidth($item['product_name'], 0, 20, '...') }}
                                                        <span class="middle">x {{ $item['so_luong'] }}</span>
                                                        <span class="last">{{ $item['price'] * $item['so_luong'] }}
                                                            VNĐ</span>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <ul class="list list_2">
                                        <li>
                                            <a href="#">Tổng đơn hàng <span id="total_amount">
                                                    {{ session('cart.total', 0) }} VNĐ </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Giá đã giảm <span>{{ session('cart.discount_amount', 0) }}
                                                    VNĐ</span></a>
                                        </li>
                                        </li>
                                        <li><a href="#">Phí ship <span id="fee_ship"> 0 VNĐ</span></a></li>
                                        <li><a href="#">Tổng cần thanh toán <span id="total_payment"> 0 VNĐ</span></a>
                                        </li>
                                    </ul>
                                    <div class="payment_item">
                                        <div class="radion_btn">
                                            <input type="radio" id="f-option5" name="selector" value="1">
                                            <label for="f-option5">Chuyển khoản</label>
                                            <div class="check"></div>
                                        </div>
                                        <p>Vui lòng chuyển khoản đúng nội dung và số tiền cần chuyển để đơn hàng của bạn được xử
                                            lí nhanh nhất có thể.</p>
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
                                        <p> Hãy chuẩn bị tiền mặt trước khi đơn hàng được giao tới bạn </p>
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
                                                            <p> Số tiền cần thanh toán: <br><span
                                                                    id="total_payment_qr">{{ session('cart.total', 0) }}
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
                                                            <img alt="QR code" id="qrCodeImage"
                                                                src="https://apiqr.web2m.com/api/generate/MB/099999910/NGUYEN CONG DANH?amount={{ session('cart.total', 0) }}&memo={{ $order_code }}&is_mask=0&bg=16">
                                                        </div>
                                                        <br>
                                                        <p id="luu-y"> Khi quét mã thanh toán xong vui lòng bấm xác nhận
                                                            đặt hàng
                                                            bên dưới để hoàn tất thanh toán đơn hàng. </p>
                                                        <button id="btn-payment" form="frmthanhtoan" class="primary-btn"
                                                            style="margin: auto;" type="submit" name="btnDatHang">Xác nhận
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

                                    <div class="creat_account">
                                        <input type="checkbox" id="f-option4" name="" required>
                                        <label for="f-option4">Tôi đã đọc và chấp nhận các</label>
                                        <a href="/term-of-use">điều khoản & điều kiện*</a>
                                    </div>
                                    <!-- <div id="termsAlert" class="alert" style="display: none;">
                                                            Vui lòng chấp nhận điều khoản và điều kiện để tiếp tục.
                                                        </div> -->

                                    <!-- <a class="primary-btn" href="#"></a> -->
                                    <button style="margin: auto;" class="primary-btn" type="submit" name="btnDatHang">Tiếp
                                        tục thanh toán</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

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

<?php
$data = array("name" => "John", "age" => 30);
echo json_encode($data);
?>

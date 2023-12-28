@extends('layouts.layoutUser')

@section('title')
Chi tiết đơn hàng
@endsection

@section('noidung')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
<!-- css vendor -->
<link rel="stylesheet" href="/css/donhang/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/donhang/vendor/owl-carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="/css/donhang/vendor/photoswipe/photoswipe.css">
<link rel="stylesheet" href="/css/donhang/vendor/photoswipe/default-skin/default-skin.css">
<link rel="stylesheet" href="/css/donhang/vendor/select2/css/select2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- font - fontawesome -->
<!-- <link rel="stylesheet" href="/css/donhang/vendor/fontawesome/css/all.min.css"> -->
<!-- font - stroyka -->
<link rel="stylesheet" href="/css/donhang/fonts/stroyka/stroyka.css">

<!-- css -->
<link rel="stylesheet" href="/css/donhang/style.css">
<link rel="stylesheet" href="/css/donhang/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/donhang/plugins/sweetalert.css">
<link rel="stylesheet" href="/css/donhang/plugins/toastr.min.css">
<link rel="stylesheet" href="/css/donhang/plugins/sceditor/themes/default.min.css" />
<link rel="stylesheet" href="/css/donhang/main.css">
<link rel="stylesheet" href="/css/checkout/qr.css">

<style>
    #btn-payment {
        background-color: #3498db;
        color: #ffffff; 
        padding: 6px 20px;
        border: none;
        border-radius: 5px; 
        cursor: pointer;
        position: relative;
        left: 15%;
        transition: background-color 0.3s ease;
    }

    #btn-payment:hover {
        background-color: #2980b9; 
    }

</style>
@auth
<div class="block">
    <div class="container_fix">
        <div class="row">
            <div class="col-12 col-lg-12 m-auto mt-lg-0">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <div class="card-header">
                                <h4>Đơn hàng đã mua</h4>
                            </div>
                        </div>
                        <div class="col-8" style="text-align: right;">
                            <div class="card-header">
                                <form method="POST" action="{{ route('findOrder') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-4">
                                            <input placeholder="Nhập mã đơn hàng" value="" class="form-control" id="orderId" name="search_value" type="text" required>
                                        </div>
                                        <div class="col-8" style="text-align: left;">
                                            <div class="row">
                                                <div class="col-6">
                                                    <button class="btn btn-success btn-sm" type="submit">Tìm đơn hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="card-divider"></div> -->
                    <div class="card-body">
                        <div style="font-size: 14px;">
                            <p class="text-danger">Xin lưu ý:</p>
                            <li class="text-danger"> Hệ thống sẽ tự động duyệt đơn hàng của bạn sau khoảng 1-5 phút. Nếu quá 2 tiếng đơn hàng của bạn chưa được duyệt vui lòng liên hệ <a href="https://t.me/danhnguyenn" target="_blank" class="text-primary">Telegram</a> để được hỗ trợ.</li>
                            <li class="text-danger"> Nếu bạn thanh toán bằng phương thức chuyển khoản và đã chuyển khoản, bạn vui đòng đợi hệ thống của chúng tôi duyệt sau vài phút và không thanh toán lại.</li>
                            <li class="text-success"> Bấm vào MÃ ĐƠN HÀNG để xem chi tiết sản phẩm đã mua!</li>
                            <!-- <li class="text-success"> Bên mình chỉ giữ tiền 3 ngày, trong trường hợp đơn hàng không có khiếu nại gì, tiền sẽ được chuyển cho người bán, vì vậy xin hãy KIỂM TRA KỸ SẢN PHẨM sau khi mua. </li> -->
                        </div>
                        <div class="table-responsive" id="table-orders">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <!-- <th>Thao tác</th> -->
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày mua</th>
                                        <th>Người nhận</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th class="text-center">Tổng tiền</th>
                                        <th class="text-center">Phương thức</th>
                                        <th class="text-center">Thanh toán</th>
                                        <th class="text-center">Trạng thái</th>
                                        <th class="text-center">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count = 0; @endphp
                                    @if (!is_array($orders))
                                    @foreach ($orders as $item)
                                    @php $count++; @endphp
                                    <tr>
                                        <!-- <td class="text-nowrap">
                                                <a href="#" style="cursor: pointer;" data-toggle="tooltip" title="" data-original-title="Nhắn tin cho người bán">
                                                    <i style="font-size: 20px;" class="far fa-comment-dots"></i>

                                                </a>
                                                <a style="cursor: pointer;" data-toggle="tooltip" title="" onclick="showRatingModal(&quot;02862efd-5cdb-439f-8fec-21917bac956f&quot;, &quot;b85803f3-392f-40c3-a469-526d8c92570b&quot;, 0.0);" data-original-title="Đánh giá">
                                                    <img width="30px" src="/images/rating.png">
                                                </a>
                                                <a style="cursor: pointer;" data-toggle="tooltip" title="" onclick="showDisputeModal(&quot;b85803f3-392f-40c3-a469-526d8c92570b&quot;,&quot;2UQ96GS6JL&quot;);" data-original-title="Khiếu nại">
                                                    <img width="30px" src="/images/complain.png">
                                                </a>

                                            </td> -->
                                        <td>
                                            <a href="{{ route('viewOrderDetail', ['order_code'=>$item['order_code']]) }}">{{ $item['order_code'] }}</a>
                                        </td>
                                        <td>{{ $item['created_at'] }}</td>
                                        <td class="text-center">{{ $item['recipient_name'] }}</td>
                                        <td class="text-center">{{ $item['recipient_phone'] }}</td>
                                        <td class="text-center">{{ $item['recipient_address'] }}</td>
                                        <td class="text-center">{{ $item['total_price'] }}</td>
                                        <td class="text-center">{{ $item['type_payment'] == 1 ? 'Thanh toán chuyển khoản' : 
                                                                    ($item['type_payment'] == 2 ? 'Thanh toán khi nhận hàng' : 'Thanh toán trực tuyến') }}</td>
                                        <td class="text-center">
                                            @if ($item['type_payment'] == 1 && $item['status'] != 5)
                                            <button name="showPayment" type="button" class="btn btn-primary btn-payment" data-order-code="{{ $item['order_code'] }}" data-total-price="{{ $item['total_price'] }}" style="font-size: 1.2rem;">Thanh toán</button>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-info rounded" style="@if($item['status'] == 1 || $item['status'] == 4)  background: rgb(98, 178, 102); @elseif ($item['status'] == 5) background: red; / @endif">
                                                {{ $item['status'] == 0 ? 'Chờ thanh toán' : 
                                                    ($item['status'] == 1 ? 'Đã thanh toán' : 
                                                    ($item['status'] == 2 ? 'Đang xử lý' : 
                                                    ($item['status'] == 3 ? 'Đang vận chuyển' : 
                                                    ($item['status'] == 4 ? 'Hoàn tất' : 
                                                    'Đã hủy')))) }}
                                            </span>
                                        </td>

                                        <td class="text-center">
                                            <a id="cancelLink" href="{{ route('cancelOrder', ['order_code' => $item['order_code']]) }}">{{ $item['status'] == 0 ? 'Hủy đơn hàng' : '' }}</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @if ($count == 0)
                                    <tr>
                                        <td colspan="10" style="padding: 20px 0px;" class="text-center">Không tìm thấy đơn hàng nào</td>
                                    </tr>
                                    @endif
                                    @else
                                    <tr>
                                        <td colspan="10" style="padding: 20px 0px;" class="text-center">Mã đơn hàng không tồn tại</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                            <!-- Paging-->
                            <div class="pagination justify-content-center">
                                {{ $orders->links('pagination::bootstrap-4') }}
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
                                                    <p> Số tiền cần thanh toán: <br><span id="total_payment_qr">
                                                            VNĐ</span></p>
                                                    <p> Nội dung chuyển khoản: <br><span id="order_code_span"></span>
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
                                                <h5>Quét mã QR để thanh toán</h5>
                                                <p> Sử dụng <span>App Internet Banking</span> hoặc ứng dụng camera hỗ
                                                    trợ QR
                                                    code để quét mã </p>
                                                <div class="img-item">
                                                    <img alt="QR code" id="qrCodeImage" src="https://apiqr.web2m.com/api/generate/MB/099999910/NGUYEN CONG DANH?amount=&memo=&is_mask=0&bg=16">
                                                </div>
                                                <br>
                                                <p id="luu-y"> Khi quét mã thanh toán xong vui lòng bấm xác nhận
                                                    đặt hàng
                                                    bên dưới để hoàn tất thanh toán đơn hàng. </p>
                                                <button id="btn-payment" type="submit" name="btnDatHang">Xác nhận thanh toán</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <script>
                                const paymentOnlineDiv = document.getElementById('paymentOnline');
                                const openPopupButton = document.getElementById('openPopup');
                                const popup = document.getElementById('popup');
                                const closePopupButton = document.getElementById('closePopup');
                                var span = document.getElementsByClassName("close")[0];

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

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var paymentButtons = document.querySelectorAll('.btn-payment');
                                    var qrCodeImage = document.getElementById('qrCodeImage');
                                    var totalPaymentSpan = document.getElementById('total_payment_qr');
                                    var orderCodeSpan = document.getElementById('order_code_span');

                                    paymentButtons.forEach(function (button) {
                                        button.addEventListener('click', function () {
                                            var orderCode = button.getAttribute('data-order-code');
                                            var totalPrice = button.getAttribute('data-total-price');
                                            orderCodeSpan.textContent = orderCode;
                                            totalPaymentSpan.textContent = totalPrice;

                                            var paymentOnline = document.getElementById('paymentOnline');
                                            paymentOnline.style.display = paymentOnline.style.display === 'none' ? 'block' : 'none';

                                            console.log('Order Code:', orderCode);
                                            console.log('Total Price:', totalPrice);
                                            
                                            handlePayment(orderCode, totalPrice);
                                        });
                                    });

                                    function handlePayment(orderCode, totalPrice) {
                                        // alert('Thanh toán cho đơn hàng ' + orderCode + ' với giá ' + totalPrice);
                                        qrCodeImage.src = 'https://apiqr.web2m.com/api/generate/MB/099999910/NGUYEN CONG DANH?amount=' + totalPrice + '&memo=' + encodeURIComponent(orderCode) + '&is_mask=0&bg=16';
                                        
                                    }
                                });

                                document.getElementById('btn-payment').addEventListener('click', function () {
                                    document.getElementById('paymentOnline').style.display = 'none';
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Thành công!',
                                        text: 'Đã xác nhận chuyển khoản, vui lòng đợi duyệt.',
                                        showConfirmButton: false,
                                        timer: 4000
                                    });
                                    
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('cancelLink').addEventListener('click', function(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết
        if (confirm('Bạn có chắc chắn muốn hủy không?')) {
            window.location.href = this.getAttribute('href');
        }
    });
</script>



@else
<script>
    window.location.href = "{{ route('index') }}";
</script>
@endauth
<!-- <script>
    // reload trang mỗi 2 phút
    setTimeout(function() {
        location.reload();
    }, 2 * 60 * 1000);
</script> -->
@endsection
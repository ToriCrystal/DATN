<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bootstrap Multi Step Form</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/css/seller-register.css">
</head>

<body>

    {{-- <!-- Modal --> --}}

    <header class="header">
        <h1 class="header__title">Trở thành nhà bán hàng của CFF</h1>
    </header>
    <div class="content">
        <div class="content__inner">
            <div class="container overflow-hidden">
                <div class="multisteps-form">

                    <div class="row">
                        <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="User Info">Thông tin cá nhân</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Address">Cài đặt vận
                                    chuyển</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form id="addressForm" class="multisteps-form__form" action="/submit-seller-registration"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title text-center">Thông tin cá nhân</h3>
                                    <div class="multisteps-form__content">
                                        <input type="hidden" name="{{ Auth::user()->id }}">
                                        <div class="form-row mt-4">
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <label for="shopName" class="col-3">Tên shop</label>
                                                    <input name="shopName"
                                                        class="multisteps-form__input form-control col-6" type="text"
                                                        placeholder="Tên shop" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <label for="shopAddress" class="col-3">Địa chỉ lấy hàng</label>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#addressModal">+ Thêm địa chỉ lấy hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <label for="email" class="col-3">Email</label>
                                                    <input name="email"
                                                        class="multisteps-form__input form-control col-6" type="text"
                                                        placeholder="Email" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Kế tiếp</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <h3 class="multisteps-form__title text-center">Cách thức vận chuyển</h3>
                                    <div class="multisteps-form__content">
                                        <div class="form-row mt-4">
                                            <div class="col-12">
                                                <label class="multisteps-form__label">Chọn phương thức vận
                                                    chuyển</label>
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="deliveryOption1"
                                                        name="deliveryOptions[BEST
                                                    Express]"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="deliveryOption1">BEST
                                                        Express</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="deliveryOption2"
                                                        name="deliveryOptions[J&T
                                                    Express]"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="deliveryOption2">J&T
                                                        Express</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="deliveryOption3"
                                                        name="deliveryOptions[Shoppe
                                                    Express]"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="deliveryOption3">Shoppe
                                                        Express</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="deliveryOption4"
                                                        name="deliveryOptions[Giao
                                                        Hàng Nhanh]"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="deliveryOption4">Giao
                                                        Hàng Nhanh</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Trước đó</button>
                                            <button class="btn btn-primary ml-auto" type="submit"
                                                title="Hoàn tất">Hoàn tất</button>


                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="addressModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addressModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addressModalLabel">Thêm địa chỉ lấy hàng
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form inside the modal -->
                                                <form id="addressForm">
                                                    <div class="form-group">
                                                        <label for="fullName">Họ và tên</label>
                                                        <input type="text" class="form-control" name="fullName"
                                                            id="fullName" placeholder="Họ và tên" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phoneNumber">Số điện thoại</label>
                                                        <input type="text" class="form-control" name="phoneNumber"
                                                            id="phoneNumber" placeholder="Số điện thoại">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Địa chỉ</label>
                                                        <input type="text" class="form-control" name="address"
                                                            id="address" placeholder="Địa chỉ">
                                                    </div>
                                                    <button type="button" class="btn btn-primary"
                                                        id="submitAddressBtn">Lưu địa chỉ</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-12 col-lg-8 m-auto">
        <form action="/submit-seller-registration" method="post" enctype="multipart/form-data">
            @csrf

            <input name="shopName" type="text" placeholder="Tên shop" />
            <input type="text" class="form-control" name="fullName" placeholder="Họ và tên" value="">
            <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
            <input type="text" class="form-control" name="phoneNumber" placeholder="Số điện thoại">

            <button type="submit">Tạo</button>
        </form>

    </div> --}}


    <script src="/js/seller-register.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Lắng nghe sự kiện input trên trường shopName
            $("input[name='shopName']").on("input", function() {
                // Lấy giá trị của trường và hiển thị nó trong console
                var shopNameValue = $(this).val();
                console.log("Giá trị của shopName:", shopNameValue);
            });
        });
    </script>
</body>

</html>

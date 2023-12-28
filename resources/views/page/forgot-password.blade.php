<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quên mật khẩu</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap5.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <style>
        html,
        body {
            font-weight: 400 !important;
            font-family: 'Poppins', sans-serif !important;
        }

        .primary-color {
            color: #4e51fd;
        }

        .btn-sz-primary {
            width: 100%;
            color: white !important;
            background-color: #4e51fd;
        }

        .btn-sz-primary:hover {
            background-color: #3c3ff8;
        }

        .main-text {
            font-size: 25px;
            line-height: 1.4;
            letter-spacing: 3px;
        }

        .main-input {
            width: 80%;
            border: none !important;
            box-shadow: none !important;
            border-radius: 0px !important;
            border-bottom: 2px solid #4e51fd !important;
        }
    </style>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 text-center">
                <img src="https://i.pinimg.com/736x/76/38/69/763869a33c8ac9e99a59500992c11127.jpg" alt="Main IMG"
                    class="img-fluid">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-5">
                <h2 class="main-text pt-5 mt-5">Quên <br> mật khẩu?</h2>

                <form method="POST" action="{{ route('password.email') }}" id="passwordResetForm">
                    @csrf

                    <div class="mb-3">
                        <input name="email" id="email" placeholder="Nhập email của bạn"
                            class="form-control main-input mt-5" value="{{ old('email') }}">

                        @error('email')
                            <div class="text-danger"  style="font-size: 14.5px">{{ $message }}</div>
                        @enderror
                        <div class="text-danger"  style="font-size: 14.5px" id="emailError"></div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3">
                            <button type="button" onclick="validateForm()" class="btn btn-sz-primary mt-3">Thay
                                đổi</button>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 pt-3">
                            <a href="{{ route('login') }}" class="back-to-login">Quay trở lại đăng nhập</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery.js"></script>

<script>
    function validateForm() {
        var emailInput = document.getElementById('email');
        var emailError = document.getElementById('emailError');
        var emailValue = emailInput.value.trim();

        // Reset error message
        emailError.innerText = '';

        // Laravel validation
        var laravelErrors = @json($errors->get('email'));
        if (laravelErrors && laravelErrors.length > 0) {
            emailError.innerText = laravelErrors[0];
            return;
        }

        // Custom JavaScript validation
        if (emailValue === '') {
            emailError.innerText = '* Vui lòng nhập địa chỉ email.';
            return;
        }

        if (!isValidEmail(emailValue)) {
            emailError.innerText = '* Địa chỉ email không hợp lệ.';
            return;
        }

        // If no errors, submit the form
        document.getElementById('passwordResetForm').submit();
    }

    function isValidEmail(email) {
        var re =
            /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
</script>

</html>

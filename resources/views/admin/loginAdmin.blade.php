<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>Login Page</title>
</head>

<body>
    <style>
        @import url("reset.css");

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background: linear-gradient(to right, #333399, #ff00cc);
            display: flex;
            justify-content: center;
            align-items: center;
        }


        /* Login Card */
        .login-card {
            width: 450px;
            background: rgba(255, 255, 255, .5);
            padding: 4rem;
            border-radius: 10px;
            position: relative;
        }

        .login-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, .15);
            transform: rotate(-6deg);
            border-radius: 10px;
            z-index: -1;
        }

        /* ---------- */

        /* Login Card Logo */
        .login-card-logo {
            margin-bottom: 2rem;
        }

        .login-card-logo img {
            width: 60px;
        }

        /* ---------- */

        /* Login Card Standard */
        .login-card-logo,
        .login-card-header,
        .login-card-footer {
            text-align: center;
        }

        .login-card a {
            text-decoration: none;
            color: #35339a;
        }

        .login-card a:hover {
            text-decoration: underline;
        }

        /* ---------- */

        /* Login Card Header */
        .login-card-header {
            margin-bottom: 2rem;
        }

        .login-card-header h1 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: .5rem;
        }

        .login-card-header h1+div {
            font-size: calc(1rem * .8);
            opacity: .8;
        }

        /* ---------- */

        /* Login Card Form */
        .login-card-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .login-card-form .form-item {
            position: relative;
        }

        .login-card-form .form-item .form-item-icon {
            position: absolute;
            top: .82rem;
            left: 1.4rem;
            font-size: 1.3rem;
            opacity: .4;
        }

        .login-card-form .checkbox {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .login-card-form .form-item-other {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: calc(1rem * .8);
            margin-bottom: .5rem;
        }

        /* ---------- */

        /* Login Card Footer */
        .login-card-footer {
            margin-top: 1.5rem;
            font-size: calc(1rem * .8);
        }

        /* ---------- */

        /* Login Card Form Elements */
        .login-card input[type="text"],
        .login-card input[type="password"],
        .login-card input[type="email"] {
            border: none;
            outline: none;
            background: rgba(255, 255, 255, .3);
            padding: 1rem 1.5rem;
            padding-left: calc(1rem * 3.5);
            border-radius: 100px;
            width: 100%;
            transition: background .5s;
        }

        .login-card input:focus {
            background: white;
        }

        .login-card input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: black;
        }

        .login-card button {
            background: black;
            color: white;
            padding: 1rem;
            border-radius: 100px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: background .5s;
        }

        .login-card button:hover {
            background-color: rgba(0, 0, 0, 0.85);
            cursor: pointer;
        }

        /* ---------- */

        /* Login Card Social Buttons */
        .login-card-social {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            text-align: center;
            margin-top: 3rem;
        }

        .login-card-social>div {
            opacity: .8;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: calc(1rem * .8);
        }

        .login-card-social-btns {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .login-card-social-btns a {
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, .6);
            border-radius: 100px;
            transition: all .5s;
        }

        .login-card-social-btns a:hover {
            background-color: white;
            transform: scale(1.1);
        }

        /* ---------- */


        /* Responsive */
        @media (max-width: 768px) {

            body {
                padding: 2rem 0;
            }

            .login-card {
                width: 280px;
                padding: 2rem;
            }

        }

        *:where(:not(html, iframe, canvas, img, svg, video):not(svg *, symbol *)) {
            display: revert;
        }

        /* Preferred box-sizing value */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* Reapply the pointer cursor for anchor tags */
        a,
        button {
            cursor: revert;
        }

        /* Remove list styles (bullets/numbers) */
        ol,
        ul,
        menu {
            list-style: none;
        }

        /* For images to not be able to exceed their container */
        img {
            max-width: 100%;
        }

        /* removes spacing between cells in tables */
        table {
            border-collapse: collapse;
        }

        /* Safari - solving issue when using user-select:none on the <body> text input doesn't working */
        input,
        textarea {
            -webkit-user-select: auto;
        }

        /* revert the 'white-space' property for textarea elements on Safari */
        textarea {
            white-space: revert;
        }

        /* minimum style to allow to style meter element */
        meter {
            -webkit-appearance: revert;
            appearance: revert;
        }

        /* reset default text opacity of input placeholder */
        ::placeholder {
            color: unset;
        }

        /* fix the feature of 'hidden' attribute.
        display:revert; revert to element instead of attribute */
            :where([hidden]) {
                display: none;
            }

            /* revert for bug in Chromium browsers
        - fix for the content editable attribute will work properly.
        - webkit-user-select: auto; added for Safari in case of using user-select:none on wrapper element*/
            :where([contenteditable]:not([contenteditable="false"])) {
                -moz-user-modify: read-write;
                -webkit-user-modify: read-write;
                overflow-wrap: break-word;
                -webkit-line-break: after-white-space;
                -webkit-user-select: auto;
            }

            /* apply back the draggable feature - exist only in Chromium and Safari */
            :where([draggable="true"]) {
                -webkit-user-drag: element;
            }
    </style>
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="/images/logo.png" style="height: 50px; width: 80%" alt="logo">
            </div>
            <div class="login-card-header">
                <h1>Đăng nhập</h1>
                <div>Với tư cách quản trị viên</div>
            </div>
            <form class="login-card-form" id="login-form" action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input type="text" id="email" name="email" value="{{ old('email') }}">
                    <small style="color: red;">{{ $errors->first('email') }}</small>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" id="password" name="password">
                    <small>{{ $errors->first('password') }}</small>
                </div>
                <div class="form-item-other"></div>
                <button type="submit">Đăng nhập</button>
            </form>


        </div>
    </div>
    </div>
    <script src="/js/loginAdmin.js"></script>
</body>

</html>

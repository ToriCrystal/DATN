function checkPasswordStrength(passwordId) {
    var password = document.querySelector('#' + passwordId);
    var passwordValue = password.value.trim();
    var strengthMeter = document.getElementById('password-strength-meter');
    var strengthText = document.getElementById('password-strength-text');

    var lengthRegex = /^.{8,}$/;
    var complexityRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (lengthRegex.test(passwordValue) && complexityRegex.test(passwordValue)) {
        strengthMeter.value = 4;
        strengthText.innerText = 'Mật khẩu mạnh';
    } else if (lengthRegex.test(passwordValue)) {
        strengthMeter.value = 2;
        strengthText.innerText = 'Mật khẩu trung bình';
    } else {
        strengthMeter.value = 1;
        strengthText.innerText = 'Mật khẩu yếu';
    }
}

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
    const small = formControl.querySelector('small');
    small.innerText = '';
}

function isValidEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function checkEmail(inputId, passwordId) {
    var email = document.querySelector('#' + inputId);
    var password = document.querySelector('#' + passwordId);

    var emailValue = email.value.trim();

    if (emailValue === '') {
        showError(email, '* Nhập email bắt buộc');
    } else if (!isValidEmail(emailValue)) {
        showError(email, '* Nhập email không hợp lệ');
    } else {
        showSuccess(email);

        // Kiểm tra xem có lỗi không, nếu không có lỗi thì submit form
        if (!document.querySelector('.form-control.error')) {
            document.getElementById('login-form').submit();
        }
    }

    var passwordValue = password.value.trim();

    if (passwordValue === '') {
        showError(password, '* Nhập mật khẩu bắt buộc');
    } else {
        showSuccess(password);
    }
}

function checkSignUpEmail(inputId, passwordId) {
    var signUpEmail = document.querySelector('#' + inputId);
    var emailValue = signUpEmail.value.trim();
    var password = document.querySelector('#' + passwordId);
    var passwordValue = password.value.trim();

    if (emailValue === '') {
        showError(signUpEmail, '* Nhập email bắt buộc');
    } else if (!isValidEmail(emailValue)) {
        showError(signUpEmail, '* Nhập email không hợp lệ');
    } else {
        showSuccess(signUpEmail);
    }

    if (passwordValue === '') {
        showError(password, '* Nhập mật khẩu bắt buộc');
    } else if (passwordValue.length < 6) {
        showError(password, '* Mật khẩu phải có ít nhất 6 ký tự');
    } else {
        showSuccess(password);
    }

    if (!document.querySelector('.form-control.error')) {
        document.getElementById('register-form').submit();
    }
}


// ...

function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
    const small = formControl.querySelector('small');
    small.innerText = '';
}


function checkUserName(inputId) {
    var userName = document.querySelector('#' + inputId);
    var userNameValue = userName.value.trim();

    if (userNameValue === '') {
        showError(userName, '* Nhập họ tên bắt buộc');
    } else {
        showSuccess(userName);
    }
}

function checkSignUpPassword(inputId) {
    var signUpPassword = document.querySelector('#' + inputId);
    var passwordValue = signUpPassword.value.trim();

    if (passwordValue === '') {
        showError(signUpPassword, '* Nhập mật khẩu bắt buộc');
    } else if (passwordValue.length < 8) {  // Đã chỉnh sửa thành 8 ký tự
        showError(signUpPassword, '* Mật khẩu phải có ít nhất 8 ký tự');  // Đã chỉnh sửa thông báo
    } else {
        showSuccess(signUpPassword);
    }
}


function checkPasswordConfirmation(inputId, passwordId) {
    var confirmPassword = document.querySelector('#' + inputId);
    var password = document.querySelector('#' + passwordId);

    var confirmPasswordValue = confirmPassword.value.trim();
    var passwordValue = password.value.trim();

    if (confirmPasswordValue === '') {
        showError(confirmPassword, '* Nhập xác nhận mật khẩu bắt buộc');
    } else if (confirmPasswordValue !== passwordValue) {
        showError(confirmPassword, '* Xác nhận mật khẩu không khớp');
    } else {
        showSuccess(confirmPassword);
    }
}

var loginForm = document.getElementById('login-form');
var registerForm = document.getElementById('register-form');

loginForm.addEventListener('submit', function (e) {
    e.preventDefault();
    checkEmail('email', 'password');
});

registerForm.addEventListener('submit', function (e) {
    e.preventDefault();
    checkSignUpEmail('email-signup', 'password-signup');
    checkPasswordConfirmation('password_confirmation', 'password-signup');
    checkUserName('name');
});

var passwordSignup = document.getElementById('password-signup');
passwordSignup.addEventListener('input', function () {
    checkPasswordStrength('password-signup');
});

document.addEventListener('DOMContentLoaded', function () {
    var forgotPasswordLink = document.getElementById('forgot-password-link');
    var forgotPasswordForm = document.getElementById('forgot-password-form');

    forgotPasswordLink.addEventListener('click', function (event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

        // Hiển thị form "Quên mật khẩu" và ẩn các form khác (nếu cần)
        document.querySelector('.sign-in-container').style.display = 'none';
        document.querySelector('.sign-up-container').style.display = 'none';
        forgotPasswordForm.style.display = 'block';
    });
});



var forgotPasswordLink = document.getElementById('forgot-password-link');

forgotPasswordLink.addEventListener('click', function (event) {
    event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

    // Hiển thị form "Quên mật khẩu" và ẩn các form khác (nếu cần)
    document.querySelector('.sign-in-container').style.display = 'none';
    document.querySelector('.sign-up-container').style.display = 'none';
    var forgotForm = document.getElementById('forgot-password-form'); // Đây là sự thay đổi
    forgotForm.style.display = 'block';
});

document.getElementById('forgot-email').addEventListener('input', function () {
    var emailValue = this.value.trim();
    var emailError = document.querySelector('.forgot-email-error');

    if (emailValue === '') {
        emailError.innerText = 'Vui lòng nhập địa chỉ email.';
        return;
    }

    if (!isValidEmail(emailValue)) {
        emailError.innerText = 'Địa chỉ email không hợp lệ.';
    } else {
        emailError.innerText = '';
    }
});

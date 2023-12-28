var email = document.querySelector('#email');
var password = document.querySelector('#password');
var form = document.querySelector('#login-form');

function showError(input, message) {
    let parent = input.parentElement;
    let small = parent.querySelector('small');

    parent.classList.add('Error');
    small.innerText = message;
}

function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
    const small = formControl.querySelector('small');
    small.innerText = '';
}

function isValidEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function checkEmpty() {
    if (email.value.trim() === '') {
        showError(email, '* Email đang để trống');
    } else if (!isValidEmail(email.value.trim())) {
        showError(email, '* Email không đúng định dạng');
    } else {
        showSuccess(email);
    }

    if (password.value.trim() === '') {
        showError(password, '* Mật khẩu đang để trống');
    } else {
        showSuccess(password);
    }
}

form.addEventListener('submit', function (e) {
    // Check validation before preventing default
    checkEmpty();

    // Prevent default only if there are errors
    if (document.querySelectorAll('.Error').length > 0) {
        e.preventDefault();
    }
    // If you want to perform further logic, you can do it here.
});

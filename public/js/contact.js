document.addEventListener('DOMContentLoaded', function () {
    var contactForm = document.getElementById('contactForm');

    contactForm.addEventListener('submit', function (event) {
        // Validate form on submission
        validateForm();

        // If there are errors, prevent form submission
        if (document.querySelectorAll('.Error').length > 0) {
            event.preventDefault();
        }
    });

    // Helper function to validate form fields
    function validateForm() {
        var name = document.querySelector('#name');
        var email = document.querySelector('#email');
        var subject = document.querySelector('#subject');
        var comment = document.querySelector('#comment');

        // Reset previous validation styles
        resetValidationStyles();

        // Validate name (required)
        if (name.value.trim() === '') {
            showError(name, 'Họ và tên không được để trống');
        } else {
            showSuccess(name);
        }

        // Validate email (required and in email format)
        if (email.value.trim() === '') {
            showError(email, '* Email không được để trống');
        } else if (!isValidEmail(email.value.trim())) {
            showError(email, '* Email không hợp lệ');
        } else {
            showSuccess(email);
        }

        // Validate subject (required)
        if (subject.value.trim() === '') {
            showError(subject, '* Chủ đề không được để trống');
        } else {
            showSuccess(subject);
        }

        // Validate comment (required)
        if (comment.value.trim() === '') {
            showError(comment, '* Nội dung không được để trống');
        } else {
            showSuccess(comment);
        }
    }

    // Helper function to check if the email is valid
    function isValidEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    // Helper function to show error message
    function showError(input, message) {
        let parent = input.parentElement;

        // Create and append a small element
        let small = document.createElement('small');
        small.innerText = message;
        small.style.color = 'red'; // Set the text color to red
        small.style.fontSize = '12.5px'; // Set the font size to 13 pixels
        parent.appendChild(small);

        parent.classList.add('Error');
    }


    // Helper function to show success style
    function showSuccess(input) {
        const formControl = input.parentElement;
        formControl.classList.add('success');
    }

    // Helper function to reset validation styles
    function resetValidationStyles() {
        var formControls = document.querySelectorAll('.form-control');
        formControls.forEach(function (formControl) {
            formControl.classList.remove('Error', 'success');

            // Remove any existing small elements
            let small = formControl.querySelector('small');
            if (small) {
                formControl.removeChild(small);
            }
        });
    }
});

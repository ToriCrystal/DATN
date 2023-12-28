<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="container" id="container">
        @yield('noidung')
        @yield('overlay')
    </div>
</body>
<script src="/js/loginregister.js"></script>
<script>
    document.getElementById('email-signup').addEventListener('input', function() {
        var emailValue = this.value.trim();
        var emailStatus = document.getElementById('email-status');

        if (emailValue === '') {
            emailStatus.innerText = '';
            return;
        }

        fetch('/check-email', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Đảm bảo bạn cung cấp token CSRF từ Laravel
                },
                body: 'email=' + encodeURIComponent(emailValue)
            })
            .then(response => response.text())
            .then(data => {
                emailStatus.innerText = data;
            })
            .catch(error => console.error('Error:', error));
    });



    
</script>

</html>

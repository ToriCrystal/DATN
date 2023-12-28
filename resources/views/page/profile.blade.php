@extends('layouts.layoutUser')

@section('title')
    Thông tin tài khoản
@endsection


@section('noidung')
    <style>
        button {
            height: 50px;
            width: 150px;
            margin-left: 10px;
            border: 2px solid #000;
            border-radius: 10px;

        }
    </style>
    <div class="container bootstrap snippets bootdey">
        <h2 style="margin-top: 10px">Thay đổi thông tin</h2>
        <hr>
        <div class="row" style="    padding-bottom: 30px;
        ">
            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data"
                id="profileForm">
                @csrf
                @method('patch')

                <div class="col-md-3">
                    <div class="text-center">
                        <img style="height: 150px; /* Ensure the height matches the width to create a perfect circle */border-radius: 50%;object-fit: cover;width: 150px"
                        id="avatar-preview" src="{{ $user->image != '' ?  $user->image : '/images/users/userdefault.jpg' }}" 
                        class="avatar img-circle img-thumbnail" alt="avatar">

                        <h6>Thay đổi ảnh đại diện của bạn</h6>
                        <input type="file" id="avatar" name="avatar" class="form-control">
                    </div>
                </div>

                <div class="col-md-9 personal-info">
                    <h3>Thông tin cá nhân</h3>

                    <div class="form-group">
                        <label for="name" class="col-lg-3 control-label">Họ và tên</label>
                        <div class="col-lg-8">
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ $user->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-8">
                            <input type="text" id="email" name="email" class="form-control"
                                value="{{ $user->email }}">

                        </div>
                        {{-- <a href="{{ route('verification.notice') }}">Xác thực email</a> --}}
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-lg-3 control-label">Mật khẩu</label>
                        <div class="col-lg-8">
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <small></small>

                    </div>

                    <div class="form-group">
                        <label for="password-update" class="col-lg-3 control-label">Mật khẩu mới</label>
                        <div class="col-lg-8">
                            <input type="password" id="password-update" name="password-update" class="form-control">
                        </div>
                        <small></small>

                    </div>

                    <button type="submit" id="updateButton">
                        Cập nhật tài khoản
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('updateButton').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Assuming you're using the Fetch API to send an AJAX request
            fetch('{{ route('profile.update') }}', {
                    method: 'POST',
                    body: new FormData(document.getElementById('profileForm')),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 2000
                        });

                        // Optionally, you can redirect the user or perform other actions after success
                        // window.location.href = '/dashboard';
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi!',
                            text: data.message,
                        });
                    }
                })
                .catch(error => {
                    console.error('Lỗi:', error);
                });
        });
    </script>
@endsection

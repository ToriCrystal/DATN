@extends('layouts.layoutLoginRegister')

@section('title')
    Đăng nhập
@endsection

@section('noidung')
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}" id="login-form">
            @csrf
            <h1>Đăng nhập</h1>
            <div class="social-container">
                <a href="{{ route('auth.facebook') }}" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ url('auth/google') }}" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>hoặc sử dụng tài khoản của bạn</span>

            <div class="form-control">
                <x-input-label for="email" />
                <x-text-input id="email" class="email-2" name="email" :value="old('email')" placeholder="Email" />
                <small class="email-error-2">
                    <x-input-error :messages="$errors->get('email')" />
                </small>
                <span></span>
            </div>

            <div class="form-control">
                <x-input-label for="password" />
                <x-text-input id="password" class="password-2" type="password" name="password" placeholder="Mật khẩu" />
                <small class="email-error-2">
                    <x-input-error :messages="$errors->get('password')" />
                </small> <span></span>
            </div>

            <a href="{{ route('password.request') }}">Quên mật khẩu?</a>


            <x-primary-button>
                {{ __('Đăng nhập') }}
            </x-primary-button>
        </form>
    </div>
    <div class="form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}" id="register-form">
            @csrf
            <h1>Tạo tài khoản</h1>
            <div class="social-container">
                <a href="{{ url('login/facebook') }}" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ url('auth/google') }}" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>hoặc sử dụng tài khoản của bạn</span>
            <div class="form-control">
                <x-input-label for="name" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    placeholder="Họ và tên" />
                <small class="email-error-2">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </small>
            </div>

            <div class="form-control">

                <x-input-label for="email-signup" />
                <x-text-input id="email-signup" class="block mt-1 w-full" name="email" :value="old('email')"
                    placeholder="Email" />
                <small class="email-error-2"> <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </small>
                <div id="email-status"></div>

            </div>

            <div class="form-control">
                <x-input-label for="password-signup" />
                <x-text-input id="password-signup" class="block mt-1 w-full" type="password" name="password"
                    placeholder="Mật khẩu" />
                <small class="email-error-2">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </small>
                <meter id="password-strength-meter" max="4" low="1" high="3" optimum="4"></meter>
                <p id="password-strength-text"></p>
            </div>

            <div class="form-control">
                <x-input-label for="password_confirmation" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" placeholder="Xác nhận mật khẩu" />
                <small class="email-error-2">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </small>
            </div>

            <x-primary-button>
                {{ __('Đăng ký') }}
            </x-primary-button>
        </form>
    </div>
    <div class="form-container forgot-password-container" id="forgot-password-form" style="display: none;">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" id="forgot-password-form">
            @csrf
            <h1>Quên mật khẩu</h1>
            <div class="form-control">
                <x-input-label for="email" />
                <x-text-input id="forgot-email" class="block mt-1 w-full" type="email" name="email"
                    placeholder="Email" />
                <small class="forgot-email-error" style="color: red;"></small>
            </div>
            <x-primary-button>
                {{ __('Thay đổi mật khẩu') }}
            </x-primary-button>
        </form>

        <div class="form-control">
            <x-input-label for="email" />
            <x-text-input id="forgot-email-confirmation" class="block mt-1 w-full" type="email" name="email"
                placeholder="Xác nhận Email" />
            <small class="forgot-email-error" style="color: red;"></small>
        </div>

    </div>



    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Xin chào!</h1>
                <p>Tạo tài khoản của bạn và bắt đầu tham gia vào hành trình mới</p>
                <button class="ghost" id="signIn">Đăng nhập</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Chào mừng quay trở lại!</h1>
                <p>Giữ kết nối với chúng tôi bằng cách đăng nhập tài khoản của bạn</p>
                <button class="ghost" id="signUp">Đăng ký</button>
            </div>
        </div>
    </div>
@endsection

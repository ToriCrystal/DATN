@extends('layouts.layoutLoginRegister')

@section('title')
    Đăng ký
@endsection

@section('noidung')
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Đăng ký</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="/auth/google" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>hoặc sử dụng email của bạn để đăng ký</span>
            <x-input-label for="name" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" placeholder="Họ và tên" />
            <small style="font-size: 0.7em;">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </small>
            <x-input-label for="email" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" placeholder="Email" />
            <small style="font-size: 0.7em;"> <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </small>
            <div id="email-status"></div>

            <x-input-label for="password" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" placeholder="Mật khẩu" />
            <small style="font-size: 0.7em;">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

            </small>


            <x-input-label for="password_confirmation" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                required autocomplete="new-password" placeholder="Xác nhận mật khẩu" />

            <small style="font-size: 0.7em;">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            </small>

            <x-primary-button class="ml-4">
                {{ __('Đăng ký') }}
            </x-primary-button>
        </form>
    </div>
@endsection

@section('overlay')
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Chào bạn!
                </h1>
                <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                <a href="{{ route('login') }}">
                    <button class="ghost" id="signUp">Đăng nhập</button>
                </a>
            </div>
        </div>
    </div>
@endsection

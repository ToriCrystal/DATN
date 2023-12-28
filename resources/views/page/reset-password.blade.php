@extends('layouts.layoutLoginRegister')

@section('title')
    Đăng nhập
@endsection

@section('noidung')
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('password.store') }}" id="login-form">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            {{$request->route('token')}}
            <h1 style="font-size: 25px">Thay đổi mật khẩu</h1>
            <br>
            <div class="form-control">
                <x-input-label for="email" />
                <x-text-input id="email" class="email-2" name="email"  :value="old('email', $request->email)" required autofocus autocomplete="username"/>
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

            <div class="form-control">
                <x-input-label for="password_confirmation" />
                <x-text-input  id="password_confirmation"  class="password-2" type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" />
                <small class="email-error-2">
                    <x-input-error :messages="$errors->get('password_confirmation')" />
                </small> <span></span>
            </div>
            <br>


            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </form>
    </div>



    <div class="overlay-container">
        <div class="overlay">

            <div class="overlay-panel overlay-right">
                <h1>Chào mừng quay trở lại!</h1>
                <p>Giữ kết nối với chúng tôi bằng cách đăng nhập tài khoản của bạn</p>
            </div>
        </div>
    </div>
@endsection

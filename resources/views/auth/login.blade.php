    @extends('layouts.layoutLoginRegister')

    @section('noidung')

        <div class="form-container register-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Register here</h1>
                <div class="form-control">
                    <x-input-label for="name" />
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus
                        autocomplete="name" placeholder="Name" />
                    <small> <x-input-error :messages="$errors->get('name')" />
                    </small>
                    <span></span>
                </div>
                <div class="form-control">
                    <x-input-label for="email" />
                    <small> <x-input-error :messages="$errors->get('email')" />
                    </small>
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required
                        autocomplete="username" placeholder="Email" />
                    <span></span>
                </div>
                {{-- <div class="form-control">
                    <x-input-label for="password" />
                    <x-text-input id="password" type="password" name="password" required autocomplete="new-password"
                        placeholder="Password" />
                    <small> <x-input-error :messages="$errors->get('password')" />
                    </small>
                    <span></span>
                </div> --}}
                <div class="form-control">
                    <x-input-label for="password" />
                    <x-text-input id="password" type="password" name="password" required autocomplete="new-password"
                        placeholder="Password" />
                    <small> <x-input-error :messages="$errors->get('password')" />
                    </small>
                    <span></span>
                </div>
                <div class="form-control">
                    <x-input-label for="password_confirmation" />
                    <x-text-input id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="new-password" placeholder="Password" />
                    <small> <x-input-error :messages="$errors->get('password_confirmation')" />
                    </small>
                    <span></span>
                </div>
                <x-primary-button id="register-button">
                    {{ __('Register') }}
                </x-primary-button>
                <span>or use your account</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </form>
        </div>

        <div class="form-container login-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Login here.</h1>
                <div class="form-control2">
                    <x-input-label for="email" />
                    <x-text-input id="email" class="email-2" type="email" name="email" :value="old('email')" required
                        autofocus autocomplete="username" placeholder="Email" />
                    <small>
                        <x-input-error :messages="$errors->get('email')" class="email-error-2 " />
                    </small>
                </div>
                <div class="form-control2">
                    <x-input-label for="password" />
                    <x-text-input id="password" class="password-2" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />
                    <small>
                        <x-input-error :messages="$errors->get('password')" class="password-error-2" />
                    </small>
                </div>
                <div class="content">
                    <div class="checkbox">
                        <input id="remember_me" name="checkbox" type="checkbox">
                        <label for="remember_me">Remember me</label>
                    </div>
                    <div class="pass-link">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <x-primary-button id="login-button">
                    {{ __('Log in') }}
                </x-primary-button>
                <span>Or use your account</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">
                        Hello <br />
                        friends
                    </h1>
                    <p>If you have an account, login here and have fun</p>
                    <button class="ghost" id="login">
                        Login
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1 class="title">
                        Start your <br />
                        journey now
                    </h1>
                    <p>
                        If you don'n have an account yet, join us and start your journey
                    </p>
                    <button class="ghost" id="register">
                        Register
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    @endsection

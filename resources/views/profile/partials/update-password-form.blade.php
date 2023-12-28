<section style="width: 100%">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            <span class="fs-1">{{ __('Cập Nhật Mật Khẩu') }}</span>
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            <br>
            <span class="fs-4">{{ __('Đảm bảo tài khoản của bạn đang sử dụng một mật khẩu dài và ngẫu nhiên để đảm bảo an toàn.') }}</span>
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" class="fs-4" :value="__('Mật Khẩu Hiện Tại')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full fs-4" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 fs-4" />
        </div>

        <div>
            <x-input-label for="password" class="fs-4" :value="__('Mật Khẩu Mới')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full fs-4" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 fs-4" />
        </div>

        <div>
            <x-input-label for="password_confirmation" class="fs-4" :value="__('Xác Nhận Mật Khẩu')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full fs-4" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="fs-4 btn-lg">{{ __('Lưu') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Đã Lưu.') }}</p>
            @endif
        </div>
    </form>
</section>

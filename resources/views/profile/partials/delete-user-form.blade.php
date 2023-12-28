<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            <span class="fs-1">{{ __('Xóa Tài Khoản') }}</span>
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            <span class="fs-5">{{ __('Khi bạn xóa tài khoản, tất cả tài liệu và dữ liệu của nó sẽ bị xóa vĩnh viễn. Trước khi xóa tài khoản, vui lòng tải xuống bất kỳ dữ liệu hoặc thông tin nào bạn muốn giữ lại.') }}</span>
        </p>
    </header>

    <x-danger-button class="fs-4 btn-lg" x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Xóa Tài Khoản') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                <span class="fs-2">{{ __('Bạn có chắc muốn xóa tài khoản của bạn?') }}</span>
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                <span class="fs-5">{{ __('Khi bạn xóa tài khoản, tất cả tài liệu và dữ liệu của nó sẽ bị xóa vĩnh viễn. Vui lòng nhập mật khẩu của bạn để xác nhận bạn muốn xóa tài khoản vĩnh viễn.') }}</span>
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Mật khẩu') }}" class="sr-only fs-4" />

                <x-text-input id="password" name="password" type="password" class="mt-1 block fs-4"
                    style=" width: 100%;" placeholder="{{ __('Mật khẩu') }}" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')" class="fs-4 btn-sm" style="margin-right: 1%;">
                    {{ __('Hủy') }}
                </x-secondary-button>

                <x-danger-button class="ml-3" class="fs-4 btn-sm">
                    {{ __('Xóa Tài Khoản') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>

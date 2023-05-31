<x-jet-action-section>
    <x-slot name="title">
        {{ __('Двофакторна автентифікація') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Додайте додаткову безпеку до свого облікового запису за допомогою двох факторів.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                {{ __('Ви ввімкнули дві факторні автентифікацію.') }}
            @else
                {{ __('Ви не ввімкнули аутентифікацію двох факторів.') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('Коли дво факторна автентифікація ввімкнена, вам буде запропоновано безпечний, випадковий токен під час аутентифікації.Ви можете отримати цей токен із програми  Authenticator.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Тепер дво факторна аутентифікація увімкнена. Скануйте наступний QR-код за допомогою програми автентифікатора вашого телефону.') }}
                    </p>
                </div>

                <div class="mt-4 dark:p-4 dark:w-56 dark:bg-white">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Зберігайте ці коди відновлення у безпечному диспетчері паролів.Вони можуть бути використані для відновлення доступу до вашого облікового запису, якщо ваш двофакторний пристрій аутентифікації втрачено.') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        {{ __('Ввімкнути') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Перегенерувати кодів відновлення') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Показати коди відновлення') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled">
                        {{ __('Відключити') }}
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>

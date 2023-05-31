<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Дякуємо за реєстрацію! Перш ніж почати, чи могли б ви підтвердити свою електронну адресу, натиснувши посилання, яке ми щойно надіслали вам? Якщо ви не отримали листа, ми з радістю надішлемо вам інший.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Нове посилання для підтвердження було надіслано на електронну адресу, яку ви вказали під час реєстрації.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Відправити лист з підтвердженням') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Вихід') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>

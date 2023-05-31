<x-jet-action-section>
    <x-slot name="title">
        {{ __('Видалити аккаунт') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Видалити аккаунт назавжди.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Після видалення вашого аккаунту всі його ресурси та дані буде остаточно видалено. Перед видаленням свого аккаунту завантажте будь-які дані чи інформацію, які ви хочете зберегти.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Видалити аккаунт') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Видалити аккаунт') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Ви впевнені, що хочете видалити свій аккаунт? Після видалення вашого аккаунту всі його ресурси та дані буде остаточно видалено. Будь ласка, введіть свій пароль, щоб підтвердити, що ви хочете остаточно видалити свій аккаунт.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Пароль') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Відминити') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Видалити акааунт') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>

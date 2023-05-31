<div class="mb-4">
    <x-ui.alerts />

    <form wire:submit.prevent="formSubmit">

        <div class="container max-w-4xl mx-auto space-y-5 text-left">

            {{-- Name --}}
            <div>
                <x-jet-label for="name" value="{{ __('Імʼя') }}" class="font-bold" />
                <x-jet-input wire:model="name" name="name" id="name" class="block w-full mt-1" type="text" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            {{-- Email --}}
            <div>
                <x-jet-label for="email" value="{{ __('Пошта') }}" class="font-bold" />
                <x-jet-input wire:model="email" name="email" id="name" class="block w-full mt-1" type="text" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>

            {{-- Submit Button --}}
            <div>
                <x-jet-button class="mt-12">
                    {{ __('Підписатися') }}
                </x-jet-button>
            </div>
        </div>
    </form>
</div>

<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Створити') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">
            {{-- Index --}}
            <x-jet-nav-link href="{{ route('categories.index') }}" :active="request()->routeIs('categories.index')">
                {{ __('Лист категорій') }}
            </x-jet-nav-link>

            {{-- Create --}}
            <x-jet-nav-link href="{{ route('categories.create') }}" :active="request()->routeIs('categories.create')">
                {{ __('Створити') }}
            </x-jet-nav-link>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <div class="p-6">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf

                        <div>
                            <small class="mb-4 text-gray-500">Примітка: обирайте батьківську категорію лише для підкатегорії</small>
                            <select name="parent_id" id="" class="w-full mb-6 bg-indigo-200 border-none">
                                <option value="">Виберіть батьківську категорію</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-jet-label for="name" value="{{ __('Назва') }}" />
                            <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <span class="mt-2 text-xs text-gray-500">Максимум 200 символів</span>
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>

                        <x-jet-button class="mt-12">
                            {{ __('Створити') }}
                        </x-jet-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

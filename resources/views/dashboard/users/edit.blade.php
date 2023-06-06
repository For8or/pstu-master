<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Користувачі') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">
            {{-- Index --}}
            <x-jet-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                {{ __('Лист Корисутвачів') }}
            </x-jet-nav-link>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <div class="p-6">
                    <form action="{{ route('users.update', $user) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-jet-label for="name" value="{{ __('Імʼя') }}" />
                            <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="$user->name" autofocus readonly/>
                            <x-jet-label for="email" value="{{ __('Електронна пошта') }}" />
                            <x-jet-input id="email" class="block w-full mt-1 " type="text" name="email" :value="$user->email" autofocus readonly/>
                            <x-jet-label for="name" value="{{ __('Виберіть роль користувача') }}" />
                                <select name="role" id="role" class="w-full mb-6 bg-indigo-200 border-none rounded-md">
                                    <option value="user" {{ $user->role == "user" ? 'selected': '' }}>
                                        Користувач
                                    </option>
                                    <option value="admin" {{ $user->role == "admin" ? 'selected': '' }}>
                                        Адміністратор
                                    </option>
                                </select>
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>

                        <x-jet-button class="mt-12">
                            {{ __('Оновити') }}
                        </x-jet-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

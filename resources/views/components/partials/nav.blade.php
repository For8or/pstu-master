<nav id="header" class="fixed top-0 z-30 w-full text-white">
    <div class="container flex flex-wrap items-center justify-between w-full py-2 mx-auto mt-0">
        <div class="flex items-center pl-4">
            <img class="h-8 pr-1 mx-auto pb-1" src="https://pstu.edu/wp-content/uploads/2019/06/ПГТУ-лого-300x281.png" alt="ДВНЗ «ПДТУ»">
            {{-- Logo --}}
            <a class="text-2xl font-bold text-white no-underline toggleColour hover:no-underline lg:text-4xl" href="{{ route('home') }}">
                ПДТУ|ВТ
            </a>

        </div>

        <div class="block pr-4 lg:hidden">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 transition duration-300 ease-in-out transform hover:text-gray-900 focus:outline-none focus:shadow-outline hover:scale-105">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Меню</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>

        <div class="z-20 flex-grow hidden w-full p-4 mt-2 text-black bg-white lg:flex lg:items-center lg:w-auto lg:mt-0 lg:bg-transparent lg:p-0" id="nav-content">
            <ul class="items-center justify-end flex-1 list-reset lg:flex">

                <li class="mr-3">
                    <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="{{ route('blog') }}">Новини</a>
                </li>

                @auth
                {{-- Dashboard --}}
                <li class="mr-3">
                    <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="{{ route('dashboard.index') }}">Панель Адміністратора</a>
                </li>
                @else
                <li class="mr-3">
                    <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="{{ route('login') }}">Вхід</a>
                </li>

                <li class="mr-3">
                    <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="{{ route('register') }}">Реєстрація</a>
                </li>
                @endauth

            </ul>

            @auth
            <div class="relative ml-3">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                            <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                        @else
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                {{ Auth::user()->name }}

                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-black">
                            {{ __('Управління Аккаунтом') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Профіль') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Токени') }}
                        </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Вихід') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>
            @endauth
        </div>
    </div>
    <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
</nav>

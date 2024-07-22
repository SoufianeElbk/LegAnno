<nav class="border-gray-200 bg-indigo-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset("/images/logo2.png") }}" class="h-8" alt="Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg lg:hidden"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full lg:block lg:w-auto" id="navbar-default">
            <ul
                class="font-medium text-black lg:text-white bg-pricing lg:bg-transparent flex flex-col items-center p-4 lg:p-0 mt-4 border border-gray-100 rounded-l-xl lg:flex-row lg:space-x-8 rtl:space-x-reverse lg:mt-0 lg:border-0 lg:dark:bg-gray-900">
                <li class="hover:border-b-2">
                    <a href="{{route('accueil')}}"
                        class="block py-2 px-3 rounded lg:bg-transparent lg:p-0 lg:dark:text-blue-500"
                        aria-current="page">Accueil</a>
                </li>
                <li class="hover:border-b-2">
                    <a href="{{route('login')}}"
                        class="block py-2 px-3 rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Commander un pack</a>
                </li>
                <li class="hover:border-b-2">
                    <a href="{{route('actualites')}}"
                        class="block py-2 px-3 rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Actualités</a>
                </li>
                <li class="hover:border-b-2">
                    <a href="{{route('login')}}"
                        class="block py-2 px-3 rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Infos pratiques</a>
                </li>
                @guest
                <li class="min-w-fit">
                    <a href="{{route('login')}}"
                        class="block py-2 px-3 text-white rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent"><button class="bg-customBleu text-black rounded-full px-3 py-2">Se connecter</button> </a>
                </li>
                <li class="min-w-fit">
                    <a href="{{route('register')}}"
                        class="block py-2 px-3 text-white rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent"><button class="bg-customBleu text-black rounded-full px-3 py-2">S'inscrire</button> </a>
                </li>
                @endguest
                @auth
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="block py-2 px-3 text-white rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">
                            <button class="bg-red-500 rounded-lg px-3 py-2 flex" type="submit">
                                Se déconnecter
                                <Span class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-logout w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12h-9.5m7.5 3l3-3-3-3m-5-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h5a2 2 0 002-2v-1"/></svg></Span>
                            </button>
                        </a>
                        {{-- <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link> --}}
                    </form>
                </li>
                <li>
                    {{-- <span class="text-3xl">{{$name}}</span> --}}
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

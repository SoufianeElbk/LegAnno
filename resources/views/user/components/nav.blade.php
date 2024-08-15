<nav class="bg-indigo-700 mb-8 p-4">
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
                class="font-medium text-black lg:text-white bg-pricing lg:bg-transparent flex flex-col items-center rounded-tl-2xl lg:p-0 mt-4 lg:flex-row lg:space-x-8 rtl:space-x-reverse lg:mt-0 lg:border-0 lg:dark:bg-gray-900">
                <li class="lg:hover:border-b-2 border-b-2 lg:border-0 w-full lg:w-fit text-center">
                    <a href="{{route('accueil')}}"
                        class="block py-2 px-3 rounded lg:bg-transparent lg:p-0 lg:dark:text-blue-500"
                        aria-current="page">Accueil</a>
                </li>
                <li class="lg:hover:border-b-2 border-b-2 lg:border-0 w-full lg:w-fit text-center">
                    <a href="{{route('packs.create')}}"
                        class="block py-2 px-3 rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Commander un pack</a>
                </li>
                <li class="lg:hover:border-b-2 border-b-2 lg:border-0 w-full lg:w-fit text-center">
                    <a href="{{route('login')}}"
                        class="block py-2 px-3 rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Annonces publiées</a>
                </li>
                @guest
                <li class="border-b-2 lg:border-0 w-full lg:w-fit text-center">
                    <a href="{{route('login')}}"
                        class="block py-2 px-3 text-white rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent"><button class="bg-yellow-300 text-black rounded-full px-3 py-2">Se connecter</button> </a>
                </li>
                <li class="border-b-2 lg:border-0 w-full lg:w-fit text-center">
                    <a href="{{route('register')}}"
                        class="block py-2 px-3 text-white rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent"><button class="bg-yellow-300 text-black rounded-full px-3 py-2">S'inscrire</button> </a>
                </li>
                @endguest
                @auth
                <li class="relative w-full lg:w-fit flex flex-col items-center">
                    <button id="dropdownNavbarLink" class="flex items-center space-x-2 py-2 px-3 rounded border-b-2 lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">
                        <svg class="text-black lg:text-white" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                        <span>Mon espace</span>
                        <svg class="text-black lg:text-white stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 10L12 14L8 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                    {{-- <a id="dropdownNavbarLink"
                        class="block py-2 px-3 rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Mon compte</a> --}}
                        <div class="hidden w-full mx-auto lg:w-[200%] absolute top-full lg:top-[200%] right-0" id="dropdownNavbar">
                            <ul class="font-medium text-black bg-pricing flex flex-col items-center rounded-bl-2xl lg:rounded-md">
                                <li class="lg:hover:border-b-2 border-b-2 w-full text-center">
                                    <div class="flex space-x-2 items-center justify-center py-2 px-3 rounded lg:bg-transparent lg:dark:text-blue-500" aria-current="page">
                                        <span>Bienvenue {{Auth::user()->nom}}</span>
                                        <svg class="" xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><g id="hands_clapping_line" fill='none' fill-rule='nonzero'><path d='M24 0v24H0V0h24ZM12.594 23.258l-.012.002-.071.035-.02.004-.014-.004-.071-.036c-.01-.003-.019 0-.024.006l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.016-.018Zm.264-.113-.014.002-.184.093-.01.01-.003.011.018.43.005.012.008.008.201.092c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.003-.011.018-.43-.003-.012-.01-.01-.184-.092Z'/><path fill='#09244BFF' d='M9.402 3.596a2.5 2.5 0 0 1 3.763.45l.09.146.69 1.197c.047-.065.098-.129.15-.19.574-.676 1.404-1.102 2.337-1.259.78-.13 1.384.37 1.61.937l.041.114c.205.668.578 1.48 1.05 2.348 1.578 2.913 1.355 6.589-.76 9.037-.42 1.911-1.545 3.642-3.4 4.713a7.036 7.036 0 0 1-9.61-2.575 258.441 258.441 0 0 0-2.196-3.733 2.487 2.487 0 0 1 1.184-3.58l.151-.056-.773-1.34a2.5 2.5 0 0 1 1.45-3.647 2.5 2.5 0 0 1 4.223-2.562ZM5.644 8.12a.5.5 0 0 0-.183.683l3.25 5.63a1 1 0 1 1-1.732 1l-1.257-2.176a.487.487 0 1 0-.84.494c.75 1.25 1.484 2.5 2.213 3.762a5.036 5.036 0 0 0 6.879 1.843c1.315-.76 2.154-2.037 2.462-3.48l.025-.58c.05-1.329.007-2.504-.685-3.78-.412-.76-.786-1.537-1.052-2.265-.46.168-.743.449-.878.738-.275.59 0 1.216.3 1.736a1 1 0 0 1-1.715 1.03c-.357-.573-.7-1.157-1.037-1.744l-1.001-1.768c-.167-.294-.334-.588-.503-.88a.5.5 0 0 0-.831.552l2.25 3.897a1 1 0 0 1-1.732 1l-.808-1.38-1.63-2.742c-.272-.459-.543-.92-.812-1.387a.5.5 0 0 0-.683-.183Zm10.679-2.093a1.66 1.66 0 0 0-.704.466 1.184 1.184 0 0 0-.282.673c.579.107 1 .568 1.148 1.049.205.668.578 1.479 1.05 2.348.243.45.444.92.602 1.4a6.474 6.474 0 0 0-.763-3.672c-.412-.759-.786-1.536-1.051-2.264Zm-5.483-1.02a.5.5 0 0 0-.184.682l1.692 2.922c.162-.223.352-.423.564-.599l.163-.127-1.552-2.695a.5.5 0 0 0-.683-.183Zm-3.598-.232a.5.5 0 0 0-.183.683l.772 1.338a2.511 2.511 0 0 1 .865-.502L7.925 4.96a.5.5 0 0 0-.683-.183Zm14.123-.778a1 1 0 0 1-.266 1.303l-.097.064-.84.487a1 1 0 0 1-1.102-1.666l.098-.064.84-.487a1 1 0 0 1 1.367.363Zm-2.732-2.91a1 1 0 0 1 .731 1.11l-.024.115-.129.483a1 1 0 0 1-1.955-.403l.023-.114.13-.483a1 1 0 0 1 1.224-.707Zm-3.647 0a1 1 0 0 1 1.188.597l.037.11.13.484a1 1 0 0 1-1.896.628l-.036-.11-.13-.484a1 1 0 0 1 .707-1.224Z'/></g></svg>
                                    </div>
                                </li>
                                <li class="lg:hover:border-b-2 border-b-2 w-full text-center">
                                    <a href="{{route('profile.edit')}}" class="flex space-x-2 items-center justify-center py-2 px-3 rounded lg:bg-transparent lg:dark:text-blue-500" aria-current="page">
                                    <svg class="text-black" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                                    <span>Mon profil</span> 
                                </a>
                                </li>
                                <li class="lg:hover:border-b-2 border-b-2 w-full text-center">
                                    <a href="{{route('accueil')}}" class="flex space-x-2 items-center justify-center  py-2 px-3 rounded lg:bg-transparent lg:dark:text-blue-500" aria-current="page">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-bookmark w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M6 20V5a1 1 0 011-1h10a1 1 0 011 1v15l-6-3-6 3z"/></svg>
                                        <span>Mes annonces publiées</span> 
                                </a>
                                </li>
                                <li class="lg:hover:border-b-2 border-b-2 w-full text-center">
                                    <a href="{{route('accueil')}}" class="flex space-x-2 items-center justify-center  py-2 px-3 rounded lg:bg-transparent lg:dark:text-blue-500" aria-current="page">
                                        <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 3H5.5L7.85836 13.4425C8.0643 14.3543 8.87398 15 9.8088 15H18.3957C19.3331 15 20.1447 14.3489 20.348 13.4339L22 6H6.5M11 20C11 20.5523 10.5523 21 10 21C9.44772 21 9 20.5523 9 20C9 19.4477 9.44772 19 10 19C10.5523 19 11 19.4477 11 20ZM19 20C19 20.5523 18.5523 21 18 21C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19C18.5523 19 19 19.4477 19 20Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <span>Packs commandés</span>
                                    </a>
                                </li>
                                <li class="w-full text-center">
                                    <form method="POST" action="{{ route('logout') }}" class="">
                                        @csrf
                                        <button type="submit" class="text-red-600 mx-auto flex items-center justify-center space-x-2 py-2 px-3 rounded lg:border-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">
                                            {{-- <button class="bg-red-600 rounded-full px-3 py-2 flex space-x-2 text-xs mx-auto items-center" type="submit"> --}}
                                                <span class="">Se déconnecter</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-logout w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12h-9.5m7.5 3l3-3-3-3m-5-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h5a2 2 0 002-2v-1"/></svg>
                                            {{-- </button> --}}
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

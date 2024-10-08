<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Manager | Profile</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="font-[Poppins]">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
            class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

        <div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
            class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex justify-center items-center">
                    <a class="w-3/4" href="{{ Route('manager.dashboard') }}"><img
                            src="{{ asset('/images/logo2.png') }}" alt=""></a>
                </div>
            </div>

            <nav class="mt-10">
                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" 
                    href="{{Route('manager.dashboard')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-dashboard size-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v5a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm10 0a1 1 0 011-1h4a1 1 0 011 1v2a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zm10-3a1 1 0 011-1h4a1 1 0 011 1v6a1 1 0 01-1 1h-4a1 1 0 01-1-1v-6z"/></svg>
                    <span class="mx-3 text-sm">Dashboard</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="{{Route('manager.annonces-traitees')}}">
                    <svg class="size-6" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.5 8L11.5001 22M18.6383 3.37924L21.9348 15.6583C22.2932 16.9933 21.1187 18.2381 19.762 17.961L17.0415 17.4054C14.014 16.787 10.8839 16.8807 7.89906 17.679C5.40053 18.3472 2.83037 16.8599 2.16089 14.3662C1.49142 11.8725 2.97216 9.30181 5.47068 8.63362C8.45556 7.83537 11.2132 6.35446 13.5253 4.30818L15.603 2.46935C16.6391 1.55235 18.2799 2.0442 18.6383 3.37924Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>

                    <span class="mx-3 text-sm">Annonces traitées</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="{{Route('manager.annonces-en-attente')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>

                    <span class="mx-3 text-sm">Annonces en attente</span>
                </a>
            </nav>
        </div>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <div class="relative mx-4 lg:mx-0">
                        Bonjour <span class="font-bold">{{ Auth::guard('manager')->user()->nom }}</span>
                    </div>
                </div>

                <div class="flex items-center">
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = ! dropdownOpen"
                            class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                        </button>

                        <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

                        <div x-cloak x-show="dropdownOpen"
                            class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
                            <a href="{{Route('manager.profile.edit')}}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                            <form method="POST" action="{{ route('manager.logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">
                                @csrf
                                <button type="submit" class="w-full text-left">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    @session('success')
                        <div class="bg-green-200 px-6 py-4 mx-2 mb-4 rounded-md text-lg flex items-center w-fit">
                            <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                                <path fill="currentColor"
                                    d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                                </path>
                            </svg>
                            <span class="text-green-800">{{session('success')}}</span>
                        </div>
                    @endsession
                    @if($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="flex flex-col items-center col-span-1 lg:col-span-2 text-center">
                            <svg xmlns='http://www.w3.org/2000/svg' width='96' height='96' viewBox='0 0 24 24'><g id="user_4_line" fill='none' fill-rule='evenodd'><path d='M24 0v24H0V0h24ZM12.594 23.258l-.012.002-.071.035-.02.004-.014-.004-.071-.036c-.01-.003-.019 0-.024.006l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.016-.018Zm.264-.113-.014.002-.184.093-.01.01-.003.011.018.43.005.012.008.008.201.092c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.003-.011.018-.43-.003-.012-.01-.01-.184-.092Z'/><path fill='#09244BFF' d='M12 2c5.523 0 10 4.477 10 10a9.959 9.959 0 0 1-2.258 6.33l.02.022-.132.112A9.978 9.978 0 0 1 12 22c-2.95 0-5.6-1.277-7.43-3.307l-.2-.23-.132-.11.02-.024A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2Zm0 15c-1.86 0-3.541.592-4.793 1.406A7.965 7.965 0 0 0 12 20a7.965 7.965 0 0 0 4.793-1.594A8.897 8.897 0 0 0 12 17Zm0-13a8 8 0 0 0-6.258 12.984C7.363 15.821 9.575 15 12 15s4.637.821 6.258 1.984A8 8 0 0 0 12 4Zm0 2a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm0 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z'/></g></svg>
                            <span class="text-xl font-bold">{{Auth::guard('manager')->user()->nom}}</span>
                        </div>

                        <form action="{{Route('manager.profile.updateInfo')}}" method="POST" class="">
                            @csrf
                            @method('patch')
                            <div class="bg-white rounded-xl">
                                <div class="w-full px-6 pb-8">
                                    
                                    <div class="grid max-w-2xl mx-auto mt-4">
                                        
                                        <div class="items-center mt-8 text-[#202142]">
                                            <h1 class="mb-2 sm:mb-6 text-xl font-semibold text-gray-700">Modification du nom et email</h1>
                    
                                            <div class="mb-2 sm:mb-6">
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                                    Nom complet</label>
                                                <input name="nom" type="text" id="nom" value="{{Auth::guard('manager')->user()->nom}}"
                                                    class=" border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                                    placeholder="Votre nom" required>
                                            </div>
                    
                                            <div class="mb-4">
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                                    Email</label>
                                                <input name="email" type="email" id="email" value="{{Auth::guard('manager')->user()->email}}"
                                                    class=" border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                                    placeholder="email@mail.com" required>
                                            </div>
                    
                                            <div class="flex justify-end">
                                                <button type="submit"
                                                    class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="{{Route('manager.profile.updatePassword')}}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="bg-white rounded-xl">
                                <div class="w-full px-6 pb-8">
                    
                                    <div class="grid max-w-2xl mx-auto mt-4">
                                        
                                        <div class="items-center mt-8 text-[#202142]">
                                            <h1 class="mb-2 sm:mb-6 text-xl font-semibold text-gray-700">Modification du mot de passe</h1>
                                            <div class="mb-2 sm:mb-6">
                                                <label for="password"
                                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                                    Mot de passe actuel</label>
                                                <input name="current_password" type="password" id="password"
                                                    class=" border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                                    required>
                                            </div>
                    
                                            <div class="mb-4">
                                                <label for="new_password"
                                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                                    Nouveau mot de passe</label>
                                                <input name="password" type="password" id="new_password"
                                                    class=" border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                                    required>
                                            </div>

                                            <div class="mb-4">
                                                <label for="confirm-new-password"
                                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                                    Confirmer le nouveau mot de passe</label>
                                                <input name="password_confirmation" type="password" id="confirm-new-password"
                                                    class=" border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                                    required>
                                            </div>
                    
                                            <div class="flex justify-end">
                                                <button type="submit"
                                                    class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>

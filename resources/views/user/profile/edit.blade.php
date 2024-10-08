<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil | LegAnno</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-indigo-700 font-Poppins dark:bg-gray-800">
    <div class="container text-white mx-auto p-4">
        @include('user.components.nav')
    </div>
<div class="bg-white w-full flex flex-col px-3 md:px-8 lg:px-8 lg:flex-row text-[#161931]">
    <aside class="py-4 lg:w-1/4 lg:border-r border-indigo-200">
        <div class="sticky flex flex-col gap-2 p-2 text-sm top-12">

            <h2 class="pl-3 mb-4 text-2xl font-semibold">Mon espace</h2>

            <a href="#" class="flex items-center space-x-2 px-2 py-2.5 font-bold bg-white  text-indigo-900 border rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" /></svg>
                <span>Informations générales</span>
            </a>
            <a href="{{Route('mes-annonces-publiees.index')}}"
                class="flex items-center space-x-2 px-3 py-2.5 font-semibold  hover:text-indigo-900 hover:border hover:rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-bookmark w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M6 20V5a1 1 0 011-1h10a1 1 0 011 1v15l-6-3-6 3z"/></svg>
                <span>Mes annonces publiées</span>
            </a>
            <a href="{{Route('packs-commandes')}}"
                class="flex items-center space-x-2 px-3 py-2.5 font-semibold  hover:text-indigo-900 hover:border hover:rounded-full">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 3H5.5L7.85836 13.4425C8.0643 14.3543 8.87398 15 9.8088 15H18.3957C19.3331 15 20.1447 14.3489 20.348 13.4339L22 6H6.5M11 20C11 20.5523 10.5523 21 10 21C9.44772 21 9 20.5523 9 20C9 19.4477 9.44772 19 10 19C10.5523 19 11 19.4477 11 20ZM19 20C19 20.5523 18.5523 21 18 21C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19C18.5523 19 19 19.4477 19 20Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                <span>Packs commandés</span>
            </a>
        </div>
    </aside>
    <main class="w-full py-4 lg:w-3/4">
        <form action="{{Route('user.profile.update')}}" method="POST">
        @csrf
        @method('patch')
        <div class="p-2">
            <div class="w-full px-6 pb-8 lg:w-3/4 sm:rounded-lg">
                <h2 class="text-2xl font-bold sm:text-xl">Informations générales</h2>

                <div class="grid max-w-2xl mx-auto mt-4">
                    <div class="flex flex-col items-center">
                        <svg xmlns='http://www.w3.org/2000/svg' width='96' height='96' viewBox='0 0 24 24'><g id="user_4_line" fill='none' fill-rule='evenodd'><path d='M24 0v24H0V0h24ZM12.594 23.258l-.012.002-.071.035-.02.004-.014-.004-.071-.036c-.01-.003-.019 0-.024.006l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.016-.018Zm.264-.113-.014.002-.184.093-.01.01-.003.011.018.43.005.012.008.008.201.092c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.003-.011.018-.43-.003-.012-.01-.01-.184-.092Z'/><path fill='#09244BFF' d='M12 2c5.523 0 10 4.477 10 10a9.959 9.959 0 0 1-2.258 6.33l.02.022-.132.112A9.978 9.978 0 0 1 12 22c-2.95 0-5.6-1.277-7.43-3.307l-.2-.23-.132-.11.02-.024A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2Zm0 15c-1.86 0-3.541.592-4.793 1.406A7.965 7.965 0 0 0 12 20a7.965 7.965 0 0 0 4.793-1.594A8.897 8.897 0 0 0 12 17Zm0-13a8 8 0 0 0-6.258 12.984C7.363 15.821 9.575 15 12 15s4.637.821 6.258 1.984A8 8 0 0 0 12 4Zm0 2a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm0 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z'/></g></svg>
                        <span class="text-xl font-bold">{{Auth::user()->nom}}</span>
                    </div>

                    <div class="items-center mt-8 text-[#202142]">

                        <div class="mb-2 sm:mb-6">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                Nom complet</label>
                            <input name="nom" type="text" id="nom" value="{{Auth::user()->nom}}"
                                class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                placeholder="Votre nom" required>
                        </div>

                        <div class="mb-4">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                Email</label>
                            <input name="email" type="email" id="email" value="{{Auth::user()->email}}"
                                class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                placeholder="email@mail.com" required>
                        </div>

                        {{-- <div class="mb-2 sm:mb-6">
                            <label for="profession"
                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Profession</label>
                            <input type="text" id="profession"
                                class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                placeholder="your profession" required>
                        </div> --}}

                        {{-- <div class="mb-6">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Bio</label>
                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-indigo-900 bg-indigo-50 rounded-lg border border-indigo-300 focus:ring-indigo-500 focus:border-indigo-500 "
                                placeholder="Write your bio here..."></textarea>
                        </div> --}}

                        <div class="flex justify-end">
                            <button type="submit"
                                class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </form>
    </main>
</div>
<div class="bg-white border-t-2">
    @include('user.components.footer')
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.querySelector('[data-collapse-toggle]');
        const navbar = document.getElementById('navbar-default');

        toggleButton.addEventListener('click', function () {
            navbar.classList.toggle('hidden');
        });
    });
</script>
@auth
    <script>
        document.getElementById('dropdownNavbarLink').addEventListener('click', function() {
            var dropdown = document.getElementById('dropdownNavbar');
            dropdown.classList.toggle('hidden');
            // document.getElementById('drop').innerHTML == `<path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>` ? document.getElementById('drop').innerHTML = `<path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/>` : document.getElementById('drop').innerHTML = `<path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>`;
        });
    </script>
@endauth
</body>
</html>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LegAnno</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-customPurple font-Poppins">
    <div class="container text-white mx-auto px-10">
            <nav class="border-gray-200 dark:bg-gray-900 sticky bg-customPurple top-0">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset("/images/logo2.png") }}" class="h-8" alt="Logo" />
                    </a>
                    <button data-collapse-toggle="navbar-default" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                            class="font-medium text-black lg:text-white bg-gray-50 lg:bg-transparent flex flex-col items-center p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg lg:flex-row lg:space-x-8 rtl:space-x-reverse lg:mt-0 lg:border-0 dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 rounded lg:bg-transparent lg:p-0 dark:text-white lg:dark:text-blue-500"
                                    aria-current="page">Accueil</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 rounded lg:border-0 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">Commander un pack</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 rounded lg:border-0 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">Actualités</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 rounded lg:border-0 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">Infos pratiques</a>
                            </li>
                            @guest                                
                            <li class="min-w-fit">
                                <a href="{{route('login')}}"
                                    class="block py-2 px-3 text-white rounded lg:border-0 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent"><button class="bg-customBleu text-black rounded-lg px-3 py-2">Se connecter</button> </a>
                            </li>
                            <li class="min-w-fit">
                                <a href="#"
                                    class="block py-2 px-3 text-white rounded lg:border-0 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent"><button class="bg-customBleu text-black rounded-lg px-3 py-2">S'inscrire</button> </a>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="h-96 flex items-bottom py-20">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <div class="flex flex-col sm:w-5/6 lg:w-1/2">
                        <h1 class="text-2xl md:text-3xl font-semibold ">Le journal LegAnno est un service spécialisé  dans l'information légale, juridique et financière.</h1>
                        <button class="rounded-xl bg-yellow-300 text-black p-2 font-bold mt-4 w-full sm:w-fit">Besoin d'aide ?</button>
                    </div>
                    <div class="">
                        <img src="{{ asset("/images/download.png") }}" alt="" class="" width="400px">
                    </div>
                </div>
            </main>
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
</body>

</html>

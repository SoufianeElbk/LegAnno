<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LegAnno</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="bg-indigo-700 font-Poppins">
    <div class="container text-white mx-auto p-6">
        <nav class="border-gray-200 bg-indigo-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="<?php echo e(asset("/images/logo2.png")); ?>" class="h-8" alt="Logo" />
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
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
                        class="font-medium text-black lg:text-white bg-gray-50 lg:bg-transparent flex flex-col items-center p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg lg:flex-row lg:space-x-8 rtl:space-x-reverse lg:mt-0 lg:border-0 lg:dark:bg-gray-900">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded lg:bg-transparent lg:p-0 lg:dark:text-blue-500"
                                aria-current="page">Accueil</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Commander un pack</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Actualités</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Infos pratiques</a>
                        </li>
                        <?php if(auth()->guard()->guest()): ?>
                        <li class="min-w-fit">
                            <a href="<?php echo e(route('login')); ?>"
                                class="block py-2 px-3 text-white rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent"><button class="bg-customBleu text-black rounded-lg px-3 py-2">Se connecter</button> </a>
                        </li>
                        <li class="min-w-fit">
                            <a href="<?php echo e(route('register')); ?>"
                                class="block py-2 px-3 text-white rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent"><button class="bg-customBleu text-black rounded-lg px-3 py-2">S'inscrire</button> </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="flex items-bottom py-10">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <div class="flex flex-col sm:w-5/6 lg:w-1/2">
                    <h1 class="text-2xl md:text-3xl font-semibold ">Le journal LegAnno est un service spécialisé  dans l'information légale, juridique et financière.</h1>
                    <button class="rounded-xl bg-yellow-300 text-black p-2 font-bold mt-4 w-full sm:w-fit">Besoin d'aide ?</button>
                </div>
                <div class="">
                    <img src="<?php echo e(asset("/images/download.png")); ?>" alt="" class="w-96">
                </div>
            </div>
        </main>
        <!-- component -->
        <section class=" py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-white sm:text-5xl">PACKS PROFESSIONNELS</h2>
                <h2 class="text-2xl font-bold text-white sm:text-2xl">Offres pour publication multiple</h2>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 mb-12">
                <!-- Basic Plan -->
                <div class="bg-white bg-opacity-10 rounded-lg shadow-lg p-6 relative overflow-hidden border-2 border-white">

                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white border-b-4 border-indigo-400 w-fit">Pack Silver</h3>
                    </div>
                    <div class="mb-8">
                        <img class="w-1/2 mx-auto" src="https://www.charika-eco.ma/mosaic_img/packs-illustration-1.png" alt="Pack Silver">
                    </div>
                    <div class="mb-8">
                        <span class="text-4xl font-bold text-white">1300</span>
                        <span class="text-xl font-medium text-purple-200">DH-TTC</span>
                    </div>
                    <ul class="mb-8 space-y-4 text-purple-200">
                        <li class="flex items-center">
                        <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>10 Annonces</span>
                        </li>
                        <li class="flex items-center">
                        <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Prix unitaire : 130 DH-TTC</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                        Commander
                    </a>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg shadow-lg p-6 relative overflow-hidden border-2 border-white">

                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white border-b-4 border-indigo-400 w-fit">Pack Gold</h3>
                    </div>
                    <div class="mb-8">
                        <img class="w-1/2 mx-auto" src="https://www.charika-eco.ma/mosaic_img/packs-illustration-2.png" alt="Pack Gold">
                    </div>
                    <div class="mb-8">
                        <span class="text-4xl font-bold text-white">2400</span>
                        <span class="text-xl font-medium text-purple-200">DH-TTC</span>
                    </div>
                    <ul class="mb-8 space-y-4 text-purple-200">
                        <li class="flex items-center">
                        <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>20 annonces</span>
                        </li>
                        <li class="flex items-center">
                        <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Prix unitaire : 120 DH-TTC</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                        Commander
                    </a>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg shadow-lg p-6 relative overflow-hidden border-2 border-white">

                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white border-b-4 border-indigo-400 w-fit">Pack Platinium</h3>
                    </div>
                    <div class="mb-8">
                        <img class="w-1/2 mx-auto" src="https://www.charika-eco.ma/mosaic_img/packs-illustration-3.png" alt="Pack Platinium">
                    </div>
                    <div class="mb-8">
                        <span class="text-4xl font-bold text-white">5000</span>
                        <span class="text-xl font-medium text-purple-200">DH-TTC</span>
                    </div>
                    <ul class="mb-8 space-y-4 text-purple-200">
                        <li class="flex items-center">
                        <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>50 annonces</span>
                        </li>
                        <li class="flex items-center">
                        <svg class="h-6 w-6 text-green-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Prix unitaire : 100 DH-TTC</span>
                        </li>

                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                        Commander
                    </a>
                </div>
            </div>
            <div class="text-center">
                <p class="mt-4 text-xl text-purple-100 text-justify font-medium">
                    Vous êtes un professionnel des publications juridiques, expert du droit et du chiffre (cabinet comptable, avocat, huissier, juriste, notaire, ...), vous publiez régulièrement des annonces légales ?
                </p>
                <p class="mt-4 text-xl text-purple-100 text-justify font-medium">
                    LegAnno vous propose de bénéficier d'un système de recharge d'annonces légales grâce aux différents Packs disponibles et de bénéficier de tarifs avantageux.
                </p>
            </div>
            </div>
        </section>
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
<?php /**PATH D:\ENSET\s3\stage\projet\prj\LegAnno\resources\views/home.blade.php ENDPATH**/ ?>
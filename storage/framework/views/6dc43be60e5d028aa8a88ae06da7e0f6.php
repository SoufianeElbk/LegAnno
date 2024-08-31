<nav class="bg-indigo-700 p-4 mb-12">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="<?php echo e(asset("/images/logo2.png")); ?>" class="h-8" alt="Logo" />
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
                <li class="lg:hover:border-b-2 border-b-2 lg:border-0 w-full lg:w-fit ">
                    <a href="<?php echo e(route('accueil')); ?>"
                        class="block py-2 px-3 rounded lg:bg-transparent lg:p-0 lg:dark:text-blue-500"
                        aria-current="page">Accueil</a>
                </li>
                <li class="lg:hover:border-b-2 border-b-2 lg:border-0 w-full lg:w-fit ">
                    <a href="<?php echo e(route('packs.create')); ?>"
                        class="block py-2 px-3 rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Commander un pack</a>
                </li>
                <li class="lg:hover:border-b-2 border-b-2 lg:border-0 w-full lg:w-fit ">
                    <a href="<?php echo e(route('annonces-publiees.index')); ?>"
                        class="block py-2 px-3 rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Annonces publiées</a>
                </li>
                <?php if(auth()->guard()->guest()): ?>
                <li class="border-b-2 lg:border-0 w-full lg:w-fit ">
                    <a href="<?php echo e(route('login')); ?>"
                        class="block py-2 px-3 text-white rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent"><button class="bg-yellow-300 text-black rounded-full px-3 py-2">Se connecter</button> </a>
                </li>
                <li class="border-b-2 lg:border-0 w-full lg:w-fit ">
                    <a href="<?php echo e(route('register')); ?>"
                        class="block py-2 px-3 text-white rounded lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent"><button class="bg-yellow-300 text-black rounded-full px-3 py-2">S'inscrire</button> </a>
                </li>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                <li class="relative w-full lg:w-fit flex flex-col">
                    <button id="dropdownNavbarLink" class="flex items-center space-x-2 py-2 px-3 rounded border-b-2 lg:border-0 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">
                        <svg class="text-black lg:text-white" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                        <span>Mon espace</span>
                        <svg id="drop" class="text-black lg:text-white stroke-current w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 10L12 14L8 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                    
                        <div class="hidden w-full lg:w-[150%] mx-auto lg:absolute top-full lg:top-[200%] right-0" id="dropdownNavbar">
                            <ul class="font-medium text-black bg-pricing  flex flex-col items-center rounded-bl-2xl lg:rounded-md lg:text-sm">
                                <li class="lg:hover:border-b-2 border-b-2 w-full">
                                    <div class="text-center py-2 px-3 rounded lg:bg-transparent lg:dark:text-blue-500" aria-current="page">
                                        
                                        
                                        <span class="text-lg font-semibold">Bienvenue <?php echo e(Auth::user()->nom); ?></span>
                                    </div>
                                </li>
                                <li class=" w-full">
                                    <a href="<?php echo e(route('user.profile.edit')); ?>" class="flex space-x-2 items-center py-2 px-3 rounded lg:bg-transparent lg:dark:text-blue-500" aria-current="page">
                                        <svg class="text-black size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                                        <span>Mon profil</span>
                                    </a>
                                </li>
                                <li class="w-full">
                                    <a href="<?php echo e(route('mes-annonces-publiees.index')); ?>" class="flex space-x-2 items-center  py-2 px-3 rounded lg:bg-transparent lg:dark:text-blue-500" aria-current="page">
                                        <svg class="size-6 text-black" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 8L11.5001 22M18.6383 3.37924L21.9348 15.6583C22.2932 16.9933 21.1187 18.2381 19.762 17.961L17.0415 17.4054C14.014 16.787 10.8839 16.8807 7.89906 17.679C5.40053 18.3472 2.83037 16.8599 2.16089 14.3662C1.49142 11.8725 2.97216 9.30181 5.47068 8.63362C8.45556 7.83537 11.2132 6.35446 13.5253 4.30818L15.603 2.46935C16.6391 1.55235 18.2799 2.0442 18.6383 3.37924Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Mes annonces publiées</span>
                                </a>
                                </li>
                                <li class=" w-full">
                                    <a href="<?php echo e(route('packs-commandes')); ?>" class="flex space-x-2 items-center  py-2 px-3 rounded lg:bg-transparent lg:dark:text-blue-500" aria-current="page">
                                        <svg class="size-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 3H5.5L7.85836 13.4425C8.0643 14.3543 8.87398 15 9.8088 15H18.3957C19.3331 15 20.1447 14.3489 20.348 13.4339L22 6H6.5M11 20C11 20.5523 10.5523 21 10 21C9.44772 21 9 20.5523 9 20C9 19.4477 9.44772 19 10 19C10.5523 19 11 19.4477 11 20ZM19 20C19 20.5523 18.5523 21 18 21C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19C18.5523 19 19 19.4477 19 20Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <span>Packs commandés</span>
                                    </a>
                                </li>
                                <li class="w-full">
                                    <form method="POST" action="<?php echo e(route('logout')); ?>" class="">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="text-red-600 flex items-center space-x-2 py-2 px-3 rounded lg:border-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">
                                            
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-logout w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12h-9.5m7.5 3l3-3-3-3m-5-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h5a2 2 0 002-2v-1"/></svg>
                                                <span class="">Se déconnecter</span>
                                            
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\ENSET\s3\stage\projet\prj\LegAnno\resources\views/user/components/nav.blade.php ENDPATH**/ ?>
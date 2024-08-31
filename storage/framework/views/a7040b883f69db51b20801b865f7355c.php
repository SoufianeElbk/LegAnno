<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Users | Admin Dashboard</title>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</head>

<body class="font-[Poppins]">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen ">
        <div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
            class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

        <div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
            class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex justify-center items-center">
                    <a class="w-3/4" href="<?php echo e(Route('admin.dashboard')); ?>"><img
                            src="<?php echo e(asset('/images/logo2.png')); ?>" alt=""></a>
                </div>
            </div>

            <nav class="mt-10">
                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="<?php echo e(Route('admin.dashboard')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-dashboard size-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v5a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm10 0a1 1 0 011-1h4a1 1 0 011 1v2a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zm10-3a1 1 0 011-1h4a1 1 0 011 1v6a1 1 0 01-1 1h-4a1 1 0 01-1-1v-6z"/></svg>
                    <span class="mx-3 text-sm">Dashboard</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25"
                    href="<?php echo e(Route('admin.users.index')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>

                    <span class="mx-3 text-sm">Users</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="<?php echo e(Route('admin.managers.index')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>

                    <span class="mx-3 text-sm">Managers</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="<?php echo e(Route('admin.packs.index')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>

                    <span class="mx-3 text-sm">Packs</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="<?php echo e(Route('admin.commandes.index')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-cart size-6"><circle xmlns="http://www.w3.org/2000/svg" cx="7.5" cy="18.5" r="1.5" fill="currentColor"/><circle xmlns="http://www.w3.org/2000/svg" cx="16.5" cy="18.5" r="1.5" fill="currentColor"/><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l.6 3m0 0L7 15h10l2-7H5.6z"/></svg>

                    <span class="mx-3 text-sm">Commandes</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="<?php echo e(Route('admin.annonces-validees.index')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-pencil size-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 7.5l3 3M4 20v-3.5L15.293 5.207a1 1 0 011.414 0l2.086 2.086a1 1 0 010 1.414L7.5 20H4z"/></svg>

                    <span class="mx-3 text-sm">Annonces en préparation</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="<?php echo e(Route('admin.annonces-validees.index')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" class="humbleicons hi-check size-6">
                        <path xmlns="http://www.w3.org/2000/svg" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 14l4 4L19 8" />
                    </svg>

                    <span class="mx-3 text-sm">Annonces validées</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="<?php echo e(Route('admin.annonces-annulees.index')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" class="humbleicons hi-times size-6">
                        <g xmlns="http://www.w3.org/2000/svg" stroke="currentColor"
                            stroke-linecap="round" stroke-width="2">
                            <path d="M6 18L18 6M18 18L6 6" />
                        </g>
                    </svg>

                    <span class="mx-3 text-sm">Annonces annulées</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="<?php echo e(Route('admin.annonces-en-attente.index')); ?>">
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
                        Bonjour <span class="font-bold"><?php echo e(Auth::guard('admin')->user()->nom); ?></span>
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
                            <a href="<?php echo e(Route('admin.profile.edit')); ?>"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                            <form method="POST" action="<?php echo e(route('admin.logout')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="w-full text-left">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-white">
                <div class="container mx-auto px-6 py-8 ">


                    <h3 class="text-gray-700 text-3xl font-medium mt-4 text-center">Ajouter un utilisateur</h3>

                    <div class="flex flex-col mt-4">

                        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                            <div class="p-2">
                                <div class="w-full pb-8 sm:rounded-lg">

                                    <div class="grid max-w-2xl mt-4 mx-auto">
                                        <form action="<?php echo e(Route('admin.users.store')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="items-center mt-8 text-[#202142]">

                                                <div class="mb-2 sm:mb-6">
                                                    <label for="email"
                                                        class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                                        Nom complet</label>
                                                    <input name="nom" type="text" id="nom"
                                                        class="border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                                        placeholder="Nom" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="email"
                                                        class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                                        Email</label>
                                                    <input name="email" type="email" id="email"
                                                        class="border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                                        placeholder="email@mail.com" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="password"
                                                        class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">
                                                        Mot de passe</label>
                                                    <input name="password" type="password" id="password"
                                                        class="border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                                        placeholder="********" required>
                                                </div>

                                                <div class="flex justify-end">
                                                    <button type="submit"
                                                        class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Créer</button>
                                                </div>

                                            </div>
                                        </form>
                                        <?php if($errors->any()): ?>
                                            <ul>
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="text-red-500"><?php echo e($error); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
<?php /**PATH D:\ENSET\s3\stage\projet\prj\LegAnno\resources\views/admin/users/create.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Annonce légale n <?php echo e($Data['annonce']->id); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</head>

<body class="font-[Poppins]">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
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

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
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
                    href="<?php echo e(Route('admin.annonces-en-preparation.index')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-pencil size-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 7.5l3 3M4 20v-3.5L15.293 5.207a1 1 0 011.414 0l2.086 2.086a1 1 0 010 1.414L7.5 20H4z"/></svg>

                    <span class="mx-3 text-sm">Annonces en préparation</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 
                    <?php if($Data['annonce']->statut == 'validée'): ?>
                    text-gray-100 bg-gray-700 bg-opacity-25 
                    <?php else: ?> text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 
                    <?php endif; ?>"
                    href="<?php echo e(Route('admin.annonces-validees.index')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" class="humbleicons hi-check size-6">
                        <path xmlns="http://www.w3.org/2000/svg" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 14l4 4L19 8" />
                    </svg>

                    <span class="mx-3 text-sm">Annonces validées</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 
                    <?php if($Data['annonce']->statut == 'annulée'): ?>
                        text-gray-100 bg-gray-700 bg-opacity-25 
                        <?php else: ?> text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 
                        <?php endif; ?>"
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

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8 w-fit">

                    <h3 class="text-gray-700 text-3xl font-medium mt-8 mx-auto">Annonce legale n <?php echo e($Data['annonce']->id); ?></h3>

                    <div class="mt-4">
                            <div class="text-xs md:text-sm space-y-3 bg-white py-4 px-8">
                                <?php if($Data['type_annonce']==1): ?>
                                    <p class="text-center"><?php echo e($Data['creation_sarl']->denomination); ?> (<?php echo e($Data['creation_sarl']->sigle); ?>) <?php echo e($Data['creation_sarl']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['creation_sarl']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['creation_sarl']->adresse_societe); ?> <?php echo e($Data['creation_sarl']->code_postal_societe); ?> <?php echo e($Data['creation_sarl']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">CONSTITUTION : <?php echo e($Data['creation_sarl']->forme_sociale); ?></p>
                                    <p class="mb-2">Par acte authentique en date du <?php echo e($Data['creation_sarl']->date_acte); ?>, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <li>Dénomination sociale : <?php echo e($Data['creation_sarl']->denomination); ?> (<?php echo e($Data['creation_sarl']->sigle); ?>)</li>
                                        <li>Forme sociale : <?php echo e($Data['creation_sarl']->forme_sociale); ?></li>
                                        <li>Objet social sommaire : <?php echo e($Data['creation_sarl']->objet_social); ?></li>
                                        <li>Durée de la société : <?php echo e($Data['creation_sarl']->durre); ?></li>
                                        <li>Adresse du siège social : <?php echo e($Data['creation_sarl']->adresse_societe); ?> <?php echo e($Data['creation_sarl']->code_postal_societe); ?> <?php echo e($Data['creation_sarl']->ville_societe); ?></li>
                                        <li>Montant du capital social : <?php echo e($Data['creation_sarl']->capital); ?></li>
                                        <li>Nombre de parts sociales : </li>
                                        <li>Valeur nominale : <?php echo e($Data['creation_sarl']->valeur_nominale); ?></li>
                                        <li>Montant des apports en numéraire : <?php echo e($Data['creation_sarl']->montant_apports_en_numeraire); ?></li>
                                        <li>Description des apports en nature et leurs valeurs : <?php echo e($Data['creation_sarl']->description_apports); ?></li>
                                    </ul>
                                    <h2>Representants :</h2>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <?php $__currentLoopData = $Data['representants']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $representant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($representant->civilite_representant); ?> <?php echo e($representant->nom_representant); ?> | <?php echo e($representant->adresse_representant); ?> <?php echo e($representant->code_postal_representant); ?> <?php echo e($representant->ville_representant); ?> | <?php echo e($representant->qualite_representant); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <h2>Associés :</h2>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <?php $__currentLoopData = $Data['associes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $associe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($associe->civilite_associe); ?> <?php echo e($associe->nom_associe); ?> | <?php echo e($associe->adresse_associe); ?> <?php echo e($associe->code_postal_associe); ?> <?php echo e($associe->ville_associe); ?> | <?php echo e($associe->participation_associe); ?> parts sociales
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php if(isset($Data['commissaires'])): ?>
                                    <h2>Commissaire aux comptes :</h2>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <?php $__currentLoopData = $Data['commissaires']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commissaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($commissaire->civilite_commissaire); ?> <?php echo e($commissaire->nom_commissaire); ?> | <?php echo e($commissaire->adresse_commissaire); ?> <?php echo e($commissaire->code_postal_commissaire); ?> <?php echo e($commissaire->ville_commissaire); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php endif; ?>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>

                                <?php if($Data['type_annonce']==2): ?>
                                    <p class="text-center"><?php echo e($Data['creation_sas']->denomination); ?> (<?php echo e($Data['creation_sas']->sigle); ?>) <?php echo e($Data['creation_sas']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['creation_sas']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['creation_sas']->adresse_societe); ?> <?php echo e($Data['creation_sas']->code_postal_societe); ?> <?php echo e($Data['creation_sas']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">CONSTITUTION : <?php echo e($Data['creation_sas']->forme_sociale); ?></p>
                                    <p class="mb-2">Par acte authentique en date du <?php echo e($Data['creation_sas']->date_acte); ?>, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <li>Dénomination sociale : <?php echo e($Data['creation_sas']->denomination); ?> (<?php echo e($Data['creation_sas']->sigle); ?>)</li>
                                        <li>Forme sociale : <?php echo e($Data['creation_sas']->forme_sociale); ?></li>
                                        <li>Objet social sommaire : <?php echo e($Data['creation_sas']->objet_social); ?></li>
                                        <li>Durée de la société : <?php echo e($Data['creation_sas']->durre); ?></li>
                                        <li>Adresse du siège social : <?php echo e($Data['creation_sas']->adresse_societe); ?> <?php echo e($Data['creation_sas']->code_postal_societe); ?> <?php echo e($Data['creation_sas']->ville_societe); ?></li>
                                        <li>Montant du capital social : <?php echo e($Data['creation_sas']->capital); ?></li>
                                        <li>Nombre d'actions : <?php echo e($Data['creation_sas']->nombre_actions); ?></li>
                                        <li>Valeur nominale : <?php echo e($Data['creation_sas']->valeur_nominale); ?></li>
                                        <li>Montant des apports en numéraire : <?php echo e($Data['creation_sas']->montant_apports_en_numeraire); ?></li>
                                        <li>Description des apports en nature et leurs valeurs : <?php echo e($Data['creation_sas']->description_apports); ?></li>
                                    </ul>
                                    <h2>Representants :</h2>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <?php $__currentLoopData = $Data['representants']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $representant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($representant->civilite_representant); ?> <?php echo e($representant->nom_representant); ?> | <?php echo e($representant->adresse_representant); ?> <?php echo e($representant->code_postal_representant); ?> <?php echo e($representant->ville_representant); ?> | <?php echo e($representant->qualite_representant); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <h2>Membres de l’organe de direction :</h2>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <?php $__currentLoopData = $Data['membres']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($membre->civilite_membre); ?> <?php echo e($membre->nom_membre); ?> | <?php echo e($membre->adresse_membre); ?> <?php echo e($membre->code_postal_membre); ?> <?php echo e($membre->ville_representant); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php if(isset($Data['commissaires'])): ?>
                                    <h2>Commissaire aux comptes :</h2>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <?php $__currentLoopData = $Data['commissaires']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commissaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($commissaire->civilite_commissaire); ?> <?php echo e($commissaire->nom_commissaire); ?> | <?php echo e($commissaire->adresse_commissaire); ?> <?php echo e($commissaire->code_postal_commissaire); ?> <?php echo e($commissaire->ville_commissaire); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php endif; ?>
                                    <p>Dispositions statutaires relatives à la constitution de réserves et à la répartition des bénéfices : <?php echo e($Data['creation_sas']->dispositions_statutaires); ?></p>
                                    <p>Indication des avantages particuliers stipulés au profit de toute personne : <?php echo e($Data['creation_sas']->avantages); ?></p>
                                    <p>Indication des conditions d'agrément des cessionnaires d'actions et la désignation de l'organe social habilité à statuer sur les demandes d'agrément : <?php echo e($Data['creation_sas']->organe_social_habilite); ?></p>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>

                                <?php if($Data['type_annonce']==3): ?>
                                    <p class="text-center"><?php echo e($Data['creation_sa']->denomination); ?> (<?php echo e($Data['creation_sa']->sigle); ?>) <?php echo e($Data['creation_sa']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['creation_sa']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['creation_sa']->adresse_societe); ?> <?php echo e($Data['creation_sa']->code_postal_societe); ?> <?php echo e($Data['creation_sa']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">CONSTITUTION : <?php echo e($Data['creation_sa']->forme_sociale); ?></p>
                                    <p class="mb-2">Par acte authentique en date du <?php echo e($Data['creation_sa']->date_acte); ?>, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <li>Dénomination sociale : <?php echo e($Data['creation_sa']->denomination); ?> (<?php echo e($Data['creation_sa']->sigle); ?>)</li>
                                        <li>Forme sociale : <?php echo e($Data['creation_sa']->forme_sociale); ?></li>
                                        <li>Objet social sommaire : <?php echo e($Data['creation_sa']->objet_social); ?></li>
                                        <li>Durée de la société : <?php echo e($Data['creation_sa']->durre); ?></li>
                                        <li>Adresse du siège social : <?php echo e($Data['creation_sa']->adresse_societe); ?> <?php echo e($Data['creation_sa']->code_postal_societe); ?> <?php echo e($Data['creation_sa']->ville_societe); ?></li>
                                        <li>Montant du capital social : <?php echo e($Data['creation_sa']->capital); ?></li>
                                        <li>Nombre d'actions : <?php echo e($Data['creation_sa']->nombre_actions); ?></li>
                                        <li>Valeur nominale : <?php echo e($Data['creation_sa']->valeur_nominale); ?></li>
                                        <li>Montant des apports en numéraire : <?php echo e($Data['creation_sa']->montant_apports_en_numeraire); ?></li>
                                        <li>Description des apports en nature et leurs valeurs : <?php echo e($Data['creation_sa']->description_apports); ?></li>
                                    </ul>
                                    <h2>Representants :</h2>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <?php $__currentLoopData = $Data['representants']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $representant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($representant->civilite_representant); ?> <?php echo e($representant->nom_representant); ?> | <?php echo e($representant->adresse_representant); ?> <?php echo e($representant->code_postal_representant); ?> <?php echo e($representant->ville_representant); ?> | <?php echo e($representant->qualite_representant); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <h2>Membres de l’organe de direction :</h2>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <?php $__currentLoopData = $Data['membres']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($membre->civilite_membre); ?> <?php echo e($membre->nom_membre); ?> | <?php echo e($membre->adresse_membre); ?> <?php echo e($membre->code_postal_membre); ?> <?php echo e($membre->ville_representant); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php if(isset($Data['commissaires'])): ?>
                                    <h2>Commissaire aux comptes :</h2>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <?php $__currentLoopData = $Data['commissaires']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commissaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($commissaire->civilite_commissaire); ?> <?php echo e($commissaire->nom_commissaire); ?> | <?php echo e($commissaire->adresse_commissaire); ?> <?php echo e($commissaire->code_postal_commissaire); ?> <?php echo e($commissaire->ville_commissaire); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php endif; ?>
                                    <p>Dispositions statutaires relatives à la constitution de réserves et à la répartition des bénéfices : <?php echo e($Data['creation_sa']->dispositions_statutaires); ?></p>
                                    <p>Indication des avantages particuliers stipulés au profit de toute personne : <?php echo e($Data['creation_sa']->avantages); ?></p>
                                    <p>Indication des conditions d'agrément des cessionnaires d'actions et la désignation de l'organe social habilité à statuer sur les demandes d'agrément : <?php echo e($Data['creation_sa']->organe_social_habilite); ?></p>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>

                                <?php if($Data['type_annonce']==4): ?>
                                    <p class="text-center"><?php echo e($Data['dissolution']->denomination); ?> (<?php echo e($Data['dissolution']->sigle); ?>) <?php echo e($Data['dissolution']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['dissolution']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['dissolution']->adresse_societe); ?> <?php echo e($Data['dissolution']->code_postal_societe); ?> <?php echo e($Data['dissolution']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">DISSOLUTION DE LA SOCIETE ET NOMINATION DU LIQUIDATEUR</p>
                                    <p class="mb-2">Aux termes d’une délibération de <?php echo e($Data['dissolution']->organe_decision); ?> en date du <?php echo e($Data['dissolution']->date_decision); ?>, il a été décidé ce qui suit :</p>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <li>La dissolution de la société pour la raison suivante : <?php echo e($Data['dissolution']->raison_liquidation); ?></li>
                                        <li>La nomination en tant que liquidateur de <?php echo e($Data['dissolution']->civilite_liquidateur); ?> <?php echo e($Data['dissolution']->nom_liquidateur); ?> | <?php echo e($Data['dissolution']->adresse_liquidateur); ?> <?php echo e($Data['dissolution']->code_postal_liquidateur); ?> <?php echo e($Data['dissolution']->ville_liquidateur); ?></li>
                                        <li>Les limitations apportées aux pouvoirs du liquidateur : <?php echo e($Data['dissolution']->limitation_apportes_aux_pouvoir_du_liquidateur); ?></li>
                                        <li>La fixation du siège de liquidation à l’adresse suivante : <?php echo e($Data['dissolution']->adresse_liquidation); ?> <?php echo e($Data['dissolution']->code_postal_liquidation); ?> <?php echo e($Data['dissolution']->ville_liquidation); ?></li>
                                    </ul>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>

                                <?php if($Data['type_annonce']==5): ?>
                                    <p class="text-center"><?php echo e($Data['cloture_liquidation']->denomination); ?> (<?php echo e($Data['cloture_liquidation']->sigle); ?>) <?php echo e($Data['cloture_liquidation']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['cloture_liquidation']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['cloture_liquidation']->adresse_societe); ?> <?php echo e($Data['cloture_liquidation']->code_postal_societe); ?> <?php echo e($Data['cloture_liquidation']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">CLOTURE DE LA LIQUIDATION</p>
                                    <p class="mb-2">Aux termes d’une délibération de <?php echo e($Data['cloture_liquidation']->organe_decision); ?> en date du <?php echo e($Data['cloture_liquidation']->date_decision); ?>, il a été décidé d’approuver les comptes définitifs de liquidation, de donner quitus au liquidateur <?php echo e($Data['cloture_liquidation']->civilite_liquidateur); ?> <?php echo e($Data['cloture_liquidation']->nom_liquidateur); ?> | <?php echo e($Data['cloture_liquidation']->adresse_liquidateur); ?> <?php echo e($Data['cloture_liquidation']->code_postal_liquidateur); ?> <?php echo e($Data['cloture_liquidation']->ville_liquidateur); ?> pour sa gestion et de prononcer la clôture des opérations de liquidation de la société.</p>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>

                                <?php if($Data['type_annonce']==6): ?>
                                    <p class="text-center"><?php echo e($Data['continuite_activite']->denomination); ?> (<?php echo e($Data['continuite_activite']->sigle); ?>) <?php echo e($Data['continuite_activite']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['continuite_activite']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['continuite_activite']->adresse_societe); ?> <?php echo e($Data['continuite_activite']->code_postal_societe); ?> <?php echo e($Data['continuite_activite']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">DECISION DE NON DISSOLUTION ANTICIPEE DE LA SOCIETE</p>
                                    <p class="mb-2">Aux termes d’une délibération de <?php echo e($Data['continuite_activite']->organe_decision); ?> en date du <?php echo e($Data['continuite_activite']->date_decision); ?>, il a été constaté que la situation nette de la société est devenue inférieure au quart du capital social et il a été décidé de ne pas prononcer la dissolution anticipée de la société et de poursuivre l’activité.</p>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>

                                <?php if($Data['type_annonce']==7): ?>
                                    <p class="text-center"><?php echo e($Data['transfert_siege_social']->denomination); ?> (<?php echo e($Data['transfert_siege_social']->sigle); ?>) <?php echo e($Data['transfert_siege_social']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['transfert_siege_social']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['transfert_siege_social']->adresse_societe); ?> <?php echo e($Data['transfert_siege_social']->code_postal_societe); ?> <?php echo e($Data['transfert_siege_social']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">TRANSFERT DU SIEGE SOCIAL</p>
                                    <p class="mb-2">Aux termes d’une délibération de <?php echo e($Data['transfert_siege_social']->organe_decision); ?> en date du <?php echo e($Data['transfert_siege_social']->date_decision); ?>, il a été décidé de transférer le siège social de la société à l’adresse suivante <?php echo e($Data['transfert_siege_social']->nv_adresse); ?> <?php echo e($Data['transfert_siege_social']->nv_code_postal); ?> <?php echo e($Data['transfert_siege_social']->nv_ville); ?></p>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>

                                <?php if($Data['type_annonce']==8): ?>
                                    <p class="text-center"><?php echo e($Data['changement_objet_social']->denomination); ?> (<?php echo e($Data['changement_objet_social']->sigle); ?>) <?php echo e($Data['changement_objet_social']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['changement_objet_social']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['changement_objet_social']->adresse_societe); ?> <?php echo e($Data['changement_objet_social']->code_postal_societe); ?> <?php echo e($Data['changement_objet_social']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">MODIFICATION DE L’OBJET SOCIAL</p>
                                    <p class="mb-2">Aux termes d’une délibération de <?php echo e($Data['changement_objet_social']->organe_decision); ?> en date du <?php echo e($Data['changement_objet_social']->date_decision); ?>, il a été décidé d’apporter la modification suivante à l’objet social : <?php echo e($Data['changement_objet_social']->modification_objet_social); ?></p>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>

                                <?php if($Data['type_annonce']==9): ?>
                                    <p class="text-center"><?php echo e($Data['changement_denomination']->denomination); ?> (<?php echo e($Data['changement_denomination']->sigle); ?>) <?php echo e($Data['changement_denomination']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['changement_denomination']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['changement_denomination']->adresse_societe); ?> <?php echo e($Data['changement_denomination']->code_postal_societe); ?> <?php echo e($Data['changement_denomination']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">CHANGEMENT DE DENOMINATION SOCIALE</p>
                                    <p class="mb-2">Aux termes d’une délibération de <?php echo e($Data['changement_denomination']->organe_decision); ?> en date du <?php echo e($Data['changement_denomination']->date_decision); ?>, il a été décidé de modifier la dénomination de la société qui est désormais <?php echo e($Data['changement_denomination']->nv_denomination); ?></p>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>

                                <?php if($Data['type_annonce']==10): ?>
                                    <p class="text-center"><?php echo e($Data['transformation_forme_sociale']->denomination); ?> (<?php echo e($Data['transformation_forme_sociale']->sigle); ?>) <?php echo e($Data['transformation_forme_sociale']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['transformation_forme_sociale']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['transformation_forme_sociale']->adresse_societe); ?> <?php echo e($Data['transformation_forme_sociale']->code_postal_societe); ?> <?php echo e($Data['transformation_forme_sociale']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">TRANSFORMATION DE LA FORME SOCIALE</p>
                                    <p class="mb-2">Aux termes d’une délibération de <?php echo e($Data['transformation_forme_sociale']->organe_decision); ?> en date du <?php echo e($Data['transformation_forme_sociale']->date_decision); ?>, il a été décidé de transformer la forme sociale de la société de <?php echo e($Data['transformation_forme_sociale']->forme_sociale); ?> à <?php echo e($Data['transformation_forme_sociale']->nv_forme_sociale); ?></p>
                                    <h2>La société est désormais représentée par :</h2>
                                    <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <?php $__currentLoopData = $Data['representants']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $representant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($representant->civilite_representant); ?> <?php echo e($representant->nom_representant); ?> | <?php echo e($representant->adresse_representant); ?> <?php echo e($representant->code_postal_representant); ?> <?php echo e($representant->ville_representant); ?> | <?php echo e($representant->qualite_representant); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>

                                <?php if($Data['type_annonce']==11): ?>
                                    <p class="text-center"><?php echo e($Data['reduction_capital']->denomination); ?> (<?php echo e($Data['reduction_capital']->sigle); ?>) <?php echo e($Data['reduction_capital']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['reduction_capital']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['reduction_capital']->adresse_societe); ?> <?php echo e($Data['reduction_capital']->code_postal_societe); ?> <?php echo e($Data['reduction_capital']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">REDUCTION DE CAPITAL</p>
                                    <p class="mb-2">Aux termes d’une délibération de <?php echo e($Data['reduction_capital']->organe_decision); ?> en date du <?php echo e($Data['reduction_capital']->date_decision); ?>, il a été décidé de réduire le capital social de <?php echo e($Data['reduction_capital']->montant_reduction_capital_social); ?> DH pour le porter de <?php echo e($Data['reduction_capital']->capital_social_avant_reduction); ?> à <?php echo e($Data['reduction_capital']->nouveau_capital_social); ?> par <?php echo e($Data['reduction_capital']->modalite_reduction_capital); ?>.</p>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>

                                <?php if($Data['type_annonce']==12): ?>
                                    <p class="text-center"><?php echo e($Data['augmentation_capital']->denomination); ?> (<?php echo e($Data['augmentation_capital']->sigle); ?>) <?php echo e($Data['augmentation_capital']->forme_sociale); ?></p>
                                    <p class="text-center">Capital : <?php echo e($Data['augmentation_capital']->capital); ?> DH</p>
                                    <p class="text-center">Siège social : <?php echo e($Data['augmentation_capital']->adresse_societe); ?> <?php echo e($Data['augmentation_capital']->code_postal_societe); ?> <?php echo e($Data['augmentation_capital']->ville_societe); ?></p>
                                    <p class="text-center">Registre du Commerce de <?php echo e($Data['annonce']->tribunal); ?> : <?php echo e($Data['annonce']->numero_rc); ?></p>
                                    <p class="text-center">AUGMENTATION DE CAPITAL</p>
                                    <p>Aux termes d’une délibération de <?php echo e($Data['augmentation_capital']->organe_decision); ?> en date du <?php echo e($Data['augmentation_capital']->date_decision); ?>, il a été décidé d’augmenter le capital social de <?php echo e($Data['augmentation_capital']->montant_augmentation_capital_social); ?> DH pour le porter de <?php echo e($Data['augmentation_capital']->capital_social_avant_augmentation); ?> à <?php echo e($Data['augmentation_capital']->nouveau_capital_social); ?> par <?php echo e($Data['augmentation_capital']->modalite_augmentation_capital); ?>.</p>
                                    <p>Cette augmentation de capital a été libérée <?php echo e($Data['augmentation_capital']->liberation); ?> par <?php echo e($Data['augmentation_capital']->modalite_liberation_augmentation_capital); ?>.</p>
                                    <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($Data['annonce']->tribunal); ?> le <?php echo e($Data['annonce']->date_depot); ?> sous le numéro <?php echo e($Data['annonce']->numero_depot); ?>.</p>
                                    <p>Pour extrait et mention</p>
                                <?php endif; ?>
                            </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
<?php /**PATH D:\ENSET\s3\stage\projet\prj\LegAnno\resources\views/admin/annonce-legale.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', "Paiement Annonce Légale"); ?>

<?php $__env->startSection('content'); ?>
<div class="container text-white mx-auto p-6">
    <?php echo $__env->make('user.components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="text-black container mx-auto mb-6 p-6">
    <div class="max-w-screen-xl mx-auto">
        <div class="mb-4">
            <?php if(session('success')): ?>
    
                <div role="alert" class="rounded-xl border border-gray-100 bg-white p-4 mb-4">
                    <div class="flex items-start gap-4">
                    <span class="text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" ><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </span>
                    <div class="flex-1">
                        <strong class="block font-medium text-gray-900"> Changes saved </strong>
                        <p class="mt-1 text-sm text-gray-700"><?php echo e(session('success')); ?>.</p>
                    </div>
                    <button class="text-gray-500 transition hover:text-gray-600">
                        <span class="sr-only">Dismiss popup</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                    </div>
                </div>
            <?php endif; ?>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <div class="w-fit mx-auto text-white text-xl font-bold mb-4">1- Saisie des informations</div>
                    <div class="text-xs md:text-sm space-y-3 bg-white py-4 px-8 rounded-md">
                        <h1 class="text-lg font-bold mb-4">Votre annonce légale n° <?php echo e($Data['annonce']->id); ?></h1>
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
        
                <form action="<?php echo e(Route('annonces-legales-paiement',[$Data['type_annonce'],$Data['annonce']->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                
                    <div class="w-fit mx-auto text-white text-xl font-bold mb-4">2- Paiement de l'annonce</div>
                    <div class="bg-white p-4 rounded-md">
                        <h1 class="text-lg mb-4 font-semibold">Choisissez un moyen de paiement ci-dessous :</h1>
                            <div class="flex flex-col space-y-4 mb-4">
                                <input type="hidden" name="annonce_id" value="<?php echo e($Data['annonce']->id); ?>">
                                <div class=""><input required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="mode_paiement" value="Carte Bancaire"><label class="ms-2 text-sm font-medium  dark:text-gray-300">Carte Bancaire (150 DH)</label></div>
                                <div class=""><input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="mode_paiement" value="Paypal"><label class="ms-2 text-sm font-medium  dark:text-gray-300">Paypal  (150 DH)</label></div>
                                <div class=""><input <?php if(Auth::user()->solde == 0): ?> disabled <?php endif; ?> class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="mode_paiement" value="Votre Solde"><label class="ms-2 text-sm font-medium  dark:text-gray-300">Votre Solde (solde actuel : <?php echo e(Auth::user()->solde); ?>) <?php if(Auth::user()->solde == 0): ?><a href="/" class="text-xs underline">Commander un pack maintenant</a><?php endif; ?></label></div>
                            </div>
                            <div class="mb-4">
                                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adreese de facturation</label>
                                <input name="adresse_facturation" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                    </div>
                
                <button type="submit" class="bg-orange-400 p-3 rounded-xl text-md sm:text-lg font-medium text-white w-full mt-4">PROCÉDEZ AU PAIEMENT</button>
                </form>
            </div>
    </div>
    </div>
</div>

<div class="bg-white">
    <?php echo $__env->make('user.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('user.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ENSET\s3\stage\projet\prj\LegAnno\resources\views/user/annonces-legales-paiement.blade.php ENDPATH**/ ?>
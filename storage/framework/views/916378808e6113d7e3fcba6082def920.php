<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Annonce légale n <?php echo e($annonce->id); ?></title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .text-center {
            text-align: center;
        }
        .text-gray-700 {
            color: #4a5568;
        }
        .text-3xl {
            font-size: 1.875rem;
        }
        .font-medium {
            font-weight: 500;
        }
        .mt-8 {
            margin-top: 2rem;
        }
        .mt-4 {
            margin-top: 1rem;
        }
        .text-xs {
            font-size: 0.75rem;
        }
        .md\:text-sm {
            font-size: 0.875rem;
        }
        .space-y-3 > * + * {
            margin-top: 0.75rem;
        }
        .bg-white {
            background-color: #ffffff;
        }
        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }
        .list-disc {
            list-style-type: disc;
        }
        .list-inside {
            list-style-position: inside;
        }
        .dark\:text-gray-400 {
            color: #cbd5e0;
        }
    </style>
</head>

<body class="font-[Poppins]">
    <div class="container mx-auto px-6 py-8">

        <h3 class="text-gray-700 text-3xl font-medium mt-8">Annonce legale n <?php echo e($annonce->id); ?></h3>
        <div class="mt-4">
                <div class="text-xs md:text-sm space-y-3 bg-white py-4 px-8">
                    <?php if($type_annonce==1): ?>
                        <p class="text-center"><?php echo e($creation_sarl->denomination); ?> (<?php echo e($creation_sarl->sigle); ?>) <?php echo e($creation_sarl->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($creation_sarl->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($creation_sarl->adresse_societe); ?> <?php echo e($creation_sarl->code_postal_societe); ?> <?php echo e($creation_sarl->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">CONSTITUTION : <?php echo e($creation_sarl->forme_sociale); ?></p>
                        <p class="mb-2">Par acte authentique en date du <?php echo e($annonce->date_acte); ?>, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>Dénomination sociale : <?php echo e($creation_sarl->denomination); ?> (<?php echo e($creation_sarl->sigle); ?>)</li>
                            <li>Forme sociale : <?php echo e($creation_sarl->forme_sociale); ?></li>
                            <li>Objet social sommaire : <?php echo e($creation_sarl->objet_social); ?></li>
                            <li>Durée de la société : <?php echo e($creation_sarl->durre); ?></li>
                            <li>Adresse du siège social : <?php echo e($creation_sarl->adresse_societe); ?> <?php echo e($creation_sarl->code_postal_societe); ?> <?php echo e($creation_sarl->ville_societe); ?></li>
                            <li>Montant du capital social : <?php echo e($creation_sarl->capital); ?></li>
                            <li>Nombre de parts sociales : </li>
                            <li>Valeur nominale : <?php echo e($creation_sarl->valeur_nominale); ?></li>
                            <li>Montant des apports en numéraire : <?php echo e($creation_sarl->montant_apports_en_numeraire); ?></li>
                            <li>Description des apports en nature et leurs valeurs : <?php echo e($creation_sarl->description_apports); ?></li>
                        </ul>
                        <h2>Representants :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <?php $__currentLoopData = $representants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $representant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($representant->civilite_representant); ?> <?php echo e($representant->nom_representant); ?> | <?php echo e($representant->adresse_representant); ?> <?php echo e($representant->code_postal_representant); ?> <?php echo e($representant->ville_representant); ?> | <?php echo e($representant->qualite_representant); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <h2>Associés :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <?php $__currentLoopData = $associes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $associe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($associe->civilite_associe); ?> <?php echo e($associe->nom_associe); ?> | <?php echo e($associe->adresse_associe); ?> <?php echo e($associe->code_postal_associe); ?> <?php echo e($associe->ville_associe); ?> | <?php echo e($associe->participation_associe); ?> parts sociales
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php if(isset($commissaires)): ?>
                        <h2>Commissaire aux comptes :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <?php $__currentLoopData = $commissaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commissaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($commissaire->civilite_commissaire); ?> <?php echo e($commissaire->nom_commissaire); ?> | <?php echo e($commissaire->adresse_commissaire); ?> <?php echo e($commissaire->code_postal_commissaire); ?> <?php echo e($commissaire->ville_commissaire); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>

                    <?php if($type_annonce==2): ?>
                        <p class="text-center"><?php echo e($creation_sas->denomination); ?> (<?php echo e($creation_sas->sigle); ?>) <?php echo e($creation_sas->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($creation_sas->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($creation_sas->adresse_societe); ?> <?php echo e($creation_sas->code_postal_societe); ?> <?php echo e($creation_sas->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">CONSTITUTION : <?php echo e($creation_sas->forme_sociale); ?></p>
                        <p class="mb-2">Par acte authentique en date du <?php echo e($creation_sas->date_acte); ?>, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>Dénomination sociale : <?php echo e($creation_sas->denomination); ?> (<?php echo e($creation_sas->sigle); ?>)</li>
                            <li>Forme sociale : <?php echo e($creation_sas->forme_sociale); ?></li>
                            <li>Objet social sommaire : <?php echo e($creation_sas->objet_social); ?></li>
                            <li>Durée de la société : <?php echo e($creation_sas->durre); ?></li>
                            <li>Adresse du siège social : <?php echo e($creation_sas->adresse_societe); ?> <?php echo e($creation_sas->code_postal_societe); ?> <?php echo e($creation_sas->ville_societe); ?></li>
                            <li>Montant du capital social : <?php echo e($creation_sas->capital); ?></li>
                            <li>Nombre d'actions : <?php echo e($creation_sas->nombre_actions); ?></li>
                            <li>Valeur nominale : <?php echo e($creation_sas->valeur_nominale); ?></li>
                            <li>Montant des apports en numéraire : <?php echo e($creation_sas->montant_apports_en_numeraire); ?></li>
                            <li>Description des apports en nature et leurs valeurs : <?php echo e($creation_sas->description_apports); ?></li>
                        </ul>
                        <h2>Representants :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <?php $__currentLoopData = $representants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $representant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($representant->civilite_representant); ?> <?php echo e($representant->nom_representant); ?> | <?php echo e($representant->adresse_representant); ?> <?php echo e($representant->code_postal_representant); ?> <?php echo e($representant->ville_representant); ?> | <?php echo e($representant->qualite_representant); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <h2>Membres de l’organe de direction :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <?php $__currentLoopData = $membres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($membre->civilite_membre); ?> <?php echo e($membre->nom_membre); ?> | <?php echo e($membre->adresse_membre); ?> <?php echo e($membre->code_postal_membre); ?> <?php echo e($membre->ville_representant); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php if(isset($commissaires)): ?>
                        <h2>Commissaire aux comptes :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <?php $__currentLoopData = $commissaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commissaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($commissaire->civilite_commissaire); ?> <?php echo e($commissaire->nom_commissaire); ?> | <?php echo e($commissaire->adresse_commissaire); ?> <?php echo e($commissaire->code_postal_commissaire); ?> <?php echo e($commissaire->ville_commissaire); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                        <p>Dispositions statutaires relatives à la constitution de réserves et à la répartition des bénéfices : <?php echo e($creation_sas->dispositions_statutaires); ?></p>
                        <p>Indication des avantages particuliers stipulés au profit de toute personne : <?php echo e($creation_sas->avantages); ?></p>
                        <p>Indication des conditions d'agrément des cessionnaires d'actions et la désignation de l'organe social habilité à statuer sur les demandes d'agrément : <?php echo e($creation_sas->organe_social_habilite); ?></p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>

                    <?php if($type_annonce==3): ?>
                        <p class="text-center"><?php echo e($creation_sa->denomination); ?> (<?php echo e($creation_sa->sigle); ?>) <?php echo e($creation_sa->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($creation_sa->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($creation_sa->adresse_societe); ?> <?php echo e($creation_sa->code_postal_societe); ?> <?php echo e($creation_sa->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">CONSTITUTION : <?php echo e($creation_sa->forme_sociale); ?></p>
                        <p class="mb-2">Par acte authentique en date du <?php echo e($creation_sa->date_acte); ?>, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>Dénomination sociale : <?php echo e($creation_sa->denomination); ?> (<?php echo e($creation_sa->sigle); ?>)</li>
                            <li>Forme sociale : <?php echo e($creation_sa->forme_sociale); ?></li>
                            <li>Objet social sommaire : <?php echo e($creation_sa->objet_social); ?></li>
                            <li>Durée de la société : <?php echo e($creation_sa->durre); ?></li>
                            <li>Adresse du siège social : <?php echo e($creation_sa->adresse_societe); ?> <?php echo e($creation_sa->code_postal_societe); ?> <?php echo e($creation_sa->ville_societe); ?></li>
                            <li>Montant du capital social : <?php echo e($creation_sa->capital); ?></li>
                            <li>Nombre d'actions : <?php echo e($creation_sa->nombre_actions); ?></li>
                            <li>Valeur nominale : <?php echo e($creation_sa->valeur_nominale); ?></li>
                            <li>Montant des apports en numéraire : <?php echo e($creation_sa->montant_apports_en_numeraire); ?></li>
                            <li>Description des apports en nature et leurs valeurs : <?php echo e($creation_sa->description_apports); ?></li>
                        </ul>
                        <h2>Representants :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <?php $__currentLoopData = $representants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $representant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($representant->civilite_representant); ?> <?php echo e($representant->nom_representant); ?> | <?php echo e($representant->adresse_representant); ?> <?php echo e($representant->code_postal_representant); ?> <?php echo e($representant->ville_representant); ?> | <?php echo e($representant->qualite_representant); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <h2>Membres de l’organe de direction :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <?php $__currentLoopData = $membres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($membre->civilite_membre); ?> <?php echo e($membre->nom_membre); ?> | <?php echo e($membre->adresse_membre); ?> <?php echo e($membre->code_postal_membre); ?> <?php echo e($membre->ville_representant); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php if(isset($commissaires)): ?>
                        <h2>Commissaire aux comptes :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <?php $__currentLoopData = $commissaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commissaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($commissaire->civilite_commissaire); ?> <?php echo e($commissaire->nom_commissaire); ?> | <?php echo e($commissaire->adresse_commissaire); ?> <?php echo e($commissaire->code_postal_commissaire); ?> <?php echo e($commissaire->ville_commissaire); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                        <p>Dispositions statutaires relatives à la constitution de réserves et à la répartition des bénéfices : <?php echo e($creation_sa->dispositions_statutaires); ?></p>
                        <p>Indication des avantages particuliers stipulés au profit de toute personne : <?php echo e($creation_sa->avantages); ?></p>
                        <p>Indication des conditions d'agrément des cessionnaires d'actions et la désignation de l'organe social habilité à statuer sur les demandes d'agrément : <?php echo e($creation_sa->organe_social_habilite); ?></p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>

                    <?php if($type_annonce==4): ?>
                        <p class="text-center"><?php echo e($dissolution->denomination); ?> (<?php echo e($dissolution->sigle); ?>) <?php echo e($dissolution->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($dissolution->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($dissolution->adresse_societe); ?> <?php echo e($dissolution->code_postal_societe); ?> <?php echo e($dissolution->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">DISSOLUTION DE LA SOCIETE ET NOMINATION DU LIQUIDATEUR</p>
                        <p class="mb-2">Aux termes d’une délibération de <?php echo e($dissolution->organe_decision); ?> en date du <?php echo e($dissolution->date_decision); ?>, il a été décidé ce qui suit :</p>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>La dissolution de la société pour la raison suivante : <?php echo e($dissolution->raison_liquidation); ?></li>
                            <li>La nomination en tant que liquidateur de <?php echo e($dissolution->civilite_liquidateur); ?> <?php echo e($dissolution->nom_liquidateur); ?> | <?php echo e($dissolution->adresse_liquidateur); ?> <?php echo e($dissolution->code_postal_liquidateur); ?> <?php echo e($dissolution->ville_liquidateur); ?></li>
                            <li>Les limitations apportées aux pouvoirs du liquidateur : <?php echo e($dissolution->limitation_apportes_aux_pouvoir_du_liquidateur); ?></li>
                            <li>La fixation du siège de liquidation à l’adresse suivante : <?php echo e($dissolution->adresse_liquidation); ?> <?php echo e($dissolution->code_postal_liquidation); ?> <?php echo e($dissolution->ville_liquidation); ?></li>
                        </ul>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>

                    <?php if($type_annonce==5): ?>
                        <p class="text-center"><?php echo e($cloture_liquidation->denomination); ?> (<?php echo e($cloture_liquidation->sigle); ?>) <?php echo e($cloture_liquidation->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($cloture_liquidation->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($cloture_liquidation->adresse_societe); ?> <?php echo e($cloture_liquidation->code_postal_societe); ?> <?php echo e($cloture_liquidation->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">CLOTURE DE LA LIQUIDATION</p>
                        <p class="mb-2">Aux termes d’une délibération de <?php echo e($cloture_liquidation->organe_decision); ?> en date du <?php echo e($cloture_liquidation->date_decision); ?>, il a été décidé d’approuver les comptes définitifs de liquidation, de donner quitus au liquidateur <?php echo e($cloture_liquidation->civilite_liquidateur); ?> <?php echo e($cloture_liquidation->nom_liquidateur); ?> | <?php echo e($cloture_liquidation->adresse_liquidateur); ?> <?php echo e($cloture_liquidation->code_postal_liquidateur); ?> <?php echo e($cloture_liquidation->ville_liquidateur); ?> pour sa gestion et de prononcer la clôture des opérations de liquidation de la société.</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>

                    <?php if($type_annonce==6): ?>
                        <p class="text-center"><?php echo e($continuite_activite->denomination); ?> (<?php echo e($continuite_activite->sigle); ?>) <?php echo e($continuite_activite->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($continuite_activite->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($continuite_activite->adresse_societe); ?> <?php echo e($continuite_activite->code_postal_societe); ?> <?php echo e($continuite_activite->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">DECISION DE NON DISSOLUTION ANTICIPEE DE LA SOCIETE</p>
                        <p class="mb-2">Aux termes d’une délibération de <?php echo e($continuite_activite->organe_decision); ?> en date du <?php echo e($continuite_activite->date_decision); ?>, il a été constaté que la situation nette de la société est devenue inférieure au quart du capital social et il a été décidé de ne pas prononcer la dissolution anticipée de la société et de poursuivre l’activité.</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>

                    <?php if($type_annonce==7): ?>
                        <p class="text-center"><?php echo e($transfert_siege_social->denomination); ?> (<?php echo e($transfert_siege_social->sigle); ?>) <?php echo e($transfert_siege_social->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($transfert_siege_social->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($transfert_siege_social->adresse_societe); ?> <?php echo e($transfert_siege_social->code_postal_societe); ?> <?php echo e($transfert_siege_social->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">TRANSFERT DU SIEGE SOCIAL</p>
                        <p class="mb-2">Aux termes d’une délibération de <?php echo e($transfert_siege_social->organe_decision); ?> en date du <?php echo e($transfert_siege_social->date_decision); ?>, il a été décidé de transférer le siège social de la société à l’adresse suivante <?php echo e($transfert_siege_social->nv_adresse); ?> <?php echo e($transfert_siege_social->nv_code_postal); ?> <?php echo e($transfert_siege_social->nv_ville); ?></p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>

                    <?php if($type_annonce==8): ?>
                        <p class="text-center"><?php echo e($changement_objet_social->denomination); ?> (<?php echo e($changement_objet_social->sigle); ?>) <?php echo e($changement_objet_social->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($changement_objet_social->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($changement_objet_social->adresse_societe); ?> <?php echo e($changement_objet_social->code_postal_societe); ?> <?php echo e($changement_objet_social->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">MODIFICATION DE L’OBJET SOCIAL</p>
                        <p class="mb-2">Aux termes d’une délibération de <?php echo e($changement_objet_social->organe_decision); ?> en date du <?php echo e($changement_objet_social->date_decision); ?>, il a été décidé d’apporter la modification suivante à l’objet social : <?php echo e($changement_objet_social->modification_objet_social); ?></p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>

                    <?php if($type_annonce==9): ?>
                        <p class="text-center"><?php echo e($changement_denomination->denomination); ?> (<?php echo e($changement_denomination->sigle); ?>) <?php echo e($changement_denomination->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($changement_denomination->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($changement_denomination->adresse_societe); ?> <?php echo e($changement_denomination->code_postal_societe); ?> <?php echo e($changement_denomination->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">CHANGEMENT DE DENOMINATION SOCIALE</p>
                        <p class="mb-2">Aux termes d’une délibération de <?php echo e($changement_denomination->organe_decision); ?> en date du <?php echo e($changement_denomination->date_decision); ?>, il a été décidé de modifier la dénomination de la société qui est désormais <?php echo e($changement_denomination->nv_denomination); ?></p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>

                    <?php if($type_annonce==10): ?>
                        <p class="text-center"><?php echo e($transformation_forme_sociale->denomination); ?> (<?php echo e($transformation_forme_sociale->sigle); ?>) <?php echo e($transformation_forme_sociale->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($transformation_forme_sociale->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($transformation_forme_sociale->adresse_societe); ?> <?php echo e($transformation_forme_sociale->code_postal_societe); ?> <?php echo e($transformation_forme_sociale->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">TRANSFORMATION DE LA FORME SOCIALE</p>
                        <p class="mb-2">Aux termes d’une délibération de <?php echo e($transformation_forme_sociale->organe_decision); ?> en date du <?php echo e($transformation_forme_sociale->date_decision); ?>, il a été décidé de transformer la forme sociale de la société de <?php echo e($transformation_forme_sociale->forme_sociale); ?> à <?php echo e($transformation_forme_sociale->nv_forme_sociale); ?></p>
                        <h2>La société est désormais représentée par :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <?php $__currentLoopData = $representants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $representant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($representant->civilite_representant); ?> <?php echo e($representant->nom_representant); ?> | <?php echo e($representant->adresse_representant); ?> <?php echo e($representant->code_postal_representant); ?> <?php echo e($representant->ville_representant); ?> | <?php echo e($representant->qualite_representant); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>

                    <?php if($type_annonce==11): ?>
                        <p class="text-center"><?php echo e($reduction_capital->denomination); ?> (<?php echo e($reduction_capital->sigle); ?>) <?php echo e($reduction_capital->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($reduction_capital->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($reduction_capital->adresse_societe); ?> <?php echo e($reduction_capital->code_postal_societe); ?> <?php echo e($reduction_capital->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">REDUCTION DE CAPITAL</p>
                        <p class="mb-2">Aux termes d’une délibération de <?php echo e($reduction_capital->organe_decision); ?> en date du <?php echo e($reduction_capital->date_decision); ?>, il a été décidé de réduire le capital social de <?php echo e($reduction_capital->montant_reduction_capital_social); ?> DH pour le porter de <?php echo e($reduction_capital->capital_social_avant_reduction); ?> à <?php echo e($reduction_capital->nouveau_capital_social); ?> par <?php echo e($reduction_capital->modalite_reduction_capital); ?>.</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>

                    <?php if($type_annonce==12): ?>
                        <p class="text-center"><?php echo e($augmentation_capital->denomination); ?> (<?php echo e($augmentation_capital->sigle); ?>) <?php echo e($augmentation_capital->forme_sociale); ?></p>
                        <p class="text-center">Capital : <?php echo e($augmentation_capital->capital); ?> DH</p>
                        <p class="text-center">Siège social : <?php echo e($augmentation_capital->adresse_societe); ?> <?php echo e($augmentation_capital->code_postal_societe); ?> <?php echo e($augmentation_capital->ville_societe); ?></p>
                        <p class="text-center">Registre du Commerce de <?php echo e($annonce->tribunal); ?> : <?php echo e($annonce->numero_rc); ?></p>
                        <p class="text-center">AUGMENTATION DE CAPITAL</p>
                        <p>Aux termes d’une délibération de <?php echo e($augmentation_capital->organe_decision); ?> en date du <?php echo e($augmentation_capital->date_decision); ?>, il a été décidé d’augmenter le capital social de <?php echo e($augmentation_capital->montant_augmentation_capital_social); ?> DH pour le porter de <?php echo e($augmentation_capital->capital_social_avant_augmentation); ?> à <?php echo e($augmentation_capital->nouveau_capital_social); ?> par <?php echo e($augmentation_capital->modalite_augmentation_capital); ?>.</p>
                        <p>Cette augmentation de capital a été libérée <?php echo e($augmentation_capital->liberation); ?> par <?php echo e($augmentation_capital->modalite_liberation_augmentation_capital); ?>.</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de <?php echo e($annonce->tribunal); ?> le <?php echo e($annonce->date_depot); ?> sous le numéro <?php echo e($annonce->numero_depot); ?>.</p>
                        <p>Pour extrait et mention</p>
                    <?php endif; ?>
                </div>

        </div>
    </div>
</body>

</html>
<?php /**PATH D:\ENSET\s3\stage\projet\prj\LegAnno\resources\views/pdf/annonce.blade.php ENDPATH**/ ?>
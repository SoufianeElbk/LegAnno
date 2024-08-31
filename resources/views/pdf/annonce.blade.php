<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Annonce légale n {{$annonce->id}}</title>

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

        <h3 class="text-gray-700 text-3xl font-medium mt-8">Annonce legale n {{$annonce->id}}</h3>
        <div class="mt-4">
                <div class="text-xs md:text-sm space-y-3 bg-white py-4 px-8">
                    @if($type_annonce==1)
                        <p class="text-center">{{$creation_sarl->denomination}} ({{$creation_sarl->sigle}}) {{$creation_sarl->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$creation_sarl->capital}} DH</p>
                        <p class="text-center">Siège social : {{$creation_sarl->adresse_societe}} {{$creation_sarl->code_postal_societe}} {{$creation_sarl->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">CONSTITUTION : {{$creation_sarl->forme_sociale}}</p>
                        <p class="mb-2">Par acte authentique en date du {{$annonce->date_acte}}, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>Dénomination sociale : {{$creation_sarl->denomination}} ({{$creation_sarl->sigle}})</li>
                            <li>Forme sociale : {{$creation_sarl->forme_sociale}}</li>
                            <li>Objet social sommaire : {{$creation_sarl->objet_social}}</li>
                            <li>Durée de la société : {{$creation_sarl->durre}}</li>
                            <li>Adresse du siège social : {{$creation_sarl->adresse_societe}} {{$creation_sarl->code_postal_societe}} {{$creation_sarl->ville_societe}}</li>
                            <li>Montant du capital social : {{$creation_sarl->capital}}</li>
                            <li>Nombre de parts sociales : </li>
                            <li>Valeur nominale : {{$creation_sarl->valeur_nominale}}</li>
                            <li>Montant des apports en numéraire : {{$creation_sarl->montant_apports_en_numeraire}}</li>
                            <li>Description des apports en nature et leurs valeurs : {{$creation_sarl->description_apports}}</li>
                        </ul>
                        <h2>Representants :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            @foreach ($representants as $representant)
                                <li>
                                    {{$representant->civilite_representant}} {{$representant->nom_representant}} | {{$representant->adresse_representant}} {{$representant->code_postal_representant}} {{$representant->ville_representant}} | {{$representant->qualite_representant}}
                                </li>
                            @endforeach
                        </ul>
                        <h2>Associés :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            @foreach ($associes as $associe)
                                <li>
                                    {{$associe->civilite_associe}} {{$associe->nom_associe}} | {{$associe->adresse_associe}} {{$associe->code_postal_associe}} {{$associe->ville_associe}} | {{$associe->participation_associe}} parts sociales
                                </li>
                            @endforeach
                        </ul>
                        @isset($commissaires)
                        <h2>Commissaire aux comptes :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            @foreach ($commissaires as $commissaire)
                                <li>
                                    {{$commissaire->civilite_commissaire}} {{$commissaire->nom_commissaire}} | {{$commissaire->adresse_commissaire}} {{$commissaire->code_postal_commissaire}} {{$commissaire->ville_commissaire}}
                                </li>
                            @endforeach
                        </ul>
                        @endisset
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif

                    @if($type_annonce==2)
                        <p class="text-center">{{$creation_sas->denomination}} ({{$creation_sas->sigle}}) {{$creation_sas->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$creation_sas->capital}} DH</p>
                        <p class="text-center">Siège social : {{$creation_sas->adresse_societe}} {{$creation_sas->code_postal_societe}} {{$creation_sas->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">CONSTITUTION : {{$creation_sas->forme_sociale}}</p>
                        <p class="mb-2">Par acte authentique en date du {{$creation_sas->date_acte}}, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>Dénomination sociale : {{$creation_sas->denomination}} ({{$creation_sas->sigle}})</li>
                            <li>Forme sociale : {{$creation_sas->forme_sociale}}</li>
                            <li>Objet social sommaire : {{$creation_sas->objet_social}}</li>
                            <li>Durée de la société : {{$creation_sas->durre}}</li>
                            <li>Adresse du siège social : {{$creation_sas->adresse_societe}} {{$creation_sas->code_postal_societe}} {{$creation_sas->ville_societe}}</li>
                            <li>Montant du capital social : {{$creation_sas->capital}}</li>
                            <li>Nombre d'actions : {{$creation_sas->nombre_actions}}</li>
                            <li>Valeur nominale : {{$creation_sas->valeur_nominale}}</li>
                            <li>Montant des apports en numéraire : {{$creation_sas->montant_apports_en_numeraire}}</li>
                            <li>Description des apports en nature et leurs valeurs : {{$creation_sas->description_apports}}</li>
                        </ul>
                        <h2>Representants :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            @foreach ($representants as $representant)
                                <li>
                                    {{$representant->civilite_representant}} {{$representant->nom_representant}} | {{$representant->adresse_representant}} {{$representant->code_postal_representant}} {{$representant->ville_representant}} | {{$representant->qualite_representant}}
                                </li>
                            @endforeach
                        </ul>
                        <h2>Membres de l’organe de direction :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            @foreach ($membres as $membre)
                                <li>
                                    {{$membre->civilite_membre}} {{$membre->nom_membre}} | {{$membre->adresse_membre}} {{$membre->code_postal_membre}} {{$membre->ville_representant}}
                                </li>
                            @endforeach
                        </ul>
                        @isset($commissaires)
                        <h2>Commissaire aux comptes :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            @foreach ($commissaires as $commissaire)
                                <li>
                                    {{$commissaire->civilite_commissaire}} {{$commissaire->nom_commissaire}} | {{$commissaire->adresse_commissaire}} {{$commissaire->code_postal_commissaire}} {{$commissaire->ville_commissaire}}
                                </li>
                            @endforeach
                        </ul>
                        @endisset
                        <p>Dispositions statutaires relatives à la constitution de réserves et à la répartition des bénéfices : {{$creation_sas->dispositions_statutaires}}</p>
                        <p>Indication des avantages particuliers stipulés au profit de toute personne : {{$creation_sas->avantages}}</p>
                        <p>Indication des conditions d'agrément des cessionnaires d'actions et la désignation de l'organe social habilité à statuer sur les demandes d'agrément : {{$creation_sas->organe_social_habilite}}</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif

                    @if($type_annonce==3)
                        <p class="text-center">{{$creation_sa->denomination}} ({{$creation_sa->sigle}}) {{$creation_sa->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$creation_sa->capital}} DH</p>
                        <p class="text-center">Siège social : {{$creation_sa->adresse_societe}} {{$creation_sa->code_postal_societe}} {{$creation_sa->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">CONSTITUTION : {{$creation_sa->forme_sociale}}</p>
                        <p class="mb-2">Par acte authentique en date du {{$creation_sa->date_acte}}, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>Dénomination sociale : {{$creation_sa->denomination}} ({{$creation_sa->sigle}})</li>
                            <li>Forme sociale : {{$creation_sa->forme_sociale}}</li>
                            <li>Objet social sommaire : {{$creation_sa->objet_social}}</li>
                            <li>Durée de la société : {{$creation_sa->durre}}</li>
                            <li>Adresse du siège social : {{$creation_sa->adresse_societe}} {{$creation_sa->code_postal_societe}} {{$creation_sa->ville_societe}}</li>
                            <li>Montant du capital social : {{$creation_sa->capital}}</li>
                            <li>Nombre d'actions : {{$creation_sa->nombre_actions}}</li>
                            <li>Valeur nominale : {{$creation_sa->valeur_nominale}}</li>
                            <li>Montant des apports en numéraire : {{$creation_sa->montant_apports_en_numeraire}}</li>
                            <li>Description des apports en nature et leurs valeurs : {{$creation_sa->description_apports}}</li>
                        </ul>
                        <h2>Representants :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            @foreach ($representants as $representant)
                                <li>
                                    {{$representant->civilite_representant}} {{$representant->nom_representant}} | {{$representant->adresse_representant}} {{$representant->code_postal_representant}} {{$representant->ville_representant}} | {{$representant->qualite_representant}}
                                </li>
                            @endforeach
                        </ul>
                        <h2>Membres de l’organe de direction :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            @foreach ($membres as $membre)
                                <li>
                                    {{$membre->civilite_membre}} {{$membre->nom_membre}} | {{$membre->adresse_membre}} {{$membre->code_postal_membre}} {{$membre->ville_representant}}
                                </li>
                            @endforeach
                        </ul>
                        @isset($commissaires)
                        <h2>Commissaire aux comptes :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            @foreach ($commissaires as $commissaire)
                                <li>
                                    {{$commissaire->civilite_commissaire}} {{$commissaire->nom_commissaire}} | {{$commissaire->adresse_commissaire}} {{$commissaire->code_postal_commissaire}} {{$commissaire->ville_commissaire}}
                                </li>
                            @endforeach
                        </ul>
                        @endisset
                        <p>Dispositions statutaires relatives à la constitution de réserves et à la répartition des bénéfices : {{$creation_sa->dispositions_statutaires}}</p>
                        <p>Indication des avantages particuliers stipulés au profit de toute personne : {{$creation_sa->avantages}}</p>
                        <p>Indication des conditions d'agrément des cessionnaires d'actions et la désignation de l'organe social habilité à statuer sur les demandes d'agrément : {{$creation_sa->organe_social_habilite}}</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif

                    @if($type_annonce==4)
                        <p class="text-center">{{$dissolution->denomination}} ({{$dissolution->sigle}}) {{$dissolution->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$dissolution->capital}} DH</p>
                        <p class="text-center">Siège social : {{$dissolution->adresse_societe}} {{$dissolution->code_postal_societe}} {{$dissolution->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">DISSOLUTION DE LA SOCIETE ET NOMINATION DU LIQUIDATEUR</p>
                        <p class="mb-2">Aux termes d’une délibération de {{$dissolution->organe_decision}} en date du {{$dissolution->date_decision}}, il a été décidé ce qui suit :</p>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>La dissolution de la société pour la raison suivante : {{$dissolution->raison_liquidation}}</li>
                            <li>La nomination en tant que liquidateur de {{$dissolution->civilite_liquidateur}} {{$dissolution->nom_liquidateur}} | {{$dissolution->adresse_liquidateur}} {{$dissolution->code_postal_liquidateur}} {{$dissolution->ville_liquidateur}}</li>
                            <li>Les limitations apportées aux pouvoirs du liquidateur : {{$dissolution->limitation_apportes_aux_pouvoir_du_liquidateur}}</li>
                            <li>La fixation du siège de liquidation à l’adresse suivante : {{$dissolution->adresse_liquidation}} {{$dissolution->code_postal_liquidation}} {{$dissolution->ville_liquidation}}</li>
                        </ul>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif

                    @if($type_annonce==5)
                        <p class="text-center">{{$cloture_liquidation->denomination}} ({{$cloture_liquidation->sigle}}) {{$cloture_liquidation->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$cloture_liquidation->capital}} DH</p>
                        <p class="text-center">Siège social : {{$cloture_liquidation->adresse_societe}} {{$cloture_liquidation->code_postal_societe}} {{$cloture_liquidation->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">CLOTURE DE LA LIQUIDATION</p>
                        <p class="mb-2">Aux termes d’une délibération de {{$cloture_liquidation->organe_decision}} en date du {{$cloture_liquidation->date_decision}}, il a été décidé d’approuver les comptes définitifs de liquidation, de donner quitus au liquidateur {{$cloture_liquidation->civilite_liquidateur}} {{$cloture_liquidation->nom_liquidateur}} | {{$cloture_liquidation->adresse_liquidateur}} {{$cloture_liquidation->code_postal_liquidateur}} {{$cloture_liquidation->ville_liquidateur}} pour sa gestion et de prononcer la clôture des opérations de liquidation de la société.</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif

                    @if($type_annonce==6)
                        <p class="text-center">{{$continuite_activite->denomination}} ({{$continuite_activite->sigle}}) {{$continuite_activite->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$continuite_activite->capital}} DH</p>
                        <p class="text-center">Siège social : {{$continuite_activite->adresse_societe}} {{$continuite_activite->code_postal_societe}} {{$continuite_activite->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">DECISION DE NON DISSOLUTION ANTICIPEE DE LA SOCIETE</p>
                        <p class="mb-2">Aux termes d’une délibération de {{$continuite_activite->organe_decision}} en date du {{$continuite_activite->date_decision}}, il a été constaté que la situation nette de la société est devenue inférieure au quart du capital social et il a été décidé de ne pas prononcer la dissolution anticipée de la société et de poursuivre l’activité.</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif

                    @if($type_annonce==7)
                        <p class="text-center">{{$transfert_siege_social->denomination}} ({{$transfert_siege_social->sigle}}) {{$transfert_siege_social->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$transfert_siege_social->capital}} DH</p>
                        <p class="text-center">Siège social : {{$transfert_siege_social->adresse_societe}} {{$transfert_siege_social->code_postal_societe}} {{$transfert_siege_social->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">TRANSFERT DU SIEGE SOCIAL</p>
                        <p class="mb-2">Aux termes d’une délibération de {{$transfert_siege_social->organe_decision}} en date du {{$transfert_siege_social->date_decision}}, il a été décidé de transférer le siège social de la société à l’adresse suivante {{$transfert_siege_social->nv_adresse}} {{$transfert_siege_social->nv_code_postal}} {{$transfert_siege_social->nv_ville}}</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif

                    @if($type_annonce==8)
                        <p class="text-center">{{$changement_objet_social->denomination}} ({{$changement_objet_social->sigle}}) {{$changement_objet_social->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$changement_objet_social->capital}} DH</p>
                        <p class="text-center">Siège social : {{$changement_objet_social->adresse_societe}} {{$changement_objet_social->code_postal_societe}} {{$changement_objet_social->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">MODIFICATION DE L’OBJET SOCIAL</p>
                        <p class="mb-2">Aux termes d’une délibération de {{$changement_objet_social->organe_decision}} en date du {{$changement_objet_social->date_decision}}, il a été décidé d’apporter la modification suivante à l’objet social : {{$changement_objet_social->modification_objet_social}}</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif

                    @if($type_annonce==9)
                        <p class="text-center">{{$changement_denomination->denomination}} ({{$changement_denomination->sigle}}) {{$changement_denomination->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$changement_denomination->capital}} DH</p>
                        <p class="text-center">Siège social : {{$changement_denomination->adresse_societe}} {{$changement_denomination->code_postal_societe}} {{$changement_denomination->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">CHANGEMENT DE DENOMINATION SOCIALE</p>
                        <p class="mb-2">Aux termes d’une délibération de {{$changement_denomination->organe_decision}} en date du {{$changement_denomination->date_decision}}, il a été décidé de modifier la dénomination de la société qui est désormais {{$changement_denomination->nv_denomination}}</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif

                    @if($type_annonce==10)
                        <p class="text-center">{{$transformation_forme_sociale->denomination}} ({{$transformation_forme_sociale->sigle}}) {{$transformation_forme_sociale->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$transformation_forme_sociale->capital}} DH</p>
                        <p class="text-center">Siège social : {{$transformation_forme_sociale->adresse_societe}} {{$transformation_forme_sociale->code_postal_societe}} {{$transformation_forme_sociale->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">TRANSFORMATION DE LA FORME SOCIALE</p>
                        <p class="mb-2">Aux termes d’une délibération de {{$transformation_forme_sociale->organe_decision}} en date du {{$transformation_forme_sociale->date_decision}}, il a été décidé de transformer la forme sociale de la société de {{$transformation_forme_sociale->forme_sociale}} à {{$transformation_forme_sociale->nv_forme_sociale}}</p>
                        <h2>La société est désormais représentée par :</h2>
                        <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                            @foreach ($representants as $representant)
                                <li>
                                    {{$representant->civilite_representant}} {{$representant->nom_representant}} | {{$representant->adresse_representant}} {{$representant->code_postal_representant}} {{$representant->ville_representant}} | {{$representant->qualite_representant}}
                                </li>
                            @endforeach
                        </ul>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif

                    @if($type_annonce==11)
                        <p class="text-center">{{$reduction_capital->denomination}} ({{$reduction_capital->sigle}}) {{$reduction_capital->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$reduction_capital->capital}} DH</p>
                        <p class="text-center">Siège social : {{$reduction_capital->adresse_societe}} {{$reduction_capital->code_postal_societe}} {{$reduction_capital->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">REDUCTION DE CAPITAL</p>
                        <p class="mb-2">Aux termes d’une délibération de {{$reduction_capital->organe_decision}} en date du {{$reduction_capital->date_decision}}, il a été décidé de réduire le capital social de {{$reduction_capital->montant_reduction_capital_social}} DH pour le porter de {{$reduction_capital->capital_social_avant_reduction}} à {{$reduction_capital->nouveau_capital_social}} par {{$reduction_capital->modalite_reduction_capital}}.</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif

                    @if($type_annonce==12)
                        <p class="text-center">{{$augmentation_capital->denomination}} ({{$augmentation_capital->sigle}}) {{$augmentation_capital->forme_sociale}}</p>
                        <p class="text-center">Capital : {{$augmentation_capital->capital}} DH</p>
                        <p class="text-center">Siège social : {{$augmentation_capital->adresse_societe}} {{$augmentation_capital->code_postal_societe}} {{$augmentation_capital->ville_societe}}</p>
                        <p class="text-center">Registre du Commerce de {{$annonce->tribunal}} : {{$annonce->numero_rc}}</p>
                        <p class="text-center">AUGMENTATION DE CAPITAL</p>
                        <p>Aux termes d’une délibération de {{$augmentation_capital->organe_decision}} en date du {{$augmentation_capital->date_decision}}, il a été décidé d’augmenter le capital social de {{$augmentation_capital->montant_augmentation_capital_social}} DH pour le porter de {{$augmentation_capital->capital_social_avant_augmentation}} à {{$augmentation_capital->nouveau_capital_social}} par {{$augmentation_capital->modalite_augmentation_capital}}.</p>
                        <p>Cette augmentation de capital a été libérée {{$augmentation_capital->liberation}} par {{$augmentation_capital->modalite_liberation_augmentation_capital}}.</p>
                        <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$annonce->tribunal}} le {{$annonce->date_depot}} sous le numéro {{$annonce->numero_depot}}.</p>
                        <p>Pour extrait et mention</p>
                    @endif
                </div>

        </div>
    </div>
</body>

</html>

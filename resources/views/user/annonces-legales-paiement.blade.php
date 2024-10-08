@extends('user.layouts.base')

@section('title', "Paiement Annonce Légale")

@section('content')
<div class="container text-white mx-auto p-6">
    @include('user.components.nav')
</div>
<div class="text-black container mx-auto mb-6 p-6">
    <div class="max-w-screen-xl mx-auto">
        <div class="mb-4">
            @if (session('success'))
    {{-- <div class="bg-green-400 text-white rounded-lg p-2 w-fit">{{session('success')}}</div> --}}
                <div role="alert" class="rounded-xl border border-gray-100 bg-white p-4 mb-4">
                    <div class="flex items-start gap-4">
                    <span class="text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" ><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </span>
                    <div class="flex-1">
                        <strong class="block font-medium text-gray-900"> Changes saved </strong>
                        <p class="mt-1 text-sm text-gray-700">{{session('success')}}.</p>
                    </div>
                    <button class="text-gray-500 transition hover:text-gray-600">
                        <span class="sr-only">Dismiss popup</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                    </div>
                </div>
            @endif
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <div class="w-fit mx-auto text-white text-xl font-bold mb-4">1- Saisie des informations</div>
                    <div class="text-xs md:text-sm space-y-3 bg-white py-4 px-8 rounded-md">
                        <h1 class="text-lg font-bold mb-4">Votre annonce légale n° {{$Data['annonce']->id}}</h1>
                        @if($Data['type_annonce']==1)
                            <p class="text-center">{{$Data['creation_sarl']->denomination}} ({{$Data['creation_sarl']->sigle}}) {{$Data['creation_sarl']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['creation_sarl']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['creation_sarl']->adresse_societe}} {{$Data['creation_sarl']->code_postal_societe}} {{$Data['creation_sarl']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">CONSTITUTION : {{$Data['creation_sarl']->forme_sociale}}</p>
                            <p class="mb-2">Par acte authentique en date du {{$Data['creation_sarl']->date_acte}}, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                <li>Dénomination sociale : {{$Data['creation_sarl']->denomination}} ({{$Data['creation_sarl']->sigle}})</li>
                                <li>Forme sociale : {{$Data['creation_sarl']->forme_sociale}}</li>
                                <li>Objet social sommaire : {{$Data['creation_sarl']->objet_social}}</li>
                                <li>Durée de la société : {{$Data['creation_sarl']->durre}}</li>
                                <li>Adresse du siège social : {{$Data['creation_sarl']->adresse_societe}} {{$Data['creation_sarl']->code_postal_societe}} {{$Data['creation_sarl']->ville_societe}}</li>
                                <li>Montant du capital social : {{$Data['creation_sarl']->capital}}</li>
                                <li>Nombre de parts sociales : </li>
                                <li>Valeur nominale : {{$Data['creation_sarl']->valeur_nominale}}</li>
                                <li>Montant des apports en numéraire : {{$Data['creation_sarl']->montant_apports_en_numeraire}}</li>
                                <li>Description des apports en nature et leurs valeurs : {{$Data['creation_sarl']->description_apports}}</li>
                            </ul>
                            <h2>Representants :</h2>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                @foreach ($Data['representants'] as $representant)
                                    <li>
                                        {{$representant->civilite_representant}} {{$representant->nom_representant}} | {{$representant->adresse_representant}} {{$representant->code_postal_representant}} {{$representant->ville_representant}} | {{$representant->qualite_representant}}
                                    </li>
                                @endforeach
                            </ul>
                            <h2>Associés :</h2>        
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                @foreach ($Data['associes'] as $associe)
                                    <li>
                                        {{$associe->civilite_associe}} {{$associe->nom_associe}} | {{$associe->adresse_associe}} {{$associe->code_postal_associe}} {{$associe->ville_associe}} | {{$associe->participation_associe}} parts sociales
                                    </li>
                                @endforeach
                            </ul>
                            @isset($Data['commissaires'])    
                            <h2>Commissaire aux comptes :</h2>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                @foreach ($Data['commissaires'] as $commissaire)
                                    <li>
                                        {{$commissaire->civilite_commissaire}} {{$commissaire->nom_commissaire}} | {{$commissaire->adresse_commissaire}} {{$commissaire->code_postal_commissaire}} {{$commissaire->ville_commissaire}}
                                    </li>
                                @endforeach
                            </ul>
                            @endisset
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif

                        @if($Data['type_annonce']==2)
                            <p class="text-center">{{$Data['creation_sas']->denomination}} ({{$Data['creation_sas']->sigle}}) {{$Data['creation_sas']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['creation_sas']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['creation_sas']->adresse_societe}} {{$Data['creation_sas']->code_postal_societe}} {{$Data['creation_sas']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">CONSTITUTION : {{$Data['creation_sas']->forme_sociale}}</p>
                            <p class="mb-2">Par acte authentique en date du {{$Data['creation_sas']->date_acte}}, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                <li>Dénomination sociale : {{$Data['creation_sas']->denomination}} ({{$Data['creation_sas']->sigle}})</li>
                                <li>Forme sociale : {{$Data['creation_sas']->forme_sociale}}</li>
                                <li>Objet social sommaire : {{$Data['creation_sas']->objet_social}}</li>
                                <li>Durée de la société : {{$Data['creation_sas']->durre}}</li>
                                <li>Adresse du siège social : {{$Data['creation_sas']->adresse_societe}} {{$Data['creation_sas']->code_postal_societe}} {{$Data['creation_sas']->ville_societe}}</li>
                                <li>Montant du capital social : {{$Data['creation_sas']->capital}}</li>
                                <li>Nombre d'actions : {{$Data['creation_sas']->nombre_actions}}</li>
                                <li>Valeur nominale : {{$Data['creation_sas']->valeur_nominale}}</li>
                                <li>Montant des apports en numéraire : {{$Data['creation_sas']->montant_apports_en_numeraire}}</li>
                                <li>Description des apports en nature et leurs valeurs : {{$Data['creation_sas']->description_apports}}</li>
                            </ul>
                            <h2>Representants :</h2>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                @foreach ($Data['representants'] as $representant)
                                    <li>
                                        {{$representant->civilite_representant}} {{$representant->nom_representant}} | {{$representant->adresse_representant}} {{$representant->code_postal_representant}} {{$representant->ville_representant}} | {{$representant->qualite_representant}}
                                    </li>
                                @endforeach
                            </ul>
                            <h2>Membres de l’organe de direction :</h2>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                @foreach ($Data['membres'] as $membre)
                                    <li>
                                        {{$membre->civilite_membre}} {{$membre->nom_membre}} | {{$membre->adresse_membre}} {{$membre->code_postal_membre}} {{$membre->ville_representant}}
                                    </li>
                                @endforeach
                            </ul>
                            @isset($Data['commissaires'])    
                            <h2>Commissaire aux comptes :</h2>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                @foreach ($Data['commissaires'] as $commissaire)
                                    <li>
                                        {{$commissaire->civilite_commissaire}} {{$commissaire->nom_commissaire}} | {{$commissaire->adresse_commissaire}} {{$commissaire->code_postal_commissaire}} {{$commissaire->ville_commissaire}}
                                    </li>
                                @endforeach
                            </ul>
                            @endisset
                            <p>Dispositions statutaires relatives à la constitution de réserves et à la répartition des bénéfices : {{$Data['creation_sas']->dispositions_statutaires}}</p>
                            <p>Indication des avantages particuliers stipulés au profit de toute personne : {{$Data['creation_sas']->avantages}}</p>
                            <p>Indication des conditions d'agrément des cessionnaires d'actions et la désignation de l'organe social habilité à statuer sur les demandes d'agrément : {{$Data['creation_sas']->organe_social_habilite}}</p>
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif

                        @if($Data['type_annonce']==3)
                            <p class="text-center">{{$Data['creation_sa']->denomination}} ({{$Data['creation_sa']->sigle}}) {{$Data['creation_sa']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['creation_sa']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['creation_sa']->adresse_societe}} {{$Data['creation_sa']->code_postal_societe}} {{$Data['creation_sa']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">CONSTITUTION : {{$Data['creation_sa']->forme_sociale}}</p>
                            <p class="mb-2">Par acte authentique en date du {{$Data['creation_sa']->date_acte}}, il a été constitué une société dont les caractéristiques sont les suivantes :</p>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                <li>Dénomination sociale : {{$Data['creation_sa']->denomination}} ({{$Data['creation_sa']->sigle}})</li>
                                <li>Forme sociale : {{$Data['creation_sa']->forme_sociale}}</li>
                                <li>Objet social sommaire : {{$Data['creation_sa']->objet_social}}</li>
                                <li>Durée de la société : {{$Data['creation_sa']->durre}}</li>
                                <li>Adresse du siège social : {{$Data['creation_sa']->adresse_societe}} {{$Data['creation_sa']->code_postal_societe}} {{$Data['creation_sa']->ville_societe}}</li>
                                <li>Montant du capital social : {{$Data['creation_sa']->capital}}</li>
                                <li>Nombre d'actions : {{$Data['creation_sa']->nombre_actions}}</li>
                                <li>Valeur nominale : {{$Data['creation_sa']->valeur_nominale}}</li>
                                <li>Montant des apports en numéraire : {{$Data['creation_sa']->montant_apports_en_numeraire}}</li>
                                <li>Description des apports en nature et leurs valeurs : {{$Data['creation_sa']->description_apports}}</li>
                            </ul>
                            <h2>Representants :</h2>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                @foreach ($Data['representants'] as $representant)
                                    <li>
                                        {{$representant->civilite_representant}} {{$representant->nom_representant}} | {{$representant->adresse_representant}} {{$representant->code_postal_representant}} {{$representant->ville_representant}} | {{$representant->qualite_representant}}
                                    </li>
                                @endforeach
                            </ul>
                            <h2>Membres de l’organe de direction :</h2>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                @foreach ($Data['membres'] as $membre)
                                    <li>
                                        {{$membre->civilite_membre}} {{$membre->nom_membre}} | {{$membre->adresse_membre}} {{$membre->code_postal_membre}} {{$membre->ville_representant}}
                                    </li>
                                @endforeach
                            </ul>
                            @isset($Data['commissaires'])    
                            <h2>Commissaire aux comptes :</h2>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                @foreach ($Data['commissaires'] as $commissaire)
                                    <li>
                                        {{$commissaire->civilite_commissaire}} {{$commissaire->nom_commissaire}} | {{$commissaire->adresse_commissaire}} {{$commissaire->code_postal_commissaire}} {{$commissaire->ville_commissaire}}
                                    </li>
                                @endforeach
                            </ul>
                            @endisset
                            <p>Dispositions statutaires relatives à la constitution de réserves et à la répartition des bénéfices : {{$Data['creation_sa']->dispositions_statutaires}}</p>
                            <p>Indication des avantages particuliers stipulés au profit de toute personne : {{$Data['creation_sa']->avantages}}</p>
                            <p>Indication des conditions d'agrément des cessionnaires d'actions et la désignation de l'organe social habilité à statuer sur les demandes d'agrément : {{$Data['creation_sa']->organe_social_habilite}}</p>
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif

                        @if($Data['type_annonce']==4)
                            <p class="text-center">{{$Data['dissolution']->denomination}} ({{$Data['dissolution']->sigle}}) {{$Data['dissolution']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['dissolution']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['dissolution']->adresse_societe}} {{$Data['dissolution']->code_postal_societe}} {{$Data['dissolution']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">DISSOLUTION DE LA SOCIETE ET NOMINATION DU LIQUIDATEUR</p>
                            <p class="mb-2">Aux termes d’une délibération de {{$Data['dissolution']->organe_decision}} en date du {{$Data['dissolution']->date_decision}}, il a été décidé ce qui suit :</p>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                <li>La dissolution de la société pour la raison suivante : {{$Data['dissolution']->raison_liquidation}}</li>
                                <li>La nomination en tant que liquidateur de {{$Data['dissolution']->civilite_liquidateur}} {{$Data['dissolution']->nom_liquidateur}} | {{$Data['dissolution']->adresse_liquidateur}} {{$Data['dissolution']->code_postal_liquidateur}} {{$Data['dissolution']->ville_liquidateur}}</li>
                                <li>Les limitations apportées aux pouvoirs du liquidateur : {{$Data['dissolution']->limitation_apportes_aux_pouvoir_du_liquidateur}}</li>
                                <li>La fixation du siège de liquidation à l’adresse suivante : {{$Data['dissolution']->adresse_liquidation}} {{$Data['dissolution']->code_postal_liquidation}} {{$Data['dissolution']->ville_liquidation}}</li>
                            </ul>
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif

                        @if($Data['type_annonce']==5)
                            <p class="text-center">{{$Data['cloture_liquidation']->denomination}} ({{$Data['cloture_liquidation']->sigle}}) {{$Data['cloture_liquidation']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['cloture_liquidation']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['cloture_liquidation']->adresse_societe}} {{$Data['cloture_liquidation']->code_postal_societe}} {{$Data['cloture_liquidation']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">CLOTURE DE LA LIQUIDATION</p>
                            <p class="mb-2">Aux termes d’une délibération de {{$Data['cloture_liquidation']->organe_decision}} en date du {{$Data['cloture_liquidation']->date_decision}}, il a été décidé d’approuver les comptes définitifs de liquidation, de donner quitus au liquidateur {{$Data['cloture_liquidation']->civilite_liquidateur}} {{$Data['cloture_liquidation']->nom_liquidateur}} | {{$Data['cloture_liquidation']->adresse_liquidateur}} {{$Data['cloture_liquidation']->code_postal_liquidateur}} {{$Data['cloture_liquidation']->ville_liquidateur}} pour sa gestion et de prononcer la clôture des opérations de liquidation de la société.</p>
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif

                        @if($Data['type_annonce']==6)
                            <p class="text-center">{{$Data['continuite_activite']->denomination}} ({{$Data['continuite_activite']->sigle}}) {{$Data['continuite_activite']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['continuite_activite']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['continuite_activite']->adresse_societe}} {{$Data['continuite_activite']->code_postal_societe}} {{$Data['continuite_activite']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">DECISION DE NON DISSOLUTION ANTICIPEE DE LA SOCIETE</p>
                            <p class="mb-2">Aux termes d’une délibération de {{$Data['continuite_activite']->organe_decision}} en date du {{$Data['continuite_activite']->date_decision}}, il a été constaté que la situation nette de la société est devenue inférieure au quart du capital social et il a été décidé de ne pas prononcer la dissolution anticipée de la société et de poursuivre l’activité.</p>
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif

                        @if($Data['type_annonce']==7)
                            <p class="text-center">{{$Data['transfert_siege_social']->denomination}} ({{$Data['transfert_siege_social']->sigle}}) {{$Data['transfert_siege_social']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['transfert_siege_social']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['transfert_siege_social']->adresse_societe}} {{$Data['transfert_siege_social']->code_postal_societe}} {{$Data['transfert_siege_social']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">TRANSFERT DU SIEGE SOCIAL</p>
                            <p class="mb-2">Aux termes d’une délibération de {{$Data['transfert_siege_social']->organe_decision}} en date du {{$Data['transfert_siege_social']->date_decision}}, il a été décidé de transférer le siège social de la société à l’adresse suivante {{$Data['transfert_siege_social']->nv_adresse}} {{$Data['transfert_siege_social']->nv_code_postal}} {{$Data['transfert_siege_social']->nv_ville}}</p>
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif

                        @if($Data['type_annonce']==8)
                            <p class="text-center">{{$Data['changement_objet_social']->denomination}} ({{$Data['changement_objet_social']->sigle}}) {{$Data['changement_objet_social']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['changement_objet_social']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['changement_objet_social']->adresse_societe}} {{$Data['changement_objet_social']->code_postal_societe}} {{$Data['changement_objet_social']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">MODIFICATION DE L’OBJET SOCIAL</p>
                            <p class="mb-2">Aux termes d’une délibération de {{$Data['changement_objet_social']->organe_decision}} en date du {{$Data['changement_objet_social']->date_decision}}, il a été décidé d’apporter la modification suivante à l’objet social : {{$Data['changement_objet_social']->modification_objet_social}}</p>
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif

                        @if($Data['type_annonce']==9)
                            <p class="text-center">{{$Data['changement_denomination']->denomination}} ({{$Data['changement_denomination']->sigle}}) {{$Data['changement_denomination']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['changement_denomination']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['changement_denomination']->adresse_societe}} {{$Data['changement_denomination']->code_postal_societe}} {{$Data['changement_denomination']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">CHANGEMENT DE DENOMINATION SOCIALE</p>
                            <p class="mb-2">Aux termes d’une délibération de {{$Data['changement_denomination']->organe_decision}} en date du {{$Data['changement_denomination']->date_decision}}, il a été décidé de modifier la dénomination de la société qui est désormais {{$Data['changement_denomination']->nv_denomination}}</p>
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif

                        @if($Data['type_annonce']==10)
                            <p class="text-center">{{$Data['transformation_forme_sociale']->denomination}} ({{$Data['transformation_forme_sociale']->sigle}}) {{$Data['transformation_forme_sociale']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['transformation_forme_sociale']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['transformation_forme_sociale']->adresse_societe}} {{$Data['transformation_forme_sociale']->code_postal_societe}} {{$Data['transformation_forme_sociale']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">TRANSFORMATION DE LA FORME SOCIALE</p>
                            <p class="mb-2">Aux termes d’une délibération de {{$Data['transformation_forme_sociale']->organe_decision}} en date du {{$Data['transformation_forme_sociale']->date_decision}}, il a été décidé de transformer la forme sociale de la société de {{$Data['transformation_forme_sociale']->forme_sociale}} à {{$Data['transformation_forme_sociale']->nv_forme_sociale}}</p>
                            <h2>La société est désormais représentée par :</h2>
                            <ul class="space-y-2 text-gray-500 list-disc list-inside dark:text-gray-400">
                                @foreach ($Data['representants'] as $representant)
                                    <li>
                                        {{$representant->civilite_representant}} {{$representant->nom_representant}} | {{$representant->adresse_representant}} {{$representant->code_postal_representant}} {{$representant->ville_representant}} | {{$representant->qualite_representant}}
                                    </li>
                                @endforeach
                            </ul>
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif

                        @if($Data['type_annonce']==11)
                            <p class="text-center">{{$Data['reduction_capital']->denomination}} ({{$Data['reduction_capital']->sigle}}) {{$Data['reduction_capital']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['reduction_capital']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['reduction_capital']->adresse_societe}} {{$Data['reduction_capital']->code_postal_societe}} {{$Data['reduction_capital']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">REDUCTION DE CAPITAL</p>
                            <p class="mb-2">Aux termes d’une délibération de {{$Data['reduction_capital']->organe_decision}} en date du {{$Data['reduction_capital']->date_decision}}, il a été décidé de réduire le capital social de {{$Data['reduction_capital']->montant_reduction_capital_social}} DH pour le porter de {{$Data['reduction_capital']->capital_social_avant_reduction}} à {{$Data['reduction_capital']->nouveau_capital_social}} par {{$Data['reduction_capital']->modalite_reduction_capital}}.</p>
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif

                        @if($Data['type_annonce']==12)
                            <p class="text-center">{{$Data['augmentation_capital']->denomination}} ({{$Data['augmentation_capital']->sigle}}) {{$Data['augmentation_capital']->forme_sociale}}</p>
                            <p class="text-center">Capital : {{$Data['augmentation_capital']->capital}} DH</p>
                            <p class="text-center">Siège social : {{$Data['augmentation_capital']->adresse_societe}} {{$Data['augmentation_capital']->code_postal_societe}} {{$Data['augmentation_capital']->ville_societe}}</p>
                            <p class="text-center">Registre du Commerce de {{$Data['annonce']->tribunal}} : {{$Data['annonce']->numero_rc}}</p>
                            <p class="text-center">AUGMENTATION DE CAPITAL</p>
                            <p>Aux termes d’une délibération de {{$Data['augmentation_capital']->organe_decision}} en date du {{$Data['augmentation_capital']->date_decision}}, il a été décidé d’augmenter le capital social de {{$Data['augmentation_capital']->montant_augmentation_capital_social}} DH pour le porter de {{$Data['augmentation_capital']->capital_social_avant_augmentation}} à {{$Data['augmentation_capital']->nouveau_capital_social}} par {{$Data['augmentation_capital']->modalite_augmentation_capital}}.</p>
                            <p>Cette augmentation de capital a été libérée {{$Data['augmentation_capital']->liberation}} par {{$Data['augmentation_capital']->modalite_liberation_augmentation_capital}}.</p>
                            <p>Le dépôt légal a été effectué au greffe du Tribunal de {{$Data['annonce']->tribunal}} le {{$Data['annonce']->date_depot}} sous le numéro {{$Data['annonce']->numero_depot}}.</p>
                            <p>Pour extrait et mention</p>
                        @endif
                    </div>
                </div>
        
                <form action="{{Route('annonces-legales-paiement',[$Data['type_annonce'],$Data['annonce']->id])}}" method="POST">
                @csrf
                {{-- <div class="text-black"> --}}
                    <div class="w-fit mx-auto text-white text-xl font-bold mb-4">2- Paiement de l'annonce</div>
                    <div class="bg-white p-4 rounded-md">
                        <h1 class="text-lg mb-4 font-semibold">Choisissez un moyen de paiement ci-dessous :</h1>
                            <div class="flex flex-col space-y-4 mb-4">
                                <input type="hidden" name="annonce_id" value="{{$Data['annonce']->id}}">
                                <div class=""><input required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="mode_paiement" value="Carte Bancaire"><label class="ms-2 text-sm font-medium  dark:text-gray-300">Carte Bancaire (150 DH)</label></div>
                                <div class=""><input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="mode_paiement" value="Paypal"><label class="ms-2 text-sm font-medium  dark:text-gray-300">Paypal  (150 DH)</label></div>
                                <div class=""><input @if(Auth::user()->solde == 0) disabled @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="mode_paiement" value="Votre Solde"><label class="ms-2 text-sm font-medium  dark:text-gray-300">Votre Solde (solde actuel : {{Auth::user()->solde}}) @if (Auth::user()->solde == 0)<a href="/" class="text-xs underline">Commander un pack maintenant</a>@endif</label></div>
                            </div>
                            <div class="mb-4">
                                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adreese de facturation</label>
                                <input name="adresse_facturation" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                    </div>
                {{-- </div> --}}
                <button type="submit" class="bg-orange-400 p-3 rounded-xl text-md sm:text-lg font-medium text-white w-full mt-4">PROCÉDEZ AU PAIEMENT</button>
                </form>
            </div>
    </div>
    </div>
</div>

<div class="bg-white">
    @include('user.components.footer')
</div>

@endsection




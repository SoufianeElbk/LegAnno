@extends('user.layouts.base')

@section('title', "Constitution : Société Anonyme Simplifiée (SAS)")

@section('content')
<div class="container text-white mx-auto p-6">
    @include('user.components.nav')
</div>
<div class="text-white">
    <div class="container mx-auto p-6">
        <div class="w-full lg:w-3/4 mx-auto mb-8">
            <h1 class="text-3xl font-bold">Annonce légale de création de Société Anonyme Simplifiée (SAS)</h1>
            <h3 class="mt-4">Ce modèle d'annonce légale en ligne vous permet de publier une Annonce légale de création de Société Anonyme Simplifiée (SAS) dans un journal d'annonces légales habilité.</h3>
        </div>
        <form action="{{route('annonces-legales-constitution-sas')}}" method="POST">
            <div class="w-full lg:w-3/4 mx-auto text-sm">

                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">Status</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12">
                        <div>
                            <label class="block my-2" for="">Nature de l'acte</label>
                            <select name="nature_acte" id="" class=" text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Choisir la nature de l'acte</option>
                                <option value="0">Acte sous seing privé</option>
                                <option value="1">Acte ahthentique</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Date de l'acte</label>
                            <input name="date_acte" type="date" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">La société</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12">
                        <div>
                            <label class="block my-2" for="">Dénomination</label>
                            <input name="denomination" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Sigle</label>
                            <input name="sigle" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Forme sociale</label>
                            <select name="forme_sociale" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Choisir la forme sociale</option>
                                <option value="Société Anonyme Simplifiée">Société Anonyme Simplifiée (SAS)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Objet social</label>
                            <textarea name="objet_social" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"></textarea>
                        </div>
                        <div>
                            <label class="block my-2" for="">Capital (DH)</label>
                            <input name="capital" type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Nombre d'actions</label>
                            <input name="nombre_actions" type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Valeur nominale (DH)</label>
                            <input name="valeur_nominale" type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Montant des apports en numéraire (DH)</label>
                            <input name="montant_apports_en_numeraire" type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Description des apports en nature et leurs valeurs (si applicable)</label>
                            <input name="description_apports" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Durée ANS</label>
                            <input name="duree" type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">Adresse du siège social</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8">
                        <div class=" lg:col-span-2">
                            <label class="block my-2" for="">Adresse</label>
                            <input name="adresse_societe" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Code postal</label>
                            <input name="code_postal_societe" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Ville</label>
                            <input name="ville_societe" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black" id="representant">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">Les représentants légaux</h1>
                    <div id="representant-sections">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 mb-4 relative representant-section">
                            <div class="flex items-end my-2 lg:col-span-2">
                                <button type="button" class="p-2 w-fit h-fit bg-red-500 text-white rounded-lg flex space-x-2 items-center remove-section-representant" style="display: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-remove w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11h6m-6 8v-1.25c0-2.071-1.919-3.75-4.286-3.75H8.286C5.919 14 4 15.679 4 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span>Supprimer le representant légal</span>
                                </button>
                            </div>
                            <div>
                                <label class="block my-2" for="type">Type</label>
                                <select name="representants[0][type_representant]" id="type" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                    <option value="Personne physique">Personne physique</option>
                                    <option value="Personne morale">Personne morale</option>
                                </select>
                            </div>
                            <div>
                                <label class="block my-2" for="qualite">Qualité</label>
                                <select name="representants[0][qualite_representant]" id="qualite" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                    <option value="">Choisir la qualité du dirigeant</option>
                                    <option value="Co-gérant">Co-gérant</option>
                                    <option value="Gérant">Gérant</option>
                                </select>
                            </div>
                            <div id="civilite-container">
                                <label class="block my-2" for="civilite">Civilité</label>
                                <select name="representants[0][civilite_representant]" id="civilite" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                    <option value="">Choisir la civilité</option>
                                    <option value="Monsieur">Monsieur</option>
                                    <option value="Madame">Madame</option>
                                </select>
                            </div>
                            <div>
                                <label class="block my-2" for="nom">Nom</label>
                                <input name="representants[0][nom_representant]" type="text" id="nom" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                            </div>
                            <div>
                                <label class="block my-2" for="adresse">Adresse</label>
                                <input name="representants[0][adresse_representant]" type="text" id="adresse" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                            </div>
                            <div>
                                <label class="block my-2" for="code-postal">Code postal</label>
                                <input name="representants[0][code_postal_representant]" type="text" id="code-postal" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                            </div>
                            <div>
                                <label class="block my-2" for="ville">Ville</label>
                                <input name="representants[0][ville_representant]" type="text" id="ville" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                            </div>

                            {{-- <button type="button" class="bg-red-500 text-white w-fit p-3 rounded-lg flex space-x-2 items-center remove-section" style="display: none;">Supprimer le representant légal</button> --}}
                        </div>
                    </div>
                    <button type="button" class="bg-customBleu w-fit p-3 rounded-lg text-black flex space-x-2 items-center" id="ajouterRepresentant">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-add h-6 w-6">
                            <path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11h3m0 0h3m-3 0v3m0-3V8m-3 11v-1.25c0-2.071-1.919-3.75-4.286-3.75H7.286C4.919 14 3 15.679 3 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Ajouter un représentant légal</span>
                    </button>
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black" id="membre">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">Les membres de l'organe d'administration</h1>
                    <div id="membre-sections">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 mb-4 relative membre-section" id="form-membre">
                            <div class="flex items-end my-2 lg:col-span-2">
                                <button type="button" class="p-2 w-fit h-fit bg-red-500 text-white rounded-lg flex space-x-2 items-center remove-section-membre" style="display: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-remove w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11h6m-6 8v-1.25c0-2.071-1.919-3.75-4.286-3.75H8.286C5.919 14 4 15.679 4 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span>Supprimer le membre</span>
                                </button>
                            </div>
                            <div>
                                <label class="block my-2" for="">Type</label>
                                <select name="membres[0][type_membre]" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                    <option value="Personne physique">Personne physique</option>
                                    <option value="Personne morale">Personne morale</option>
                                </select>
                            </div>
                            <div>
                                <label class="block my-2" for="qualite">Qualité</label>
                                <select name="membres[0][qualite_membre]" id="qualite" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                    <option value="">Choisir la qualité du membre</option>
                                    <option value="Co-gérant">Administrateur</option>
                                    <option value="Gérant">Gérant</option>
                                </select>
                            </div>
                            <div>
                                <label class="block my-2" for="">Civilité</label>
                                <select name="membres[0][civilite_membre]" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                    <option value="">Choisir la civilité</option>
                                    <option value="Monsieur">Monsieur</option>
                                    <option value="Madame">Madame</option>
                                </select>
                            </div>
                            <div>
                                <label class="block my-2" for="">Nom</label>
                                <input name="membres[0][nom_membre]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                            </div>
                            <div>
                                <label class="block my-2" for="">Adresse</label>
                                <input name="membres[0][adresse_membre]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                            </div>
                            <div>
                                <label class="block my-2" for="">Code postal</label>
                                <input name="membres[0][code_postal_membre]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                            </div>
                            <div>
                                <label class="block my-2" for="">Ville</label>
                                <input name="membres[0][ville_membre]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                            </div>
                        </div>
                        <button type="button" class="bg-customBleu w-fit p-3 rounded-lg text-black flex space-x-2 items-center" id="ajouterMembre">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-add h-6 w-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11h3m0 0h3m-3 0v3m0-3V8m-3 11v-1.25c0-2.071-1.919-3.75-4.286-3.75H7.286C4.919 14 3 15.679 3 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Ajouter un membre</span>
                        </button>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black" id="commissaire">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">Commissaire aux comptes</h1>
                    <div id="commissaire-sections">
                        <button type="button" class="my-2 bg-customBleu w-fit p-3 rounded-lg text-black flex space-x-2 items-center" id="ajouterCommissaire">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-add h-6 w-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11h3m0 0h3m-3 0v3m0-3V8m-3 11v-1.25c0-2.071-1.919-3.75-4.286-3.75H7.286C4.919 14 3 15.679 3 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Ajouter un commissaire aux comptes</span>
                        </button>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold w-fit border-b-4 border-white">Stipulations statutaires</h1>
                    <div class="">
                        <div class="my-2">
                            <p class="text-orange-400 flex space-x-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-info-circle w-8"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11h1v5.5m0 0h1.5m-1.5 0h-1.5M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9.5-4v-.5h.5V8h-.5z"/></svg>
                                <span class="text-xs md:text-sm">Saisir ici les conditions d'agrément des cessionnaires d'actions et la désignation de l'organe social habilité à statuer sur les demandes d'agrément.</span>
                            </p>
                            <label class="block my-2" for="">Organe social habilité</label>
                            <textarea name="organe_social_habilite" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"></textarea>
                        </div>
                        <div class="my-2">
                            <p class="text-orange-400 flex space-x-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-info-circle h-6 w-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11h1v5.5m0 0h1.5m-1.5 0h-1.5M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9.5-4v-.5h.5V8h-.5z"/></svg>
                                <span>Saisir ici les dispositions statutaires relatives à la constitution de réserves et à la répartition des bénéfices.</span>
                            </p>
                            <label class="block my-2" for="">Dispositions statutaires</label>
                            <textarea name="dispositions_statutaires" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"></textarea>
                        </div>
                        <div class="my-2">
                            <p class="text-orange-400 flex space-x-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-info-circle h-6 w-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11h1v5.5m0 0h1.5m-1.5 0h-1.5M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9.5-4v-.5h.5V8h-.5z"/></svg>
                                <span>Saisir ici les avantages particuliers stipulés au profit de toute personne.</span>
                            </p>
                            <label class="block my-2" for="">Avantages</label>
                            <textarea name="avantages" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"></textarea>
                        </div>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold w-fit border-b-4 border-white">Dépôt légal</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8">
                        <div>
                            <label class="block my-2" for="">Tribunal</label>
                            <select name="tribunal" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Choisir le tribunal</option>
                                <option value="">Tribunal 1</option>
                                <option value="">Tribunal 2</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Date de dépôt</label>
                            <input name="date_depot_legal" type="date" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Numéro de dépôt</label>
                            <input name="numero_depot" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Numéro de RC</label>
                            <input name="numero_rc" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                    </div>
                </div>

                <div class="flex justify-between sm:justify-end sm:space-x-8">
                    <button type="button" class="bg-orange-400 p-3 rounded-xl text-md sm:text-lg font-medium"><a href="{{Route('accueil')}}">Choisir une autre annonce</a></button>
                    <button class="bg-green-500 p-3 rounded-xl text-md sm:text-lg font-medium" type="submit">Etape suivante</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="bg-white">
    @include('user.components.footer')
</div>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let sectionIndexRepresentant = 1;

    $('#ajouterRepresentant').click(function() {
        let newSectionRepresentant = `
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 my-4 relative representant-section border-t-4 pt-4">
                <div class="flex items-end lg:col-span-2 my-2">
                    <button type="button" class="p-2 w-fit  h-fit bg-red-500 text-white rounded-lg flex space-x-2 items-center remove-section-representant">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-remove w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11h6m-6 8v-1.25c0-2.071-1.919-3.75-4.286-3.75H8.286C5.919 14 4 15.679 4 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Supprimer le representant légal</span>
                    </button>
                </div>
                <div>
                    <label class="block my-2" for="type">Type</label>
                    <select name="representants[${sectionIndexRepresentant}][type_representant]" id="type" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        <option value="Personne physique">Personne physique</option>
                        <option value="Personne morale">Personne morale</option>
                    </select>
                </div>
                <div>
                    <label class="block my-2" for="qualite">Qualité</label>
                    <select name="representants[${sectionIndexRepresentant}][qualite_representant]" id="qualite" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        <option value="">Choisir la qualité du dirigeant</option>
                        <option value="Co-gérant">Co-gérant</option>
                        <option value="Gérant">Gérant</option>
                    </select>
                </div>
                <div id="civilite-container">
                    <label class="block my-2" for="civilite">Civilité</label>
                    <select name="representants[${sectionIndexRepresentant}][civilite_representant]" id="civilite" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        <option value="">Choisir la civilité</option>
                        <option value="Monsieur">Monsieur</option>
                        <option value="Madame">Madame</option>
                    </select>
                </div>
                <div>
                    <label class="block my-2" for="nom">Nom</label>
                    <input name="representants[${sectionIndexRepresentant}][nom_representant]" type="text" id="nom" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>
                <div>
                    <label class="block my-2" for="adresse">Adresse</label>
                    <input name="representants[${sectionIndexRepresentant}][adresse_representant]" type="text" id="adresse" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>
                <div>
                    <label class="block my-2" for="code-postal">Code postal</label>
                    <input name="representants[${sectionIndexRepresentant}][code_postal_representant]" type="text" id="code-postal" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>
                <div>
                    <label class="block my-2" for="ville">Ville</label>
                    <input name="representants[${sectionIndexRepresentant}][ville_representant]" type="text" id="ville" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>
            </div>
        `;
        $('#representant-sections').append(newSectionRepresentant);
        sectionIndexRepresentant++;
    });

    $(document).on('click', '.remove-section-representant', function() {
        $(this).closest('.representant-section').remove();
    });

    let sectionIndexMembre = 1;

    $('#ajouterMembre').click(function() {
        let newSectionMembre = `
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 my-4 relative membre-section border-t-4 pt-4" id="form-membre">
                <div class="flex items-end my-2 lg:col-span-2">
                    <button type="button" class="p-2 w-fit h-fit bg-red-500 text-white rounded-lg flex space-x-2 items-center remove-section-membre">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-remove w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11h6m-6 8v-1.25c0-2.071-1.919-3.75-4.286-3.75H8.286C5.919 14 4 15.679 4 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Supprimer le membre</span>
                    </button>
                </div>
                <div>
                    <label class="block my-2" for="">Type</label>
                    <select name="membres[${sectionIndexMembre}][type_membre]" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        <option value="Personne physique">Personne physique</option>
                        <option value="Personne morale">Personne morale</option>
                    </select>
                </div>
                <div>
                    <label class="block my-2" for="qualite">Qualité</label>
                    <select name="membres[0][qualite_membre]" id="qualite" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        <option value="">Choisir la qualité du membre</option>
                        <option value="Co-gérant">Administrateur</option>
                        <option value="Gérant">Gérant</option>
                    </select>
                </div>
                <div>
                    <label class="block my-2" for="">Civilité</label>
                    <select name="membres[${sectionIndexMembre}][civilite_membre]" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        <option value="">Choisir la civilité</option>
                        <option value="Monsieur">Monsieur</option>
                        <option value="Madame">Madame</option>
                    </select>
                </div>
                <div>
                    <label class="block my-2" for="">Nom</label>
                    <input name="membres[${sectionIndexMembre}][nom_membre]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>
                <div>
                    <label class="block my-2" for="">Adresse</label>
                    <input name="membres[${sectionIndexMembre}][adresse_membre]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>
                <div>
                    <label class="block my-2" for="">Code postal</label>
                    <input name="membres[${sectionIndexMembre}][code_postal_membre]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>
                <div>
                    <label class="block my-2" for="">Ville</label>
                    <input name="membres[${sectionIndexMembre}][ville_membre]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>
            </div>
        `;
        $('#membre-sections').append(newSectionMembre);
        sectionIndexMembre++;
    });

    $(document).on('click', '.remove-section-membre', function() {
        $(this).closest('.membre-section').remove();
    });

    let sectionIndexCommissaire = 0;

    $('#ajouterCommissaire').click(function() {
        let newSectionCommissaire = `
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 my-4 relative commissaire-section border-t-4 pt-4" id="form-commissaire">
                <div class="flex items-end my-2 lg:col-span-2">
                    <button type="button" class="p-2 w-fit h-fit bg-red-500 text-white rounded-lg flex space-x-2 items-center remove-section-commissaire">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-remove w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11h6m-6 8v-1.25c0-2.071-1.919-3.75-4.286-3.75H8.286C5.919 14 4 15.679 4 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Supprimer le commissaire aux comptes</span>
                    </button>
                </div>
                <div>
                    <label class="block my-2" for="">Type</label>
                    <select name="commissaire[${sectionIndexCommissaire}][type_commissaire]" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        <option value="Personne physique">Personne physique</option>
                        <option value="Personne morale">Personne morale</option>
                    </select>
                </div>
                <div>
                    <label class="block my-2" for="">Civilité</label>
                    <select name="commissaire[${sectionIndexCommissaire}][civilite_commissaire]" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        <option value="">Choisir la civilité</option>
                        <option value="Monsieur">Monsieur</option>
                        <option value="Madame">Madame</option>
                    </select>
                </div>
                <div>
                    <label class="block my-2" for="">Nom</label>
                    <input name="commissaire[${sectionIndexCommissaire}][nom_commissaire]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>
                <div>
                    <label class="block my-2" for="">Adresse</label>
                    <input name="commissaire[${sectionIndexCommissaire}][adresse_commissaire]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>
                <div>
                    <label class="block my-2" for="">Code postal</label>
                    <input name="commissaire[${sectionIndexCommissaire}][code_postal_commissaire]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>
                <div>
                    <label class="block my-2" for="">Ville</label>
                    <input name="commissaire[${sectionIndexCommissaire}][ville_commissaire]" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                </div>

            </div>
        </div>
        `;
        $('#commissaire-sections').append(newSectionCommissaire);
        sectionIndexCommissaire++;
    });

    $(document).on('click', '.remove-section-commissaire', function() {
        $(this).closest('.commissaire-section').remove();
    });
});
</script>

@endsection




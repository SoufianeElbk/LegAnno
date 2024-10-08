@extends('user.layouts.base')

@section('title', "Constitution : SARL SARLAU SNC SCS SCA")

@section('content')
<div class="container text-white mx-auto p-6">
    @include('user.components.nav')
</div>
<div class="text-white">
    <div class="container mx-auto p-6">
        @session('success')
            <p class="bg-red-500 text-white p-4 rounded-xl mb-4 mx-auto w-fit">{{session('success')}}</p>
        @endsession

        <div class="w-full lg:w-3/4 mx-auto mb-8">
            <h1 class="text-3xl font-bold">Annonce légale de création de SARL, SARLAU, SNC, SCS, SCA</h1>
            <h3 class="mt-4">Ce modèle d'annonce légale en ligne vous permet de publier une Annonce légale de création de SARL, SARLAU, SNC, SCS, SCA dans un journal d'annonces légales habilité.</h3>
        </div>
        <form action="{{route('annonces-legales-constitution-sarl-sarlau-snc-scs-sca')}}" method="POST">
            @csrf
            <div class="w-full lg:w-3/4 mx-auto text-sm">

                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">Statuts</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12">
                        <div>
                            <label class="block my-2" for="">Nature de l'acte</label>
                            <select name="nature_acte" id="" class=" bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                                <option value="">Choisir la nature de l'acte</option>
                                <option value="Acte sous seing privé">Acte sous seing privé</option>
                                <option value="Acte authentique">Acte authentique</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Date de l'acte</label>
                            <input name="date_acte" type="date" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        </div>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black lg:grid-cols-2 gap-x-8 items-center">
                    <div class="">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">La société</h1>
                        <div class="grid grid-cols-1 gap-x-12">
                            <div>
                                <label class="block my-2" for="">Dénomination</label>
                                <input name="denomination" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="">Sigle</label>
                                <input name="sigle" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="">Forme sociale</label>
                                <select name="forme_sociale" id="" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                                    <option value="">Choisir la forme sociale</option>
                                    <option value="Société à Responsabilité Limitée">Société à Responsabilité Limitée (SARL)</option>
                                    <option value="Société à Responsabilité Limitée à Associé Unique">Société à Responsabilité Limitée à Associé Unique (SARLAU)</option>
                                    <option value="Société en Commandite Simple">Société en Commandite Simple (SCS)</option>
                                    <option value="Société en Commandite par Action">Société en Commandite par Action (SCA)</option>
                                    <option value="Société en Nom Collectif">Société en Nom Collectif (SNC)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block my-2" for="">Objet social</label>
                                <textarea name="objet_social" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2"></textarea>
                            </div>
                            <div>
                                <label class="block my-2" for="">Capital (DH)</label>
                                <input name="capital" type="number" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="">Valeur nominale (DH)</label>
                                <input name="valeur_nominale" type="number" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="">Montant des apports en numéraire (DH)</label>
                                <input name="montant_apports_en_numeraire" type="number" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="">Description des apports en nature et leurs valeurs (si applicable)</label>
                                <input name="description_apports" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="">Durée ANS</label>
                                <input name="duree" type="number" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:block w-3/4 mx-auto">
                        <img src="{{asset('images/societe.png')}}" alt="societe" class="">
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">Adresse du siège social</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8">
                        <div class=" lg:col-span-2">
                            <label class="block my-2" for="">Adresse</label>
                            <input name="adresse_societe" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        </div>
                        <div>
                            <label class="block my-2" for="">Code postal</label>
                            <input name="code_postal_societe" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        </div>
                        <div>
                            <label class="block my-2" for="">Ville</label>
                            <input name="ville_societe" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        </div>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black" id="representant">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">Les représentants légaux</h1>
                    <div id="representant-sections">
                        <div class="grid grid-cols-1 gap-x-8 mb-4 relative representant-section">
                            <div class="flex items-end my-2">
                                <button type="button" class="p-2 w-fit h-fit bg-red-500 text-white rounded-lg flex space-x-2 items-center remove-section-representant" style="display: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-remove w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11h6m-6 8v-1.25c0-2.071-1.919-3.75-4.286-3.75H8.286C5.919 14 4 15.679 4 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span>Supprimer le representant légal</span>
                                </button>
                            </div>
                            <div>
                                <label class="block my-2" for="qualite">Qualité</label>
                                <select name="representants[0][qualite_representant]" id="qualite" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                                    <option value="">Choisir la qualité du dirigeant</option>
                                    <option value="Co-gérant">Co-gérant</option>
                                    <option value="Gérant">Gérant</option>
                                </select>
                            </div>
                            <div id="civilite-container">
                                <label class="block my-2" for="civilite">Civilité</label>
                                <select name="representants[0][civilite_representant]" id="civilite" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                                    <option value="">Choisir la civilité</option>
                                    <option value="Monsieur">Monsieur</option>
                                    <option value="Madame">Madame</option>
                                </select>
                            </div>
                            <div>
                                <label class="block my-2" for="nom">Nom</label>
                                <input name="representants[0][nom_representant]" type="text" id="nom" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="adresse">Adresse</label>
                                <input name="representants[0][adresse_representant]" type="text" id="adresse" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="code-postal">Code postal</label>
                                <input name="representants[0][code_postal_representant]" type="text" id="code-postal" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="ville">Ville</label>
                                <input name="representants[0][ville_representant]" type="text" id="ville" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="bg-customBleu w-fit p-3 rounded-lg text-black flex space-x-2 items-center" id="ajouterRepresentant">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-add h-6 w-6">
                            <path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11h3m0 0h3m-3 0v3m0-3V8m-3 11v-1.25c0-2.071-1.919-3.75-4.286-3.75H7.286C4.919 14 3 15.679 3 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Ajouter un représentant légal</span>
                    </button>
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black" id="associe">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">Les associés</h1>
                    <div id="associe-sections">
                        <div class="grid grid-cols-1 gap-x-8 mb-4 relative associe-section" id="form-associe">
                            <div class="flex items-end my-2">
                                <button type="button" class="p-2 w-fit h-fit bg-red-500 text-white rounded-lg flex space-x-2 items-center remove-section-associe" style="display: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-remove w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11h6m-6 8v-1.25c0-2.071-1.919-3.75-4.286-3.75H8.286C5.919 14 4 15.679 4 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span>Supprimer l'associé</span>
                                </button>
                            </div>
                            <div>
                                <label class="block my-2" for="">Civilité</label>
                                <select name="associes[0][civilite_associe]" id="" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                                    <option value="">Choisir la civilité</option>
                                    <option value="Monsieur">Monsieur</option>
                                    <option value="Madame">Madame</option>
                                </select>
                            </div>
                            <div>
                                <label class="block my-2" for="">Nom</label>
                                <input name="associes[0][nom_associe]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="">Adresse</label>
                                <input name="associes[0][adresse_associe]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="">Code postal</label>
                                <input name="associes[0][code_postal_associe]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="">Ville</label>
                                <input name="associes[0][ville_associe]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                            <div>
                                <label class="block my-2" for="">Participation (PARTS)</label>
                                <input name="associes[0][participation_associe]" type="number" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            </div>
                        </div>
                        <button type="button" class="bg-customBleu w-fit p-3 rounded-lg text-black flex space-x-2 items-center" id="ajouterAssocie">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-add h-6 w-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11h3m0 0h3m-3 0v3m0-3V8m-3 11v-1.25c0-2.071-1.919-3.75-4.286-3.75H7.286C4.919 14 3 15.679 3 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Ajouter un associé</span>
                        </button>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black" id="commissaire">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">Commissaire aux comptes</h1>
                    <div id="commissaire-sections">
                        <button type="button" class="my-2 bg-customBleu w-fit p-3 rounded-lg text-black flex space-x-2 items-center" id="ajouterCommissaire">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-add h-6 w-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11h3m0 0h3m-3 0v3m0-3V8m-3 11v-1.25c0-2.071-1.919-3.75-4.286-3.75H7.286C4.919 14 3 15.679 3 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Ajouter un commissaire aux comptes</span>
                        </button>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold w-fit border-b-4 border-black">Dépôt légal</h1>
                    <div class="grid grid-cols-1 gap-x-8">
                        <div>
                            <label class="block my-2" for="">Tribunal</label>
                            <input name="tribunal" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        </div>
                        <div>
                            <label class="block my-2" for="">Date de dépôt</label>
                            <input name="date_depot" type="date" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        </div>
                        <div>
                            <label class="block my-2" for="">Numéro de dépôt</label>
                            <input name="numero_depot" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        </div>
                        <div>
                            <label class="block my-2" for="">Numéro de RC</label>
                            <input name="numero_rc" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
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
            <div class="grid grid-cols-1 gap-x-8 my-4 relative representant-section border-t-4 pt-4">
                <div class="flex items-end my-2">
                    <button type="button" class="p-2 w-fit  h-fit bg-red-500 text-white rounded-lg flex space-x-2 items-center remove-section-representant">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-remove w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11h6m-6 8v-1.25c0-2.071-1.919-3.75-4.286-3.75H8.286C5.919 14 4 15.679 4 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Supprimer le representant légal</span>
                    </button>
                </div>
                <div>
                    <label class="block my-2" for="qualite">Qualité</label>
                    <select name="representants[${sectionIndexRepresentant}][qualite_representant]" id="qualite" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        <option value="">Choisir la qualité du dirigeant</option>
                        <option value="Co-gérant">Co-gérant</option>
                        <option value="Gérant">Gérant</option>
                    </select>
                </div>
                <div id="civilite-container">
                    <label class="block my-2" for="civilite">Civilité</label>
                    <select name="representants[${sectionIndexRepresentant}][civilite_representant]" id="civilite" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        <option value="">Choisir la civilité</option>
                        <option value="Monsieur">Monsieur</option>
                        <option value="Madame">Madame</option>
                    </select>
                </div>
                <div>
                    <label class="block my-2" for="nom">Nom</label>
                    <input name="representants[${sectionIndexRepresentant}][nom_representant]" type="text" id="nom" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
                <div>
                    <label class="block my-2" for="adresse">Adresse</label>
                    <input name="representants[${sectionIndexRepresentant}][adresse_representant]" type="text" id="adresse" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
                <div>
                    <label class="block my-2" for="code-postal">Code postal</label>
                    <input name="representants[${sectionIndexRepresentant}][code_postal_representant]" type="text" id="code-postal" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
                <div>
                    <label class="block my-2" for="ville">Ville</label>
                    <input name="representants[${sectionIndexRepresentant}][ville_representant]" type="text" id="ville" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
            </div>
        `;
        $('#representant-sections').append(newSectionRepresentant);
        sectionIndexRepresentant++;
    });

    $(document).on('click', '.remove-section-representant', function() {
        $(this).closest('.representant-section').remove();
    });

    let sectionIndexAssocie = 1;

    $('#ajouterAssocie').click(function() {
        let newSectionAssocie = `
            <div class="grid grid-cols-1 gap-x-8 my-4 relative associe-section border-t-4 pt-4" id="form-associe">
                <div class="flex items-end my-2">
                    <button type="button" class="p-2 w-fit h-fit bg-red-500 text-white rounded-lg flex space-x-2 items-center remove-section-associe">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-remove w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11h6m-6 8v-1.25c0-2.071-1.919-3.75-4.286-3.75H8.286C5.919 14 4 15.679 4 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Supprimer l'associé</span>
                    </button>
                </div>
                <div>
                    <label class="block my-2" for="">Civilité</label>
                    <select name="associes[${sectionIndexAssocie}][civilite_associe]" id="" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        <option value="">Choisir la civilité</option>
                        <option value="Monsieur">Monsieur</option>
                        <option value="Madame">Madame</option>
                    </select>
                </div>
                <div>
                    <label class="block my-2" for="">Nom</label>
                    <input name="associes[${sectionIndexAssocie}][nom_associe]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
                <div>
                    <label class="block my-2" for="">Adresse</label>
                    <input name="associes[${sectionIndexAssocie}][adresse_associe]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
                <div>
                    <label class="block my-2" for="">Code postal</label>
                    <input name="associes[${sectionIndexAssocie}][code_postal_associe]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
                <div>
                    <label class="block my-2" for="">Ville</label>
                    <input name="associes[${sectionIndexAssocie}][ville_associe]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
                <div>
                    <label class="block my-2" for="">Participation (PARTS)</label>
                    <input name="associes[${sectionIndexAssocie}][participation_associe]" type="number" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
            </div>
        `;
        $('#associe-sections').append(newSectionAssocie);
        sectionIndexAssocie++;
    });

    $(document).on('click', '.remove-section-associe', function() {
        $(this).closest('.associe-section').remove();
    });

    let sectionIndexCommissaire = 0;

    $('#ajouterCommissaire').click(function() {
        let newSectionCommissaire = `
        <div class="grid grid-cols-1 gap-x-8 my-4 relative commissaire-section border-t-4 pt-4" id="form-commissaire">
                <div class="flex items-end my-2">
                    <button type="button" class="p-2 w-fit h-fit bg-red-500 text-white rounded-lg flex space-x-2 items-center remove-section-commissaire">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-remove w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11h6m-6 8v-1.25c0-2.071-1.919-3.75-4.286-3.75H8.286C5.919 14 4 15.679 4 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Supprimer le commissaire aux comptes</span>
                    </button>
                </div>
                <div>
                    <label class="block my-2" for="">Civilité</label>
                    <select name="commissaire[${sectionIndexCommissaire}][civilite_commissaire]" id="" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        <option value="">Choisir la civilité</option>
                        <option value="Monsieur">Monsieur</option>
                        <option value="Madame">Madame</option>
                    </select>
                </div>
                <div>
                    <label class="block my-2" for="">Nom</label>
                    <input name="commissaire[${sectionIndexCommissaire}][nom_commissaire]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
                <div>
                    <label class="block my-2" for="">Adresse</label>
                    <input name="commissaire[${sectionIndexCommissaire}][adresse_commissaire]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
                <div>
                    <label class="block my-2" for="">Code postal</label>
                    <input name="commissaire[${sectionIndexCommissaire}][code_postal_commissaire]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                </div>
                <div>
                    <label class="block my-2" for="">Ville</label>
                    <input name="commissaire[${sectionIndexCommissaire}][ville_commissaire]" type="text" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
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




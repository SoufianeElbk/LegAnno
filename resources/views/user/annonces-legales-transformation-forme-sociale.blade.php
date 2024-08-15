@extends('user.layouts.base')

@section('title', "Transformation de la forme sociale")

@section('content')
<div class="container text-white mx-auto p-6">
    @include('user.components.nav')
</div>
<div class="text-white">
    <div class="container mx-auto p-6">
        <div class="w-full lg:w-3/4 mx-auto mb-8">
            <h1 class="text-3xl font-bold">Annonce légale - Transformation de la forme sociale</h1>
            <h3 class="mt-4">Ce modèle d'annonce légale en ligne vous permet de publier une Annonce légale - Changement de dénomination dans un journal d'annonces légales habilité.</h3>
        </div>
        <form action="{{route('annonces-legales-transformation-forme-sociale')}}" method="POST">
            @csrf
            <div class="w-full lg:w-3/4 mx-auto text-sm">

                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">La décision</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12">
                        <div>
                            <label class="block my-2" for="">Organe de décision</label>
                            <select name="organe_decision" id="" class=" bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                                <option value="">Choisir l'organe de décision</option>
                                <option value="Conseil d'administration">Conseil d'administration</option>
                                <option value="Assemblée générale ordinaire">Assemblée générale ordinaire</option>
                                <option value="Assemblée générale extraordinaire">Assemblée générale extraordinaire</option>
                                <option value="Associé unique">Associé unique</option>
                                <option value="Gérance">Gérance</option>
                                <option value="Liquidateur">Liquidateur</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Date de décision</label>
                            <input name="date_decision" type="date" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        </div>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black">
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
                                <option value="Société Anonyme">Société Anonyme (SA)</option>
                                <option value="Société Anonyme à Directoire (SAD)">Société Anonyme à Directoire (SAD)</option>
                                <option value="Société Anonyme à Conseil (SAC)">Société Anonyme à Conseil (SAC)</option>
                                <option value="Société Anonyme Simplifiée (SAS)">Société Anonyme Simplifiée (SAS)</option>
                                <option value="Société à Responsabilité Limitée (SARL)">Société à Responsabilité Limitée (SARL)</option></option>
                                <option value="Société à Responsabilité Limitée à Associé Unique (SARLAU)">Société à Responsabilité Limitée à Associé Unique (SARLAU)</option>
                                <option value="Société en Commandite Simple">Société en Commandite Simple</option>
                                <option value="Société Civile">Société Civile</option>
                                <option value="Société Civile Immobilière">Société Civile Immobilière</option>
                                <option value="Société Civile Professionnelle">Société Civile Professionnelle</option>
                                <option value="Société en Nom Collectif">Société en Nom Collectif</option>
                                <option value="Société de Participation">Société de Participation</option>
                                <option value="Société d'Investissement à Capital Variable">Société d'Investissement à Capital Variable</option>
                                <option value="Fonds Commun de Placement">Fonds Commun de Placement</option>
                                <option value="Groupement d'Intérêt Economique">Groupement d'Intérêt Economique</option>
                                <option value="Succursale">Succursale</option>
                                <option value="Agence">Agence</option>
                                <option value="Entreprise Individuel">Entreprise Individuel</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Capital (DH)</label>
                            <input name="capital" type="number" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                        </div>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">Adresse du siège social</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8">
                        <div class="lg:col-span-2">
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

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">Transformation de la forme sociale</h1>
                    <div>
                        <label class="block my-2" for="">Transformation en</label>
                        <select name="nv_forme_sociale" id="" class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-2">
                            <option value="">Choisir la forme sociale</option>
                            <option value="Société Anonyme">Société Anonyme (SA)</option>
                            <option value="Société Anonyme à Directoire (SAD)">Société Anonyme à Directoire (SAD)</option>
                            <option value="Société Anonyme à Conseil (SAC)">Société Anonyme à Conseil (SAC)</option>
                            <option value="Société Anonyme Simplifiée (SAS)">Société Anonyme Simplifiée (SAS)</option>
                            <option value="Société à Responsabilité Limitée (SARL)">Société à Responsabilité Limitée (SARL)</option></option>
                            <option value="Société à Responsabilité Limitée à Associé Unique (SARLAU)">Société à Responsabilité Limitée à Associé Unique (SARLAU)</option>
                            <option value="Société en Commandite Simple">Société en Commandite Simple</option>
                            <option value="Société Civile">Société Civile</option>
                            <option value="Société Civile Immobilière">Société Civile Immobilière</option>
                            <option value="Société Civile Professionnelle">Société Civile Professionnelle</option>
                            <option value="Société en Nom Collectif">Société en Nom Collectif</option>
                            <option value="Société de Participation">Société de Participation</option>
                            <option value="Société d'Investissement à Capital Variable">Société d'Investissement à Capital Variable</option>
                            <option value="Fonds Commun de Placement">Fonds Commun de Placement</option>
                            <option value="Groupement d'Intérêt Economique">Groupement d'Intérêt Economique</option>
                            <option value="Succursale">Succursale</option>
                            <option value="Agence">Agence</option>
                            <option value="Entreprise Individuel">Entreprise Individuel</option>
                        </select>
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

});
</script>

@endsection




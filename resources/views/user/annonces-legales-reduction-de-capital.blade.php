@extends('user.layouts.base')

@section('title', "Réduction de capital")

@section('content')
<div class="container text-white mx-auto p-6">
    @include('user.components.nav')
</div>
<div class="text-white">
    <div class="container mx-auto p-6">
        <div class="w-full lg:w-3/4 mx-auto mb-8">
            <h1 class="text-3xl font-bold">Annonce légale - Réduction de capital</h1>
            <h3 class="mt-4">Ce modèle d'annonce légale en ligne vous permet de publier une Annonce légale - Réduction de capital dans un journal d'annonces légales habilité.</h3>
        </div>
        <form action="{{route('annonces-legales-reduction-de-capital')}}" method="POST">
            @csrf
            <div class="w-full lg:w-3/4 mx-auto text-sm">

                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">La décision</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12">
                        <div>
                            <label class="block my-2" for="">Organe de décision</label>
                            <select name="organe_decision" id="" class=" text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
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
                            <input name="date_decision" type="date" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">La société</h1>
                    <div class="grid grid-cols-1 gap-x-12">
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
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">Adresse du siège social</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8">
                        <div class="lg:col-span-2">
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

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-black w-fit">Nouveau capital</h1>
                    <div class="grid grid-cols-1 gap-x-12">
                        <div>
                            <label class="block my-2" for="">Montant de la réduction du capital social (DH)</label>
                            <input name="montant_reduction_capital_social" type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Capital social avant réduction (DH)</label>
                            <input name="capital_social_avant_reduction" type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Nouveau capital social (DH)</label>
                            <input name="nouveau_capital_social" type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Modalité de la réduction du capital</label>
                            <select name="modalite_reduction_capital" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Choisir la modalité</option>
                                <option value="Réduction du nombre d'actions existantes">Réduction du nombre d'actions existantes</option>
                                <option value="Réduction de la valeur nominale des actions">Réduction de la valeur nominale des actions</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold w-fit border-b-4 border-black">Dépôt légal</h1>
                    <div class="grid grid-cols-1 gap-x-8">
                        <div>
                            <label class="block my-2" for="">Tribunal</label>
                            <input name="tribunal" type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Date de dépôt</label>
                            <input name="date_depot" type="date" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
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

@endsection




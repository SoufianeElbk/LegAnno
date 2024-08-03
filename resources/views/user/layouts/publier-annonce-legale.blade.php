@extends('user.layouts.base')

@section('title', "Publier une annonce légale")

@section('content')
<div class="container text-white mx-auto p-6">
    @include('user.components.nav')
</div>
<div class="text-white">
    <div class="container mx-auto p-6">
        <div class="w-full lg:w-3/4 mx-auto mb-8">
            <h1 class="text-3xl font-bold">Annonce légale de création de SARL, SARLAU, SNC, SCS, SCA</h1>
            <h3 class="mt-4">Ce modèle d'annonce légale en ligne vous permet de publier une Annonce légale de création de SARL, SARLAU, SNC, SCS, SCA dans un journal d'annonces légales habilité.</h3>
        </div>
        <form action="{{route('publier-annonce-legale')}}" method="POST">
            <div class="w-full lg:w-3/4 mx-auto text-sm">
                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">Status</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12">
                        <div>
                            <label class="block my-2" for="">Nature de l'acte</label>
                            <select name="" id="" class=" text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Choisir la nature de l'acte</option>
                                <option value="">Acte sous seing privé</option>
                                <option value="">Acte ahthentique</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Date de l'acte</label>
                            <input type="date" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                    </div>
                </div>
                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">La société</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12">
                        <div>
                            <label class="block my-2" for="">Dénomination</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Sigle</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Forme sociale</label>
                            <select name="" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Choisir la forme sociale</option>
                                <option value="">SARL</option>
                                <option value="">SARLAU</option>
                                <option value="">SCS</option>
                                <option value="">SCA</option>
                                <option value="">SNC</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Objet social</label>
                            <textarea class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"></textarea>
                        </div>
                        <div>
                            <label class="block my-2" for="">Capital (DH)</label>
                            <input type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Valeur nominale (DH)</label>
                            <input type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Montant des apports en numéraire (DH)</label>
                            <input type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Description des apports en nature et leurs valeurs (si applicable)</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Durée ANS</label>
                            <input type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                    </div>
                </div>
                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">Adresse du siège social</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8">
                        <div class=" lg:col-span-2">
                            <label class="block my-2" for="">Adresse</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Code postale</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Ville</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                    </div>
                </div>
                <div class="mb-4 grid grid-cols-1 bg-white text-black p-8 rounded-lg border-2 border-black" id="representant">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">Les représentants légaux</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 my-4 relative" id="form-representant">
                        <div>
                            <label class="block my-2" for="">Type</label>
                            <select name="type" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Personne physique</option>
                                <option value="">Personne morale</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Qualité</label>
                            <select name="" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Choisir la qualité du dirigeant</option>
                                <option value="">Co-gérant</option>
                                <option value="">Gérant</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Civilité</label>
                            <select name="" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Choisir la civilité</option>
                                <option value="">Monsieur</option>
                                <option value="">Madame</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Nom</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Adresse</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Code postale</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Ville</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Participation (PARTS)</label>
                            <input type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                    </div>
                    <button type="button" class="bg-customBleu w-fit p-3 rounded-lg text-black flex space-x-2 items-center" id="ajouterRepresentant">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-add h-6 w-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11h3m0 0h3m-3 0v3m0-3V8m-3 11v-1.25c0-2.071-1.919-3.75-4.286-3.75H7.286C4.919 14 3 15.679 3 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Ajouter un représentant légal</span>
                    </button>
                </div>
                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black" id="associe">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">Les associés</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 my-4 relative" id="form-associe">
                        <div>
                            <label class="block my-2" for="">Type</label>
                            <select name="" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Personne physique</option>
                                <option value="">Personne morale</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Civilité</label>
                            <select name="" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Choisir la civilité</option>
                                <option value="">Monsieur</option>
                                <option value="">Madame</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Nom</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Adresse</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Code postale</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Ville</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Participation (PARTS)</label>
                            <input type="number" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                    </div>
                    <button type="button" class="bg-customBleu w-fit p-3 rounded-lg text-black flex space-x-2 items-center" id="ajouterAssocie">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-add h-6 w-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11h3m0 0h3m-3 0v3m0-3V8m-3 11v-1.25c0-2.071-1.919-3.75-4.286-3.75H7.286C4.919 14 3 15.679 3 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Ajouter un associé</span>
                    </button>
                </div>
                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black" id="commissaire">
                    <h1 class="text-xl font-bold border-b-4 border-white w-fit">Commissaire aux comptes</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 my-4 relative" id="form-commissaire">
                        <div>
                            <label class="block my-2" for="">Type</label>
                            <select name="" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Personne physique</option>
                                <option value="">Personne morale</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Civilité</label>
                            <select name="" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Choisir la civilité</option>
                                <option value="">Monsieur</option>
                                <option value="">Madame</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Nom</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Adresse</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Code postale</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Ville</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                    </div>
                    <button type="button" class="bg-customBleu w-fit p-3 rounded-lg text-black flex space-x-2 items-center" id="ajouterCommissaire">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user-add h-6 w-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11h3m0 0h3m-3 0v3m0-3V8m-3 11v-1.25c0-2.071-1.919-3.75-4.286-3.75H7.286C4.919 14 3 15.679 3 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Ajouter un commissaire aux comptes</span>
                    </button>
                </div>
                <div class="mb-4 grid grid-cols-1  bg-white text-black p-8 rounded-lg border-2 border-black">
                    <h1 class="text-xl font-bold w-fit border-b-4 border-white">Dépôt légal</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8">
                        <div>
                            <label class="block my-2" for="">Tribunal</label>
                            <select name="" id="" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                <option value="">Choisir le tribunal</option>
                                <option value="">Tribunal 1</option>
                                <option value="">Tribunal 2</option>
                            </select>
                        </div>
                        <div>
                            <label class="block my-2" for="">Date de dépôt</label>
                            <input type="date" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Numéro de dépôt</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                        </div>
                        <div>
                            <label class="block my-2" for="">Numéro de RC</label>
                            <input type="text" class="text-black w-full px-5 py-2 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
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




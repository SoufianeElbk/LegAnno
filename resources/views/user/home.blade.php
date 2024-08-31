@extends('user.layouts.base')
@section('title' , 'Accueil')
@section('content')
    <div class="container text-white mx-auto p-6">
        @include('user.components.nav')
        <div class="flex items-bottom mb-12 p-4">
            <div class="max-w-screen-xl flex items-center justify-between mx-auto flex-col lg:flex-row">
                <div class="flex flex-col w-full lg:w-2/3">
                    <h1 class="text-2xl md:text-3xl font-semibold">Le journal LegAnno est un service spécialisé  dans l'information légale, juridique et financière.</h1>
                    <div class="grid grid-cols-1 md:grid-cols-3 text-sm sm:text-md font-semibold">
                        <button class="rounded-full bg-yellow-300 text-black p-4 mt-4 w-fit hover:bg-yellow-400 md:col-span-2"><a href="#annonces-legales">Publier une annonce légale ?</a></button>
                        <button class="rounded-full bg-yellow-300 text-black p-4 mt-4 w-fit hover:bg-yellow-400 md:justify-self-end">Besoin d'aide ?</button>
                    </div>
                </div>
                <div class="w-full lg:w-2/3 mx-auto">
                    <img src="{{ asset("/images/download.png") }}" alt="" class="h-auto w-full lg:w-2/3 mx-auto">
                </div>
            </div>
        </div>
        <div class="mb-12 p-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mx-auto max-w-screen-xl">
                <div class=" bg-[#FFF7FC] text-black p-4 rounded-lg">
                    <h1 class="text-xl font-bold mb-4">Publiez votre annonce légale au meilleur prix</h1>
                    <ul class="text-sm md:text-xs space-y-2">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Paiement en ligne de votre annonce légale en toute sécurité</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Facture instantanée et attestation de parution dans l’heure</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Journal quotidien téléchargeable en ligne</span>
                        </li>
                    </ul>
                </div>
                <div class=" bg-[#FFF7FC] text-black p-4 rounded-lg grid">
                    <h1 class="text-xl font-bold mb-4">Packs de recharges d’annonces légales</h1>
                    <p class="text-sm md:text-xs">Plus de 30% de réductionsur le prix unitaire !</p>
                    <button class="w-full h-fit self-end py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700"><a href="#packs">Commander un pack</a></button>
                </div>
                <div class=" bg-[#FFF7FC] text-black p-4 rounded-lg grid grid-cols-3">
                    <div>
                        <img class="max-w-full" src="{{asset('/images/support.png')}}" alt="support">
                    </div>
                    <div class="col-span-2">
                        <h1 class="text-xl font-bold mb-4">Besoin d'aide</h1>
                        <p class="text-sm md:text-xs mb-4">Notre équipe spécialisée dans la rédaction de vos annonces légales, vous conseille.</p>
                        <a href="tel:0663057516" class="font-medium flex lg:space-x-2 items-center flex-col space-y-2 lg:space-y-0 lg:flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-phone-call w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.636 4A7.364 7.364 0 0120 11.364M13 8a3 3 0 013 3M7 6l-2.485.621c-.89.223-1.534 1.029-1.352 1.928 1.06 5.213 7.075 11.228 12.288 12.287.9.183 1.705-.46 1.928-1.35l.62-2.486-3.5-2-1.5 1.5c-2-1-4.5-3.5-5.5-5.5L9 9.5 7 6z"/></svg>
                            <span class="text-xs md:text-md">(+212) 06.63.05.75.16</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-12 p-4" id="annonces-legales">
            <div class=" mx-auto max-w-screen-xl">
            <h1 class="text-4xl font-medium mb-8 w-full text-center"><span class="font-extrabold">LegAnno</span> offre un service de publication d'annonces légales en ligne.</h1>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <div class="bg-[#FFF7FC] text-black p-4 rounded-lg">
                    <h1 class="text-2xl font-bold border-b-4 border-indigo-400 w-fit mb-4">Constitution de société</h1>
                    <ul class="text-sm space-y-2 font-medium">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-constitution-sarl-sarlau-snc-scs-sca')}}">Constitution de société SARL, SARLAU, SNC, SCS, SCA</a>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-constitution-sas')}}">Constitution : Société Anonyme Simplifiée (SAS)</a>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-constitution-sa')}}">Société Anonyme (SA)</a>
                        </li>
                    </ul>
                </div>
                <div class="bg-[#FFF7FC] text-black p-4 rounded-lg">
                    <h1 class="text-2xl font-bold border-b-4 border-indigo-400 w-fit mb-4">Cessation d'activité</h1>
                    <ul class="text-sm space-y-2 font-medium">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-dissolution')}}">Dissolution</a>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-cloture-de-la-liquidation')}}">Clôture de la liquidation</a>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-continuite-activite')}}">Continuité de l'activité</a>
                        </li>
                    </ul>
                </div>
                <div class="bg-[#FFF7FC] text-black p-4 rounded-lg">
                    <h1 class="text-2xl font-bold border-b-4 border-indigo-400 w-fit mb-4">Modification de société</h1>
                    <ul class="text-sm space-y-2 font-medium">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-transfert-de-siege-social')}}">Transfert de siège social</a>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-changement-objet-social')}}">Changement d'objet social</a>
                        </li>
                        <li  class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-changement-denomination')}}">Changement de dénomination</a>
                        </li>
                        <li  class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-transformation-forme-sociale')}}">Transformation de la forme sociale</a>
                        </li>
                        <li  class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-reduction-de-capital')}}">Réduction de capital</a>
                        </li>
                        <li  class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right w-5 h-5 mr-2 text-blue-400"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg>
                            <a href="{{route('annonces-legales-augmentation-capital')}}">Augmentation de capital</a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        @include('user.components.pricing')
    </div>
    {{-- </div> --}}
    <div class="">
        @include('user.components.footer')
    </div>

@endsection

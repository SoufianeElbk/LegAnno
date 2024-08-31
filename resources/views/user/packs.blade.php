@extends('user.layouts.base')
@section('title' , 'Packs')
@section('content')
    <div class="container text-white mx-auto p-6">
        @include('user.components.nav')
        <form action="{{Route('packs.store')}}" method="POST" class="">
         @csrf
            <div class="max-w-screen-xl mx-auto container">
                <section class="mb-8 p-4" id="packs">
                    <div class="mx-auto">
                        <div class="text-center mb-12">
                            <h2 class="text-4xl font-bold text-white sm:text-5xl">PACKS PROFESSIONNELS</h2>
                            <h2 class="text-2xl font-bold text-white sm:text-2xl">Offres pour publication multiple</h2>
                        </div>
                        <div class="text-center mb-8">
                            <p class="mt-4 text-md text-purple-100 text-justify font-medium">
                                Vous êtes un professionnel des publications juridiques, expert du droit et du chiffre (cabinet comptable, avocat, huissier, juriste, notaire, ...), vous publiez régulièrement des annonces légales ?
                            </p>
                            <p class="mt-4 text-md text-purple-100 text-justify font-medium">
                                LegAnno vous propose de bénéficier d'un système de recharge d'annonces légales grâce aux différents Packs disponibles et de bénéficier de tarifs avantageux.
                            </p>
                            <h1 class="text-3xl mt-4 font-semibold">Choisissez un pack</h1>
                        </div>
                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">


                            <div class="bg-[#FFF7FC] rounded-lg shadow-lg p-6 relative overflow-hidden h-full">

                                <div class="mb-4 flex items-center justify-between">
                                    <h3 class="text-2xl font-semibold text-black border-b-4 border-indigo-400 w-fit">Pack Silver</h3>
                                    <label for="" class="text-black flex space-x-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right text-black w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg> <input class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-900 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cursor-pointer" type="radio" name="pack_id" value="1"></label>
                                </div>
                                <div class="mb-4">
                                    <img class="w-1/2 mx-auto" src="https://www.charika-eco.ma/mosaic_img/packs-illustration-1.png" alt="Pack Silver">
                                </div>
                                <div class="mb-4">
                                    <span class="text-4xl font-bold text-black">1300</span>
                                    <span class="text-xl font-medium text-black">DH-TTC</span>
                                </div>
                                <ul class="space-y-4 text-black">
                                    <li class="flex items-center">
                                    <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>10 Annonces</span>
                                    </li>
                                    <li class="flex items-center">
                                    <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Prix unitaire : 130 DH-TTC</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="bg-[#FFF7FC] rounded-lg shadow-lg p-6 relative overflow-hidden h-full">

                                <div class="mb-4 flex items-center justify-between">
                                    <h3 class="text-2xl font-semibold text-black border-b-4 border-indigo-400 w-fit">Pack Gold</h3>
                                    <label for="" class="text-black flex space-x-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right text-black w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg> <input class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-900 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cursor-pointer" type="radio" name="pack_id" value="2"></label>
                                </div>
                                <div class="mb-4">
                                    <img class="w-1/2 mx-auto" src="https://www.charika-eco.ma/mosaic_img/packs-illustration-2.png" alt="Pack Gold">
                                </div>
                                <div class="mb-4">
                                    <span class="text-4xl font-bold text-black">2400</span>
                                    <span class="text-xl font-medium text-black">DH-TTC</span>
                                </div>
                                <ul class="space-y-4 text-black">
                                    <li class="flex items-center">
                                    <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>20 annonces</span>
                                    </li>
                                    <li class="flex items-center">
                                    <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Prix unitaire : 120 DH-TTC</span>
                                    </li>
                                </ul>

                            </div>

                            <div class="bg-[#FFF7FC] rounded-lg shadow-lg p-6 relative overflow-hidden h-full">

                                <div class="mb-4 flex items-center justify-between">
                                    <h3 class="text-2xl font-semibold text-black border-b-4 border-indigo-400 w-fit">Pack Platinium</h3>
                                    <label for="" class="text-black flex space-x-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-arrow-right text-black w-6 h-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6 6m6-6l-6-6"/></svg> <input class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-900 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cursor-pointer" type="radio" name="pack_id" value="3"></label>
                                </div>
                                <div class="mb-4">
                                    <img class="w-1/2 mx-auto" src="https://www.charika-eco.ma/mosaic_img/packs-illustration-3.png" alt="Pack Platinium">
                                </div>
                                <div class="mb-4">
                                    <span class="text-4xl font-bold text-black">5000</span>
                                    <span class="text-xl font-medium text-black">DH-TTC</span>
                                </div>
                                <ul class="space-y-4 text-black">
                                    <li class="flex items-center">
                                    <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>50 annonces</span>
                                    </li>
                                    <li class="flex items-center">
                                    <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Prix unitaire : 100 DH-TTC</span>
                                    </li>

                                </ul>


                            </div>
                        </div>
                    </div>
                </section>
                <h1 class="text-3xl mb-4 font-semibold text-center">Choisissez un moyen de paiement ci-dessous</h1>
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-4 rounded-2xl text-white">

                            <div class="flex flex-col space-y-4 mb-4">
                                <div class=""><input required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="mode_paiement" value="Carte Bancaire"><label class="ms-2 text-sm font-medium  dark:text-gray-300">Carte Bancaire</label></div>
                                <div class=""><input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="mode_paiement" value="Paypal"><label class="ms-2 text-sm font-medium  dark:text-gray-300">Paypal</label></div>
                            </div>
                            <div class="mb-4">
                                <label for="" class="block mb-2 text-sm font-medium text-white">Adreese de facturation</label>
                                <input name="adresse_facturation" type="text" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                <button type="submit" class="bg-green-500 hover:bg-green-400 p-3 rounded-xl text-md sm:text-lg font-medium text-white w-full mt-4">PROCÉDEZ AU PAIEMENT</button>
                            </div>
                    </div>
                    <div>
                        <img src="{{asset('/images/payment.png')}}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="border-t-2">
        @include('user.components.footer')
    </div>

@endsection

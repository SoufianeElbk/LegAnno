<section class="mb-12 p-4" id="packs">
    <div class="mx-auto max-w-screen-xl container">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-white sm:text-5xl">PACKS PROFESSIONNELS</h2>
            <h2 class="text-2xl font-bold text-white sm:text-2xl">Offres pour publication multiple</h2>
        </div>
        <div class="text-center mb-12">
            <p class="mt-4 text-md text-purple-100 text-justify font-medium">
                Vous êtes un professionnel des publications juridiques, expert du droit et du chiffre (cabinet comptable, avocat, huissier, juriste, notaire, ...), vous publiez régulièrement des annonces légales ?
            </p>
            <p class="mt-4 text-md text-purple-100 text-justify font-medium">
                LegAnno vous propose de bénéficier d'un système de recharge d'annonces légales grâce aux différents Packs disponibles et de bénéficier de tarifs avantageux.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            @foreach ($packs as $pack)            
            <div class="bg-[#FFF7FC] rounded-lg shadow-lg p-6 relative overflow-hidden h-full">

                <div class="mb-4">
                    <h3 class="text-2xl font-semibold text-black border-b-4 border-indigo-400 w-fit">{{$pack->nom}}</h3>
                </div>
                <div class="mb-4">
                    <img class="w-1/2 mx-auto" src="{{asset('/images/packs/'.$pack->image)}}" alt="Pack Silver">
                </div>
                <div class="mb-4">
                    <span class="text-4xl font-bold text-black">{{$pack->prix}}</span>
                    <span class="text-xl font-medium text-black">DH-TTC</span>
                </div>
                <ul class="mb-4 space-y-4 text-black">
                    <li class="flex items-center">
                    <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>{{$pack->nombre_annonces}} Annonces</span>
                    </li>
                    <li class="flex items-center">
                    <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Prix unitaire : {{$pack->prix / $pack->nombre_annonces}} DH-TTC</span>
                    </li>
                </ul>
                <a href="{{Route('packs.create')}}" class="flex justify-center space-x-2 w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-cart" width="24"><circle xmlns="http://www.w3.org/2000/svg" cx="7.5" cy="18.5" r="1.5" fill="currentColor"/><circle xmlns="http://www.w3.org/2000/svg" cx="16.5" cy="18.5" r="1.5" fill="currentColor"/><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l.6 3m0 0L7 15h10l2-7H5.6z"/></svg>
                    <span>Commander</span> 
                </a>
            </div>
            @endforeach
            {{-- <div class="bg-[#FFF7FC] rounded-lg shadow-lg p-6 relative overflow-hidden h-full">

                <div class="mb-4">
                    <h3 class="text-2xl font-semibold text-black border-b-4 border-indigo-400 w-fit">Pack Gold</h3>
                </div>
                <div class="mb-4">
                    <img class="w-1/2 mx-auto" src="https://www.charika-eco.ma/mosaic_img/packs-illustration-2.png" alt="Pack Gold">
                </div>
                <div class="mb-4">
                    <span class="text-4xl font-bold text-black">2400</span>
                    <span class="text-xl font-medium text-black">DH-TTC</span>
                </div>
                <ul class="mb-4 space-y-4 text-black">
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
                <a href="{{Route('packs.create')}}" class="flex justify-center space-x-2 w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-cart" width="24"><circle xmlns="http://www.w3.org/2000/svg" cx="7.5" cy="18.5" r="1.5" fill="currentColor"/><circle xmlns="http://www.w3.org/2000/svg" cx="16.5" cy="18.5" r="1.5" fill="currentColor"/><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l.6 3m0 0L7 15h10l2-7H5.6z"/></svg>
                    <span>Commander</span>
                </a>
            </div>
            
            <div class="bg-[#FFF7FC] rounded-lg shadow-lg p-6 relative overflow-hidden h-full">

                <div class="mb-4">
                    <h3 class="text-2xl font-semibold text-black border-b-4 border-indigo-400 w-fit">Pack Platinium</h3>
                </div>
                <div class="mb-4">
                    <img class="w-1/2 mx-auto" src="https://www.charika-eco.ma/mosaic_img/packs-illustration-3.png" alt="Pack Platinium">
                </div>
                <div class="mb-4">
                    <span class="text-4xl font-bold text-black">5000</span>
                    <span class="text-xl font-medium text-black">DH-TTC</span>
                </div>
                <ul class="mb-4 space-y-4 text-black">
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
                <a href="{{Route('packs.create')}}" class="flex justify-center space-x-2 w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-cart" width="24"><circle xmlns="http://www.w3.org/2000/svg" cx="7.5" cy="18.5" r="1.5" fill="currentColor"/><circle xmlns="http://www.w3.org/2000/svg" cx="16.5" cy="18.5" r="1.5" fill="currentColor"/><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l.6 3m0 0L7 15h10l2-7H5.6z"/></svg>
                    <span>Commander</span>
                </a>

            </div> --}}
        </div>
    </div>
</section>

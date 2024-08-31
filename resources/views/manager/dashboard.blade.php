<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Manager Dashboard</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="font-[Poppins]">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
            class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

        <div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
            class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex justify-center items-center">
                    <a class="w-3/4" href="{{ Route('manager.dashboard') }}"><img
                            src="{{ asset('/images/logo2.png') }}" alt=""></a>
                </div>
            </div>

            <nav class="mt-10">
                <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="{{Route('manager.dashboard')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-dashboard size-6"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v5a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm10 0a1 1 0 011-1h4a1 1 0 011 1v2a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zm10-3a1 1 0 011-1h4a1 1 0 011 1v6a1 1 0 01-1 1h-4a1 1 0 01-1-1v-6z"/></svg>
                    <span class="mx-3 text-sm">Dashboard</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="{{Route('manager.annonces-traitees')}}">
                    <svg class="size-6" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.5 8L11.5001 22M18.6383 3.37924L21.9348 15.6583C22.2932 16.9933 21.1187 18.2381 19.762 17.961L17.0415 17.4054C14.014 16.787 10.8839 16.8807 7.89906 17.679C5.40053 18.3472 2.83037 16.8599 2.16089 14.3662C1.49142 11.8725 2.97216 9.30181 5.47068 8.63362C8.45556 7.83537 11.2132 6.35446 13.5253 4.30818L15.603 2.46935C16.6391 1.55235 18.2799 2.0442 18.6383 3.37924Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>

                    <span class="mx-3 text-sm">Annonces traitées</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="{{Route('manager.annonces-en-attente')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>

                    <span class="mx-3 text-sm">Annonces en attente</span>
                </a>
            </nav>
        </div>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <div class="relative mx-4 lg:mx-0">
                        Bonjour <span class="font-bold">{{ Auth::guard('manager')->user()->nom }}</span>
                    </div>
                </div>

                <div class="flex items-center">
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = ! dropdownOpen"
                            class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                        </button>

                        <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

                        <div x-cloak x-show="dropdownOpen"
                            class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
                            <a href="{{Route('manager.profile.edit')}}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                            <form method="POST" action="{{ route('manager.logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">
                                @csrf
                                <button type="submit" class="w-full text-left">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    <h3 class="text-gray-700 text-3xl font-medium">Dashboard</h3>

                    <div class="mt-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 -mx-6">
                            <div class="w-full px-6">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white h-full">
                                    <div class="p-3 rounded-full bg-indigo-500">
                                        <svg class="size-8 text-white" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 8L11.5001 22M18.6383 3.37924L21.9348 15.6583C22.2932 16.9933 21.1187 18.2381 19.762 17.961L17.0415 17.4054C14.014 16.787 10.8839 16.8807 7.89906 17.679C5.40053 18.3472 2.83037 16.8599 2.16089 14.3662C1.49142 11.8725 2.97216 9.30181 5.47068 8.63362C8.45556 7.83537 11.2132 6.35446 13.5253 4.30818L15.603 2.46935C16.6391 1.55235 18.2799 2.0442 18.6383 3.37924Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>

                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">{{Auth::guard('manager')->user()->annonces_legales()->count()}}</h4>
                                        <div class="text-gray-500 text-sm">Annonces traitées</div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full px-6">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white h-full">
                                    <div class="p-3 rounded-full bg-orange-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-white"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                                    </div>

                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">{{App\Models\Annonce_legale::where('statut', '=', 'en attente de validation')->count()}}</h4>
                                        <div class="text-gray-500 text-sm">Annonces en attente</div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full px-6">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white h-full">
                                    <div class="p-3 rounded-full bg-green-500 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" class="humbleicons hi-check size-8 text-white">
                                            <path xmlns="http://www.w3.org/2000/svg" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 14l4 4L19 8" />
                                        </svg>
                                    </div>

                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">5</h4>
                                        <div class="text-gray-500 text-sm">Annonces approuvées</div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full px-6">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white h-full">
                                    <div class="p-3 rounded-full bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" class="humbleicons hi-times size-8 text-white">
                                            <g xmlns="http://www.w3.org/2000/svg" stroke="currentColor"
                                                stroke-linecap="round" stroke-width="2">
                                                <path d="M6 18L18 6M18 18L6 6" />
                                            </g>
                                        </svg>
                                    </div>

                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">2</h4>
                                        <div class="text-gray-500 text-sm">Annonces rejetées</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-gray-700 text-xl font-medium mt-8">Annonces en attente</h3>
                    <h6 class="text-blue-700 text-sm font-light"><a href="{{Route('manager.annonces-en-attente')}}">Voir tout</a></h6>
                    <div class="flex flex-col mt-4">
                        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                            <div
                                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                                <table class="min-w-full">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">id</th>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date création</th>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date paiement</th>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Société</th>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Type annonce</th>
                                            {{-- <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Type annonce</th> --}}
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                        </tr>
                                    </thead>

                                    <tbody class="bg-white">
                                        @forelse ($annonces_en_attente as $annonce_en_attente)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="flex items-center">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">{{$annonce_en_attente->id}}</div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">{{$annonce_en_attente->date_creation}}</div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">{{$annonce_en_attente->date_paiement}}</div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">
                                                    @if($annonce_en_attente->creation_sarl_sarlau_snc_scs_sca)
                                                        {{$annonce_en_attente->creation_sarl_sarlau_snc_scs_sca->denomination}}
                                                    @elseif($annonce_en_attente->creation_societe_anonyme_simplifiee_sas)
                                                        {{$annonce_en_attente->creation_societe_anonyme_simplifiee_sas->denomination}}
                                                    @elseif($annonce_en_attente->creation_societe_anonyme_sa)
                                                        {{$annonce_en_attente->creation_societe_anonyme_sa->denomination}}
                                                    @elseif($annonce_en_attente->dissolution)
                                                        {{$annonce_en_attente->dissolution->denomination}}
                                                    @elseif($annonce_en_attente->cloture_liquidation)
                                                        {{$annonce_en_attente->cloture_liquidation->denomination}}
                                                    @elseif($annonce_en_attente->continuite_activite)
                                                        {{$annonce_en_attente->continuite_activite->denomination}}
                                                    @elseif($annonce_en_attente->transfert_siege_social)
                                                        {{$annonce_en_attente->transfert_siege_social->denomination}}
                                                    @elseif($annonce_en_attente->changement_objet_social)
                                                        {{$annonce_en_attente->changement_objet_social->denomination}}
                                                    @elseif($annonce_en_attente->changement_denomination)
                                                        {{$annonce_en_attente->changement_denomination->denomination}}
                                                    @elseif($annonce_en_attente->transformation_forme_sociale)
                                                        {{$annonce_en_attente->transformation_forme_sociale->denomination}}
                                                    @elseif($annonce_en_attente->reduction_capital)
                                                        {{$annonce_en_attente->reduction_capital->denomination}}
                                                    @elseif($annonce_en_attente->augmentation_capital)
                                                        {{$annonce_en_attente->augmentation_capital->denomination}}
                                                    @endif
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">{{$annonce_en_attente->type_annonce}}</div>
                                            </td>

                                            {{-- <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                            </td> --}}

                                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                <a href="{{Route('manager.annonce-legale.create', $annonce_en_attente->id)}}" class="text-indigo-600 hover:text-indigo-900 flex flex-col items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                                                    <span>Voir</span>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- <div class="mt-4 pagination">
                            {{ $annonces_en_attente->links() }}
                        </div> --}}
                    </div>

                    <h3 class="text-gray-700 text-xl font-medium mt-8">Annonces traitées</h3>
                    <h6 class="text-blue-700 text-sm font-light"><a href="{{Route('manager.annonces-traitees')}}">Voir tout</a></h6>
                    <div class="flex flex-col mt-4">
                        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                            <div
                                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                                <table class="min-w-full">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">id</th>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date création</th>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date paiement</th>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Société</th>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Type annonce</th>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Décision</th>
                                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                        </tr>
                                    </thead>

                                    <tbody class="bg-white">
                                        @forelse ($annonces_traitees as $annonce_traitee)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="flex items-center">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">{{$annonce_traitee->id}}</div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">{{$annonce_traitee->date_creation}}</div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">{{$annonce_traitee->date_paiement}}</div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">
                                                    @if($annonce_traitee->creation_sarl_sarlau_snc_scs_sca)
                                                        {{$annonce_traitee->creation_sarl_sarlau_snc_scs_sca->denomination}}
                                                    @elseif($annonce_traitee->creation_societe_anonyme_simplifiee_sas)
                                                        {{$annonce_traitee->creation_societe_anonyme_simplifiee_sas->denomination}}
                                                    @elseif($annonce_traitee->creation_societe_anonyme_sa)
                                                        {{$annonce_traitee->creation_societe_anonyme_sa->denomination}}
                                                    @elseif($annonce_traitee->dissolution)
                                                        {{$annonce_traitee->dissolution->denomination}}
                                                    @elseif($annonce_traitee->cloture_liquidation)
                                                        {{$annonce_traitee->cloture_liquidation->denomination}}
                                                    @elseif($annonce_traitee->continuite_activite)
                                                        {{$annonce_traitee->continuite_activite->denomination}}
                                                    @elseif($annonce_traitee->transfert_siege_social)
                                                        {{$annonce_traitee->transfert_siege_social->denomination}}
                                                    @elseif($annonce_traitee->changement_objet_social)
                                                        {{$annonce_traitee->changement_objet_social->denomination}}
                                                    @elseif($annonce_traitee->changement_denomination)
                                                        {{$annonce_traitee->changement_denomination->denomination}}
                                                    @elseif($annonce_traitee->transformation_forme_sociale)
                                                        {{$annonce_traitee->transformation_forme_sociale->denomination}}
                                                    @elseif($annonce_traitee->reduction_capital)
                                                        {{$annonce_traitee->reduction_capital->denomination}}
                                                    @elseif($annonce_traitee->augmentation_capital)
                                                        {{$annonce_traitee->augmentation_capital->denomination}}
                                                    @endif
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">{{$annonce_traitee->type_annonce}}</div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                                    @if($annonce_traitee->statut == 'validée')
                                                        bg-green-100 text-green-800
                                                    @elseif($annonce_traitee->statut == 'annulée')
                                                        bg-red-100 text-red-800
                                                    @endif">
                                                    {{ucfirst($annonce_traitee->statut)}}
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                <a href="{{Route('manager.annonce-legale.create', $annonce_traitee->id)}}" class="text-indigo-600 hover:text-indigo-900 flex flex-col items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                                                    <span>Voir</span>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6">Sans</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- <div class="mt-4 pagination">
                            {{ $annonces_traitees->links() }}
                        </div> --}}
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>

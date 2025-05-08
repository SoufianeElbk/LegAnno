@extends('user.layouts.base')
@section('title' , 'Mes annonces')
@section('content')
    <div class="container text-white mx-auto p-6">
        @include('user.components.nav')
        <div class="mt-24">
            <div class="mx-auto max-w-screen-xl container">
                @session('success')
                        <div class="bg-green-200 px-6 py-4 mx-2 mb-4 rounded-md text-lg flex items-center w-fit">
                            <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                                <path fill="currentColor"
                                    d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                                </path>
                            </svg>
                            <span class="text-green-800">{{session('success')}}</span>
                        </div>
                    @endsession
                <div class="mb-8">
                    <h1 class="text-3xl mb-4 font-bold">Vos annonces légales</h1>
                    <p class="text-md">
                        Ci-dessous, retrouvez l'ensemble des annonces légales que vous avez passées en utilisant notre service de publication d'annonces légales en ligne.
                    </p>
                </div>
                <div class="overflow-x-auto">
                    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-2 border-gray-200">
                        <table class="text-xs min-w-full">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">#</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date création</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date paiement</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date validation</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date publication</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Denomination</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Type annonce</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Paiement</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($annonces as $annonce)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-sm leading-5 text-gray-900">{{$annonce->id}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">
                                            {{ $annonce->date_creation ? \Carbon\Carbon::parse($annonce->date_creation)->format('d/m/Y H:i:s') : '-' }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">
                                            {{ $annonce->date_paiement ? \Carbon\Carbon::parse($annonce->date_paiement)->format('d/m/Y H:i:s') : '-' }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">
                                            {{ $annonce->date_validation ? \Carbon\Carbon::parse($annonce->date_validation)->format('d/m/Y H:i:s') : '-' }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">
                                            {{ $annonce->date_publication ? \Carbon\Carbon::parse($annonce->date_publication)->format('d/m/Y') : '-' }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">
                                        @if($annonce->creation_sarl_sarlau_snc_scs_sca)
                                            {{$annonce->creation_sarl_sarlau_snc_scs_sca->denomination}}
                                        @elseif($annonce->creation_societe_anonyme_simplifiee_sas)
                                            {{$annonce->creation_societe_anonyme_simplifiee_sas->denomination}}
                                        @elseif($annonce->creation_societe_anonyme_sa)
                                            {{$annonce->creation_societe_anonyme_sa->denomination}}
                                        @elseif($annonce->dissolution)
                                            {{$annonce->dissolution->denomination}}
                                        @elseif($annonce->cloture_liquidation)
                                            {{$annonce->cloture_liquidation->denomination}}
                                        @elseif($annonce->continuite_activite)
                                            {{$annonce->continuite_activite->denomination}}
                                        @elseif($annonce->transfert_siege_social)
                                            {{$annonce->transfert_siege_social->denomination}}
                                        @elseif($annonce->changement_objet_social)
                                            {{$annonce->changement_objet_social->denomination}}
                                        @elseif($annonce->changement_denomination)
                                            {{$annonce->changement_denomination->denomination}}
                                        @elseif($annonce->transformation_forme_sociale)
                                            {{$annonce->transformation_forme_sociale->denomination}}
                                        @elseif($annonce->reduction_capital)
                                            {{$annonce->reduction_capital->denomination}}
                                        @elseif($annonce->augmentation_capital)
                                            {{$annonce->augmentation_capital->denomination}}
                                        @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{$annonce->type_annonce}}</div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-xl
                                            @if($annonce->statut == 'validée')
                                                bg-green-100 text-green-800
                                            @elseif($annonce->statut == 'annulée')
                                                bg-red-100 text-red-800
                                            @elseif($annonce->statut == 'en attente de validation')
                                                bg-orange-100 text-orange-800
                                            @else bg-gray-100 text-gray-800
                                            @endif">
                                            {{ucfirst($annonce->statut)}}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">
                                            @if($annonce->paiement == 1)
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-check size-8 text-green-500"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 14l4 4L19 8"/></svg>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex space-x-4 items-center justify-center">
                                            <a href="{{Route('annonces-legales-paiement', $annonce->id)}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500 cursor-pointer"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg></a>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500 cursor-pointer"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-4 pagination">
                    {{ $annonces->links() }}
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    <div class="bg-white">
        @include('user.components.footer')
    </div>

@endsection

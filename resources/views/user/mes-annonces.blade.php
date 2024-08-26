@extends('user.layouts.base')
@section('title' , 'Mes annonces')
@section('content')
    <div class="container text-white mx-auto p-6">
        @include('user.components.nav')
        <div class="">
            <div class="mx-auto max-w-screen-xl container">
                <div class="mb-8">
                    <h1 class="text-4xl mb-4 font-bold">Vos annonces légales</h1>
                    <p class="text-md">
                        Ci-dessous, retrouvez l'ensemble des annonces légales que vous avez passées en utilisant notre service de publication d'annonces légales en ligne.
                    </p>
                </div>
                <div class="overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">#</th>
                            <th scope="col" class="px-6 py-3">Date création</th>
                            <th scope="col" class="px-6 py-3">Date paiement</th>
                            <th scope="col" class="px-6 py-3">Date validation</th>
                            <th scope="col" class="px-6 py-3">Date publication</th>
                            <th scope="col" class="px-6 py-3">Denomination</th>
                            <th scope="col" class="px-6 py-3">Type annonce</th>
                            <th scope="col" class="px-6 py-3">Statut</th>
                            <th scope="col" class="px-6 py-3">Paiement</th>
                            <th scope="col" class="px-6 py-3">Facture</th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                        @foreach ($annonces as $annonce)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$annonce->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$annonce->date_creation}}
                            </td>
                            <td class="px-6 py-4">
                                {{$annonce->date_paiement}}
                            </td>
                            <td class="px-6 py-4">
                                {{$annonce->date_validation}}
                            </td>
                            <td class="px-6 py-4">
                                {{$annonce->date_publication}}
                            </td>
                            <td class="px-6 py-4">
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
                            </td>
                            <td class="px-6 py-4">
                                {{$annonce->type_annonce}}
                            </td>
                            <td class="px-6 py-4">
                                {{$annonce->statut}}
                            </td>
                            <td class="px-6 py-4">
                                {{$annonce->paiement}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center"><svg class="cursor-pointer" xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><title>document_2_line</title><g id="document_2_line" fill='none' fill-rule='nonzero'><path d='M24 0v24H0V0h24ZM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01-.184-.092Z'/><path fill='#09244BFF' d='M13.586 2A2 2 0 0 1 15 2.586L19.414 7A2 2 0 0 1 20 8.414V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2ZM12 4H6v16h12V10h-4.5A1.5 1.5 0 0 1 12 8.5V4Zm3 10a1 1 0 1 1 0 2H9a1 1 0 1 1 0-2h6Zm-5-4a1 1 0 1 1 0 2H9a1 1 0 1 1 0-2Zm4-5.586V8h3.586L14 4.414Z'/></g></svg></div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-4 items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500 cursor-pointer"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500 cursor-pointer"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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

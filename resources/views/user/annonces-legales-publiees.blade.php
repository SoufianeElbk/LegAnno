@extends('user.layouts.base')
@section('title' , 'Annonces publiées')
@section('content')
    <div class="container text-white mx-auto p-6">
        @include('user.components.nav')
        <div class="my-12">
            <div class="mx-auto max-w-screen-xl container">
                <div class="mb-8">
                    <h1 class="text-2xl my-4 font-bold">Consultez les annonces légales</h1>
                   
                </div>
                <div class="overflow-x-auto">
                    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">id</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date publication</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Société</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Type annonce</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Annonce</th>
                                    {{-- <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th> --}}
                                </tr>
                            </thead>

                            <tbody class="bg-white">
                                @forelse ($annonces as $annonce)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="text-sm leading-5 font-medium text-gray-900">{{$annonce->id}}</div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ \Carbon\Carbon::parse($annonce->date_publication)->format('d/m/Y') }}</div>
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

                                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="{{asset('/annonces/annonce_'.$annonce->id.'.pdf')}}"><svg class="cursor-pointer" xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><title>Annonce {{$annonce->id}}</title><g id="document_2_line" fill='none' fill-rule='nonzero'><path d='M24 0v24H0V0h24ZM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01-.184-.092Z'/><path fill='#09244BFF' d='M13.586 2A2 2 0 0 1 15 2.586L19.414 7A2 2 0 0 1 20 8.414V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2ZM12 4H6v16h12V10h-4.5A1.5 1.5 0 0 1 12 8.5V4Zm3 10a1 1 0 1 1 0 2H9a1 1 0 1 1 0-2h6Zm-5-4a1 1 0 1 1 0 2H9a1 1 0 1 1 0-2Zm4-5.586V8h3.586L14 4.414Z'/></g></svg></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center px-6 py-4 whitespace-nowrap text-sm leading-5 font-medium">Aucune annonce disponible</td>
                                </tr>
                                @endforelse
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

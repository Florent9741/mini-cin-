@extends('layouts.app')

@section('main')
    @include('includes.ajouter')
    <div class="bg-white">
        <div class="overflow-x-auto border-x border-t">
            <table class="table-auto w-full">
                <thead class="border-b">
                    <tr class="bg-red-100">
                        <th class="text-left p-4 font-medium">
                            Nom du Films
                        </th>
                        <th class="text-left p-4 font-medium">
                            Durée
                        </th>
                        <th class="text-left p-4 font-medium">
                            Langue
                        </th>
                        <th class="text-left p-4 font-medium">
                            Nom du réalisateur
                        </th>
                        <th class="text-left p-4 font-medium">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($films as $film)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4">
                                <p> <a href="/film/{{ $film->id }}">{{ $film->nom }}</a></p>
                            </td>
                            <td class="p-4">
                                <p> <a>{{ $film->durée }}</a></p>
                            </td>
                            <td class="p-4">
                                <p> <a>     {{ $film->langue }}</a></p>
                            </td>
                            <td class="p-4">
                                <p> <a>{{ $film->realisateur->nom }} {{ $film->realisateur->prenom}}</a></p>
                            </td>
                            <td class="p-4">
                                <div class="flex flex-row">
                                    @include('includes.boutton')
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

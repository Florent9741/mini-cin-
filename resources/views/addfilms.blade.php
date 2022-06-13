@extends('layouts.app')


@section('main')
<form action="'addfilms'" method="post">
    @csrf
    <div>
        <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
            <div class="py-12 p-10 bg-white rounded-xl">
                <div class="mb-6">
                    <div>
                        <h1 class="mr-4 text-gray-700 font-bold inline-block mb-6 text-2xl ">Ajouter un Film</h1>
                    </div>
                    <div>
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="extrait">Réalisateur</label>
                        <select type="text" name="realisateur"
                            class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded"
                            placeholder="Titre du film" />
                        @foreach ($realisateurs as $realisateur)
                            <option value="{{$realisateur->id}}">{{$realisateur->nom}} {{$realisateur->prenom}}</option>
                        @endforeach
                        </select>
                    </div>

                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="titre">Nom</label>
                    <input type="text" name="nom"
                        class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded"
                        placeholder="Titre du film" />
                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="extrait">Description</label>
                    <textarea name="description" cols="30" rows="5"
                        class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded"
                        placeholder="Extrait du film"></textarea>


                    <button type="submit"
                        class="w-full mt-6 text-indigo-50 font-bold bg-indigo-600 py-3 rounded-md hover:bg-indigo-500 transition duration-300">Ajouter</button>

                </div>
            </div>
        </div>

    </div>
</form>
@endsection

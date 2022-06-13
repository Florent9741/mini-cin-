<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Films;
use App\Models\Realisateurs;
use App\Models\Salles;


class FilmsController extends Controller
{
    public function getAll()
    {
        $films = Films::with('realisateur', 'salle')->get();
        $realisateurs = Realisateurs::All();
        $salles = Salles::All();

        return view('films', [
            'films' => $films,
            'realisateurs' => $realisateurs,
            'salles' => $salles,

        ]);
    }


    public function show($id)
    {

        $film = Films::find($id);
        // (dd($film));

        if (isset($film)) {
            return view('film', [
                'film' => $film,
            ]);
        } else {
            return redirect()->route('films');
        }
    }





    public function delete($id)
    {
        $film = Films::where('id', '=', $id);
        $film->delete();
        return redirect()->route('Films');
    }

    public function add()
    {
    }
}

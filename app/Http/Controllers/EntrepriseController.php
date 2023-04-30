<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:entreprises,email',
        ]);

        $entreprise = new Entreprise();
        $entreprise->nom = $validatedData['nom'];
        $entreprise->adresse = $validatedData['adresse'];
        $entreprise->ville = $validatedData['ville'];
        $entreprise->pays = $validatedData['pays'];
        $entreprise->telephone = $validatedData['telephone'];
        $entreprise->email = $validatedData['email'];
        $entreprise->save();

        return redirect()->route('entreprises.index');
    }
}

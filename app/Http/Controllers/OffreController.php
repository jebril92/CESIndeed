<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;

class OffreController extends Controller
{
    public function create()
    {
        return view('offres.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'entreprise' => 'required|max:255',
            'ville' => 'required|max:255',
            'pays' => 'required|max:255',
            'categorie' => 'required',
            'type_contrat' => 'required',
            'salaire' => 'required|numeric|min:0',
            'description' => 'required',
            'niveau_etudes' => 'required',
            'competence' => 'required',
            'site' => 'required',
            'email' => 'required',
            'aentreprise' => 'required',
            'nentreprise' => 'required'
        ]);

        $offre = Offre::create([
            'titre' => $validatedData['titre'],
            'entreprise' => $validatedData['entreprise'],
            'ville' => $validatedData['ville'],
            'pays' => $validatedData['pays'],
            'categorie' => $validatedData['categorie'],
            'type_contrat' => $validatedData['type_contrat'],
            'salaire' => $validatedData['salaire'],
            'description' => $validatedData['description'],
            'niveau_etudes' => $validatedData['niveau_etudes'],
            'competence' => $validatedData['competence'],
            'site' => $validatedData['site'],
            'email' => $validatedData['email'],
            'aentreprise' => $validatedData['aentreprise'],
            'nentreprise' => $validatedData['nentreprise']
        ]);

        return redirect()->route('emplois')
                        ->with('success', 'L\'offre a bien été créée.');
    }

    public function show($id)
    {
        $offre = Offre::find($id);
        return view('offres.show', compact('offre'));
    }

    public function index()
    {
        $offres = Offre::all();
        return view('offres.index', compact('offres'));
    }

    public function postulerOffre($id)
    {
        $offre = Offre::findOrFail($id);
        $offre->postulants()->attach(Auth::id());

        return redirect()->back()->with('success', 'Vous avez postulé à l\'offre avec succès.');
    }

    public function postuler(Request $request, $id)
{
    $offre = Offre::find($id);
    $offre->nombre_postulants += 1;
    $offre->save();
    return redirect()->back();
}

public function destroy($id)
{
    $offre = Offre::findOrFail($id);
    $offre->delete();

    return redirect()->route('offres.index')->with('success', 'L\'offre a bien été supprimée.');
}




    }

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\EtudiantController;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = User::where('user_type', 'etudiant')->get();
        return view('admin.etudiants', compact('etudiants'));
    }



    public function update(Request $request, $id)
        {
            $etudiant = Etudiant::findOrFail($id);
            $etudiant->name = $request->input('name');
            $etudiant->email = $request->input('email');
            $etudiant->save();
            return response()->json(['success' => true]);
        }

        
    public function destroy($id) // FONCTION A BIEN REFAIRE CAR QUAND ON SUPPRIME DANS ETUDIANT SA AMENE VERS PILOTES (separer les fonctions)
        {
            $etudiant = User::find($id);

            if ($etudiant) {
                $etudiant->delete();
                return redirect()->route('admin.etudiants.index')->with('success', 'L\'étudiant a été supprimé avec succès.');
            }
    
            return redirect()->route('admin.etudiants.index')->with('error', 'L\'étudiant n\'a pas été trouvé.');
        }

        



}

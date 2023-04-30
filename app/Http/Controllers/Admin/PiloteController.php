<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PiloteController extends Controller
{
    public function index()
    {
        $pilotes = User::where('user_type', 'pilote')->get();
        return view('admin.pilotes', compact('pilotes'));
    }

    public function destroy($id)
    {
        $pilote = User::find($id);

        if ($pilote) {
            $pilote->delete();
            return redirect()->route('admin.pilotes')->with('success', 'Le pilote a été supprimé avec succès.');
        }

        return redirect()->route('admin.pilotes')->with('error', 'Le pilote n\'a pas été trouvé.');
    }
}

<?php

use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\Postulation;

Route::post('/enregistrerpostulation/{id}', function (Request $request, $id) {
    $offre = Offre::find($id);
    $offre->nombre_postulants += 1;
    $offre->save();

    $postulation = new Postulation;
    $postulation->offre_id = $offre->id;
    $postulation->user_id = auth()->user()->id; // Vous pouvez adapter cela en fonction de votre système d'authentification
    $postulation->save();

    return redirect()->back();
});

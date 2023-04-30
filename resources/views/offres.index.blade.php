@extends('layouts.app')

@section('content')
    <h1>Liste des offres</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Entreprise</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Catégorie</th>
                <th>Type de contrat</th>
                <th>Salaire</th>
                <th>Description</th>
                <th>Niveau d'études</th>
                <th>Compétence(s)</th>
                <th>Site internet</th>
                <th>Email</th>
                <th>Nombre de postulants</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offres as $offre)
                <tr>
                    <td>{{ $offre->titre }}</td>
                    <td>{{ $offre->entreprise }}</td>
                    <td>{{ $offre->ville }}</td>
                    <td>{{ $offre->pays }}</td>
                    <td>{{ $offre->categorie }}</td>
                    <td>{{ $offre->type_contrat }}</td>
                    <td>{{ $offre->salaire }} €</td>
                    <td>{{ $offre->description }}</td>
                    <td>{{ $offre->niveau_etudes }}</td>
                    <td>{{ $offre->competence }}</td>
                    <td>{{ $offre->site }}</td>
                    <td>{{ $offre->email }}</td>
                    <td>{{ $offre->nombre_postulants }}</td>
                    <td>
                        <form action="{{ route('offres.destroy', $offre->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

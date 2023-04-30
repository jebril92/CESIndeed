<!DOCTYPE html>
<html>
<head>
    <title>CESIndeed | Création d'offre</title>
    <link rel="icon" href="{{ asset('img/icon/main.ico') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @include('navbar')
    <div class="container my-5">
        <h1 class="mb-4">‎ </h1>
        <form method="post" action="{{ route('traitement_postuler_offre') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="titre" class="form-label">Titre de l'offre :</label>
                        <input type="text" class="form-control" name="titre" id="titre" required>
                    </div>
                    <div class="mb-3">
                        <label for="ville" class="form-label">Ville :</label>
                        <input type="text" class="form-control" name="ville" id="ville" required>
                    </div>
                    <div class="mb-3">
                        <label for="pays" class="form-label">Pays :</label>
                        <input type="text" class="form-control" name="pays" id="pays" required>
                    </div>
                    <div class="mb-3">
                        <label for="entreprise" class="form-label">Nom Entreprise :</label>
                        <input type="text" class="form-control" name="entreprise" id="entreprise" required>
                    </div>
                    <div class="mb-3">
                        <label for="aentreprise" class="form-label">Adresse Entreprise :</label>
                        <input type="text" class="form-control" name="aentreprise" id="aentreprise" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="categorie" class="form-label">Catégorie :</label>
                        <select class="form-select" name="categorie" id="categorie" required>
                            <option value="informatique">Informatique</option>
                            <option value="s3e">S3E</option>
                            <option value="btp">BTP</option>
                            <option value="generaliste">Généraliste</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="type_contrat" class="form-label">Type de contrat :</label>
                        <select class="form-select" name="type_contrat" id="type_contrat" required>
                            <option value="stage">Stage</option>
                            <option value="alternance">Alternance</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="niveau_etudes" class="form-label">Niveau d'études :</label>
                        <select class="form-select" name="niveau_etudes" id="niveau_etudes" required>
                            <option value="Bac+2">Bac+2</option>
                            <option value="Bac+3">Bac+3</option>
                            <option value="Bac+4">Bac+4</option>
                            <option value="Bac+5">Bac+5</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nentreprise" class="form-label">Numéro Entreprise :</label>
                        <div class="input-group">
                            <span class="input-group-text">+33</span>
                            <input type="tel" class="form-control" name="nentreprise" id="nentreprise" minlength="9" maxlength="9" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="salaire" class="form-label">Salaire :</label>
                        <div class="input-group">
                        <input type="number" class="form-control" name="salaire" id="salaire" min="0" required>
                        <span class="input-group-text">€</span>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="mb-3">
                        <label for="competence" class="form-label">Compétence(s) :</label>
                        <input type="text" class="form-control" name="competence" id="competence" required>
                        </div>
                        <div class="mb-3">
                        <label for="site" class="form-label">Site Internet :</label>
                        <input type="text" class="form-control" name="site" id="site" required>
                        </div>
                        <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="text" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="mb-3">
                        <label for="description" class="form-label">Description :</label>
                        <textarea class="form-control" name="description" id="description" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Créer</button>
                        </form>
                        </div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

                        </body>
                        </html>

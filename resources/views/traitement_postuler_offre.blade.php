<?php

// Connexion à la base de données
$servername = '91.121.230.45';
$username = 'xovcfm_itshocfr_db';
$password = 'Sg*!o5H-Wm67h_A3';
$dbname = 'xovcfm_itshocfr_db';

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Récupération des données du formulaire
$titre = $_POST['titre'];
$entreprise = $_POST['entreprise'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$categorie = $_POST['categorie'];
$type_contrat = $_POST['type_contrat'];
$niveau_etudes = $_POST['niveau_etudes'];
$salaire = $_POST['salaire'];
$competence = $_POST['competence'];
$site = $_POST['site'];
$email = $_POST['email'];
$description = $_POST['description'];

// Insertion des données dans la base de données
$sql = "INSERT INTO offres (titre, entreprise, ville, pays, categorie, type_contrat, niveau_etudes, salaire, competence, site, email, description, date_publication)
VALUES ('$titre', '$entreprise', '$ville', '$pays', '$categorie', '$type_contrat', '$niveau_etudes', '$salaire', '$competence', '$site', '$email', '$description', NOW())";

if (mysqli_query($conn, $sql)) {
    echo "L'offre a bien été créée";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);

?>

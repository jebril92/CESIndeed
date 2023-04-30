
<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CESIndeed | Offres d'emplois </title>
    <link rel="shortcut icon" href="{{ asset('img/icon/main.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/emplois.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- Liste des jobs -->
@include ('navbar')
<div class="job-listing-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <!-- Panneau de séléction -->
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="row">
                    <div class="col-12">
                        <div class="small-section-tittle2 mb-45">
                        </div>
                    </div>
                </div>
                <!-- Catégories -->
            </div>
            <!-- Right content -->
            <div class="col-xl-9 col-lg-9 col-md-8">
                <!-- Featured_job_start -->
                <section class="featured-job-area">
                    <div class="container">
                        <!-- Count of Job list Start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="count-job mb-35">
                                    <?php
                                    // Connexion à la base de données
                                    $conn = mysqli_connect('91.121.230.45', 'xovcfm_itshocfr_db', 'Sg*!o5H-Wm67h_A3', 'xovcfm_itshocfr_db');

                                    // Vérification de la connexion
                                    if (!$conn) {
                                        die("La connexion a échoué: " . mysqli_connect_error());
                                    }

                                    // Requête SQL pour récupérer toutes les offres d'emploi
                                    $sql = "SELECT * FROM emplois";
                                    $result = mysqli_query($conn, $sql);

                                    // Affichage du nombre d'offres trouvées
                                    $count = mysqli_num_rows($result);
                                    echo "<span>" . $count . " Offre(s) trouvée(s)</span>";



                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- Count of Job list End -->

                        <!-- Boucle pour afficher les offres d'emploi -->
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                    <a href="{{ route('offres.show', ['id' => $row['id']]) }}"><img src="img/exemple.png" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                    <a href="{{ route('offres.show', ['id' => $row['id']]) }}">
                                            <h4><?php echo $row['titre']; ?></h4>
                                        </a>
                                        <ul>
                                            <li><?php echo $row['entreprise']; ?></li>
                                            <li><i class="fas fa-map-marker-alt"></i><?php echo $row['ville'] . ', ' . $row['pays']?></li>
                                            <li><?php echo $row['salaire'] . '€'; ?> </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a><?php echo $row['type_contrat']; ?></a>
                                    <span><?php echo $row['date_publication']; ?></span>
                                    <p><?php echo $row['categorie']; ?></p>
                                    <p><?php echo $row['niveau_etudes']?></p>
                                </div>
                            </div>
                            <?php
                        }

                        // Fermeture de la connexion à la base de données
                        mysqli_close($conn);
                        ?>


                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/emplois.js"></script>
</body>
</html>

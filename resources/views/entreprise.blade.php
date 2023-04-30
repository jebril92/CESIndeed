<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CESIndeed | Entreprises </title>
    <link rel="shortcut icon" href="{{ asset('img/icon/main.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/emplois.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @include ('navbar')
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Right content -->
                <div class="col-xl-12 col-lg-12 col-md-12">
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

                                        // Requête SQL pour récupérer toutes les entreprises
                                        $sql = "SELECT * FROM emplois";
                                        $result = mysqli_query($conn, $sql);

                                        // Affichage du nombre d'entreprises trouvées
                                        $count = mysqli_num_rows($result);
                                        echo "<span>" . $count . " Entreprise(s) trouvée(s)</span>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Count of Job list End -->

                            <!-- Boucle pour afficher les entreprises -->
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="job-tittle">
                                        <a href="<?php echo $row['site']; ?>">
                                            <h4><img src="img/exemple.png" alt=""> <?php echo $row['entreprise']; ?></h4>
                                            <p>Adresse : <?php echo $row['aentreprise']; ?></p>
                                            <p>Numéro : +33<?php echo $row['nentreprise']; ?></p>
                                        </a>
                                        </div>
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

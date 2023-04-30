<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CESIndeed | Accueil</title> 
    <link rel="icon" href="{{ asset('img/icon/main.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">
    <meta name="description" content="Page Principale du Site Cesindeed">
    <meta name="langage" content="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  @include('navbar')
      <main>
        <div class="intro">
          <div class="container">
            <div class="intro-text">
              <h1>Tu recherches un emploi ?<br><span class="green">Tu es à la bonne porte !</span></h1>
              <div class="check-out">
                <p>Regarder nos offres</p>
                <div class="form">
                  <div class="job-search">
                    <img style="width: 20px; margin-right: 30px;" src="img/icon/search-icon.svg" alt="">
                    <input type="text" placeholder="Postes ou mots-clés">
                  </div>
                  <div class="location">
                    <label for="lname">Localisation :</label>
                    <select name="location" id="location">
                      <option value="0">France</option>
                    </select>
                    <a href="{{ route('emplois') }}"><input class="search main-btn" type="submit" value="Rechercher"></a>
                  </div>
                </div>
                <div class="follow">
                  <span>Rejoins-nous</span>
                  <a href=""><img src="{{ asset('img/icon/facebook-icon.svg') }}" alt="Facebook"></a>
                  <a href=""><img src="{{ asset('img/icon/twitter-icon.svg') }}" alt="Facebook"></a>
                  <a href=""><img src="{{ asset('img/icon/linkedin-icon.svg') }}" alt="Facebook"></a>
                </div>
              </div>
            </div>
            <div class="intro-img">
            <img src="{{ asset('img/intro.webp') }}" alt="">
            </div>
          </div>
        </div>
      
         <!--Recherche par catégories-->
        <div class="container">
        <div class="search-by">
          <h1>Recherche par <span class="green">catégorie</span></h1>

            <!--Type d'offres-->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
   
               <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state" src="img/icon/business-development.svg" alt="">
                        <img class="hover" src="img/icon/business-development-hover.svg" alt="">
                      </div>
                      <p>Informatique<br></p>
                    </div> 

                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state" src="img/icon/graphic.svg" alt="">
                        <img class="hover" src="img/icon/graphic-hover.svg" alt="">
                      </div>
                        <p>BTP<br></p>
                    </div>

                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state" src="img/icon/pm.svg" alt="">
                        <img class="hover" src="img/icon/pm-hover.svg" alt="">
                      </div>
                        <p>S3E<br></p>

                    </div>

                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state"src="img/icon/marketing.svg" alt="">
                        <img class="hover" src="img/icon/marketing-active.svg" alt="">
                      </div>
                        <p>Généraliste<br></p>

                    </div>

                  </div>
               </div>
            </div>

        </div>

         <!--Offres d'emploi-->
          <div class="job-offers">
            <h1>Offres <span class="green">d'emploi</span></h1>
            <a href="{{ route('emplois') }}">Dernières offres <img style="width: 20px; margin-left: 20px;" src="/img/icon/arrow-right-icon.svg" alt=""></a>
            <div class="row pt-5">
              <div class="image col-md-4">
              <img src="{{ asset('img/job-offers.webp') }}" alt="">
              </div>
              <div class="col-md-4">
                <div class="offert-wrapper">
                  <div class="offert">
                    <div>
                      <div class="offert-description">
                        <div class="company-logo">
                          <img src="img/icon/go-icon.svg" alt="">
                        </div>
                        <div class="description">
                          <p class="company-name">Go!</p>
                          <p class="description">Tesla est un constructeur automobile de voitures électriques dont le siège social se situe à Austin, au Texas, sur le fleuve Colorado, aux États-Unis.</p>
                        </div>
                      </div>
                      <div class="offert-meta">
                        <p class="location">localisation : <span class="city">France</span></p>
                      </div>
                    </div>
                  </div>
                  <a href="{{ route('emplois') }}" class="main-btn">Voir détails</a>
                </div>
                <div class="offert-wrapper">
                  <div class="offert">
                    <div>
                      <div class="offert-description">
                        <div class="company-logo">
                          <img src="img/icon/tesla-icon.svg" alt="">
                        </div>
                        <div class="description">
                          <p class="company-name">Tesla</p>
                          <p class="description">Tesla est un constructeur automobile de voitures électriques dont le siège social se situe à Austin, au Texas, sur le fleuve Colorado, aux États-Unis.</p>
                        </div>
                      </div>
                      <div class="offert-meta">
                        <p class="location">localisation : <span class="city">France</span></p>
                      </div>
                    </div>
                  </div>
                  <a href="{{ route('emplois') }}" class="main-btn">Voir détails</a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="offert-wrapper">
                  <div class="offert">
                    <div>
                      <div class="offert-description">
                        <div class="company-logo">
                          <img src="img/icon/apple-icon.svg" alt="">
                        </div>
                        <div class="description">
                          <p class="company-name">Apple</p>
                          <p class="description">Apple est une entreprise multinationale américaine qui crée et commercialise des produits électroniques grand public, des ordinateurs personnels et des logiciels.</p>
                        </div>
                      </div>
                      <div class="offert-meta">
                        <p class="location">Localisation : <span class="city">France</span></p>
                      </div>
                    </div>
                  </div>
                  <a href="{{ route('emplois') }}" class="main-btn">Voir détails</a>
                </div>
                <div class="offert-wrapper">
                  <div class="offert">
                    <div>
                      <div class="offert-description">
                        <div class="company-logo">
                          <img src="img/icon/google-icon.svg" alt="">
                        </div>
                        <div class="description">
                          <p class="company-name">Google</p>
                          <p class="description">Google est une entreprise américaine de services technologiques fondée en 1998 dans la Silicon Valley, en Californie, par Larry Page et Sergey Brin, créateurs du moteur de recherche Google.</p>
                        </div>
                      </div>
                      <div class="offert-meta">
                        <p class="location">Localisation : <span class="city">France</span></p>
                      </div>
                    </div>
                  </div>
                  <a href="{{ route('emplois') }}" class="main-btn">Voir détails</a>
                </div>
              </div>
              
            </div>
          </div>
        
          <!--Service-->
          <div class="service text-center">
            <h1>Un service de <span class="green">Qualité</span></h1>
            <div class="service-items">
              <div class="item">
                <img src="img/icon/cv-icon.svg" alt="">
                <span class="counter">2 331</span>
                <span>Offres d'emploi</span>
              </div>
              <div class="item">
                <img src="img/icon/customers.svg" alt="">
                <span class="counter">1 148</span>
                <span>Utilisateurs satisfaits</span>
              </div>
              <div class="item">
                <img src="img/icon/applications.svg" alt="">
                <span class="counter">5 364</span>
                <span>CV envoyés</span>
              </div>
              <div class="item">
                <img src="img/icon/projects.svg" alt="">
                <span class="counter">1 764</span>
                <span>Projets réalisés</span>
              </div>
            </div>
          </div>

          <!-- Newsletter -->

          <div class="update-news">
            <div class="row">
              <div class="col-md-5 news-text">
                <h2>Obtiens nos dernières actualités</h2>
              </div>
              <div class="col-md-7 news-form">
                <form action ="newsletter.php" method="POST">
                <input type="email" name="email" placeholder="Entrer votre email">
                <button type="submit" name="subscribe">Envoyer</button>
                </form>
              </div>
            </div>
          </div>

          <div class="find-jobs text-center">
            <h1><span class="green">Trouve un travail </span> à travers <br>le monde</h1>
          </div>

        </div>
        
    </main>
      <!-- Footer -->
      <footer>
          <div class="container text-center text-md-start">
            <div class="footer-wrap">
              <div class="about">
                <img src="img/icon/company-logo.svg" alt="">
                <p class="text-muted py-4">
                  Votre prochain emploi est juste à un clic.
                </p>
                <div class="social-media">
                  <a href="" class="me-2 text-reset"><img src="img/icon/facebook-icon.svg" alt=""></a>
                  <a href="" class="me-2 text-reset"><img src="img/icon/twitter-icon.svg" alt=""></a>
                  <a href="" class="me-2 text-reset"><img src="img/icon/linkedin-icon.svg" alt=""></a>
                  <a href="" class="me-2 text-reset"><img src="img/icon/instagram-icon.svg" alt=""></a>
                </div>
              </div>

              <div class="company">
                <h6 class="fw-bold">Organisation</h6>
                <p><a href="">A Propos</a></p>
              </div>
              
              <div class="useful-links">
                <h6 class="fw-bold">Liens Importants</h6>
                <p><a href="">Conditions d'utilisations</a></p>
              </div>

              <div class="newsletter">
                <h6 class="fw-bold">Newsletter</h6>
                <p class="text-muted">Inscris toi et reçois nos dernières actualités.</p>
                  <form id="subscribe" action="newsletter.php" method="POST">
                    <label for="email">Ton e-mail:</label>
                    <input type="email" placeholder="e-mail:" name="email" required>
                    <button type="submit" class="main-btn" name="subscribe">S'abonner</button>
                  </form>
              </div>
              
            </div>
            <div class="copyright">
              <p>&copy; 2023 CESIndeed | Tous droits réservés</p>
            </div>
          </div>
        
      </footer>

    <script src="js/nav-bg.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</body>
</html> 
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>CESIndeed | Détails Offre </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('img/icon/main.ico') }}" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/details.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Page Offres du Site Cesindeed">

   </head>
   <body>
    <main>
        @include('navbar')
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-7 col-lg-8">
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                <a href="#"><img src="{{ asset('img/exemple.png') }}" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                <a href="#">
                                    <h4>{{ $offre->titre }}</h4>
                                </a>
                                <ul>
                                    <li>{{ $offre->entreprise }}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $offre->ville }}, {{ $offre->pays }}</li>
                                    <li>{{ $offre->salaire }} €</li>
                                </ul>
                            </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Description de l'emploi</h4>
                            </div>
                            <p>{{ $offre->description }}</p>
                        </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Connaissances, compétences et capacités requises</h4>
                                </div>
                               <ul>
                                    <li>{{ $offre->competence }}</li>
                               </ul>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Experience</h4>
                                </div>
                               <ul>
                                    <li>{{ $offre->niveau_etudes }}</li>
                               </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Informations du poste</h4>
                           </div>
                          <ul>
                            <li>Publication: <span>{{ $offre->date_publication}}</span></li>
                            <li>Localisation: <span>{{ $offre->ville }}, {{ $offre->pays }}</span></li>
                            <li>Type d'emploi: <span>{{ $offre->type_contrat }}</span></li>
                            <li>Salaire:  <span>{{ $offre->salaire }} €</span></li>
                            <li>Nombre de postulants : </li>
                          </ul>
                         <div class="apply-btn2">
                            <a href="{{ $offre->site }}" class="btn">Postuler</a>
                            
                         </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Informations sur la société</h4>
                           </div>
                            <ul>
                                <li>Nom: <span>{{ $offre->entreprise }}</span></li>
                                <li>Site Internet: <span>{{ $offre->site }}</span></li>
                                <li>Email: <span>{{ $offre->email }}</span></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        
    </body>
</html>
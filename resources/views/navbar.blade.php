<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('img/icon/main.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
<nav class="navbar navbar-expand-xl fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}"><img class="w-100" src="{{ asset('img/icon/company-logo.svg') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-card-item">
                    <a class="nav-link" href="{{ route('emplois') }}">Offres d'emploi</a>
                </li>
                <li class="nav-card-item">
                    <a class="nav-link" href="{{ route('entreprise') }}">Entreprises</a>
                </li>

                @if (Auth::check() && (Auth::user()->user_type == 'admin'))
                <li class="nav-card-item">
                    <a class="nav-link" href="{{ route('offres.create') }}">Créations Offres</a>
                </li>
                <li class="nav-card-item">
                    <a class="nav-link" href="{{ route('admin') }}">Admin</a>
                </li>
                @endif

                @if (Auth::check() && (Auth::user()->user_type == 'pilote'))
                <li class="nav-card-item">
                    <a class="nav-link" href="{{ route('offres.create') }}">Créations Offres</a>
                </li>
                @endif

                
            </ul>
            <ul class="right navbar-nav ms-auto">
                @auth
                    <li class="nav-card-item-right create-account">
                        <a class="nav-link" href="{{ route('profile.edit') }}">Profil</a>
                    </li>
                    <li class="nav-card-item-right">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link">Déconnexion</button>
                        </form>
                    </li>
                    @else
                    <li class="nav-card-item-right create-account">
                        <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                    </li>
                    <li class="nav-card-item-right create-account">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                    @endif
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>


    <script src="js/nav-bg.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
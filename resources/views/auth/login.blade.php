<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CESIndeed | Connexion</title>
    <meta name="description" content="">
    <!-- Liens vers les fichiers CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/icon/main.ico') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @include('navbar')
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title mb-4 text-center">Connexion</h2>
                <!-- Formulaire de connexion -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Champ email -->
                    <div class="form-group">
                        <label class="small mb-1" for="email">Adresse e-mail</label>
                        <x-text-input id="email" class="form-control py-4" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <!-- Champ mot de passe -->
                    <div class="form-group">
                        <label class="small mb-1" for="password">Mot de passe</label>
                        <x-text-input id="password" class="form-control py-4" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <!-- Bouton "Se souvenir de moi" -->
                    <div class="form-group custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember">
                        <label class="custom-control-label" for="remember">Se souvenir de moi</label>
                    </div>
                    <!-- Liens "Mot de passe oublié" et bouton "Connexion" -->
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                    </div>
                    <div class="form-group text-center">
                        @if (Route::has('password.request'))
                            <a class="small" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- Liens vers les fichiers JavaScript -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
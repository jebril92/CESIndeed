<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CESIndeed | Inscription</title>
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Inscription</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <x-input-label for="name" :value="__('Pseudo')" />
                                <x-text-input id="name" class="form-control py-4" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control py-4" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="password" :value="__('Mot de passe')" />
                                <x-text-input id="password" class="form-control py-4" type="password" name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="password_confirmation" :value="__('Confirmation mot de passe')" />
                                <x-text-input id="password_confirmation" class="form-control py-4" type="password" name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="user_type" :value="__('Type d\'utilisateur')" />
                                <select id="user_type" name="user_type" class="form-control py-4 rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                    <option value="" selected disabled>{{ __('Sélectionnez un type d\'utilisateur') }}</option>
                                    <option value="etudiant">{{ __('Étudiant') }}</option>
                                    <option value="pilote">{{ __('Pilote') }}</option>
                                </select>
                                <x-input-error :messages="$errors->get('user_type')" class="mt-2" />
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                    {{ __('Déjà enregistré ?') }}
                                </a>
                                <x-primary-button class="ml-4 btn-primary">
                                    {{ __("S'enregistrer") }}
                                </x-primary-button>
                            </div>
                        </form>
<!-- Liens vers les fichiers JavaScript -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>

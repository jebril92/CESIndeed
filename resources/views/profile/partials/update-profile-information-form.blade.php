<h2>
    ‎
</h2>

<section class="mt-6">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-3">
                            {{ __('Informations sur le profil') }}
                        </h2>

                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                            {{ __("Mettre à jour les informations de profil et l'adresse e-mail de votre compte.") }}
                        </p>

                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>

                        <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                            @csrf
                            @method('patch')

                            <div class="mb-3">
                                <x-input-label for="prenom" :value="__('Prenom')" />
                                <x-text-input id="prenom" name="prenom" type="text" class="form-control" :value="old('prenom', $user->prenom)" required autofocus autocomplete="prenom" />
                                <x-input-error class="mt-2" :messages="$errors->get('prenom')" />
                            </div>

                            <div class="mb-3">
                                <x-input-label for="nom" :value="__('Nom')" />
                                <x-text-input id="nom" name="nom" type="text" class="form-control" :value="old('nom', $user->nom)" required autofocus autocomplete="nom" />
                                <x-input-error class="mt-2" :messages="$errors->get('nom')" />
                            </div>

                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                <div>
                                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                        {{ __('Votre adresse e-mail n"est pas vérifiée.') }}

                                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                            {{ __('Cliquez ici pour renvoyer l"e-mail de vérification.') }}
                                        </button>
                                    </p>

                                    @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                        {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                                    </p>
                                    @endif
                                </div>
                                @endif
                            </div>

                            <div class="d-flex justify-content-between">
                            <x-primary-button class="btn btn-primary" style="background-color: #4481eb;">{{ __('Sauvegarder') }}</x-primary-button>

                            @if (session('status') === 'profile-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm"
                                    style="color: #4481eb"
                                >{{ __('Sauvegarder.') }}</p>
                            @endif
                        </div>
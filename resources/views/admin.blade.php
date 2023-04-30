<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CESIndeed | Panel Administrateur</title>
    <link rel="shortcut icon" href="{{ asset('img/icon/main.ico') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-eWNxHXKhSWp0NwNltq0jjq3ImX9c2bqpTK0s0RZIa62E7xUxk6Uw7VU2oy78u0XstIWdtD1OvO6fMzrZr8RDGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @include('navbar')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="text-center">
            <a href="{{ route('admin.pilotes') }}" class="btn btn-primary me-3">Pilotes</a>
            <a href="{{ route('admin.etudiants.index') }}" class="btn btn-secondary me-3">Etudiants</a>
        </div>
    </div>
</body>
</html>

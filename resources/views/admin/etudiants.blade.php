<!doctype html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>CESIndeed | Liste des étudiants</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
      <link rel="shortcut icon" href="{{ asset('img/icon/main.ico') }}" />
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
         /* Utilisation de flexbox pour centrer le contenu */
         body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
         }
         table {
            margin-top: 3rem;
         }
         td.editable:hover {
            background-color: #f5f5f5;
         }
         td.editable:focus {
            background-color: #fff;
            outline: none;
         }
      </style>
   </head>
   <body>
      @include('navbar')
      <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <table class="table-auto w-full">
                  <thead>
                     <tr>
                        <th class="px-4 py-2">Nom</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Date de création du compte</th>
                        <th class="px-4 py-2"></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($etudiants as $etudiant)
                     <tr>
                        <td class="border px-4 py-2 editable" contenteditable>{{ $etudiant->name }}</td>
                        <td class="border px-4 py-2 editable" contenteditable>{{ $etudiant->email }}</td>
                        <td class="border px-4 py-2">{{ $etudiant->created_at->format('d/m/Y') }}</td>
                        <td class="border px-4 py-2">
                           <form method="POST" action="{{ route('etudiants.destroy', $etudiant->id) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                           </form>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
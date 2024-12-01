<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des étudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
        <div class="col s12">
        <h1>Liste des étudiants</h1>
       <hr>
        <a href="{{route('ajouter')}}" class="btn btn-primary"> Ajouter un étudiant</a>
        <hr>
        @if(session('status'))
         <div class="alert alert-success">
           {{ session('status') }}
        </div>
        @endif
        </div>
        </div>
    <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Prénom</th>
              <th>Nom</th>
              <th>Email</th>
              <th>Téléphone</th>
              <th>Pays de résidence</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($etudiants as $etudiant)
            <tr>
              <td>{{ $etudiant->id }}</td>
              <td>{{ $etudiant->PreEtu }}</td>
              <td>{{ $etudiant->NomEtu }}</td>
              <td>{{ $etudiant->EmailEtu }}</td>
              <td>{{ $etudiant->TelEtu }}</td>
              <td>{{ $etudiant->PaysResi }}</td>
              <td>
                <a href="/modifier/etudiant/{{ $etudiant->id }}" class="btn btn-info">Modifier</a>
                <a href="/supprimer/etudiant/{{ $etudiant->id }}" class="btn btn-danger">x Supprimer</a>
              </td>
            </tr>
            @endforeach
          </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

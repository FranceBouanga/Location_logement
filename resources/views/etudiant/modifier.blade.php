<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier un étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col s12">
        <h1>Modifier un étudiant</h1>
       <hr>
      @if(session('status'))
         <div class="alert alert-success">
           {{ session('status') }}
        </div>
      @endif
     <ul>
        @foreach ($errors->all() as $error)
          <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
     </ul>
       <form action="/modifier/etudiant/traitement" method="POST" class="form-group">
    @csrf

    <input type="text" name="id" style="display: none;" value="{{ $etudiant->id }}">
         <div class="form-group">
    <label for="PreEtu" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="PreEtu" name="PreEtu" value="{{ $etudiant->PreEtu }}">
    </div>

    <div class="form-group">
    <label for="NomEtu" class="form-label">Nom</label>
    <input type="text" class="form-control" id="NomEtu" name="NomEtu" value="{{ $etudiant->NomEtu }}">
    </div>

    <div class="form-group">
    <label for="EmailEtu" class="form-label">Email</label>
    <input type="email" class="form-control" id="EmailEtu" name="EmailEtu" value="{{ $etudiant->EmailEtu }}">
    </div>

    <div class="form-group">
    <label for="TelEtu" class="form-label">Téléphone</label>
    <input type="text" class="form-control" id="TelEtu" name="TelEtu" value="{{ $etudiant->TelEtu }}">
    </div>

    <div class="form-group">
    <label for="PaysResi" class="form-label">Pays de résidence</label>
    <input type="text" class="form-control" id="PaysResi" name="PaysResi" value="{{ $etudiant->PaysResi }}">
    </div>

     <br>
    <button type="submit" class="btn btn-primary">MODIFIER UN ÉTUDIANT</button>
     <br>
    </br>
     <a href="/etudiants" class="btn btn-danger">Revenir à la liste des étudiants</a>
</form>
        
        
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

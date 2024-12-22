<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col s12">
        <h1>Ajouter un étudiant</h1>
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
       <form action="/ajouter.etudiant/traitement" method="POST" class="form-group">
    @csrf
         <div class="form-group">
            <label for="PreEtu" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="PreEtu" name="PreEtu">
         </div>

         <div class="form-group">
            <label for="NomEtu" class="form-label">Nom</label>
            <input type="text" class="form-control" id="NomEtu" name="NomEtu">
         </div>

         <div class="form-group">
            <label for="EmailEtu" class="form-label">Email</label>
            <input type="email" class="form-control" id="EmailEtu" name="EmailEtu">
         </div>

         <div class="form-group">
            <label for="TelEtu" class="form-label">Téléphone</label>
            <input type="text" class="form-control" id="TelEtu" name="TelEtu">
         </div>

         <div class="form-group">
         <label for="SexEtu" class="form-label">Sexe</label>
         <select id="SexEtu" name="SexEtu">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            </select>
         </div>

         <div class="form-group">
         <label for="PaysResi" class="form-label">Pays de Residence</label>
         <select id="PaysResi" name="PaysResi">
            <option value="Benin">Benin</option>
            <option value="Burkina Faso ">Burkina Faso</option>
            <option value="Cameroun">Cameroun</option>
            <option value="Centre afrique">Centre afrique</option>
            <option value="Congo Brazza">Congo Brazza</option>
            <option value="Congo Kinshasa">Congo Kinshasa</option>
            <option value="Cote d'ivoire">Cote d'ivoire</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambie">Gambie</option>
            <option value="Guiné Bissau">Guiné Bissau</option>
            <option value="Guiné Conacry">Guiné Conacry</option>
            <option value="Mali">Mali</option>
            <option value="Mauritanie ">Mauritanie</option>
            <option value="Niger ">Niger</option>
            <option value="Nigeria ">Nigeria</option>
            <option value="Sénégal ">Sénégal</option>
            <option value="Togo ">Togo</option>
            </select>
         </div>

        
         <br>
         <button type="submit" class="btn btn-primary"> AJOUTER UN ÉTUDIANT</button>
         <br>
         <br>
         <a href="{{route('etudiants.index')}}" class="btn btn-danger">Revenir à la liste des étudiants</a>
       </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

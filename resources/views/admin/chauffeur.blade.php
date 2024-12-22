<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @extends('layouts.app')
    <div class="wrapper">
        @include('layouts.sidebar')
        <div id="body" class="active">
            <!-- navbar navigation component -->
            @include('layouts.navbar')
            <!-- end of navbar navigation -->


            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="">
                                            <div class="icon-big text-center">
                                                <i class="teal fas fa-car"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> For this Week
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="">
                                            <div class="icon-big text-center">
                                                <i class="teal fas fa-truck"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> For this Week
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addChauffeurModal">
                        Ajouter
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="addChauffeurModal" tabindex="-1" role="dialog"
                        aria-labelledby="addCandidatModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addCandidatModalLabel">Ajouter un Chauffeur</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form inside the Modal -->
                                    <form action="{{ route('ajoutChauffeur') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf <!-- Ajoute un jeton CSRF pour la sécurité -->
                                        <div class="form-group">
                                            <label for="PreChauf">Prénom</label>
                                            <input type="text" class="form-control" id="PreChauf" name="PreChauf"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="NomChauf">Nom</label>
                                            <input type="text" class="form-control" id="NomChauf" name="NomChauf"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="TelChauf">Téléphone</label>
                                            <input type="number" class="form-control" id="TelChauf" name="TelChauf"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="NumPermis">Numéro de permis</label>
                                            <input type="text" class="form-control" id="NumPermis"
                                                name="NumPermis" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </form>
                                    <!-- End Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-header"><i class="fas fa-user-tie"></i> | <b>Liste des Chauffeurs</b></div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Prénom</th>
                                            <th>Nom</th>
                                            <th>Téléphone</th>
                                            <th>Numéro de permis</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($chauffeurs as $chauffeur)
                                            <tr>
                                                <td>{{ $chauffeur->id }}</td>
                                                <td>{{ $chauffeur->PreChauf }}</td>
                                                <td>{{ $chauffeur->NomChauf }}</td>
                                                <td>{{ $chauffeur->TelChauf }}</td>
                                                <td>{{ $chauffeur->NumPermis }}</td>
                                                <td>
                                                    <!-- Boutons d'édition et de suppression -->
                                                    <button type="button" class="btn btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#modifierChauffeur{{ $chauffeur->id }}">
                                                        Modifier
                                                    </button>
                                                    @foreach ($chauffeurs as $chauffeur)
                                                        <!-- Modal de modification pour le chauffeur {{ $chauffeur->id }} -->
                                                        <div class="modal fade"
                                                            id="modifierChauffeur{{ $chauffeur->id }}" tabindex="-1"
                                                            role="dialog"
                                                            aria-labelledby="modifierChauffeurLabel{{ $chauffeur->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="modifierChauffeurLabel{{ $chauffeur->id }}">
                                                                            Modifier Chauffeur {{ $chauffeur->PreChauf }}
                                                                            {{ $chauffeur->NomChauf }}</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Fermer">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form
                                                                        action="{{ route('updateChauffeur', $chauffeur->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="modal-body">
                                                                            <!-- Champs du formulaire de modification -->
                                                                            <div class="form-group">
                                                                                <label for="PreChauf">Prénom</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="nom" name="PreChauf"
                                                                                    value="{{ $chauffeur->PreChauf}}"
                                                                                    required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="NomChauf">Nom</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="NomChauf" name="NomChauf"
                                                                                    value="{{ $chauffeur->NomChauf }}"
                                                                                    required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="TelChauf">Téléphone</label>
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    id="TelChauf" name="TelChauf"
                                                                                    value="{{ $chauffeur->TelChauf }}"
                                                                                    required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="NumPermis">Numéro de
                                                                                    permis</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="NumPermis"
                                                                                    name="NumPermis"
                                                                                    value="{{ $chauffeur->NumPermis }}"
                                                                                    required>
                                                                            </div>
                                                            
                                                                                
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Fermer</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Enregistrer les
                                                                                modifications</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    <form action="{{ route('deleteChauffeur', $chauffeur->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce chauffeur?')">Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('layouts.js');
</body>

</html>

<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\LogementController;
use App\Http\Controllers\BayeurController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\NavetteController;

Route::get('/',function(){
    return view('FrontEnd.index');
});

Route::get('etudiant/ajouter',function(){
    return view('etudiant.ajouter');
})->name('ajouter');




// Routes pour les étudiants
Route::resource('etudiants', EtudiantController::class);
/*
// Routes pour les logements
Route::resource('logements', LogementController::class);

// Routes pour les bayeurs (anciennement bailleurs)
Route::resource('bayeurs', BayeurController::class);

// Routes pour les chauffeurs
Route::resource('chauffeurs', ChauffeurController::class);

// Routes pour les voitures
Route::resource('voitures', VoitureController::class);

// Routes pour les navettes
Route::resource('navettes', NavetteController::class);

//reproduction du projet rattrapage  */

Route::get('/supprimer/etudiant/{id}', [EtudiantController::class, 'destroy']);
Route::get('/modifier/etudiant/{id}', [EtudiantController::class, 'edit']);
Route::post('/modifier-etudiant/traitement', [EtudiantController::class, 'update']);
//Route::get('/etudiant', [EtudiantController::class, 'index']);
Route::get('/ajouter/etudiant', [EtudiantController::class, 'create']);
Route::post('/ajouter.etudiant/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);
//Roiute temporaire
/*Route::post('/ajouter/etudiant',function(Request $request) {
    dd($request->all());
});
*/
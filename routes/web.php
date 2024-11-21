<?php

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

Route::get('/ ABOUT',function(){
    return view('FrontEnd.about');
});



// Routes pour les étudiants
Route::resource('etudiants', EtudiantController::class);

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

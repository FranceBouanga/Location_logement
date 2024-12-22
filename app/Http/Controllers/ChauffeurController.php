<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chauffeurs = Chauffeur::all();
        $chauffeur = Chauffeur::all();
        return view('chauffeurs', compact('chauffeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function commentaire(Request $request)
    {
         
    
        // Créer un nouveau commentaire
        $commentaire = new Commentaire();
        $commentaire->chaufffeur = $request->input('nom_prenom_chauffeur');
        $commentaire->commentaire = $request->input('commentaire');
        $commentaire->note =  $request->input('note');
        
        $commentaire->save();

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Le commentaire a été ajouté avec succès.');
    }

    public function create()
    {
        return view('chauffeurs.create');
    }

    public function store(Request $request)
    {
        /*Chauffeur::create($request->all());
        return redirect()->route('chauffeurs.index');*/
             // Valider les données du formulaire
    $request->validate([
        'PreChauf' => 'required|string|max:50',
        'NomChauf' => 'required|string|max:50',
        'TelChauf' => 'required|integer|max:50',
        'NumPermis' => 'required|string|max:50|unique:chauffeurs,NumPermis,' 
       ]);
         // Créer un nouveau chauffeur avec les données du formulaire
    Chauffeur::create([
        'PreChauf' => $request->PreChauf,
        'NomChauf' => $request->NomChauf,
        'TelChauf' => $request->TelChauf,
        'NumPermis' => $request->NumPermis,
        
    ]);

    return redirect()->route('CH')->with('success', 'Voiture ajouté avec succès!');
    
    }

    public function show(Chauffeur $chauffeur)
    {
        return view('chauffeurs.show', compact('chauffeur'));
    }

    public function edit(Chauffeur $chauffeur)
    {
        return view('chauffeurs.edit', compact('chauffeur'));
    }

    public function update(Request $request, Chauffeur $chauffeur)
    {
        $chauffeur->update($request->all());
        return redirect()->route('chauffeurs.index');
    }

    public function destroy(Chauffeur $id)
    {
       /* $chauffeur->delete();
        return redirect()->route('chauffeurs.index');*/

        $chauffeur = Chauffeur::findOrFail($id);

    // Suppression du chauffeur
    $chauffeur->delete();

    // Redirection avec un message de succès ou vers toute autre action que vous souhaitez
    return redirect()->back()->with('success', 'Chauffeur supprimé avec succès!');
    }

}

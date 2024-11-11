<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    public function index()
    {
        $chauffeurs = Chauffeur::all();
        return view('chauffeurs.index', compact('chauffeurs'));
    }

    public function create()
    {
        return view('chauffeurs.create');
    }

    public function store(Request $request)
    {
        Chauffeur::create($request->all());
        return redirect()->route('chauffeurs.index');
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

    public function destroy(Chauffeur $chauffeur)
    {
        $chauffeur->delete();
        return redirect()->route('chauffeurs.index');
    }
}

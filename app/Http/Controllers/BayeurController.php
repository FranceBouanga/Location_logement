<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Bayeur;
use Illuminate\Http\Request;

class BayeurController extends Controller
{
    public function index()
    {
        $bayeurs = Bayeur::all();
        return view('bayeurs.index', compact('bayeurs'));
    }

    public function create()
    {
        return view('bayeurs.create');
    }

    public function store(Request $request)
    {
        Bayeur::create($request->all());
        return redirect()->route('bayeurs.index');
    }

    public function show(Bayeur $bayeur)
    {
        return view('bayeurs.show', compact('bayeur'));
    }

    public function edit(Bayeur $bayeur)
    {
        return view('bayeurs.edit', compact('bayeur'));
    }

    public function update(Request $request, Bayeur $bayeur)
    {
        $bayeur->update($request->all());
        return redirect()->route('bayeurs.index');
    }

    public function destroy(Bayeur $bayeur)
    {
        $bayeur->delete();
        return redirect()->route('bayeurs.index');
    }
}

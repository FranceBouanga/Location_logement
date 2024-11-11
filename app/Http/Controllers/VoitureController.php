<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index()
    {
        $voitures = Voiture::all();
        return view('voitures.index', compact('voitures'));
    }

    public function create()
    {
        return view('voitures.create');
    }

    public function store(Request $request)
    {
        Voiture::create($request->all());
        return redirect()->route('voitures.index');
    }

    public function show(Voiture $voiture)
    {
        return view('voitures.show', compact('voiture'));
    }

    public function edit(Voiture $voiture)
    {
        return view('voitures.edit', compact('voiture'));
    }

    public function update(Request $request, Voiture $voiture)
    {
        $voiture->update($request->all());
        return redirect()->route('voitures.index');
    }

    public function destroy(Voiture $voiture)
    {
        $voiture->delete();
        return redirect()->route('voitures.index');
    }
}

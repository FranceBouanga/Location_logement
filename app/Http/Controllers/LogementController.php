<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use Illuminate\Http\Request;

class LogementController extends Controller
{
    public function index()
    {
        $logements = Logement::all();
        return view('logements.index', compact('logements'));
    }

    public function create()
    {
        return view('logements.create');
    }

    public function store(Request $request)
    {
        Logement::create($request->all());
        return redirect()->route('logements.index');
    }

    public function show(Logement $logement)
    {
        return view('logements.show', compact('logement'));
    }

    public function edit(Logement $logement)
    {
        return view('logements.edit', compact('logement'));
    }

    public function update(Request $request, Logement $logement)
    {
        $logement->update($request->all());
        return redirect()->route('logements.index');
    }

    public function destroy(Logement $logement)
    {
        $logement->delete();
        return redirect()->route('logements.index');
    }
}

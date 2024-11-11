<?php

namespace App\Http\Controllers;

use App\Models\Navette;
use Illuminate\Http\Request;

class NavetteController extends Controller
{
    public function index()
    {
        $navettes = Navette::all();
        return view('navettes.index', compact('navettes'));
    }

    public function create()
    {
        return view('navettes.create');
    }

    public function store(Request $request)
    {
        Navette::create($request->all());
        return redirect()->route('navettes.index');
    }

    public function show(Navette $navette)
    {
        return view('navettes.show', compact('navette'));
    }

    public function edit(Navette $navette)
    {
        return view('navettes.edit', compact('navette'));
    }

    public function update(Request $request, Navette $navette)
    {
        $navette->update($request->all());
        return redirect()->route('navettes.index');
    }

    public function destroy(Navette $navette)
    {
        $navette->delete();
        return redirect()->route('navettes.index');
    }
}

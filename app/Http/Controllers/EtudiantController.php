<?php
namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
   /* public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index', compact('etudiants'));
    }

    public function create()
    {
        return view('etudiants.create');
    }

    public function store(Request $request)
    {
        Etudiant::create($request->all());
        return redirect()->route('etudiants.index');
    }

    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show', compact('etudiant'));
    }

    public function edit(Etudiant $etudiant)
    {
        return view('etudiants.edit', compact('etudiant'));
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update($request->all());
        return redirect()->route('etudiants.index');
    }

    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiants.index');
    }*/
    
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }
    
    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter'); 
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'PreEtu' => 'required|string|max:50',
            'NomEtu' => 'required|string|max:50',
            'EmailEtu' => 'required|email|max:50|unique:etudiants,EmailEtu',
            'TelEtu' => 'required|string|max:50',
            'PaysResi' => 'required|string|max:50',
        ]);

        $etudiant = new Etudiant();
        $etudiant->PreEtu = $request->PreEtu;
        $etudiant->NomEtu = $request->NomEtu;
        $etudiant->EmailEtu = $request->EmailEtu;
        $etudiant->TelEtu = $request->TelEtu;
        $etudiant->PaysResi = $request->PaysResi;
        $etudiant->save();

        return redirect('/ajouter')->with('status', 'L\'étudiant a bien été ajouté avec succès.');
    }

    public function modifier_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        return view('etudiant.modifier', compact('etudiant'));
    }

    public function modifier_etudiant_traitement(Request $request)
    {
        $request->validate([
            'PreEtu' => 'required|string|max:50',
            'NomEtu' => 'required|string|max:50',
            'EmailEtu' => 'required|email|max:50|unique:etudiants,EmailEtu,' . $request->id,
            'TelEtu' => 'required|string|max:50',
            'PaysResi' => 'required|string|max:50',
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->PreEtu = $request->PreEtu;
        $etudiant->NomEtu = $request->NomEtu;
        $etudiant->EmailEtu = $request->EmailEtu;
        $etudiant->TelEtu = $request->TelEtu;
        $etudiant->PaysResi = $request->PaysResi;
        $etudiant->update();

        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été modifié avec succès.');
    }

    public function supprimer_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été supprimé avec succès.');
    }
}

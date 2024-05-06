<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Eleve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleve.index', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clubs = Club::all();
        return view('eleve.create', compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "nom" => 'required',
            "prenom" => 'required',
            "id_club" => 'required',
        ]);
        Eleve::create($validateData);
        return redirect()->route('eleves.index')->with('success', 'L\'élève a bien été ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $eleve = Eleve::findOrFail($id);
        $activites = DB::table('eleve_activites')
            ->join('activites', 'eleve_activites.id_activite', '=', 'activites.id')
            ->where('eleve_activites.id_eleve', $id)
            ->get();
        return view('eleve.show', compact('eleve', 'activites'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $eleve = Eleve::findOrFail($id);
        $clubs = Club::all();
        return view('eleve.edit', compact("eleve", "clubs"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            "nom" => 'required',
            "prenom" => 'required',
            "id_club" => 'required',
        ]);

        $eleve = Eleve::findOrFail($id);

        $eleve->update($validateData);

        return redirect()->route('eleves.index')->with('success', 'L\'élève a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $eleve = Eleve::findOrFail($id);

        $eleve->delete();

        return redirect()->route('eleves.index')->with('success', 'L\'élève a bien été supprimé');
    }
}

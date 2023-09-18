<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SELECT * FROM `etudiants`
        $etudiants = Etudiant::all();

        // Dossier ressources - views - index.blade.php
        return view('etudiant.index', ['etudiants'=>$etudiants]);
    }

    /**
     * Show the form for creating a new etudiant.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // SELECT * FROM `villes`
        $villes = Ville::all();

        // Dossier ressources - views - create.blade.php
        return view('etudiant.create', ['villes'=>$villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert into etudiants(nom, adresse, phone, email, date_naissance, ville_id) values (?, ?);
        $newPost = Etudiant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id
        ]);

        // Retour sur le dossier ressources - views - index.blade.php
        return redirect(route('etudiant.index'))->withSuccess('Étudiant ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiantId
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiantId)
    {
        // $etudiant = SELECT * FROM `etudiants` WHERE id = $etudiantId;
        // Dossier ressources - views - show.blade.php
        return view('etudiant.show', ['etudiant' => $etudiantId]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiantId
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiantId)
    {
        // SELECT * FROM `villes`
        $villes = Ville::all();
        
        // Dossier ressources - views - edit.blade.php
        return view('etudiant.edit', ['etudiant' => $etudiantId], ['villes'=>$villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiantId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiantId)
    {
        $etudiantId->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id
        ]);

        // Retour sur le dossier ressources - views - show.blade.php
        return redirect(route('etudiant.show', $etudiantId))->withSuccess('Donnée mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiantId
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiantId)
    {
        $etudiantId->delete();

        // Retour sur le dossier ressources - views - index.blade.php
        return redirect(route('etudiant.index'))->withSuccess('Donnée effacée');
    }
}

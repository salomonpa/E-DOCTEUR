<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Docteurs;

class DocteursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docteurs = Docteurs::all();
        return view('docteurs.liste', compact('docteurs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docteurs.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'nom'=>'required',
            'prenom'=>'required',
            'date_naissance'=>'required',
            'adresse'=>'required',
            'sexe'=>'required',
            'specialite'=>'required',
            'telephone'=>'required',
             'photo'=>'required',
            
        ]);
    
        $docteurs = new Docteurs();
        $docteurs->nom = $request->nom;
        $docteurs->prenom = $request->prenom;
        $docteurs->date_naissance = $request->date_naissance;
        $docteurs->adresse = $request->adresse;
        $docteurs->sexe = $request->sexe;
        $docteurs->specialite = $request->specialite;
        $docteurs->telephone = $request->telephone;
        $docteurs->photo = $request->photo->store('photo', 'public');

        $docteurs->save();
    
        return redirect()->route('docteurs.index')->with('status', ' Un docteur a été ajouté avec succes.');
       
    

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        

            $docteurs = Docteur::find($id);
            return view('docteurs.details',compact('docteurs'));


        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {
        $docteurs = docteur::find($id);
        return view('docteurs.modifier', compact('docteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $docteurs =  docteurs::find($id);
            

        $docteurs->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'date_naiss'=>$request->date_naiss,
            'email'=>$request->email,
            'niveau_etude'=>$request->niveau_etude,
            'filiere'=>$request->filiere,
            'photo_etudiant'=>$request->photo,
            
        ]);
    
        return redirect()->route('docteurs.index')->with('status', 'un Docteur a été modifié avec succes.');
       

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $docteurs = docteurs::find($id);
        $docteurs->delete();
        return redirect()->route('docteurs.index')->with('status', 'Docteur a été supprimé avec succes.');

    }
}

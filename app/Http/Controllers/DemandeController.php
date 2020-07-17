<?php

namespace App\Http\Controllers;

use App\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function listdemandes()
    {

        $listedemandes = Demande::all();
        return view('demandes.listdemande', compact('listedemandes'));
    }


    public function index()
    {


        $demandes = Demande::where('user_id', auth()->user()->id)->latest()->paginate(5);
           

        return view('demandes.index', compact('demandes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demandes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'adresse' => 'required',
            'prixmax' => 'required',
            'description' => 'required',
            'tele' => 'required',

        ]);

        $demande = new Demande([
            'user_id' => auth()->user()->id,
            'prixmax' => $request->get('prixmax'),
            'type' => $request->get('type'),
            'adresse' => $request->get('adresse'),
            'description' => $request->get('description'),
            'tele' => $request->get('tele'),



        ]);


        $demande->save();
        return redirect()->route('demandes.index')
            ->with('success', 'la demande a été bien créé.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {
        return view('demandes.show', compact('demande'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {
        return view('demandes.edit', compact('demande'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande $demande)
    {
        $request->validate([
            'type' => 'required',
            'adresse' => 'required',
            'prixmax' => 'required',
            'description' => 'required',
            'tele' => 'required',

        ]);

        $demande->update($request->all());

        return redirect()->route('demandes.index')
            ->with('success', 'la demande a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {

        $demande->delete();

        return redirect()->route('demandes.index')
            ->with('success', 'la demande a été bien supprimé');
    }
}

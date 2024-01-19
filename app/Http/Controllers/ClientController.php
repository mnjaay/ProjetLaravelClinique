<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientModele;
use App\Models\SoinsModele;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $Clients = ClientModele::orderby('id', 'desc')->get();
         return view('layout.dashboard',compact('Clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         //
         $Soins = SoinsModele::all();
         return view('layout.register',compact('Soins'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nom' => 'required |max:255',
            'adresse'  => 'required |max:255',
            'age' => 'required|max:255' ,
            'genre' => 'required|max:255' ,
            'soin_id'=> 'required|max:255' ,
            'numero' => 'required|max:255'

         ]);

         ClientModele::create($validated);

         return redirect()->route('index')
             ->with('success', 'Client ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $Client = ClientModele::find($id);
        $Soins = SoinsModele::all();

        return view('client.edit',compact('Client','Soins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nom' => 'required|max:255',
            'adresse' => 'required|max:255',
            'age' => 'required|max:255',
            'genre' => 'required|max:255',
            'soin_id' => 'required|max:255',
            'numero' => 'required|max:255',
        ]);

        $client = ClientModele::findOrFail($id);


        $client->update($validated);

        return redirect()->route('index')->with('success', 'Modifié avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $Client = ClientModele::findOrFail($id);
        $Client->delete();

        return redirect()->route('index')->with('Success','Client Supprimer');
    }
}

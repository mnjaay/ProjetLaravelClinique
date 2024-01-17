<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientModele;
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
         return view('layout.register');
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
            'soin'=> 'required|max:255' ,
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
        return view('client.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated =$request->validated();

        $Clients->update($validated);

        return redirect()->route('layout.dashboard')
            ->with('success', "modifié avec succès !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

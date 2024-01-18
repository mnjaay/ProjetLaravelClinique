<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoinsModele;
use App\Models\ClientModele;
use Illuminate\support\Facades\redirect;

class SoinsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layout/dashboard');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('partial.soins');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nom' => 'required |max:255',
            'price'  => 'required |max:255',


         ]);

         SoinsModele::create($validated);

         return redirect()->route('index')->with('success', 'Modifié avec succès !');

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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

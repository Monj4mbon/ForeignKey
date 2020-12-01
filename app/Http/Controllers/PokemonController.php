<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon = Pokemon::all();
        return view('home', compact('pokemon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPokemon = new Pokemon();
        $newPokemon->nom = $request->nom;
        $newPokemon->type = $request->type;
        $newPokemon->src = $request->src;
        $newPokemon->niveau = $request->niveau;
        $newPokemon->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        $tousPokemon = Pokemon::all();
        return view('home', compact('tousPokemon'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function showBtn($id)
    {
        $showPokemon = Pokemon::find($id);
        // dd($showPokemon);
        return view('pokemon', compact('showPokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editPokemon = Pokemon::find($id);
        return view('editPokemon', compact('editPokemon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updatePokemon = Pokemon::find($id);
        $updatePokemon->nom = $request->nom;
        $updatePokemon->type = $request->type;
        $updatePokemon->src = $request->src;
        $updatePokemon->niveau = $request->niveau;
        $updatePokemon->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletePokemon = Pokemon::find($id);
        $deletePokemon->delete();
        return redirect()->back();
    }
}

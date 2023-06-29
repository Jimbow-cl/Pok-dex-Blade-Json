<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    public function index()
    {
            $pokemons = json_decode(file_get_contents('..\storage\app\pokedex.json'));
            return view('pokemon.index')->with(['pokemons'=>$pokemons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pokemon.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'bail|required|string|max:255',
            'type1'=> 'bail|required|string|max:255',
            'type2'=> 'bail|required|string|max:255',
            'height'=> 'bail|required|max:255',
            'weight'=> 'bail|required|max:255',
            'description'=> 'bail|required|max:255'
    
        ]);
    
            $name= $request->input('name');
            $type1= $request->input('type1');
            $type2= $request->input('type2');
            $height= $request->input('height');
            $weight= $request->input('weight');
            $description= $request->input('description');

            $pokedexContents = Storage::disk('local')->get('pokedex.json');
            $pokedexArray = json_decode($pokedexContents, true);
            $newPokemon = [
                'name' => $name,
                'type1' => $type1,
                'type2' => $type2,
                'description' => $description,
                'height' => $height,
                'weight' => $weight
            ];
            $pokedexArray[] = $newPokemon;
            $pokedexContentsUpdated = json_encode($pokedexArray, JSON_PRETTY_PRINT);
            Storage::disk('local')->put('pokedex.json', $pokedexContentsUpdated);


        return view('pokemon.registered')->with(['name'=>$name]);

    }

    public function show(string $name)
    {
        $pokemons = json_decode(file_get_contents('..\storage\app\pokedex.json'));
        foreach ($pokemons as $pokemon) {
            if ($pokemon->name === $name) {
                return view('pokemon.show')->with(['pokemon' => $pokemon]);
            }
        }}


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
        $request->validate([
            'name'=> 'bail|required|string|max:255',
            'type1'=> 'bail|required|string|max:255',
            'type2'=> 'bail|required|string|max:255',
            'height'=> 'bail|required|max:255',
            'weight'=> 'bail|required|max:255',
            'description'=> 'bail|required|max:255'
    
        ]);
    
            $name= $request->input('name');
            $type1= $request->input('type1');
            $type2= $request->input('type2');
            $height= $request->input('height');
            $weight= $request->input('weight');
            $description= $request->input('description');

            $newPokemon = [
                'name'=> 	$name,
                'type1'=> 	$type1,
                'type2'=> 	$type2,
                'height'=> 	$height,
                'weight'=> 	$weight,
                'description'=> $description];

             $pokemonData = json_encode($newPokemon);

   
        Storage::disk('local')->append('pokedex.json', $pokemonData);
        return view('pokemon.registered')->with(['name'=>$name]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

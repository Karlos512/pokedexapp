<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function getNewPokemon(){
        $pokemon = self::savePokemon();
        return view('index', ['view'=>'status'])->with(compact('pokemon'));
    }

    public function savePokemon(){
        $id=rand(0,200);
        $api = curl_init("https://pokeapi.co/api/v2/pokemon/$id");
        curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($api);
        curl_close($api);
        $pokemon = json_decode($response);

        $newPokemon = Pokemon::create([
            'name' => $pokemon->name,
            'picture' => $pokemon->sprites->front_default,
            'moves' => $pokemon->moves[1]->move->name,
            'type' => $pokemon->types[0]->type->name
        ]);

        $newPokemon->push();

        return $pokemon;
    }

    public function listcapture(){
        $mypokemons = Pokemon::get();
        return view('list', ['view'=>'list'])->with(compact('mypokemons'));
    }
}


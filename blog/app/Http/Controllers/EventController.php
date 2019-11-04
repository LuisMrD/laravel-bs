<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request){

        $event = Event::create([
            'league_id' => $request->league_id,
            'date' => $request->date,
            'hour' => $request->hour,
            'format' => $request->format,
            'type' => $request->type,
            'rule' => $request->rule,
            'street' => $request->street,
            'number' => $request->number,
            'complement' => $request->complement,
            'city' => $request->city,
        ]);

        return redirect('calendarioliga');
    }
}

// $serie = Serie::create([ 'nome' => $request->nome]);

//         $qtd_temporada = $request->temporada;

//         for($i = 1; $i <= $qtd_temporada; $i++){
//             $temporada = $serie->temporadas()->create(['numero' => $i]);

//             for($j = 1; $j <= $request->episodios; $j++){
//                 $temporada->episodios()->create(['numero' => $j]);
//             }
//         }
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\jugadorController;
use App\Models\jugador;

class PartidaController extends Controller
{
    public function partida(){

      $jugadors= \DB::table('jugadors')
      ->select('jugadors.nombre')
      ->orderBy('nombre','DESC')
      ->get();
     return view('partida')->with('jugadors',$jugadors);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExTres extends Controller
{
    public function media(Request $request){
        $primeiraEntrada = $request->primeiro_numero;
        $segundaEntrada = $request->segundo_numero;
        $terceiraEntrada = $request->terceiro_numero;

        return json_encode([
            'resultado' => ($primeiraEntrada + $segundaEntrada + $terceiraEntrada) / 3
        ]); 
    }
}

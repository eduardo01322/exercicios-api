<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExSeis extends Controller
{
    public function idade(request $request){
        if($request->numero <= 12){
            return json_encode([
                'mensagem' => 'É uma criança'
            ]);
        } else if($request->numero > 18){
            return json_encode([
                'mensagem' => 'É um adulto'
            ]);
        } else {
            return json_encode([
                'mensagem' => 'é um adolescente'
            ]);
        }
    }
}

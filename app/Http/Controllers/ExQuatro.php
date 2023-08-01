<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExQuatro extends Controller
{
    public function verificar(request $request){
        if($request->numero % 2 ==0){
            return json_encode([
                'mensagem' => 'par'
            ]);
        } else {
            return json_encode([
                'mensagem' => 'impar'
            ]);
        }
    }
}

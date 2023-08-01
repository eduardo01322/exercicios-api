<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExCinco extends Controller
{
    public function divisivel(request $request){
        if($request->numero % 4 ==0){
            return json_encode([
                'mensagem' => 'divisivel por 4'
            ]);
        } else {
            return json_encode([
                'mensagem' => 'não é divisivel por 4'
            ]);
        }
    }
}

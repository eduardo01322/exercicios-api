<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExOnze extends Controller
{
    public function tabuada(request $request){

        $n1 = $request->primeiro_numero;
        $n2 = $request->segundo_numero;
        

        if($request->operação){
            return json_encode([
                'resultado' => $n1 * $n2
            ]);
    } else if($request->operação){
        return json_encode([
            'resultado' => $n1 + $n2
        ]);
    } else if($request->operação){
        return json_encode([
            'resultado' => $n1 - $n2
        ]);
     } else if($request->operação){
            return json_encode([
                'resultado' => $n1 / $n2
            ]);
    } } 
}


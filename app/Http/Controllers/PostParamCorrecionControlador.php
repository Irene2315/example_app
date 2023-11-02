<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostParamCorrecionControlador extends Controller
{
    public function datosForm(Request $request):View{
            $nombre = $request -> input('nombre');
            $apellido = $request -> input('apellido');
            $edad = $request -> input('edad');
            $numeroTel= $request -> input('numeroTel');
            return view('PostParametrosCorrecion') ->with(['nombre'=>$nombre,'apellido'=>$apellido
            ,'edad'=>$edad,'numeroTel'=>$numeroTel]);
    }
}

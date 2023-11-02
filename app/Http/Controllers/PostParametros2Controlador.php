<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostParametros2Controlador extends Controller
{
    public function paginaPostParametros2(Request $request,$numeroTel=null):View{
        $nombre = $request -> input('nombre');
        $apellido = $request -> input('apellido');
        $edad = $request -> input('edad');
        $numeroTel= $request -> input('numeroTel');
        return view('PostParametros2', compact('nombre','apellido','edad','numeroTel'));
    }
}

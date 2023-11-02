<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;


class InfoPost2Controlador extends Controller
{
    public function paginaGetEjemplo2(Request $request):View{
        $nombre = $request -> input('nombre');
        $apellido = $request -> input('apellido');
        return view('InformacionPost2', compact('nombre','apellido'));
    }
}

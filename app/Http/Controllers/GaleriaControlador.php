<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class GaleriaControlador extends Controller
{
    public function paginaGaleria(Request $request):View{
        return view('galeria');
    }
}

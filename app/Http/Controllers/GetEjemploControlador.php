<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class GetEjemploControlador extends Controller
{
    public function paginaGetEjemplo(Request $request):View{
        return view('get_ejemplo');
      }
}

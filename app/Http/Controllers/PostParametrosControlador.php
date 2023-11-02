<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostParametrosControlador extends Controller
{
    public function paginaPostParametros(Request $request):View{
        return view('PostParametros1');
    }
}

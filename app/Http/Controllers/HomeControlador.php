<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeControlador extends Controller
{
    public  function paginaInicio(Request $request):View{
        return view('home');
    }
}

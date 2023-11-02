<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HolaControlador extends Controller
{
    public function holaMundo(Request $request):View{
      return view('saludo');
    }
}

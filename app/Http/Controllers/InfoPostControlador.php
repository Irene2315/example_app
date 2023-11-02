<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;


class InfoPostControlador extends Controller
{
    public function paginaPost(Request $request):View{
        return view('InformacionPost');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostCorEnviarParamController extends Controller
{
    public function fucionEnviarParametros($nombre,$apellido,$edad,$numeroTel=null){
        return "Nombre: $nombre <br> Apellido: $apellido <br> Edad: $edad <br> NumeroTel: $numeroTel"; 
    }
}
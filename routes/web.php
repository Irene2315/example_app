<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HolaControlador;
use App\Http\Controllers\HomeControlador;
use App\Http\Controllers\GaleriaControlador;
use App\Http\Controllers\GetEjemploControlador;
use App\Http\Controllers\InfoPostControlador;
use App\Http\Controllers\InfoPost2Controlador;
use App\Http\Controllers\PostParametrosControlador;
use App\Http\Controllers\PostParametros2Controlador;
use App\Http\Controllers\PostParamCorrecionControlador;
use App\Http\Controllers\PostCorEnviarParamController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/hola', function() {
    return view('saludo');
});*/
//version con controlador
Route::get('/hola', [HolaControlador::class, 'holaMundo']);

/*Route::get('/home',function(){
   return view('home');
});*/
Route::get('/home', [HomeControlador::class,'paginaInicio']);


/*Route ::get('/galeria',function(){
    return view('galeria');
});*/

Route ::get('/galeria',[GaleriaControlador::class,'paginaGaleria']);


/*Route ::get('/get_ejemplo',function(){
    return view('get_ejemplo');
});*/
Route ::get('/get_ejemplo',[GetEjemploControlador::class,'paginaGetEjemplo']);


/*Route ::post('/InformacionPost',function(){
    return view('InformacionPost');
});*/
Route ::post('/InformacionPost',[InfoPostControlador::class,'paginaPost']);

/*Route ::post('/InformacionPost2',function(Illuminate\Http\Request $request){
    $nombre = $request -> input('nombre');
    $apellido = $request -> input('apellido');
    
    return view('InformacionPost2', compact('nombre','apellido'));
});*/

Route ::post('/InformacionPost2',[InfoPost2Controlador::class,'paginaGetEjemplo2']);


/*Route ::post('/PostParametros1',function($numeroTel=null){
    
    return view('PostParametros1');
});*/

Route ::post('/PostParametros1',[PostParametrosControlador::class,'paginaPostParametros']);

/*Route ::post('/PostParametros2',function( $request,$numeroTel=null){
    $nombre = $request -> input('nombre');
    $apellido = $request -> input('apellido');
    $edad = $request -> input('edad');
    $numeroTel= $request -> input('numeroTel');
    return view('PostParametros2', compact('nombre','apellido','edad','numeroTel'));
});*/

Route ::post('/PostParametros2',[PostParametros2Controlador::class,'paginaPostParametros2']);

/*Route ::post('/PostParametrosCorrecion',function(Illuminate\Http\Request $request){
    $nombre = $request -> input('nombre');
    $apellido = $request -> input('apellido');
    $edad = $request -> input('edad');
    $numeroTel= $request -> input('numeroTel');
    return view('PostParametrosCorrecion') ->with(['nombre'=>$nombre,'apellido'=>$apellido,'edad'=>$edad,'numeroTel'=>$numeroTel]);
});*/
//version con controladores
Route::post('/PostParametrosCorrecion', [PostParamCorrecionControlador::class, 'datosForm']);

/*Route::get('/mostrarNombre/{nombre}/{apellido}/{edad}/{numeroTel?}',function($nombre,$apellido,$edad,$numeroTel=null){
    return "Nombre: $nombre <br> Apellido: $apellido <br> Edad: $edad <br> NumeroTel: $numeroTel";
    
});*/

Route::get('/mostrarNombre/{nombre}/{apellido}/{edad}/{numeroTel?}',[PostCorEnviarParamController::class,'fucionEnviarParametros']);


//pruebas
Route ::get('/Weminars_1',function(){
    return view('Weminars_1');
});




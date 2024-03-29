<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\Orquestador;
use App\Http\Livewire\Login;
use App\Http\Livewire\Admin;
use App\Http\Livewire\Cliente;
use App\Http\Livewire\Administrador\Contactos;
use App\Http\Livewire\Administrador\Postulantes;
use App\Http\Livewire\Administrador\Cuentas;
use App\Http\Livewire\Administrador\Users;
use App\Http\Livewire\Administrador\Allperfiles;
use App\Http\Livewire\Administrador\Requerimientos;
use App\Http\Livewire\ComponentsCliente\Perfiles;
use App\Http\Livewire\ComponentsCliente\Resetpassword;
use App\Http\Livewire\ComponentsCliente\Sendemail;
use App\Http\Middleware\SessionValidation;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', Login::class);
Route::get('/resetpassword', Resetpassword::class);
Route::get('/sendemail', Sendemail::class);
Route::get('/logout',[GlobalController::class, 'logout']);
//ADMIN
Route::get('/admin', Admin::class)->middleware(SessionValidation::class);
Route::get('/contactos', Contactos::class)->middleware(SessionValidation::class);
Route::get('/postulantes', Postulantes::class)->middleware(SessionValidation::class);
//Route::get('/cuentas', Cuentas::class)->middleware(SessionValidation::class);
Route::get('/requerimientos', Requerimientos::class)->middleware(SessionValidation::class);
Route::get('/allperfiles', Allperfiles::class)->middleware(SessionValidation::class);
Route::get('/users', Users::class)->middleware(SessionValidation::class);
//CLIENTE
Route::get('/cliente', Cliente::class)->middleware(SessionValidation::class);
Route::get('/perfiles', Perfiles::class)->middleware(SessionValidation::class);
//GENERAR PASSWD
Route::get('/generar',[GlobalController::class, 'generar_hash']);

Route::get('/test', function(){
    //return view('mail.global')->with('title', "Actualización de contraseña")->with('name', Session::get('user')["nombre_completo"])->with('password',"asd");
});
Route::get('/test2', function(){
    return view('asd');
});


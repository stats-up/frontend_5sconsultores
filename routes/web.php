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
use App\Http\Livewire\Administrador\Requerimientos;
use App\Http\Livewire\ComponentsCliente\Perfiles;
use App\Http\Livewire\ComponentsCliente\ResetPassword;
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
Route::get('/logout',[GlobalController::class, 'logout']);
Route::get('/admin', Admin::class)->middleware(SessionValidation::class);
Route::get('/cliente', Cliente::class)->middleware(SessionValidation::class);
Route::get('/perfiles', Perfiles::class)->middleware(SessionValidation::class);
Route::get('/contactos', Contactos::class)->middleware(SessionValidation::class);
Route::get('/postulantes', Postulantes::class)->middleware(SessionValidation::class);
Route::get('/cuentas', Cuentas::class)->middleware(SessionValidation::class);
Route::get('/users', Users::class)->middleware(SessionValidation::class);
Route::get('/requerimientos', Requerimientos::class)->middleware(SessionValidation::class);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Login;
use App\Http\Livewire\Admin;
use App\Http\Livewire\Cliente;
use App\Http\Livewire\Perfiles;
use App\Http\Controllers\GlobalController;
use App\Http\Livewire\Administrador\Contactos;
use App\Http\Livewire\Administrador\Postulantes;
use App\Http\Livewire\Administrador\Cuentas;

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

Route::get('/admin', Admin::class);

Route::get('/logout',[GlobalController::class, 'logout']);

Route::get('/cliente', Cliente::class);

Route::get('/perfiles', Perfiles::class);

Route::get('/contactos', Contactos::class);

Route::get('/postulantes', Postulantes::class);

Route::get('/cuentas', Cuentas::class);
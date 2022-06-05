<?php

use Illuminate\Support\Facades\Route;

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
Route::get('agendamento/all', 'App\Http\Controllers\AgendamentoController@all');
Route::resources([
    'agendamento' => App\Http\Controllers\AgendamentoController::class
]);
Route::get('/', function () {
  
    return view('welcome');
});

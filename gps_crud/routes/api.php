<?php

use App\Http\Controllers\CaminhaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\GpsController;

Route::post('/caminhoes', 'CaminhaoController@store');

Route::resource('caminhoes', CaminhaoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('entregas', EntregaController::class);
Route::resource('gps', GpsController::class);

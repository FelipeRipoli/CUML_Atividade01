<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/atividade01', function () {
    return view('restaurante');
});

Route::get('/cliente', function(){
    echo 'Olá, Cliente!';
})->name('cliente');

Route::get('/pedido', function(){
    echo 'Pedido n° 01 está pronto!';
})->name('pedido');

Route::get('/produto', function(){
    echo 'Pedido é Macarrão.';
})->name('produto');
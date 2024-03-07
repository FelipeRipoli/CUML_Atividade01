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
    return view('pedido');
});

Route::get('/cliente', function(){
    return view('cliente');
    echo 'Olá, Cliente!';
})->name('cliente');

Route::get('/pedido', function(){
    return view('pedido');
    echo 'Pedido n° 01 está pronto!';
})->name('pedido');

Route::get('/produto', function(){
    return view('produto');
    echo 'Pedido é Macarrão.';
})->name('produto');
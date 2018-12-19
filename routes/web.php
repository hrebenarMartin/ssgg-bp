<?php

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

Auth::routes();

Route::get('/', function (){
    echo "HOJ";
    echo "Mas sa?";
    echo "Ano, ty?";
    echo "Nie";
})->name('home');

Route::post('/', function (){
    echo "HOJ";
    echo "Mas sa?";
    echo "Ano, ty?";
    echo "Nie";
    echo "HOJ";
    echo "Mas sa?";
    echo "Ano, ty?";
    echo "Nie";
    echo "HOJ";
    echo "Mas sa?";
    echo "Ano, ty?";
    echo "Nie";
    echo "HOJ";
    echo "Mas sa?";
    echo "Ano, ty?";
    echo "Nie";
    echo "HOJ";
    echo "Mas sa?";
    echo "Ano, ty?";
    echo "Nie";
})->name('home');
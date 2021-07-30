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


Route::get('/', function () {
    return view('home');
});
Route::get("/home", function(){
    return view('home');
});
Route::get('/registrar_lectura', function () {
    return view('registrar_lectura');
});
Route::get('/mediciones', function () {
    return view('mediciones');
});
Route::view("/","home")->name("home");
Route::view("/registrar_lectura", "registrar_lectura")->name("registrar_lectura");
Route::view("/mediciones","mediciones")->name("mediciones");
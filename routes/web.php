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
    return view('welcome');
});

Auth::routes();
Route::view('/test','test');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/age', [\App\Http\Controllers\NamesController::class, 'getAge']);
Route::get('/names/sortByAge/{page}', [\App\Http\Controllers\NamesController::class, 'sortByAge']);
Route::get('/names/sortByName/{page}', [\App\Http\Controllers\NamesController::class, 'sortByName']);
Route::get('/names/sortByOcupation/{page}', [\App\Http\Controllers\NamesController::class, 'sortByOcupation']);
Route::get('/names/sortById/{page}', [\App\Http\Controllers\NamesController::class, 'sortById']);

Route::view('/create', 'newname');
Route::post('/create', [\App\Http\Controllers\NamesController::class, 'create']);

Route::get( '/name/{id}' , [\App\Http\Controllers\NamesController::class , 'findById']);
Route::get( '/update/{id}', [\App\Http\Controllers\NamesController::class , 'updateForm']);
Route::post("/update/update" , [\App\Http\Controllers\NamesController::class , "updateName"]);

Route::view('/kw/calc','kw/showForDate');
Route::view('/kw/create', 'kw/create');
Route::post('/kw/store' ,[App\Http\Controllers\KwController::class, 'store']);
Route::get( '/calculate' , [App\Http\Controllers\KwController::class , 'calc']);

Route::view('/showForMonth','kw/calcForMonth');
Route::get( '/kw/calcForMonth',[App\Http\Controllers\KwController::class, 'calcForMonth']);
Route::view('/kw/period','kw/getPeriod');
Route::get( '/kw/calcPeriod',[App\Http\Controllers\KwController::class , 'calcPeriod']);
Route::view('/kw/showPeriod','/kw/showPeriod');
Route::get( "/kw/{id}",[App\Http\Controllers\KwController::class , 'index']);
Route::get( '/names/{page}', [\App\Http\Controllers\NamesController::class, 'index']);
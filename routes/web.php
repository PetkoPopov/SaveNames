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
Route::get('/names', [\App\Http\Controllers\NamesController::class, 'index']);
Route::get('/age', [\App\Http\Controllers\NamesController::class, 'getAge']);
Route::get('/sortByAge', [\App\Http\Controllers\NamesController::class, 'sortByAge']);
Route::get('/sortByName', [\App\Http\Controllers\NamesController::class, 'sortByName']);
Route::get('/sortByOcupation', [\App\Http\Controllers\NamesController::class, 'sortByOcupation']);
Route::get('/sortById', [\App\Http\Controllers\NamesController::class, 'sortById']);
//Route::get('/create',[\App\Http\Controllers\NamesController::class , 'create']);
Route::view('/create', 'newname');
Route::post('/create', [\App\Http\Controllers\NamesController::class, 'create']);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/name/{id}' , [\App\Http\Controllers\NamesController::class , 'findById']);
Route::get('update/{id}', [\App\Http\Controllers\NamesController::class , 'updateForm']);
Route::post("update/update" , [\App\Http\Controllers\NamesController::class , "updateName"]);
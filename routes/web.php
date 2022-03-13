<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::view('/test','test');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/age', [\App\Http\Controllers\NamesController::class, 'getAge']);
Route::get('/names/sortByAge', [\App\Http\Controllers\NamesController::class, 'sortByAge']);
Route::get('/names/sortByName', [\App\Http\Controllers\NamesController::class, 'sortByName']);
Route::get('/names/sortByOcupation', [\App\Http\Controllers\NamesController::class, 'sortByOcupation']);
Route::get('/names/sortById', [\App\Http\Controllers\NamesController::class, 'sortById']);

Route::view('/create', 'newname');
Route::post('/create', [\App\Http\Controllers\NamesController::class, 'create']);

Route::get( '/name/{id}' , [\App\Http\Controllers\NamesController::class , 'findById']);
Route::get( '/update/{id}', [\App\Http\Controllers\NamesController::class , 'updateForm']);
Route::post("/update/update" , [\App\Http\Controllers\NamesController::class , "updateName"]);

Route::view('/kw/calc','kw/showForDate');
Route::view('/kw/create', 'kw/create');
Route::post('/kw/create' ,[App\Http\Controllers\KwController::class, 'create']);
Route::get( '/calculate' , [App\Http\Controllers\KwController::class , 'calc']);

Route::view('/showForMonth','kw/calcForMonth');
Route::get( '/kw/calcForMonth',[App\Http\Controllers\KwController::class, 'calcForMonth']);
Route::view('/kw/period','kw/getPeriod');
Route::get( '/kw/calcPeriod',[App\Http\Controllers\KwController::class , 'calcPeriod']);
Route::view('/kw/showPeriod','/kw/showPeriod');
Route::get( "/kw/{id}",[App\Http\Controllers\KwController::class , 'index']);
Route::get( '/names/{page}/{sortBy}', [\App\Http\Controllers\NamesController::class, 'index']);
//Route::view('/allCars','allCars');
Route::get('/allCars',[App\Http\Controllers\CarController::class , 'index']);
Route::get('/worker/new', [App\Http\Controllers\WorkerController::class , 'new']);
Route::get('/worker/all',[App\Http\Controllers\WorkerController::class , 'index']);
Route::get('/worker/create' , [App\Http\Controllers\WorkerController::class , 'create']);
Route::get('/worker/delete/{id}' , [App\Http\Controllers\WorkerController::class, 'destroy']);
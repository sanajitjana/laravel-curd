<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/new', 'new-data');
Route::post('/data_reg', [contactController::class,'saveData']);
Route::get('/data-list',[contactController::class,'getData']);
Route::get('/data-delete/{id}',[contactController::class,'deleteData']);
Route::get('/data-edit/{id}',[contactController::class,'showData']);
Route::post('/update_data/{id}', [contactController::class,'updateData']);
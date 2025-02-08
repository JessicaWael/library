<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/books/create', [BookController::class,'create']);
Route::get('/books/index', [BookController::class,'index']);
Route::post('/books/store', [BookController::class,'store']);
Route::get('/', function () {
    return view('welcome');

});
Route::get('/books/update/{id}', [BookController::class,'update']);
Route::post('/books/update', [BookController::class,'execute']);
Route::delete('/books/destroy/{id}', [BookController::class, 'destroy']);
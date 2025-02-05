<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/books/create', [BookController::class,'create']);
Route::get('/books/index', [BookController::class,'index']);
Route::post('/books/store', [BookController::class,'store']);
Route::get('/', function () {
    return view('welcome');
});
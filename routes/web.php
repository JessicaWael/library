<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/books/create', [BookController::class,'create']);
Route::post('/books/store', [BookController::class,'store']);
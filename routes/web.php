<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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






Route::get('/', [BookController::class, 'showBooks'])->name('/');

Route::post('/', [BookController::class, 'addBooks'])->name('create');

Route::put('/update/{id}', [BookController::class, 'updateBook'])->name('update');

Route::delete('/delete/{id}',[BookController::class, 'deleteBook'])->name('delete.book');





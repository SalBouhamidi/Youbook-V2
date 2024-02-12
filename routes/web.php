<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


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



Route::post('/ReserveBook/{id}', [ReservationController::class, 'store'])->name('reserve.book');

Route::get('/register',[RegisterController:: class, 'index'])->name('register');
Route::post('/register',[RegisterController:: class, 'store'])->name('createaccount');

Route::get('/login',[LoginController:: class, 'index'])->name('login');
Route::post('/login',[LoginController:: class, 'store'])->name('userlogin');

Route::get('/logout',[LoginController:: class, 'logout'])->name('logout');

Route::get('/studentpage', [BookController::class, 'studentpage'])->name('studentpage');
Route::get('/studentpage', [BookController::class, 'showBooksforstudent'])->name('studentpage');

Route::get('/reservedbooks', [ReservationController::class, 'showmybooks'])->name('mybooks');














<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ppdbcontroller;

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


Route::get('/', [ppdbController::class, 'halaman'])->name('halaman');
Route::get('/register', [ppdbController::class, 'register'])->name('register.post');
Route::get('/jurusan', [ppdbController::class, 'jurusan'])->name('jurusan.post');



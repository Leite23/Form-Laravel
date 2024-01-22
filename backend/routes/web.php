<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return to_route('auth.index');
});

Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::get('/register', [AuthController::class, 'create'])->name('auth.create');
Route::post('/registerUser', [AuthController::class, 'store'])->name('auth.store');
Route::post('/consultUser', [AuthController::class, 'consult'])->name('auth.consult');



<?php

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

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home']);

Route::get('/about', [MainController:: class, 'about']);

Route::get('/review', [MainController::class, 'review']);
Route::post('/review/check', [MainController::class, 'review_check']);

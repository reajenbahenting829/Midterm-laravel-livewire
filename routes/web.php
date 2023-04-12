<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicBarController;

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

Route::get('/', [MusicBarController::class, 'show']);
Route::get('/home', [MusicBarController::class, 'home']);
Route::post('users/{user}/toggle_free_access', [\App\Http\Controllers\Admin\UserController::class, 'toggle_free_access'])
->name('users.toggle_free_access');

<?php

use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteGroup;
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
//for Controllers
// Home route
Route::get('/', function () {
    return view('welcome');
});

// Controller-based route group
Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')->name('users.index');  // Correct route for displaying users
    Route::post('/users', 'create')->name('users.create');  // Correct route for creating users
});


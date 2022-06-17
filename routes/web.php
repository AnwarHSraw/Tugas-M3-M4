<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

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
Route::get('/register', [AuthController::class, 'register']);

Route::post('/simpanuser', [AuthController::class, 'register']);

Route::get('/', [AuthController::class, 'login']);

Route::get('/ceklogin', [AuthController::class, 'ceklogin']);

// Route::get('/register', function () {
//     return view('register');
// });

// Route::post('/simpanuser', function () {
//     return view('register');
// });

// Route::get('/register','AuthController@register');

// Route::post('/simpanuser','AuthController@simpanuser');
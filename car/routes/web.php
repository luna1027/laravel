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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'index')->name('idx');
Route::view('/index2', 'index2')->name('hello');

use App\Http\Controllers\CarController;

// Route::get('/sayHello',  [CarController::class, 'sayHello'])->name('hello');
// Route::get('/cars',  [CarController::class, 'cars'])->name('cars');
Route::resource('cars', CarController::class);

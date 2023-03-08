<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HotelController;
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
    return view('welcome');
});


Route::get('students/excel', [StudentController::class, 'excel'])->name('excel');
Route::get('students/child', [StudentController::class, 'child'])->name('child');
Route::resource('students', StudentController::class);


Route::get('hotels/f2', [HotelController::class, 'f2'])->name('f2');
Route::get('hotels/f3', [HotelController::class, 'f3'])->name('f3');
Route::get('hotels/f4', [HotelController::class, 'f4'])->name('f4');
Route::resource('hotels', HotelController::class);

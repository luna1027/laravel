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

// Route::get('Path', function () {
//     return view('PageName');
// })->name('NickName');


Route::get('/', function () {
    // return view('luna');
    return view('home');
});

Route::get('/f1', function () {
    return view('floor_1');
})->name('f1');

Route::get('/f2', function () {
    return view('floor_2');
})->name('f2');

Route::get('/f3', function () {
    return view('floor_3');
})->name('f3');

Route::get('/f4', function () {
    return view('floor_4');
})->name('f4');

// Route::get('/', function () {
//     return view('test');
// });

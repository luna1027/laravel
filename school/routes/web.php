<?php

use Illuminate\Routing\Route as RoutingRoute;
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

// Route::get('Path', function () {
//     return view('PageName');
// })->name('NickName');

// Route::view('Path', 'PageName',['key' => 'value'])->name('NickName');

// Route::get('/', function () {
//     // return view('welcome');
//     return view('school');
// })->name('index');

// Route::get('/php', function () {
//     return view('php_page');
// })->name('p1');
// Route::get('/ht', function () {
//     return view('html_page');
// })->name('p2');
// Route::get('/css', function () {
//     return view('css_page');
// })->name('p3');
// Route::get('/js', function () {
//     return view('js_page');
// })->name('p4');
// Route::get('/jq', function () {
//     return view('jqery_page');
// })->name('p5');
// Route::get('/la', function () {
//     return view('laravel_page');
// })->name('p6');

Route::view('/', 'school', ['name' => 'Luna'])->name('index');

Route::view('/php', 'php_page')->name('p1');
Route::view('/ht', 'html_page')->name('p2');
Route::view('/css', 'css_page')->name('p3');
Route::view('/js', 'js_page')->name('p4');
Route::view('/jq', 'jqery_page')->name('p5');
Route::view('/la', 'laravel_page')->name('p6');

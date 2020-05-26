<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//Route::get()
Route::get('/addBook', 'bookaddition@addbook');
Route::post ('/insertbook', 'bookaddition@insertbook');

Route::get('/showBooks', 'bookaddition@showingbook');



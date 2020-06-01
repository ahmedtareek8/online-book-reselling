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

Route::get('/login', function() {
    return view('login');

});
Route::post('/registeration', function() {//for showing the registration bage
    return view('registercss');

});
Route::get('/useraddbook', function() {//for showing the addbook design bage
    return view('addbookview');

});



//Route::get()
Route::get('/addBook', 'bookaddition@addbook');
Route::post ('/insertbook', 'bookaddition@insertbook');
Route::get('/showBooks', 'bookaddition@showingbook');
Route::post('/insertregisterationdata', 'users@insertuserdata');//for registration
Route::post('/loginvalidate', 'users@login');//for login
Route::post('/logout', 'users@logout');//for logout



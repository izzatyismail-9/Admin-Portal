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
    return view('login');
});

// Route::view('/checkout-now', 'checkout');
// .
// .https://stackoverflow.com/questions/61940124/how-to-add-routes-in-an-spa-using-laravel
//
// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any', '.*');    // Must be at the end

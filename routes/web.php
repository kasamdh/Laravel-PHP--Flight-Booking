<?php

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

// Route::get('/Flights', function () {
//     return view('booking.main.createreservation');
// });


// Route to get clitnt info
Route::get('/Flights','ClientController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

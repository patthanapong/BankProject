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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bank', 'BankController@index');
Route::group(['middleware'=>['auth']], function() {
Route::get('/bank/create', 'BankController@cretae');
Route::post('/bank', 'BankController@store');
Route::get('/bank/{bank}/edit', 'BankController@edit');
Route::post('/bank/{bank}', 'BankController@update');
Route::delete('/bank/{bank}', 'BankController@destroy');
});

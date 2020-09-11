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

Route::get('/', 'c_link@index')->name('home');

Auth::routes();

Route::get('/home', 'c_link@index')->name('home');

Route::post('/addurl', 'c_link@add');

Route::post('/delete', 'c_link@delete');

Route::post('/redirect', 'public_c_link@redirect');

Route::get('/url/{id}', function ($id) {
    return view('url', compact('id'));
});


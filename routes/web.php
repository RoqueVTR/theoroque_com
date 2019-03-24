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
    return view('index');
});

Route::get('/paysbook', function() {
    return redirect("https://paysbook.co/auth/register?id=vrroque");
});

// Route::group(['prefix' => 'shy'], function() {
//     Route::get('/', 'ShyController@index');
//     Route::get('/1', 'ShyController@first');
//     Route::get('/2', 'ShyController@second');
//     Route::get('/3', 'ShyController@third');
//     Route::get('/4', 'ShyController@fourth');
//     Route::get('/5', 'ShyController@fifth');
//     Route::get('/6', 'ShyController@sixth');
//     Route::get('/7', 'ShyController@seventh');
//     Route::get('/last', 'ShyController@last');
// });

// Route::post('/contact', 'ContactController@submit');

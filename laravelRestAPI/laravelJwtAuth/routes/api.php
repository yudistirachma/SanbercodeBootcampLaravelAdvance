<?php


Route::namespace('Auth')->group(function (){
    Route::post('register', 'RegisterController');
    Route::post('login', 'LoginController');
    Route::post('logout', 'LogoutController');
});

Route::get('user', 'UserController');

Route::prefix('buku')->group(function () {
    Route::get('/', 'BukuController@index');
    Route::get('get', 'BukuController@get');
    Route::delete('delete', 'BukuController@delete');
    Route::put('update', 'BukuController@update');
    Route::post('insert', 'BukuController@store');
});

Route::prefix('pinjam')->group(function () {
    Route::post('/', 'PinjamController@pinjam');
    Route::get('index', 'PinjamController@index');
    Route::get('get', 'PinjamController@get');
    Route::delete('delete', 'PinjamController@delete');
    Route::put('update', 'PinjamController@update');
});








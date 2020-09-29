<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckRole;

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware("auth")->group(function () {
    Route::get('/route1', function ()
    {
        return view('route1');
    })->middleware(CheckRole::class)->name('route1');
    Route::get('/route2', function ()
    {
        return view('route2');
    })->middleware(CheckRole::class)->name('route2');
});

Route::get('/route3', function ()
{
    return view('route3');
})->name('route3');

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::get('/p/create', 'PostsController@create');  // rotta post -> http://127.0.0.1:8000/p/create
Route::post('/p', 'PostsController@store');

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');  // rotta profile ->http://127.0.0.1:8000/profile/1

// ROTTA GENERICA
Route::get("{any?}", function () {
    return view("welcome");
})->where("any", ".*");

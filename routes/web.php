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

// 1. rotta home - pre login/register
Route::get('/', function () {
    return view('welcome');
});

// 1. rotta home - after login/register
Route::get('/home', function () {
    return view('welcome');
});


// 2. rotte posts
Route::get('/p/create', 'PostsController@create');  // rotta post -> http://127.0.0.1:8000/p/create
Route::get('/p/{post}', 'PostsController@show');  
Route::post('/p', 'PostsController@store');

// 3. rotte profile
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');  // rotta profile ->http://127.0.0.1:8000/profile/1
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('/profile/{user}', 'ProfileController@update')->name('profile.update');

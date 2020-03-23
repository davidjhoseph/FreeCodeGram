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

Route::get('/home', function () {
    return redirect('profile/'. auth()->user()->id);
});

Auth::routes();
Route::get('profile/{user}', 'ProfileController@index');
Route::get('profile/update/{user}', 'ProfileController@edit');
Route::get('profile/create/{user}', 'ProfileController@create');
Route::patch('profile/{id}', 'ProfileController@update');
Route::post('/follow/{user}', 'FollowsController@store');

Route::post('profile', 'ProfileController@store');
Route::resource('post', 'PostController');

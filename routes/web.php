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
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PublicController@index')->name('index');
Route::get('/about', 'PublicController@about')->name('about');
Route::get('/contact', 'PublicController@contact')->name('contact');
Route::get('/idcard', 'PublicController@idcard')->name('idcard');
Route::post('/idcard', 'PublicController@createid')->name('createId');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

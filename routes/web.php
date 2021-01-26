<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.main');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Auth::routes();

Route::get('/home/postcreate', 'Api\PostController@place_create');

Route::get('/home/postlists', 'Api\PostController@index');

Route::get('/home/postedit', 'Api\PostController@editpost');

Route::get('/home/settings', 'HomeController@accountsetting');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/signin', 'Auth\LoginController@showLoginForm');

Route::get('/signup', 'Auth\RegisterController@showRegistrationForm');



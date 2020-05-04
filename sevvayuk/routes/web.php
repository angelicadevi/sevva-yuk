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
    return view('welcome');
})->name('opening');

Route::get('/admin', function () {
    return view('welcomeadmin');
})->name('openingadmin');

//Route::get('/v1/register', 'AdminController@register');
//Route::post('/v1/registerPost', 'AdminController@registerPost');

Route::get('/v1/login', 'AdminController@login');
Route::post('/v1/loginPost', 'AdminController@loginPost');

//Route::get('v1/logout', 'AdminController@logout');

Route::get('/v1/home', 'AdminController@index')->name('home');

Route::get('register', 'UserController@register');
Route::post('registerPost', 'UserController@registerPost');

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/v2', 'ProductController');  

route::post('/v2/cari', 'ProductController@cari');
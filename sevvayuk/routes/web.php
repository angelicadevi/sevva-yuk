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

Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/loginPost', 'AdminController@loginPost');
Route::get('/admin/logout', 'AdminController@logout');

Route::get('/admin/home', 'AdminController@index')->name('home');

// START ROUTES FOR RATING
Route::get('/v1/rating/{product_id}', 'RatingController@formRating');
Route::post('/v1/rating/{product_id}', 'RatingController@createRating');
// END ROUTES FOR RATING

Route::get('register', 'UserController@register');
Route::post('registerPost', 'UserController@registerPost');

// Input Order 

Route::resource('/v2', 'ProductController');  
Route::post('/v2/cari', 'ProductController@cari');
Route::get('/v2/create/{id}', 'ProductController@create');

// Input Store

Route::resource('/v3', 'StoreController');  
Route::post('/v3/cari', 'StoreController@cari');

// Input Order

Route::resource('/v4', 'OrderController');  
Route::get('/v4/create/{id}', 'OrderController@create');
Route::post('/v4/cari', 'OrderController@cari');
Route::post('/v4/review/{id}', 'OrderController@review');

//update trans admin
Route::get('/admin/updateconfirmed/{id}', 'TransactionController@updateconfirmed');
Route::get('/admin/updateremembered/{id}', 'TransactionController@updateremembered');
Route::get('/admin/updatecanceled/{id}', 'TransactionController@updatecanceled');
 
 





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

Route::get('/', 'HomePageController@index');
Route::get('/listing', 'ListingPageController@index');
Route::get('/details', 'DetailsPageController@index');


Route::group(['prefix' => 'back'], function() {
    
	Route::get('/', 'Admin\DashboardController@index');
	Route::get('/category', 'Admin\CategoryController@index');
	Route::get('/category/create', 'Admin\CategoryController@create');
	Route::get('/category/edit', 'Admin\CategoryController@edit');
});

Route::get('/aa',function(){
	return view('front.details');
});


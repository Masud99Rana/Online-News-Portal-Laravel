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
Route::get('/details', 'DbController@index');


Route::group(['prefix' => 'back'], function() {
    
	Route::get('/', 'Admin\DashboardController@index');
	Route::get('/category', 'Admin\CategoryController@index');
	Route::get('/category/create', 'Admin\CategoryController@create');
	Route::get('/category/edit', 'Admin\CategoryController@edit');

	
	Route::get('/permission',[
		'uses'=>'Admin\PermissionController@index',
		'as'=>'permission-list',
		'middleware'=>'permission:Permission List|All'
	]);
	Route::get('/permission/create',[
		'uses'=>'Admin\PermissionController@create',
		'as'=>'permission-create',
		'middleware'=>'permission:Permission Create|All'
	]); 
	Route::post('/permission/store',[
		'uses'=>'Admin\PermissionController@store',
		'as'=>'permission-store', 
		'middleware'=>'permission:Permission List|All'
	]); 
	Route::get('/permission/edit/{id}',  [
		'uses'=>'Admin\PermissionController@edit',
		'as'=>'permission-edit',
		'middleware'=>'permission:Permission Update|All'
	]);  
	Route::put('/permission/edit/{id}', [
		'uses'=>'Admin\PermissionController@update',
		'as'=>'permission-update',
		'middleware'=>'permission:Permission Update|All'
	]); 
	Route::delete('/permission/delete/{id}', [
		'uses'=>'Admin\PermissionController@destroy',
		'as'=>'permission-delete',
		'middleware'=>'permission:Permission Delete|All'
	]);


	Route::get('/roles', 'Admin\RoleController@index');
	Route::get('/roles/create', 'Admin\RoleController@create');
	Route::post('/roles/store', 'Admin\RoleController@store');
	Route::get('/roles/edit/{id}', [
		'uses'=>'Admin\RoleController@edit',
		'as'=>'role-edit'
	]);
	Route::put('/roles/edit/{id}', [
		'uses'=>'Admin\RoleController@update',
		'as'=>'role-update'
	]);
	Route::delete('/roles/delete/{id}', [
		'uses'=>'Admin\RoleController@destroy',
		'as'=>'role-delete']
	);

	Route::get('/author', 'Admin\AuthorController@index');
	Route::get('/author/create', 'Admin\AuthorController@create');
	Route::post('/author/store', 'Admin\AuthorController@store');
	Route::get('/author/edit/{id}', ['uses'=>'Admin\AuthorController@edit','as'=>'author-edit'] );
	Route::put('/author/edit/{id}', ['uses'=>'Admin\AuthorController@update','as'=>'author-update'] );
	Route::delete('/author/delete/{id}', ['uses'=>'Admin\AuthorController@destroy','as'=>'author-delete'] );

});

Route::get('/aa',function(){
	return view('front.details');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

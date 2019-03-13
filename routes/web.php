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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/register', 'Auth\RegisterController');

// Route::resource('/login', 'Auth\LoginController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
	'admin/products' => 'ProductController',
	'admin/categories' => 'CategoriesController',
	'admin/posts' => 'PostsController',
	'admin/relations' => 'RelationsController',
	'admin/reviews' => 'ReviewsController',
	'admin/shops' => 'ShopsController',
	'admin/permissions' => 'PermissionsController',
	// 'admin/exel' => 'ExelController'
]);

// Route::get('admin/products/store', 'ProductController@store');
Route::get('admin/products/create', 'ProductController@create')->name('products.create');
Route::put('admin/products/store', 'ProductController@store')->name('products.store');
Route::get('admin/products/index/{id}', 'ProductController@idIndex')->name('products.index.id');
// Route::get('admin/products/index', 'ProductController@index');
// Route::get('admin/products/show/{id?}', 'ProductController@show');
// Route::put('admin/products/update/{id}', 'ProductController@update');
// Route::get('products/active/{id}/{act}', 'ProductController@active');
// Route::get('products/showstatus/{act}', 'ProductController@showStatus');
Route::get('admin/products/{id}/edit', 'ProductController@update')->name('products.id.edit');
// Route::put('admin/exel/store', 'ExelController@store');

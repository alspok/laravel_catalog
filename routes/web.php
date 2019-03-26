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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('/food');
});

Route::get('/food', function(){
	return view('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/food', 'HomeController@index')->name('logout');
Route::resource('register', 'Auth\RegisterController');
Route::resource('login', 'Auth\LoginController');

Route::resources([
	// 'admin/products' => 'ProductController',
	'admin/categories' => 'CategoriesController',
	'admin/posts' => 'PostsController',
	'admin/relations' => 'RelationsController',
	'admin/reviews' => 'ReviewsController',
	'admin/shops' => 'ShopsController',
	'admin/permissions' => 'PermissionsController',
]);

// Route::get('admin/products/store', 'ProductController@store');
Route::get('admin/products/create', 'ProductController@create')->name('products.create');
Route::post('admin/products/store', 'ProductController@store')->name('products.store');
Route::get('admin/products/index/{id}', 'ProductController@idIndex')->name('products.index.id');
Route::get('admin/products/index', 'ProductController@index')->name('products.index');
// Route::get('', 'TimeController@time')->name('time');
// Route::get('admin/products/index', 'ProductController@index');
// Route::get('admin/products/show/{id?}', 'ProductController@show');
// Route::get('admin/products/update/{id}', 'ProductController@update')->name('products.update');
// Route::put('admin/products/update', 'ProductController@update')->name('products.update');
Route::get('admin/products/active/{id}/{act}', 'ProductController@active')->name('product.active');
// Route::get('products/showstatus/{act}', 'ProductController@showStatus');
Route::post('admin/products/edit/{id}', 'ProductController@edit')->name('products.edit');
Route::post('admin/products/update/{id}', 'ProductController@update')->name('products.update');
Route::post('admin/products/softdelete/{id}', 'ProductController@softDelete')->name('products.softdelete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

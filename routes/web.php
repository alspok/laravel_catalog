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

// Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function(){
// 	Route::match(['get', 'post'], 'admin/products/create', 'ProductController@create');
// 	Route::match(['get', 'post'], 'admin/products/store', 'ProductController@store');
// 	Route::match(['get', 'post'], 'admin/products/index', 'ProductController@index');
// });
// Route::group(['middleware' => 'App\Http\Middleware\GuestMiddleware'], function(){
// 	// Route::match(['get', 'post'], 'admin/products/index', 'ProductController@index');
// 	Route::get('admin/products/index', 'ProductController@index');
// });
// Auth::routes();

// Route::get('/', function () {
//     return view('resources/views/food');
// });
Route::view('/', 'food');
Route::view('admin/layouts', 'food');
Route::view('/logout', 'food');
Route::view('/layouts', 'food');


// Route::get('/', function(){
// 	return view('admin/products/admin_index');
// });

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/food', 'HomeController@index')->name('logout');
Route::resource('register', 'Auth\RegisterController');
// Route::resource('login', 'Auth\LoginController');

Route::resources([
	'admin/categories' => 'CategoriesController',
	'admin/posts' => 'PostsController',
	'admin/relations' => 'RelationsController',
	'admin/reviews' => 'ReviewsController',
	'admin/shops' => 'ShopsController',
	'admin/permissions' => 'PermissionsController',
]);

Route::get('admin/products/create', 'ProductController@create')->name('products.create')->middleware('admin');
Route::post('admin/products/store', 'ProductController@store')->name('products.store');
Route::get('admin/products/index/{id}', 'ProductController@idIndex')->name('products.index.id');
Route::get('admin/products/index', 'ProductController@index')->name('products.index')->middleware('admin');
Route::get('admin/products/admin_index', 'ProductController@admin_index')->name('products.admin_index');
Route::get('admin/products/guest_index', 'ProductController@guest_index')->name('products.guest_index');
Route::get('admin/products/active/{id}/{act}', 'ProductController@active')->name('products.active');
Route::post('admin/products/edit/{id}', 'ProductController@edit')->name('products.edit');
Route::post('admin/products/update/{id}', 'ProductController@update')->name('products.update');
Route::post('admin/products/softdelete/{id}', 'ProductController@softDelete')->name('products.softdelete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

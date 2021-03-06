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

Auth::routes();

Route::view('/', 'food');
Route::view('/food', 'food');
Route::view('admin/layouts', 'food');
Route::view('/logout', 'login');
Route::view('/layouts', 'food');

// Route::resource('register', 'Auth\RegisterController');

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

Route::post('admin/posts/store', 'PostsController@store')->name('posts.store');
Route::post('posts/multiple', 'RelationController@multiple')->name('posts.multiple');

Route::post('mail/send/posts', 'MailController@sendPosts')->name('posts.send');
Route::get('mail/send', 'MailController@send')->name('send');
Route::post('mail/send', 'MailController@send')->name('mail.send');

Route::get('/home', 'HomeController@index')->name('home');


Route::view('/cars', 'admin/cars/cars')->name('cars');
Route::post('cars/store', 'CarController@store')->name('cars.store');
Route::post('cars/update', 'CarController@update')->name('cars.update');
Route::post('cars/upstore/{id}', 'CarController@up_store')->name('cars.upstore');
Route::post('cars/delete', 'CarController@delete')->name('cars.delete');
Route::get('cars/show_table', 'CarController@index')->name('cars.index');
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


//User or frontend routes.........

Route::group(['namespace' => 'User'], function(){
//home route
Route::get('/', 'HomeController@index');
//post route
Route::get('/post/{post}', 'PostController@post')->name('post');
Route::get('/post/tag/{tag}', 'HomeController@tag')->name('tag');
Route::get('/post/category/{category}', 'HomeController@category')->name('category');

});



//User or frontend routes.........


Route::group(['namespace' => 'Admin'], function(){

Route::get('admin/home', 'HomeController@index')->name('admin.home');	

//user route
Route::resource('admin/user', 'UserController');

//user roles route
Route::resource('admin/role', 'RoleController');

//user roles permisson route
Route::resource('admin/permission', 'PermissionController');

//post route
Route::resource('admin/post', 'PostController');

//category route
Route::resource('admin/category', 'CategoryController');

//tag route
Route::resource('admin/tag', 'TagController');

// Admin Auth Routes
Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Auth\LoginController@login');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

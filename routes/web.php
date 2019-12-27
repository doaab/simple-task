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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/post/{slug}', 'HomeController@post')->name('post.show');
Route::get('/allcategory', 'HomeController@categories')->name('category.show');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'], function (){

    // route for category
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.delete');
    Route::get('/category/create', 'CategoryController@create')->name('category.create');
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');
    Route::get('/categories', 'CategoryController@index')->name('categories');

    // route for Tag
    Route::get('/tags', 'TagController@index')->name('tags');
    Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
    Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete');
    Route::get('/tag/create', 'TagController@create')->name('tag.create');
    Route::post('/tag/store', 'TagController@store')->name('tag.store');
    Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update');

    // route for posts
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::get('/posts/trashed', 'PostController@trashed')->name('post.trashed');
    Route::get('/post/hdelete/{id}', 'PostController@hdelete')->name('post.hdelete');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::post('/post/store', 'PostController@store')->name('post.store');
    Route::post('/post/update/{id}', 'PostController@update')->name('post.update');
    Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
    Route::get('/posts/delete/{id}', 'PostController@destroy')->name('posts.delete');
    Route::get('/posts', 'PostController@index')->name('posts');

//Route::resource('users', 'UserController');

    Route::get('/users/create', 'UserController@create')->name('users.create');
    Route::get('/users/trashed', 'UserController@trashed')->name('users.trashed');
    Route::get('/users/hdelete/{id}', 'UserController@hdelete')->name('users.hdelete');
    Route::get('/users/restore/{id}', 'UserController@restore')->name('users.restore');
    Route::post('/users/store', 'UserController@store')->name('users.store');
    Route::post('/users/update/{id}', 'UserController@update')->name('users.update');
    Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
    Route::get('/users/delete/{id}', 'UserController@destroy')->name('users.delete');
    Route::get('/users', 'UserController@index')->name('users.index');

});

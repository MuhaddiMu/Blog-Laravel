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

Route::get('/Laravel', 'HomeController@index')->middleware('auth');

Route::get('/', 'PagesController@Index')->middleware('guest');

Route::resource('Blog', 'BlogController');

Route::POST('/Comment', 'CommentsController@NewComment');

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'administrator'), function(){

    Route::resource('Categories', 'CategoriesController');

    Route::POST('Categories/create', 'CategoriesController@store');
        
    Route::resource('Posts', 'PostsController');

    Route::POST('Posts/create', 'PostsController@store');

    Route::POST('Posts/{id}/edit', 'PostsController@update');

    Route::get('/', 'PagesController@AdminIndex');
    
    Route::get('/Users', 'UsersController@index');
    
    Route::get('Roles', 'RolesController@Index');
    
    Route::get('Roles/Create', 'RolesController@Create');
    
    Route::post('Roles/Create', 'RolesController@Store');
    
    Route::get('Roles/{ID}/Edit', 'UsersController@Edit');
    
    Route::post('Roles/{ID}/Edit', 'UsersController@Update');
});



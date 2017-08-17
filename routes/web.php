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

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

<<<<<<< HEAD
Route::get('/home', [
     'uses' => 'HomeController@index',
     'as' => 'home'
  ]);
=======
    Route::get('/home',[
    	   'uses' => 'HomeController@index',
           'as' => 'home'
    	]);
>>>>>>> 27e659254f3d06fbbb03a1401be77d059be7e570

	Route::get('/post/create', [
      'uses' => 'PostsController@create',
      'as' => 'post.create'
	]);

	Route::post('/post/store', [
	      'uses' => 'PostsController@store',
	      'as' => 'post.store'
		]);
  Route::get('/category/create',[
       'uses' => 'CategoriesController@create',
       'as' => 'category.create'
    ]);
  Route::post('/category/store',[
       'uses' => 'CategoriesController@store',
       'as' => 'category.store'
    ]);
  Route::get('/categories',[
       'uses' => 'CategoriesController@index',
       'as' => 'categories'
    ]);

  Route::get('/categories/edit/{id}',[
       'uses' => 'CategoriesController@edit',
       'as' => 'categories.edit'
    ]);
  Route::get('/categories/del/{id}',[
       'uses' => 'CategoriesController@destroy',
       'as' => 'categories.del'
    ]);

  Route::post('/categories/update/{id}',[
       'uses' => 'CategoriesController@update',
       'as' => 'category.update'
    ]);
});




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


    Route::get('/home',[
    	   'uses' => 'HomeController@index',
           'as' => 'home'
    	]);

	Route::get('/post/create', [
      'uses' => 'PostsController@create',
      'as' => 'post.create'
	]);

	Route::post('/post/store', [
	      'uses' => 'PostsController@store',
	      'as' => 'post.store'
		]);

  Route::get('/post', [
        'uses' => 'PostsController@index',
        'as' => 'posts'
    ]);
 
  Route::get('/post/trashed', [
        'uses' => 'PostsController@trashed',
        'as' => 'post.trashed'
    ]);

  Route::get('/post/delete/{id}', [
        'uses' => 'PostsController@destroy',
        'as' => 'posts.delete'
    ]);

Route::get('/post/kill/{id}', [
        'uses' => 'PostsController@kill',
        'as' => 'posts.kill'
    ]);
Route::get('/post/restore/{id}', [
        'uses' => 'PostsController@restore',
        'as' => 'posts.restore'
    ]);

Route::get('/post/edit/{id}', [
        'uses' => 'PostsController@edit',
        'as' => 'posts.edit'
    ]);

Route::post('/post/update/{id}', [
        'uses' => 'PostsController@update',
        'as' => 'post.update'
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

  Route::get('/tag',[
       'uses' => 'TagsController@index',
       'as' => 'tag'
    ]);

  Route::get('/tag/create',[
       'uses' => 'TagsController@create',
       'as' => 'tag.create'
    ]);

  Route::post('/tag/store',[
       'uses' => 'TagsController@store',
       'as' => 'tag.store'
    ]);

   Route::get('/tag/edit/{id}',[
       'uses' => 'TagsController@edit',
       'as' => 'tag.edit'
    ]);

   Route::get('/tag/del/{id}',[
       'uses' => 'TagsController@del',
       'as' => 'tag.del'
    ]);
   Route::post('/tag/update/{id}',[
       'uses' => 'TagsController@update',
       'as' => 'tag.update'
    ]);

   Route::get('/user',[
       'uses' => 'UsersController@index',
       'as' => 'user'
    ]);
   Route::get('/user/create',[
       'uses' => 'UsersController@create',
       'as' => 'user.create'
    ]);
   Route::post('/user/store',[
       'uses' => 'UsersController@store',
       'as' => 'user.store'
    ]);

   Route::get('/user/profile',[
       'uses' => 'UsersController@profile',
       'as' => 'user.profile'
    ])->middleware('admin');
    Route::get('/user/destroy/{id}',[
       'uses' => 'UsersController@destroy',
       'as' => 'user.destroy'
    ]);
    Route::get('/user/edit/{id}',[
       'uses' => 'UsersController@edit',
       'as' => 'user.edit'
    ]);


 // Route::get('/test',function(){
 //    return App\User::find(11)->profile;
 // });

});




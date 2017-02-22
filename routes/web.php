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

Route::get('/', ['as' => 'home.base.home', 'uses' => 'HomeController@home']);
Route::get('ajax/getNew/{id}', 'AjaxController@getNew');

Route::group(['prefix' => 'admin'], function() {
	Route::get('dashboard', function() {
		return view('admin.dashboard');
	});

	Route::group(['prefix' => 'cate_group'], function() {
		Route::get('list', ['as' => 'admin.cate_group.getList', 'uses' => 'CateGroupController@getList']);
		Route::get('insert', ['as' => 'admin.cate_group.getInsert', 'uses' => 'CateGroupController@getInsert']);
		Route::post('insert', ['as' => 'admin.cate_group.postInsert', 'uses' => 'CateGroupController@postInsert']);
		Route::get('update/{id}', ['as' => 'admin.cate_group.getUpdate', 'uses' => 'CateGroupController@getUpdate']);
		Route::post('update/{id}', ['as' => 'admin.cate_group.postUpdate', 'uses' => 'CateGroupController@postUpdate']);
		Route::get('delete/{id}', ['as' => 'admin.cate_group.getDelete', 'uses' => 'CateGroupController@getDelete']);
	});

	Route::group(['prefix' => 'category'], function() {
		Route::get('list', ['as' => 'admin.category.getList', 'uses' => 'CategoryController@getList']);
		Route::get('insert', ['as' => 'admin.category.getInsert', 'uses' => 'CategoryController@getInsert']);
		Route::post('insert', ['as' => 'admin.category.postInsert', 'uses' => 'CategoryController@postInsert']);
		Route::get('update/{id}', ['as' => 'admin.category.getUpdate', 'uses' => 'CategoryController@getUpdate']);
		Route::post('update/{id}', ['as' => 'admin.category.postUpdate', 'uses' => 'CategoryController@postUpdate']);
		Route::get('delete/{id}', ['as' => 'admin.category.getDelete', 'uses' => 'CategoryController@getDelete']);
	});

	Route::group(['prefix' => 'news'], function() {
		Route::get('list', ['as'=> 'admin.news.getList', 'uses' => 'NewsController@getList']);
		Route::get('insert', ['as' => 'admin.news.getInsert', 'uses' => 'NewsController@getInsert']);
		Route::post('insert', ['as' => 'admin.news.postInsert', 'uses' => 'NewsController@postInsert']);
		Route::get('update/{id}', ['as' => 'admin.news.getUpdate', 'uses' => 'NewsController@getUpdate']);
		Route::post('update/{id}', ['as' => 'admin.news.postUpdate', 'uses' => 'NewsController@postUpdate']);
		Route::get('delete/{id}', ['as' => 'admin.news.getDelete', 'uses' => 'NewsController@getDelete']);
	});

	Route::get('ajax/{id}', 'AjaxController@selCate');
	

});

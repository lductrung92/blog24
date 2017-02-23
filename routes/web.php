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

View::share('cateGNames', App\CateGroup::where('status', 0)->get());
View::share('cateGL', App\CateGroup::where('status', 1)->get());
View::share('cateGs', App\CateGroup::all());

/*Cong nghe*/

View::share('tnls', App\News::where('category_id', 3)->orderBy('id', 'DESC')->skip(0)->take(3)->get());

/*footer*/
View::share('newforDates', App\News::orderBy('id', 'DESC')->skip(0)->take(3)->get());
View::share('enters', \App\News::where('category_id', 4)->orderBy('id', 'DESC')->skip(0)->take(3)->get());


Route::group(['prefix' => '/'], function() {
	Route::get('/', ['as' => 'home.base.home', 'uses' => 'HomeController@home']);
	Route::get('/{alias}', 'HomeController@getCate');
	Route::get('{cateID}/{id}', 'HomeController@details');
	Route::get('/ajaxSearch', 'AjaxController@search');
});

Route::get('ajax/getNew/{id}', 'AjaxController@getNew');

Route::group(['prefix' => 'admin'], function() {
	Route::get('dashboard/index', function() {
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

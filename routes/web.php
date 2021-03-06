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


/*menu tat ca lap trinh*/
View::share('proNews' , DB::table('cate_groups')
	->join('categories', 'categories.cate_group_id', '=', 'cate_groups.id')
	->join('news', 'news.category_id', '=', 'categories.id')
	->where('cate_groups.status', '=', 1)
	->select('news.*', 'categories.alias as cate_alias', 'categories.name')
	->get()
);



/*Cong nghe*/
View::share('tnls', App\News::where('category_id', 3)->orderBy('id', 'DESC')->skip(0)->take(3)->get());

/*footer*/
View::share('newforDates', App\News::orderBy('id', 'DESC')->skip(0)->take(3)->get());
View::share('enters', \App\News::where('category_id', 4)->orderBy('id', 'DESC')->skip(0)->take(3)->get());



Route::group(['prefix' => '/'], function() {
	Route::get('/', ['as' => 'home.base.home', 'uses' => 'HomeController@home']);
	Route::get('{aliasCate}', 'HomeController@getCate');
	Route::get('{aliasCate}/{id}/{aliasNew}.html', 'HomeController@details');
	Route::get('group/{aliasG}.html', 'HomeController@groupDetails');

	Route::get('/ajaxSearch', 'AjaxController@search');
	Route::get('/search/key', 'HomeController@getSearch');
});

Route::get('ajax/getNew/{id}', 'AjaxController@getNew');




Route::get('admin/login', 'LoginController@getLogin');
Route::get('admin/logout', 'LoginController@logout');
Route::post('admin/login', 'LoginController@postLogin');




Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function() {
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

	Route::group(['prefix' => 'user'], function() {
		Route::get('list', ['as'=> 'admin.user.getList', 'uses' => 'UserController@getList']);
		Route::get('insert', ['as' => 'admin.user.getInsert', 'uses' => 'UserController@getInsert']);
		Route::post('insert', ['as' => 'admin.user.postInsert', 'uses' => 'UserController@postInsert']);
		Route::get('update/{id}', ['as' => 'admin.user.getUpdate', 'uses' => 'UserController@getUpdate']);
		Route::post('update/{id}', ['as' => 'admin.user.postUpdate', 'uses' => 'UserController@postUpdate']);
		Route::get('delete/{id}', ['as' => 'admin.user.getDelete', 'uses' => 'UserController@getDelete']);
	});

	Route::get('ajax/{id}', 'AjaxController@selCate');
	

});

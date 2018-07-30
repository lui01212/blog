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

Route::get('/', ['as' =>'index.index','uses' =>'Page\\indexController@index']);

Route::get('/tac-gia/{author}',['as' =>'authorpage','uses' =>'Page\\detailController@getStoryForAuthor']);

Route::get('/the-loai/{type}',['as' =>'typepage','uses' =>'Page\\detailController@getStoryForType']);

Route::get('/truyen/{story}',['as' =>'storydetailpage','uses' =>'Page\\detailController@getStoryDetail']);

Route::get('/truyen/{story}/{chapter}',['as' =>'chapterpage','uses' =>'Page\\detailController@getChapterPage']);

Route::get('/seach/{seach}',['as' =>'seachpage','uses' =>'Page\\detailController@getSeachPage']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//-----------------------------------------------------------------------
//admin
//-----------------------------------------------------------------------
Route::group(['prefix' => 'admin'],function(){
	//-----------------------------------------------------------------------
	//Dashboard
	//-----------------------------------------------------------------------
	Route::get('/',['as' => 'admin','uses' => 'AdminPanel\\DashboardCotroller@getDashboard']);
	//-----------------------------------------------------------------------
	//Tables
	//-----------------------------------------------------------------------
	Route::resource('storymaster', 'AdminPanel\\stotyMasterController');
	//-----------------------------------------------------------------------
	//Tables
	//-----------------------------------------------------------------------
	Route::resource('authormaster', 'AdminPanel\\storyAuthorController');
	//-----------------------------------------------------------------------
	//Tables
	//-----------------------------------------------------------------------
	Route::resource('storiesmaster', 'AdminPanel\\storiesController');
	//
	//-----------------------------------------------------------------------
	//Story detail
	//-----------------------------------------------------------------------
	Route::group(['prefix' => 'storydetail'],function(){
		//
		Route::get('/{id}',['as' =>'storydetail.index','uses' =>'AdminPanel\\storyDetailController@index']);
		//
		Route::get('/{id}/create',['as' =>'storydetail.create','uses' =>'AdminPanel\\storyDetailController@create']);
		//
		Route::post('/{id}/store',['as' =>'storydetail.store','uses' =>'AdminPanel\\storyDetailController@store']);
		//
		Route::get('/{id}/{chapter_id}/edit',['as' =>'storydetail.edit','uses' =>'AdminPanel\\storyDetailController@edit']);
		//
		Route::put('/{id}/update/{chapter_id}',['as' =>'storydetail.update','uses' =>'AdminPanel\\storyDetailController@update']);
		//
		Route::delete('/{id}/{chapter_id}',['as' =>'storydetail.destroy','uses' =>'AdminPanel\\storyDetailController@destroy']);
		//
	});
	//-----------------------------------------------------------------------
	//autoloadchapter
	//-----------------------------------------------------------------------
	Route::group(['prefix' => 'autoloadchapter'],function(){
		//
		Route::get('/{id}',['as' =>'autoloadchapter.index','uses' =>'AdminPanel\\autoloadChapterController@index']);
		//
		Route::post('/{id}/store',['as' =>'autoloadchapter.store','uses' =>'AdminPanel\\autoloadChapterController@store']);
		//
		Route::post('/{id}/autoupload',['as' =>'autoloadchapter.autoupload','uses' =>'AdminPanel\\autoloadChapterController@autoupload']);
		//
	});
});

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','DddIndexController@index');

/*
//单请求路由，基础路由
Route::get('/fuck',function(){
	return '<h1 style="font-style:楷体">Fuck!<h1>';
});

Route::get('admin/login',function(){
	return 'Your login name is ';
});*/

//多请求路由
/*Route::post('admin/login',function(){
	return 'Your login name is ';
});

Route::match(['get','post'],'admin/reg',function(){
	return 'Sir /Lady ,Please register ';
});*/

/*Route::any('admin/reg',function(){
	return 'Sir /Lady ,Please register ';
});*/

//路由传参
/*Route::get('user/{id}',function($id){
	return 'user_'.$id;
});*/
/*Route::get('user/{id}/{name}',function($id,$name){
	return 'name='.$name.',id='.$id;
});*/

//路由可选参数
/*Route::get('user/{id}/{name?}',function($id,$name='niubi'){
	return 'name='.$name.',id='.$id;
});*/

//路由中的参数限制
/*Route::get('user/{name}',function($name){
	return 'name='.$name;
})->where('name','[A-Za-z]+');*/

//路由中的多参数限制
/*Route::get('user/{name}/{id}',function($name,$id){
	return $name.'	'.$id;
})->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);*/

//控制器路由
/*Route::get('test','TestController@test');*/
/*Route::get('login','Home\LoginController@index');*/


/*Route::get('/', function () {
	//返回自定义模板的内容
    return view('test');
});*/


//控制器路由
/*Route::get('test','TestController@test');*/
Route::get('test','TestController@testFuc');
//MsgBoard 的路由
Route::get('add','MsgController@add');
Route::post('addPost','MsgController@addPost');
Route::match(['get','post'],'up/{id}','MsgController@up');
Route::get('del/{id}','MsgController@del');
Route::get('index','MsgController@index');

Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register',
	[
	'middleware'=>'App\Http\Middleware\EmailMiddleware',
	'uses'=>'Auth\AuthController@postRegister']

	);
Route::get('home',function(){
	return 'welcome to center';
});

/*Route::group(['prefix'=>'auth','namespace'=>'Auth'],function(){
	Route::get('logout','AuthController@getLogout');
	Route::get('login','AuthController@getLogin');
	Route::post('login','AuthController@postLogin');
});*/

Route::group(['prefix'=>'auth','namespace'=>'Auth'],function(){
	Route::get('logout','AuthController@getLogout');
	Route::get('login','AuthController@getLogin');
	Route::post('login','AuthController@postLogin');
});

Route::get('jie','ProController@jie');
Route::post('jie','ProController@jiePost');

Route::get('prolist','CheckController@getProlist');
Route::get('check/{pid}','CheckController@getCheck');
Route::post('check','CheckController@postCheck');

//立刻投资
Route::get('/touzi/{pid}','ProController@touzi');

Route::post('/touziPost/{pid}','ProController@touziPost');



Route::get('/hk','ProController@hks');

Route::get('payrun','ProController@run');

Route::get('juanqian','ProController@juanqian');

Route::post('/pay','ProController@pay');


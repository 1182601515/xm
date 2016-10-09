<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//进入首页的路由;
Route::get('/home',"Home\LoginController@index");
//进入后台的登录
Route::get('/admin/login',"Admin\LoginController@index");
// Route::post('/admin/login',"Admin\LoginController@doLogin");
Route::post("/admin/login","Admin\LoginController@doLogin");//登录的表单;

// Route::resource("/admin/user","Admin\UserController");
//执行添加的路由
// Route::resource("/admin/user/create","Admin\UserController@store");
// Route::get('/asdf',"Admin\UserController@create");


//设置路由组;
Route::group(["prefix"=>"/admin","middleware"=>"myauth"],function()
{
	//退出后台管理系统;
	Route::get("logout","Admin\LoginController@logout");
	//进行加载登录后台的首页;
	Route::get("index",function(){
		return view('admin.index');
		});
	//进行加载用户user信息的查询的路由
	//进行用户的添加
	// Route::resource("user","Admin\UserController@store");
	Route::resource("user","Admin\UserController");


 });
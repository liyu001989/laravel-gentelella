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

// 登录
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.show');
Route::post('login', 'Auth\LoginController@login')->name('login.post');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return redirect(route('dashboard'));
    });

    // 退出
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    //控制面板
    Route::get('dashboard', 'DashboardController@show')->name('dashboard');
});

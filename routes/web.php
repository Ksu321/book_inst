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

Route::get('/', 'HomeController@index');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Route::get('/dashboard', function (){
//    return view('admin.loyout');
//});
//
////admin
//Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
//    Route::get('/', 'DashboardController@index');
//});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::get('/', 'DashboardController@index')->name('index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    Route::resource('/users', 'UserController');
    Route::resource('/announcements', 'AnnouncementController');
    Route::resource('/partners', 'PartnerController');
});


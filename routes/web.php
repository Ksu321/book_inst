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


//
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

Route::get('/', 'HomeController@index');

Auth::routes();

//admin panel


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::get('/', 'DashboardController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/specializations', 'SpecializationController');
    Route::resource('/tags', 'TagController');
    Route::resource('/users', 'UserController');
    Route::resource('/partners', 'PartnerController');

    Route::group(['namespace' => 'Actual'], function (){
        Route::resource('/announcements', 'AnnouncementController');
        Route::resource('/news', 'NewsController');
        Route::resource('/booknews', 'BookNewsController');
    });

    Route::group(['namespace' => 'Authors'], function (){
        Route::resource('/authors', 'AuthorController');
        Route::resource('/illustrators', 'IllustratorController');
        Route::resource('/interpreters', 'InterpreterController');
    });

    Route::group(['namespace' => 'BookShop'], function (){
        Route::resource('/publishing', 'PublishingController');
    });
});


//page

Route::group(['namespace' => 'Page'], function (){
    Route::group(['namespace' => 'Actual'], function (){
        Route::get('/announcements', 'AnnouncementController@index')->name('announcements.archive');
        Route::get('/announcements/{slug}', 'AnnouncementController@showSingle')->name('announcements.single');
        Route::get('/news', 'NewsController@index')->name('new.archive');
        Route::get('/news/{slug}', 'NewsController@showSingle')->name('new.single');
    });

});

Route::get('/tag/{slug}', 'HomeController@showTag')->name('show.tag');
Route::get('/category/{slug}', 'HomeController@showCategory')->name('show.category');
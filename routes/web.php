<?php



Route::get('/', 'HomeController@index');
//
Auth::routes();
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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function (){
    Route::get('/', 'DashboardController@index')->name(' index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    Route::resource('/users', 'UserController');
    Route::resource('/announcements', 'AnnouncementController');
    Route::resource('/partners', 'PartnerController');
    Route::resource('/news', 'NewsController');
    Route::resource('/booknews', 'BookNewsController');
});

Route::group(['namespace' => 'Page'], function (){
    Route::get('/announcements', 'AnnouncementController@index')->name('announcement.archive');
    Route::get('/announcements/{slug}', 'AnnouncementController@showSingle')->name('announcement.single');
    Route::get('/news', 'NewsController@index')->name('new.archive');
    Route::get('/news/{slug}', 'NewsController@showSingle')->name('new.single');
});

Route::get('/tag/{slug}', 'HomeController@showTag')->name('show.tag');
Route::get('/category/{slug}', 'HomeController@showCategory')->name('show.category');
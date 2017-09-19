<?php

//Route::get('user','UserController@index');
//Route::post('add','UserController@insert');
//Route::get('news','NewsController@index');
//Route::post('add','NewsController@insert');

Route::group(['namespace' => 'Front'],function(){
  Route::any('/','AppController@index');
    Route::any('politics','AppController@politics');
    Route::any('sports','AppController@sports');
    Route::any('entertainment','AppController@entertainment');


});
Route::group(['namespace' => 'Back'],function(){
    Route::any('login','UserController@login')->name('login');


});


Route::group(['namespace' => 'Back','prefix'=>'admin','middleware'=>'auth'],function(){
  Route::any('/','DashboardController@index')->name('dash');

Route::group(['prefix'=>'user'],function(){
    Route::any('/','UserController@user')->name('users');
    Route::any('add','UserController@addUser')->name('add');
    Route::any('del/{id?}','UserController@delete')->name('del');

});

Route::group(['prefix'=>'news'],function()
{
    Route::any('/','NewsController@news')->name('new');
    Route::any('add','NewsController@addNews')->name('addnews');
    Route::any('delete/{id?}','NewsController@delete')->name('delete');
    Route::any('edit/{id?}','NewsController@edit')->name('edit');
});
    Route::group(['prefix'=>'gallery'],function (){
        Route::any('addGallery','GalleryController@addGallery')->name('addGallery');
    });
    Route::any('logout','UserController@logout')->name('logout');

});

<?php

//Route::get('user','UserController@index');
//Route::post('add','UserController@insert');
//Route::get('news','NewsController@index');
//Route::post('add','NewsController@insert');

Route::group(['namespace' => 'Front'],function(){
  Route::any('/','AppController@index');
});

Route::group(['namespace' => 'Back','prefix'=>'admin'],function(){
    Route::any('login','UserController@login')->name('login');
});


Route::group(['namespace' => 'Back','prefix'=>'admin'],function(){
  Route::any('/','DashboardController@index')->name('dash');

Route::group(['prefix'=>'user'],function(){
    Route::any('/','UserController@user')->name('users');
    Route::any('add','UserController@addUser')->name('add');
    Route::any('delete/{id?}','UserController@delete')->name('delete');

});
Route::group(['prefix'=>'news'],function()
{
    Route::any('/','NewsController@news')->name('news');
    Route::any('add','NewsController@addNews')->name('addnews');
});


});

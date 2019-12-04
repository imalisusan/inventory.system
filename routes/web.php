<?php

Route::get('/', function() {
    return view('welcome');
});
Auth:: routes();

Route::get('admin/home', 'HomeController@adminHome') -> name('admin.home') -> middleware('is_admin');

Route::get('login', array('uses'=>'HomeController@doLogin'));

Route::get('logout', array('uses'=>'HomeController@doLogout'));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('employees', 'addEmployeeController');
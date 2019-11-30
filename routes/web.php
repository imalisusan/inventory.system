<?php

Route::get('/', function() {
    return view('welcome');
});

Route::get('login', array ('uses'=>'HomeController@showLogin') );

Route::get('login', array('uses'=>'HomeController@doLogin'));

Route::get('logout', array('uses'=>'HomeController@doLogout'));
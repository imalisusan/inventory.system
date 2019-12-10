<?php

Route::get('/', function() {return view('welcome');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('employees', 'EmployeesController');

Route::resource('products', 'ProductsController');

Route::resource('customers', 'CustomersController');

Route::resource('orders', 'OrdersController');

Route::resource('issues', 'IssuesController');

Route::resource('dailystocks', 'DailystocksController');
<?php

Route::get('/', 'testController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

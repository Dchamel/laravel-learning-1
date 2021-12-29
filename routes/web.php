<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@homePage')->name('homePage');

Route::get('/about', 'MainController@aboutPage')->name('aboutPage');

Route::get('/review', 'MainController@reviewPage')->name('reviewPage');

Route::post('/review/check', 'MainController@reviewCheck')->name('reviewCheck');


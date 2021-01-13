<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get(
    '/contact/all',
    'ContactController@allData'
    )->name('contact-data');

Route::get(
    '/contact/all/{id}',
    'ContactController@showOneMessage'
    )->name('contact-data-one');

Route::get(
    '/contact/all/{id}/update',
    'ContactController@updateOneMessage'
    )->name('contact-data-one-update');

Route::post(
    '/contact/all/{id}/update',
    'ContactController@updateOneMessageSubmit'
    )->name('contact-data-one-update-submit');

Route::get(
    '/contact/all/{id}/delete',
    'ContactController@deleteOneMessageSubmit'
    )->name('contact-data-one-delete-submit');
    

Route::post(
    '/contact/submit',
    'ContactController@submit'
    )->name('contact-form');


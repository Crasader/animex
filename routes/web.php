<?php

// ADMIN ROUTES
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', function () {
         return view('admin.dashboard');
    })->name('dashboard');
});

Route::get('/', 'PagesController@home')->name('public.page.home');

Route::get('/{post?}', 'PagesController@post')->name('public.page.post');

Route::get('about', function () {
    return view('pages.about');
});

Route::get('contact', function () {
    return view('pages.contact');
});
<?php

Auth::routes();

// ADMIN ROUTES
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function() {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard')->middleware('auth');

    Route::patch('users/status/{id}', 'UsersController@status')->name('users.status');
    Route::resource('users', 'UsersController');
    Route::patch('categories/status/{id}', 'CategoriesController@status')->name('categories.status');
    Route::resource('categories', 'CategoriesController');
    Route::patch('posts/status/{id}', 'PostsController@status')->name('posts.status');
    Route::resource('posts', 'PostsController');
    Route::resource('tags', 'TagsController');
});

Route::get('/', 'PagesController@home')->name('public.page.home');

Route::get('/{post?}', 'PagesController@post')->name('public.page.post');

Route::get('about', function () {
    return view('pages.about');
});

Route::get('contact', function () {
    return view('pages.contact');
});
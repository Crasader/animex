<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('post', function () {
    return view('pages.post');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('contact', function () {
    return view('pages.contact');
});

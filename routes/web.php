<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home',['title'=>'Homepage']);
});
Route::get('/about', function () {
    return view('about',['title'=>'About Us']);
});
Route::get('/contact', function () {
    return view('contact',['title'=>'Contact']);
});
Route::get('/konten', function () {
    return view('konten');
});

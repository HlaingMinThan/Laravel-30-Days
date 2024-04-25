<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    // return 'about page';
    // return [
    //     'foo' => 'bar'
    // ];
    return view('about');
});

//homework for contact route

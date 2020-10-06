<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/', function(){
    return view('website.home');
});

route::get('/about', function(){
    return view('website.about');
});

route::get('/category', function(){
    return view('website.category');
});

route::get('/contact', function(){
    return view('website.contact');
});

route::get('/post', function(){
    return view('website.post');
});



//Admin Panel Routes


route::get('/test', function(){
    return view('admin.dashboard.index');
});

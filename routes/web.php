<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// add news

Route::get('/about.html',function(){
return view('about');
});

Route::get('/category.html',function(){
return view('category');
});


Route::get('/contact.html',function(){
return view('contact');
});


Route::get('/single-audio.html',function(){
return view('single-audio');
});


Route::get('/single-gallery.html',function(){
return view('single-gallery');
});


Route::get('/single-standard.html',function(){
return view('single-standard');
});


Route::get('/single-video.html',function(){
return view('single-video');
});


Route::get('/style-guide.html',function(){
return view('style-guide');
});


<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/search', function () {
   return view('welcome');
});

Route::get('/homeSearch', function () {
   return view('homeSearch');
});

Route::get('/contact-us', function () {
   return view('contact-us');
});

Route::get('/hydra', function () {
   return view('hydra');
});

Route::get('/spetses', function () {
   return view('spetses');
});

Route::get('/skiathos', function () {
   return view('skiathos');
});

Route::get('/skopelos', function () {
   return view('skopelos');
});

Route::get('/alonissos', function () {
   return view('alonissos');
});

Route::get('/monemvasia', function () {
   return view('monemvasia');
});

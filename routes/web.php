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
Route::get('/passengerDetails', function () {
   return view('passengerDetails');
});

Route::get('/contact-us', function () {
   return view('layouts/destinations/contact-us');
});

Route::get('/hydra', function () {
   return view('layouts/destinations/hydra');
});

Route::get('/spetses', function () {
   return view('layouts/destinations/spetses');
});

Route::get('/skiathos', function () {
   return view('layouts/destinations/skiathos');
});

Route::get('/skopelos', function () {
   return view('layouts/destinations/skopelos');
});

Route::get('/alonissos', function () {
   return view('layouts/destinations/alonissos');
});

Route::get('/monemvasia', function () {
   return view('layouts/destinations/monemvasia');
});

Route::get('/navigationWithPages', function () {
   return view('layouts/destinations/navigationWithPages');
});

Route::get('/booking-payment', function () {
   return view('booking-payment');
});

Route::get('/cruise-hydra-spetses-from-tolo', function () {
   return view('cruise-hydra-spetses-from-tolo');
});

Route::get('/cruise-skiathos-koukounaries-from-glyfa', function () {
   return view('cruise-skiathos-koukounaries-from-glyfa');
});

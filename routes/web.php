<?php

use Illuminate\Support\Facades\DB;
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
   $destinations = DB::table('destinations')->get();
   return view('homeSearch')->with("destinations", $destinations);
});
//call from api
//Route::get('/homeSearch', 'SearchController@index');



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
   $destinations = DB::table('destinations')->get();
   return view('cruise-hydra-spetses-from-tolo')->with("destinations", $destinations);
});

Route::get('/cruise-skiathos-koukounaries-from-glyfa', function () {
   return view('cruise-skiathos-koukounaries-from-glyfa');
});

Route::get('/new-navbar', function () {
   return view('new-navbar');
});

Route::get('/new-navbar-dropdown', function () {
   return view('new-navbar-dropdown');
});

Route::get('/loginf', function () {
   return view('login');
});

Route::get('/thank-you', function () {
   return view('thank-you');
});

Route::get('/adminb2b', function () {
   $destinations = DB::table('destinations')->get();
   return view('adminb2b')->with("destinations", $destinations);
});
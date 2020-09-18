<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/inicio', function () {
    return view('index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/galleries', function () {
    return view('galleries');
});

Route::get('/g-ame', function () {
    return view('util/galleries/amely');
});
Route::get('/g-dai', function () {
    return view('util/galleries/daimon');
});
Route::get('/g-jan', function () {
    return view('util/galleries/jane');
});
Route::get('/g-lil', function () {
    return view('util/galleries/lilan');
});
Route::get('/g-nic', function () {
    return view('util/galleries/nicol');
});
Route::get('/g-tab', function () {
    return view('util/galleries/tabata');
});
Route::get('/g-vic', function () {
    return view('util/galleries/vicky');
});

Route::get('/pages', function () {
    return view('pages');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/aviso', function () {
    return view('util/aviso');
});

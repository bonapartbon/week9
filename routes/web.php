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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('layouts/pages/about');
});

Route::get('/property-grid', function () {
    return view('layouts/pages/property-grid');
});

Route::get('/blog-grid', function () {
    return view('layouts/pages/blog-grid');
});

Route::get('/property-single', function () {
    return view('layouts/pages/property-single');
});

Route::get('/blog-single', function () {
    return view('layouts/pages/blog-single');
});

Route::get('/agent-grid', function () {
    return view('layouts/pages/agent-grid');
});

Route::get('/agent-single', function () {
    return view('layouts/pages/agent-single');
});

Route::get('/contact', function () {
    return view('layouts/pages/contact');
});
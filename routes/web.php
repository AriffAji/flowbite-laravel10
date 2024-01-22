<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// landing-Page
Route::get('/', function () {
    return view('layouts-landing.home');
});
Route::get('/Blog', function () {
    return view('layouts-landing.blog');
});
Route::get('/Contact', function () {
    return view('layouts-landing.contact');
});
Route::get('/About', function () {
    return view('layouts-landing.about');
});
// landing-Page
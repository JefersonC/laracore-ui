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
    return view('dashboard');
});

Route::get('/blank', function () {
    return view('blank');
});


// Components
Route::get('/components-buttons', function () {
    return view('components-buttons');
});

Route::get('/components-social-buttons', function () {
    return view('components-social-buttons');
});

Route::get('/components-cards', function () {
    return view('components-cards');
});

Route::get('/components-forms', function () {
    return view('components-forms');
});

Route::get('/components-modals', function () {
    return view('components-modals');
});

Route::get('/components-switches', function () {
    return view('components-switches');
});

Route::get('/components-tables', function () {
    return view('components-tables');
});

Route::get('/components-tabs', function () {
    return view('components-tabs');
});


// Icons
Route::get('/icons-font-awesome', function () {
    return view('icons-font-awesome');
});

Route::get('/icons-simple-line-icons', function () {
    return view('icons-simple-line-icons');
});

// Pages
Route::get('/pages-404', function () {
    return view('pages-404');
});

Route::get('/pages-500', function () {
    return view('pages-500');
});

Route::get('/pages-login', function () {
    return view('pages-login');
});

Route::get('/pages-register', function () {
    return view('pages-register');
});

// Widgets
Route::get('/widgets', function () {
    return view('widgets');
});

// Charts
Route::get('/charts', function () {
    return view('charts');
});
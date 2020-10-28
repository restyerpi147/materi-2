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

Route::get('/home', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/ti', function () {
    return view('ti');
});

Route::get('/menu' , function () {
    return view('menu');
});

Route::get('/concact' , function () {
    return view('contact');
});

Route::get('/login' , function () {
    return view('login');
});

Route::get('/loginAdmin' , function () {
    return view('loginAdmin');
});

Route::get('/dashboard' , function () {
    return view('dashboard');
});

Route::get('/kategori' , function () {
    return view('kategori');
});

Route::get('/about' , function () {
    return view('about');
});

Route::get('/contact' , function () {
    return view('contact');
});

Route::get('/checkout' , function () {
    return view('checkout');
});

Route::get('/promosi' , function () {
    return view('promosi');
});


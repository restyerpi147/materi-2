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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/template', function () {
    return view('template.base');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/loginAdmin', function () {
    return view('loginAdmin');
});

Route::get('/sayuran', function () {
    return view('sayuran');
});

Route::get('/produk_single', function () {
    return view('produk_single');
});

Route::get('/daftar', function () {
    return view('daftar');
});
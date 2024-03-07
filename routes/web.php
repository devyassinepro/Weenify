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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/privacypolicy', function () {
    return view('pages.privacypolicy');
})->name('privacypolicy');

Route::get('/RefundPolicy', function () {
    return view('pages.RefundPolicy');
})->name('RefundPolicy');

Route::get('/TermsandConditions', function () {
    return view('pages.TermsandConditions');
})->name('TermsandConditions');

// redirect link
Route::get('/shopify', function () {
    return redirect('https://shopify.pxf.io/MmW3NY');
});

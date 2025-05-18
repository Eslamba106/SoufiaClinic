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
// // Translation

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar','tr'])) {
    session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about_us');
})->name('about_us');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact-us', function () {
    return view('pages.contact_us');
})->name('contact_us');

Route::get('/appointment', function () {
    return view('pages.appointment');
})->name('appointment');

Route::view('/cvs/1', 'pages.cv1')->name('doctor.cv1');
Route::view('/cvs/2', 'pages.cvs.cv2')->name('doctor.cv2');
Route::view('/cvs/3', 'pages.cvs.cv3')->name('doctor.cv3');

// Route::view('/cvs', 'pages.cvs.')->name('doctor.cv5');

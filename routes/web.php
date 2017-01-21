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
    return view('home');
});
Route::get('how-solar-works', function () {
    return view('how');
});
Route::get('contact-us', function () {
    return view('contact');
});
Route::get('the-pv-module', function () {
    return view('pv');
});
Route::get('partners', function () {
    return view('partners');
});
Route::get('why-go-solar', function () {
    return view('why');
});
Route::get('products-and-services', function () {
    return view('products');
});
Route::any('download/brochure', 'MailController@brochure');
Route::any('download/water-heating-catalog', 'MailController@catalog');
Route::any('sendmail', 'MailController@mail');

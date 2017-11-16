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

Route::get('portfolio', function () {
    return view('portfolio');
});








Route::get('portfolio/solar-in-turkana', function () {
    return view('projects/pages/turkana');
});

Route::get('portfolio/5kva-in-kakamega', function () {
    return view('projects/pages/kakamega');
});

Route::get('portfolio/loresho-lighting', function () {
    return view('projects/pages/kakamega');
});

Route::get('portfolio/water-heating-kisumu', function () {
    return view('projects/pages/kisumu');
});

Route::get('portfolio/power-for-mariakani', function () {
    return view('projects/pages/mariakani');
});

Route::get('portfolio/3kv-residential', function () {
    return view('projects/pages/3residential');
});






//Route::post('sendmessage', 'HomeController@social');

Route::get('the-pv-module', function () {
    return view('pv');
});

Route::get('our-team', function () {
    return view('team');
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
Route::any('sendmailajax', 'MailController@mailajax');
Route::get('contact-us', array('as'=>'contact-us', 'uses'=>'MailController@contact'));

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
    return view('welcome');
});

Route::get('welcome', function () {

    return "Hello World!";

});

Route::post('welcome', function () {

    return "Hello World!";

});

Route::match(['get', 'post'], 'match', function () {

    return "Matches GET and POST";

});

Route::any('any', function () {

    return "Matches any method";

});

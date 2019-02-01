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

Route::get('welcome/{id?}', function ($id = null) {
    return "Hello $id";
});

//Renombrado de rutas
Route::get('user/profile', ['as' => 'profile', function () {

  $url = route('profile');
  return "This url is: " . $url;

}]);

Route::get('user/{id}/profile', ['as' => 'profile', function ($id) {

  $url = route('profile', ['id' => $id]);
  return 'This url is: ' . $url;

}]);

//Grupo de rutas
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {

  Route::get('/', function ()
  {

    return '/user';
  });

  Route::get('profile', function () {

    return 'user/profile';
  });
});

//Proteccion CSRF
Route::post('home/articles/store', [

  'Middleware' => 'auth',
  'Before' => 'csrf',
  'Uses' => 'PostController@store'

]);

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function() {
  Auth::logout();
});

Route::auth();

Route::get('/got', [
  'middleware' => ['auth'],
  'uses' => function () {
   echo "You are allowed to view this page!";
}]);

Route::get('/home', 'HomeController@index');

Route::resource('consoles', 'ConsoleController');
Route::resource('companies', 'CompanyController');
Route::resource('games', 'GameController');

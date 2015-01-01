<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

//candidates/backend-developer/1
Route::get('/candidates/{slug}/{id}', ['as' => 'category', 'uses' => 'CandidatesController@category']);

//ezequiel-garcia/1
Route::get('{slug}/{id}', ['as' => 'candidate', 'uses' => 'CandidatesController@show']);

//ruta que muestra la vista de registro
Route::get('sign-up', ['as' => 'sign-up', 'uses' => 'UsersController@signUp' ] );

//ruta para guardar un usuario
Route::post('sign-up', ['as' => 'register', 'uses' => 'UsersController@register' ] );

Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);

Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout' ] );

Route::get('account', ['as' => 'account', 'uses' => 'UsersController@account' ] );

Route::get('account', ['as' => 'update_account', 'uses' => 'UsersController@update_account' ] );

Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@profile' ] );

Route::get('profile', ['as' => 'update_profile', 'uses' => 'UsersController@update_profile' ] );
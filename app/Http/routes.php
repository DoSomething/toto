<?php


Route::get('/', function () {
    return view('welcome');
});

Route::resource('message', 'MessageController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::get('users', ['as' => 'users.index', 'uses' => 'UserController@index']);
Route::get('users/create', ['as' => 'users.create', 'uses' => 'UserController@create']);
Route::post('users/store', ['as' => 'users.store', 'uses' => 'UserController@store']);


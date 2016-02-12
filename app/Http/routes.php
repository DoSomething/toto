<?php

/*
 * CRUD routes
 */
Route::resource('messages', 'MessageController');
Route::resource('users', 'UserController');
Route::get('search/{term}', 'SearchController@search');

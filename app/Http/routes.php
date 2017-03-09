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

// PUBLIC HOMEPAGE ROUTE
Route::get('/', function () {
    return view('welcome');
});

// INSTANTIATE AUTH ROUTING AND ESTABLISH LOGOUT ROUTE
Route::auth();

// USER HOMEPAGE ROUTE
Route::get('/home', 'HomeController@index');

// USER TASKS ROUTES
Route::resource('/tasks', 'TasksController');
Route::get('/tasks-all', 'TasksController@index_all');
Route::get('/tasks-complete', 'TasksController@index_complete');
Route::get('/tasks-incomplete', 'TasksController@index_incomplete');

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

Route::get('/', [
    'uses'=>'PagesController@index',
    'as'=>'home',
    ]
);


// The Routes for authentication
Route::get('/signin',[
    'uses' => 'AuthController@getSignin',
    'as'=> 'auth.signin',
]);

Route::post('/signin',[
    'uses' => 'AuthController@postSignin',
]);

Route::get('/signup',[
    'uses' => 'AuthController@getSignup',
    'as'=> 'auth.signup',
]);

Route::post('/signup',[
    'uses' => 'AuthController@postSignup',
    'as'=> 'auth.signup',
]);

Route::get('/signout',[
    'uses' => 'AuthController@getSignout',
    'as'=> 'auth.signout',
]);
// The Routes for authentication



// The Routes for Creating Tasks

Route::get('/tasks',[
    'uses' => 'TasksController@index',
    'as'=> 'tasks',
]);

Route::get('/tasks/create',[
    'uses' => 'TasksController@create',
    'as'=> 'tasks.create',
]);

Route::post('/tasks/create',[
    'uses' => 'TasksController@store',
]);


Route::post('/show/{id}',[
    'uses' => 'TasksController@show',
    'as'=> 'tasks.show',
]);

// The Routes for creating tasks
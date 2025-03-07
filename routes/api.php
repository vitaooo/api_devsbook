<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/ping', function ( ) {
    return ['pong'];
});

// Route::get('/401', 'AuthController@unauthorized')->name('login');

// Route::post('/auth/login', 'AuthController@login');
// Route::post('/auth/logout', 'AuthController@logout');
// Route::post('/auth/refresh', 'AuthController@refresh');

Route::post('/user', 'AuthController@create');

// Route::put('/user', 'UserController@update');
// Route::post('/user/avatar', 'UserController@updateAvatar');
// Route::post('/user/cover', 'UserController@updateCover');

// Route::get('/feed', 'FeedController@read');
// Route::get('/user/feed', 'FeedController@userFeed');
// Route::get('/user/{id}/feed', 'FeedController@userFeed');

// Route::get('/user', 'UserController@read');
// Route::ger('/user/{id}', 'UserController@read');

// Route::post('/feed', 'FeedController@create');

// Route::post('/post/{id}/like', 'PostController@like');
// Route::post('/post/{id}/comment', 'PostController@comment');

// Route::get('/search', 'SearchController@search');
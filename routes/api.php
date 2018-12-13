<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'auth'], function ($router) {
	Route::post('register', 'AuthController@register');
	Route::post('login', 'AuthController@login');
	Route::post('logout', 'AuthController@logout');
	Route::post('refresh', 'AuthController@refresh');
	Route::post('me', 'AuthController@me');
});
Route::get('/getroles', 'ControllerRoles@getRoles');
Route::post('/postroles', 'ControllerRoles@getOneRole');
Route::post('/addroles', 'ControllerRoles@setRole');
Route::post('/updateroles', 'ControllerRoles@updateRole');


Route::get('/getCategory', 'ControllerCategories@getCategories');
Route::post('/postCategory', 'ControllerCategories@getOneCategory');
Route::post('/addCategory', 'ControllerCategories@setCategory');
Route::post('/updateCategory', 'ControllerCategories@updateCategory');

Route::get('/getPost', 'ControllerPosts@getPosts');
Route::post('/postPost', 'ControllerPosts@getOnePost');
Route::post('/addPost', 'ControllerPosts@setPost');
Route::post('/updatePost', 'ControllerPosts@updatePost');

Route::get('/getComment', 'ControllerComments@getComments');
Route::post('/postComment', 'ControllerComments@getOneComment');
Route::post('/addComment', 'ControllerComments@setComment');
Route::post('/updateComment', 'ControllerComments@updateComment');

Route::get('/getUser', 'ControllerUsers@getUsers');
Route::post('/postUser', 'ControllerUsers@getOneUser');
Route::post('/addUser', 'ControllerUsers@setUser');
Route::post('/updateUser', 'ControllerUsers@updateUser');

Route::get('/getGallery', 'ControllerGalleries@getGalleries');
Route::post('/postGallery', 'ControllerGalleries@getOneGallery');
Route::post('/addGallery', 'ControllerGalleries@setGallery');
Route::post('/updateGallery', 'ControllerGalleries@updateGallery');

Route::get('/getMod', 'ControllerMods@getMods');
Route::post('/postMod', 'ControllerMods@getOneMod');
Route::post('/addMod', 'ControllerMods@setMod');
Route::post('/updateMod', 'ControllerMods@updateMod');



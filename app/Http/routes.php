<?php

Route::get('/', [
	'uses' => 'WelcomeController@index',
	'as' => 'home'
]);

Route::get('articulos/{slug}', [
	'as' => 'article',
	'uses' => 'WelcomeController@article'
]);

Route::get('/tag/{tag}', [
	'as' => 'tagged',
	'uses' => 'WelcomeController@tags'
]);

Route::get('/admin', [
	'as' => 'adminsite',
	'uses' => 'AdminController@desktop'
]);

Route::get('/desktop', 'AdminController@desktop');

Route::get('admin/posts/{id}/edit', 'AdminController@edit');

Route::post('admin/posts/{id}/refresh', 'AdminController@refresh');

Route::get('admin/posts/new', [
	'as' => 'nuevo',
	'uses' => 'AdminController@nuevo'
]);

Route::get('admin/posts/{id}/delete', 'AdminController@delete');

Route::post('admin/posts/new', 'AdminController@crear');

Route::get('/logout', [
	'uses' => 'AdminController@logout',
	'as' => 'logout'
]);

/* Social Media Routes */

Route::get('twitter', [
	'as' => 'twitter',
	'uses' => 'WelcomeController@twitter'
]);

Route::get('facebook', [
	'as' => 'facebook',
	'uses' => 'WelcomeController@facebook'
]);

Route::get('youtube', [
	'as' => 'youtube',
	'uses' => 'WelcomeController@youtube'
]);

Route::get('vine', [
	'as' => 'vine',
	'uses' => 'WelcomeController@vine'
]);

Route::get('linkedin', [
	'as' => 'linkedin',
	'uses' => 'WelcomeController@linkedin'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

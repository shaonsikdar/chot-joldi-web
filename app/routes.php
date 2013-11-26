<?php

Route::controller('users', 'UsersController');

Route::get('/', function(){
	return View::make("hello");
});
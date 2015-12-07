<?php

Route::resource('/', 'UserController');

// API

Route::resource('/api/users', 'ApiUserController');



// Route::group(['prefix' => '/api/users'], function () {
	
// 	Route::match(['GET', 'POST'], '/', function () {

// 		if (Request::isMethod('GET')) {	
// 			return App\User::all();
// 		} else {
// 			return App\User::create(Request::all());
// 		}

// 	});

// 	Route::match(['GET', 'PATCH', 'DELETE'], '/{id}', function ($id) {

// 		if (Request::isMethod('GET')) {	
// 			return App\User::findOrFail($id);
// 		} elseif (Request::isMethod('PATCH')) {
// 			App\User::findOrFail($id)->update(Request::all());
// 			return Response::json(Request::all()); //response()->json()
// 		} else {
// 			return App\User::destroy($id);
// 		}

// 	});

// });
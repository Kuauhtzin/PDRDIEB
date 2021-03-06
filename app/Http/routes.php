<?php

Route::group(['middleware' => 'cors','prefix' => 'api'], function(){
	// Login
	Route::post('login', ['as'=>'login.post', 'uses'=>'AuthenticateController@login']);
	// Routes JWTAuth
	Route::group(['middleware'=>'jwt-auth'], function(){
		// Solicitudes de Herramientas
		Route::get('solicitud_herramientas','SolicitudesController@index');
		Route::post('solicitud_herramientas','SolicitudesController@store');
		Route::delete('solicitud_herramientas/{id}','SolicitudesController@destroy');
		// Grados
		Route::get('grados','GradosController@index');
		// Alumnos
		Route::get('alumnos','AlumnosController@index');
		Route::post('alumnos','AlumnosController@store');
		Route::put('alumnos/{id}','AlumnosController@update');
		Route::delete('alumnos/{id}','AlumnosController@destroy');
		// Profesores
		Route::get('profesores','ProfesoresController@index');
		Route::post('profesores','ProfesoresController@store');
		Route::put('profesores/{id}','ProfesoresController@update');
		Route::delete('profesores/{id}','ProfesoresController@destroy');
		// Scores
		Route::get('scores','SolicitudesController@index');
		Route::get('scores/{id}','SolicitudesController@show');
		Route::post('scores','SolicitudesController@store');


	});	
});
////////////
/** AUTH **/
///////////
Route::get('/',function(){
	return view('auth.login');
});
Route::get('/logout',['as'=>'logout','uses'=>'Auth\AuthController@logout']);

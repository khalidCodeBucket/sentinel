<?php


Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'visitors'], function(){

	Route::get('/register', 'RegistrationController@register');
    Route::post('/register', 'RegistrationController@postRegister');

    Route::get('/login', 'LoginController@login');
    Route::post('/login', 'LoginController@postLogin');

    Route::get('/forgot-password', 'ForgotPasswordController@forgotPassword');
    Route::post('/forgot-password', 'ForgotPasswordController@postForgotPassword');
    Route::get('/reset/{email}/{resetCode}', 'ForgotPasswordController@resetPassword');
    Route::post('/reset/{email}/{resetCode}', 'ForgotPasswordController@postResetPassword');

});


Route::post('/logout', 'LoginController@logout'); 

Route::get('/earnings', 'AdminController@earnings')->middleware('admin');

Route::get('/tasks', 'ManagerController@tasks')->middleware('manager');

Route::get('/activate/{email}/{activationCode}', 'ActivationController@activate');


Route::post('/posts', 'PostsController@store');
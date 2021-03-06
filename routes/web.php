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

Route::get('/welcome', function () {
    return view('welcome_basic');
})->middleware('auth.basic');



// Index
Route::get('/', ['as'=>'home','uses'=>'AppController@index']);

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('profile', 'HomeController@getProfile')->name('profile');

// Para enviar emails
Auth::routes(['verify' => true]);


// obtener Mensajes
Route::get('message', 'HomeController@getMensajes')->name('message');

//enviar mensajes
Route::post('message', 'HomeController@store')->name('messages.store');

//ver form enviar mensajes
Route::get('sendMessage', 'HomeController@sendMessage')->name('sendMessage');


// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/home', 'HomeController@index')->name('home');

// Editar perfil
Route::post('updatePerfil', 'HomeController@updatePerfil');
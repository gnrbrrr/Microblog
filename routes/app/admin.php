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

// oAuth Route, verify.hmac middleware is required in this route
// Route::get('/', 'Auth\AuthController@requestAuthorizationCode')->middleware('verify.hmac');

Route::get('/admin', 'SampleAdminController@sample');

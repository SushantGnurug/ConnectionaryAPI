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

Route::get('/', 'HomeController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//--------------------------------------------Controller---------------------------------------------//
Route::resource('service','ServiceController');
Route::resource('service-type','ServiceTypeController');
Route::resource('experience','ExperienceController');
Route::resource('kyc','KycController');
Route::resource('connection','ConnectionController');
Route::resource('user','UserController');
//--------------------------------------------Custom Service-----------------------------------------//
Route::group(['prefix'=>'service/{service}','as'=>'service.'], function(){
    Route::get('/auth-changed', ['as' => 'changeauth', 'uses' => 'ServiceController@changeAuthentication']);
});

Route::group(['prefix'=>'user/{user}','as'=>'user.'], function(){
    Route::get('/services', ['as' => 'servicesbyuser', 'uses' => 'UserController@servicesbyuser']);
    Route::get('/experieces', ['as' => 'experiencesbyuser', 'uses' => 'UserController@experiencesbyuser']);
});

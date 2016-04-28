<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/backend', 'Backend\HomeController@index');

// provider manager pages
Route::get('/backend/providers', [
    'as' => 'backend_provider.index',
    'uses' => 'Backend\ProvidersController@index'
]);
Route::get('/backend/providers/regist', [
    'as' => 'backend_provider.regist',
    'uses' => 'Backend\ProvidersController@edit'
]);

Route::post('/backend/providers', [
    'as' => 'backend_provider.store',
    'uses'  => 'Backend\ProvidersController@store',
]);

Route::get('/backend/providers/edit/{id}', [
    'as' => 'backend_provider.edit',
    'uses' => 'Backend\ProvidersController@edit'
]);
Route::get('/backend/providers/{id}', [
    'as' => 'backend_provider.show',
    'uses' => 'Backend\ProvidersController@show'
]);

// SURVEY
// provider manager pages
Route::get('/backend/surveys', [
    'as' => 'backend_surveys.index',
    'uses' => 'Backend\SurveysController@index'
]);

Route::get('/backend/surveys/create', [
    'as' => 'backend_surveys.create',
    'uses' => 'Backend\SurveysController@create'
]);

Route::get('/backend/surveys/edit/{id}', [
    'as' => 'backend_surveys.edit',
    'uses' => 'Backend\SurveysController@edit'
]);

Route::post('/backend/surveys', [
    'as' => 'backend_surveys.store',
    'uses'  => 'Backend\SurveysController@store',
]);
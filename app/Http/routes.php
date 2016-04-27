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
$route_partials = [
    // Global: Filters, Patterns
    'master',
];
/** Route Partial Loadup
=================================================== */

foreach ($route_partials as $partial) {

    $file = __DIR__.'/routes/'.$partial.'.php';
    if ( ! file_exists($file))
    {
        $msg = "Route partial [{$partial}] not found.";
        throw new \Illuminate\Filesystem\FileNotFoundException($msg);
    }

    require_once $file;
}

Route::get('/', 'Backend\HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

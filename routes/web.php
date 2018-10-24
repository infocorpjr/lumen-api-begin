<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    abort(404);
});

$router->group(['prefix' => 'api'], function () use ($router) {
    // API CONTATO
    // index
    $router->get('contato',  ['uses' => 'ContactController@index']);
    // show
    $router->get('contato/{id}', ['uses' => 'ContactController@show']);
    // create
    $router->post('contato', ['uses' => 'ContactController@create']);

    // API BRIEF
    // index
    $router->get('brief',  ['uses' => 'BriefController@index']);
    // show
    $router->get('brief/{id}', ['uses' => 'BriefController@show']);
    // create
    $router->post('brief', ['uses' => 'BriefController@create']);
});
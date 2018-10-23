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
    $router->get('contato',  ['uses' => 'ContactController@index']);

    $router->get('contato/{id}', ['uses' => 'ContactController@show']);

    $router->post('contato', ['uses' => 'ContactController@create']);

    $router->delete('contato/{id}', ['uses' => 'ContactController@delete']);

    $router->put('contato/{id}', ['uses' => 'ContactController@update']);
});
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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/task','TaskController@index');

$app->post('/create-task','TaskController@create');

$app->post('/update-task/{id}','TaskController@update');

$app->delete('/delete-task/{id}','TaskController@delete');

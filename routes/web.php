<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    //return $router->app->version();
    return 'Primeira API REST com Lumen - ' . $router->app->version();
});

$router->get('/factories', function () use ($router) {
    /*\App\Models\Course::factory()->count(10)->create(); 
    |
    | A factory poderia ser chamada direto aqui, mas toda vez que 
    | atualizasse a página nessa rota, a factory iria popular o db
    */

    return \App\Models\Course::all();
});

$router->group(['prefix' => 'courses'], function() use($router){
    $router->get('/', 'CourseController@index');
    $router->get('/{id}', 'CourseController@show');
    $router->post('/', 'CourseController@store');
    $router->put('/{id}', 'CourseController@update');
    $router->delete('/{id}', 'CourseController@destroy');
    
    /*
        Recurso: Course
        Endpoint: /courses
        GET, POST, PUT/PATCH, DELETE
    */
});

<?php

return function ($app) {

    $app->setNamespace('\App\Controllers');
    
    $app->get('/', function () use($app) { 
        $app->response()->json([
            "status" => 'success',
            "message" => 'ardiMVC is working well !'
        ], 200);
    });

    $app->group('/auth', function () use($app) {
        $app->post("/testing", "AuthController@index");
    });

    $app->post("/home", "AuthController@index");
    $app->get("/getdb", "AuthController@get_database");

};
<?php

// Configuration
return function ($app) {

    $app->cors([
        "origin" => "*",
        "methods" => "GET,PUT,POST,DELETE",
        "allowedHeaders" => "*",
        "exposedHeaders" => "",
        "credentials" => false,
        "maxAge" => null,
        "preflightContinue" => false,
        "optionsSuccessStatus" => 200,
    ]);

    $app->config([
        'down' => false,
        'debug' => true,
        'mode' => 'development'
    ]);
};

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

    // Config DB 1
    $app->config([
        'db_dbtype' => 'mysql',
        'db_host' => '127.0.0.1',
        'db_username' => 'ardi',
        'db_password' => 'ITimipsuperadmin88',
        'db_dbname' => 'db_kitas',
    ]);

    $app->config([
        'conf01' => 'value dari conf01'
    ]);

};

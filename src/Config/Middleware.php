<?php

// Middleware
return function ($app) {

    $app->before('GET|POST', '/auth/.*', function () use ($app) {
        if (!$app->request()->hasHeader('IMIP-TOKEN')) {
            $app->response()->json([
                "status" => 'failed',
                "message" => 'Unauthorized'
            ], 401);
            // header('location: /ambil');
            exit();
        }
    });
};
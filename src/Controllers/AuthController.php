<?php

namespace App\Controllers;

class AuthController extends Controller{

    function index()
    {
        $this->app->response()->json([
            "message" => 'Hallo controllers Auth',
            "data" => $this->app->request()->get("username")
        ], 200);
    }

}
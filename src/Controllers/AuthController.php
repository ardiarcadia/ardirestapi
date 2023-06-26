<?php

namespace App\Controllers;

use App\Models\MysqlModel;

class AuthController extends Controller{

    function index()
    {
        $this->app->response()->json([
            "message" => 'Hallo controllers Auth',
            "data" => $this->app->request()->get("username")
        ], 200);
    }

    function get_database()
    {
        $myDb = new MysqlModel;
        $myDb->connectDb();

        $this->app->response()->json([
            "message" => 'success',
            "data" => $myDb->index()
        ], 200);
    }

}
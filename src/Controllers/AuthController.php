<?php

namespace App\Controllers;

use App\Models\MysqlModel;

class AuthController extends Controller{

    function index()
    {
        $this->app->response()->json([
            "message" => 'Hallo controllers Auth',
            "data" => $this->app->request()->get("username"),
            "config" => $this->app->config('conf01')
        ], 200);
    }

    function get_database()
    {
        $myDb = new MysqlModel;
        $myDb->connectDb();

        $this->app->response()->json([
            "message" => 'success',
            "data" => $myDb->get_all_users()
        ], 200);
    }

}
<?php

namespace App\Models;

class MysqlModel extends Model{

    function __construct() {
        parent::__construct();
        $this->connectDb();
    }

    function connectDb()
    {
        $this->db->connect([
            'dbtype' => $this->app->config('db_dbtype'),
            'host' => $this->app->config('db_host'),
            'username' => $this->app->config('db_username'),
            'password' => $this->app->config('db_password'),
            'dbname' => $this->app->config('db_dbname')
        ]);
    }

    function get_all_users()
    {
        $users = $this->db->query('SELECT * FROM tbl_users')->all();
        return $users;
    }

}
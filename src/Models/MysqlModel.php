<?php

namespace App\Models;

use Leaf\App;
use Leaf\Db;

class MysqlModel{

    protected $app;
    protected $db;

    public function __construct(){
        $this->app = new App;
        $this->db = new Db;
	}

    function connectDb()
    {
        $this->db->connect([
            'dbtype' => 'mysql',
            'host' => '127.0.0.1',
            'username' => 'ardi',
            'password' => 'ITimipsuperadmin88',
            'dbname' => 'db_kitas',
        ]);
    }

    function index()
    {
        $this->connectDb();
        $users = $this->db->query('SELECT * FROM tbl_users')->all();
        return $users;
    }

}
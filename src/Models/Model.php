<?php

namespace App\Models;

use Leaf\App;
use Leaf\Db;

class Model{

    protected $app;
    protected $db;

    public function __construct(){
        $this->app = new App;
        $this->db = new Db;
	}

}
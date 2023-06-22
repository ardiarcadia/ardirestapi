<?php

namespace App\Controllers;

use Leaf\App;

class Controller{

    protected $app;

    public function __construct(){
        $this->app = new App;
	}

}
<?php

namespace controllers;

class IndexController{


    function __construct(){

    }

    public function index(){
        include(ROOT . "views/login.php");
    }

    public function shop(){
        include(ROOT . "views/shop.php");
    }

}
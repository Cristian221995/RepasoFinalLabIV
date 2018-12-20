<?php
namespace controllers;

class HomeController
{

    public function __construct()
    {
        
    }

    public function index()
    {
        if(isset($_SESSION['user'])){
            include(ROOT.'views/select.php');
        }else{
            $loginController = new LoginController();
            $loginController->index();
        }
    }

}
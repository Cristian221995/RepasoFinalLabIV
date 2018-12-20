<?php
namespace controllers;
use daos\databases\MarioDB as MarioDB;
//use daos\lists\MarioList as MarioList;
use models\Mario as Mario;
use controllers\LoginController as LoginController;


class MarioController{

    protected $dao;
    public function __construct()
    {
        $this->dao=MarioDB::getInstance(); // Dao Base de datos
        //$this->dao= new marioList(); // Dao Lista
    }

    public function index(){
        if(isset($_SESSION['user'])){
            include(ROOT.'views/player.php');
        }else{
            $loginController = new LoginController();
            $loginController->index();
        }
        
    }

    public function store()
    {
        $mario = new Mario(1, "50", "38", "80", "60", "roja", "azul", "mocasin");
        $this->dao->insert($mario);
        include(ROOT.'views/player.php');
    }

}

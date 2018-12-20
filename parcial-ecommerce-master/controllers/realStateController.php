<?php
namespace controllers;
use daos\databases\RealStateDB as RealStateDB;
//use daos\lists\RealStateDao as RealStateDao;
use models\RealState as RealState;
use controllers\LoginController as LoginController;
use controllers\ShopController as ShopController;
use controllers\FileController as FileController;

class RealStateController{

    protected $dao;
    public function __construct()
    {
        $this->dao=RealStateDB::getInstance();
        //$this->dao= new RealStateDao(); // Dao Lista
    }

    public function index(){
        if(isset($_SESSION['user'])){
            include(ROOT . "views/add-new-real-estate.php");
        }else{
            $loginController = new LoginController();
            $loginController->index();
        }
        
    }

    public function store($user, $title, $description, $bedrooms, $parking, $price, $image)
    {
        $fileController = new FileController();
        $rutaImagen = $fileController -> subirImage($_FILES['image'], "RstatetImg");
        $realState = new RealState($user,$title,$description,$price, $bedrooms,$parking, $rutaImagen);
        $this->dao->insert($realState);
        $shopController = new ShopController();
        $shopController->index();
    }

    public function delete($realState){

        $this->dao->delete($realState);
        $shopController = new ShopController();
        $shopController->index();
        
    }
}

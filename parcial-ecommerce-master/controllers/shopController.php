<?php
namespace controllers;
use daos\databases\RealStateDB as RealStateDB;
//use daos\lists\RealStateDao as RealStateDao;
use controllers\IndexController as IndexController;
use models\RealState;

class ShopController
{

    public function __construct()
    {
        
    }

    public function index()
    {
        $realStateDB = new RealStateDB(); //Dao Base de datos
        //$realStateDB= new RealStateDao();  //Dao Lista
        $realList = $realStateDB->retride();
        if(!$realList){
            $realList['0']= new RealState(null, null, null, null, null, null, null);
        }
        include(ROOT.'views/shop.php');
    }    

}
?>
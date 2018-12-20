<?php
namespace controllers;
use daos\databases\UserDB as UserDB; //Dao Base de datos
//use daos\lists\UserList as UserList; //Dao List
use controllers\HomeController as HomeController;

class LoginController
{

    public function __construct()
    {
        
    }

    public function index()
    {
        include(ROOT.'views/start.php');
    }

    public function login($email, $pass){

        $userDB = new UserDB();
        $user = $userDB->searchByUsername($email);
        //$userList = new UserList(); //Esto es de lista
        //$userList->setUserList(); //Esto es de lista
        //$list = $userList->retride(); //Esto es de lista
        //$user = $list[0]; //Esto es de lista
        if($user){
            if($user->getPass() === $pass){
                $_SESSION['user'] = $user;
                $homeController = new HomeController();
                $homeController->index();
            }
        }else{
            $this->index();
        }
    }

    public function logout(){

        if(isset($_SESSION["user"])){
            session_unset();
            session_destroy();
            $this->index();
        }
    }

    

}
?>
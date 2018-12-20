<?php 

namespace models;

class User{

    private $id;
    private $email;
    private $userName;
    private $pass;

    function __construct($id, $email, $userName, $pass){
        
        $this->id= $id;
        $this->email = $email;
        $this->userName = $userName;
        $this->pass = $pass;
    }

    public function setId($id){

        $this->id = $id;
    }

    public function getId(){

        return $this->id;
    }


    public function setEmail($email){

        $this->email = $email;
    }

    public function setUserName($userName){

        $this->userName = $userName;
    }

    public function setPass($pass){

        $this->pass = $pass;
    }

    public function getEmail(){

        return $this->email;
    }

    public function getUserName(){

        return $this->userName;
    }

    public function getPass(){

        return $this->pass;
    }


}
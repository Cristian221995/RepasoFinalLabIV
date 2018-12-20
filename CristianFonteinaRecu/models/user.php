<?php 

namespace models;

class User{

    private $id;
    private $email;
    private $pass;

    function __construct($id, $email, $pass){
        
        $this->id= $id;
        $this->email = $email;
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

    public function setPass($pass){

        $this->pass = $pass;
    }

    public function getEmail(){

        return $this->email;
    }

    public function getPass(){

        return $this->pass;
    }


}
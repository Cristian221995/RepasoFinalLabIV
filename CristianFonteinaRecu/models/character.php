<?php 

namespace models;

class Character{

    private $idUser;
    private $velocidad;
    private $fuerza;
    private $inteligencia;
    private $agilidad;

    function __construct($idUser, $velocidad, $fuerza, $inteligencia, $agilidad){
        
        $this->idUser = $idUser;
        $this->velocidad = $velocidad;
        $this->fuerza= $fuerza;
        $this->inteligencia= $inteligencia;
        $this->agilidad= $agilidad;
    }

    // public function getId(){

    //     return $this->id;
    // }

    // public function setId($id){

    //     $this->id = $id;
    // }

    public function getIdUser(){

        return $this->idUser;
    }

    public function setIdUser($idUser){

        $this->idUser = $idUser;
    }

    public function getVelocidad(){

        return $this->velocidad;
    }

    public function setVelocidad($velocidad){

        $this->velocidad = $velocidad;
    }

    public function getFuerza(){

        return $this->fuerza;
    }

    public function setFuerza($fuerza){

        $this->fuerza = $fuerza;
    }

    public function getInteligencia(){

        return $this->inteligencia;
    }

    public function setInteligencia($inteligencia){

        $this->inteligencia = $inteligencia;
    }

    public function getAgilidad(){

        return $this->agilidad;
    }

    public function setAgilidad($agilidad){

        $this->agilidad = $agilidad;
    }



}
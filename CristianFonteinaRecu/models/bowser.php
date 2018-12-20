<?php 

namespace models;
use interfaces\moves as moves;
use models\Character as Character;

class Mario extends Character implements moves{

    private $accesorio;

    function __construct($idUser, $velocidad, $fuerza, $inteligencia, $agilidad, $accesorio){
        parent::__construct($idUser, $velocidad, $fuerza, $inteligencia, $agilidad);
        $this->camiseta= $camiseta;
        $this->pantalon = $pantalon;
        $this->accesorio = $accesorio;
    }

    public function setAccesorio($accesorio){

        $this->accesorio = $accesorio;
    }


    public function getAccesorio(){

        return $this->accesorio;
    }

    public function avanzar(){
        echo ("Bowser esta avanzando");
    }

    public function saltar(){
        echo ("Bowser esta saltando");
    }

    public function golpear(){
        echo ("Bowser esta golpeando");
    }

    public function girar(){
        echo ("Bowser esta girando");
    }

}
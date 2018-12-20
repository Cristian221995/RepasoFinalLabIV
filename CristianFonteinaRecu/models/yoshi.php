<?php 

namespace models;
use interfaces\moves as moves;
use models\Character as Character;

class Mario extends Character implements moves{

    private $calzado;

    function __construct($idUser, $velocidad, $fuerza, $inteligencia, $agilidad, $calzado){
        parent::__construct($idUser, $velocidad, $fuerza, $inteligencia, $agilidad);
        $this->calzado = $calzado;
    }

    public function setCalzado($calzado){

        $this->calzado = $calzado;
    }

    public function getCalzado(){

        return $this->calzado;
    }

    public function avanzar(){
        echo ("Yoshi esta avanzando");
    }

    public function saltar(){
        echo ("Yoshi esta saltando");
    }

    public function golpear(){
        echo ("Yoshi esta golpeando");
    }

    public function bolaDeFuego(){
        echo ("Yoshi esta tirando bolas de fuego");
    }

}
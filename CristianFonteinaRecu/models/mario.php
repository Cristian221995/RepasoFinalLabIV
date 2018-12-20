<?php 

namespace models;
use interfaces\moves as moves;
use models\Character as Character;

class Mario extends Character implements moves{

    private $camiseta;
    private $pantalon;
    private $calzado;

    function __construct($idUser, $velocidad, $fuerza, $inteligencia, $agilidad, $camiseta, $pantalon, $calzado){
        parent::__construct($idUser, $velocidad, $fuerza, $inteligencia, $agilidad);
        $this->camiseta= $camiseta;
        $this->pantalon = $pantalon;
        $this->calzado = $calzado;
    }

    public function setCamiseta($camiseta){

        $this->camiseta = $camiseta;
    }

    public function getCamiseta(){

        return $this->camiseta;
    }

    public function setPantalon($pantalon){

        $this->pantalon = $pantalon;
    }

    public function setCalzado($calzado){

        $this->calzado = $calzado;
    }

    public function getPantalon(){

        return $this->pantalon;
    }

    public function getCalzado(){

        return $this->calzado;
    }

    public function avanzar(){
        echo ("Mario esta avanzando");
    }

    public function saltar(){
        echo ("Mario esta saltando");
    }

    public function golpear(){
        echo ("Mario esta golpeando");
    }

    public function aplastar(){
        echo ("Mario esta aplastando");
    }

}
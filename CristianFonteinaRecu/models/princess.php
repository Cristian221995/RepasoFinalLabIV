<?php 

namespace models;
use interfaces\moves as moves;
use models\Character as Character;

class Mario extends Character implements moves{

    private $vestido;
    private $calzado;

    function __construct($idUser, $velocidad, $fuerza, $inteligencia, $agilidad, $vestido, $calzado){
        parent::__construct($idUser, $velocidad, $fuerza, $inteligencia, $agilidad);
        $this->vestido = $vestido;
        $this->calzado = $calzado;
    }

    public function setVestido($vestido){

        $this->vestido = $vestido;
    }

    public function setCalzado($calzado){

        $this->calzado = $calzado;
    }

    public function getVestido(){

        return $this->vestido;
    }

    public function getCalzado(){

        return $this->calzado;
    }

    public function avanzar(){
        echo ("La princesa esta avanzando");
    }

    public function saltar(){
        echo ("La princesa esta saltando");
    }

    public function golpear(){
        echo ("La princesa esta golpeando");
    }

    public function destello(){
        echo ("La princesa esta haciendo un destello");
    }

}
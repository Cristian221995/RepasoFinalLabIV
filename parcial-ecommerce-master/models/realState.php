<?php namespace models;

class RealState extends Bienes{
    private $bedrooms;
    private $parking;

    public function __construct($user,$title,$description,$price, $image, $bedrooms,$parking){
        parent::__construct($user,$title,$description,$price, $image);
        $this->bedrooms=$bedrooms;
        $this->parking=$parking;
    }

    public function getBedrooms(){
        return $this->bedrooms;
    }
    public function setBedrooms($bedrooms){
        $this->bedrooms=$bedrooms;
    }

    public function getParking(){
        return $this->parking;
    }
    public function setParking($parking){
        $this->parking=$parking;
    }
}
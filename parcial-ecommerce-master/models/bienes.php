<?php namespace models;

class Bienes{
    private $user;
    private $title;
    private $description;
    private $price;
    private $image;
    
    public function __construct($user,$title,$description,$price, $image){
        $this->user=$user;
        $this->title=$title;
        $this->description=$description;
        $this->price=$price;
        $this->image=$image;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }

    public function getUser(){
        return $this->user;
    }
    public function setUser($user){
        $this->user=$user;
    }

    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title=$title;
    }

    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description=$description;
    }

    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        $this->price=$price;
    }

    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        $this->image=$image;
    }
}
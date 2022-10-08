<?php

namespace Person;

class Person {

    public $name;
    public $eyeColor;
    public $age;

   
    public function  setName(string $name){
        $this->name = $name;
    }

    public function getName(){
        $this->name;
    }

}
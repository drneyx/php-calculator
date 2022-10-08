<?php

class UsersContr extends Users{

    public function createUser($first, $last, $addres, $number){
        $this->setUser($first, $last, $addres, $number);
    }
}
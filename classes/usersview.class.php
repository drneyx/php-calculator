<?php

class UsersView extends Users{

    public function showUsers($name){
        $result = $this->getUser($name);
        print_r($result[0]['first']);

    }
}
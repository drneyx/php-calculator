<?php

class Users extends Dbh{

    protected function getUser($name){
        $sql = "SELECT * FROM users WHERE addres = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
    
        $result = $stmt->fetchAll();  
        return $result;
    }
     

    protected function setUser($first, $last, $addres, $number){
        $sql = "INSERT INTO users(first, last, addres, number) VALUES(?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$first, $last, $addres, $number]);
        return $result;
    }
     
}
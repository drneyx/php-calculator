<?php

class Test extends Dbh{

    public function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row['first'] . '<br>';
        }
    }


    public function getUsersStmp($first, $last){
        $sql = "SELECT * FROM users WHERE first = ? AND last = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$first, $last]);
        $names = $stmt->fetchAll();
        
        foreach ($names as $name){
            echo $name['first'] . '<br>';
        }
    }
}
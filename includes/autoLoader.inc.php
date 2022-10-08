<?php 
spl_autoload_register('myAutoLoader'); 

function myAutoLoader($className){
    $path = "classes/";
    $ext = ".class.php";
    $fullPath = $path . str_replace('\\', '/', $className) . $ext;
    
    if(!file_exists($fullPath)){
        return False;
    }

    include_once $fullPath;
}
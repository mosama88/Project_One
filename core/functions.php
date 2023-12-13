<?php


function getrequesetmethod($method){
    if ($_SERVER ['REQUEST_METHOD'] == $method){
        return true;
    }else{
        return false;
    }

}

function checkpostinput($input){
     if(isset ($_POST[$input])){
        return true;
    }else{
        return false;
    }
}
 

function sanitizeInput($input){
    return trim(htmlentities(htmlspecialchars($input)));
}

function redirect($path){
    header("location:$path");
}
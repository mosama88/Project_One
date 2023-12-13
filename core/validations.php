<?php

// Function For Empty Input
function requierdVal($input){
     if(empty ($input)){
        return false; 
 }else{
    return true;
 }
}

// Function For length Input
function minVal($input, $lenght){
    if(strlen($input) < $lenght ){
        return false;
    }   
    return true;
}

// Function For length Input
function maxVal($input, $lenght){
    if(strlen($input) > $lenght ){
    return false;
}    
    return true;
}

// Function For Filter Email Input
function emailVal($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }return true;
}

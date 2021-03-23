<?php 

function isValid($key){

    if(empty($_POST[$key])){
        return "Invalid $key";
    }
}

function printError($message){
    
    if($message != ""){
        return "<li> $message </li>";
    }
}

function isNumber ($key){

    if(!is_numeric($_POST[$key])){
        return "Invalid $key";
    }
}
<?php

function emailCheck($userEmail){
    if(!$userEmail) {
        return false;
    }
    if(strpos($userEmail, '@') === false) {
        return false;
    }
    if(strpos($userEmail, '.') === false) {
        return false;
    }
    return true;
}

?>
<?php

if(!$user){
    header("Location: ?page=products"); 
    die();
}

Authentication::removeSession();

?>
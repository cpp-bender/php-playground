<?php
    $username = "cppbender";
    $phone = "123-456-789";

    $username = strtolower($username);
    $username = strtoupper($username);
    $username = trim($username);
    $username str_pad($username, 20 ,0 );
    $username = strrev($username);
    $username = str_shuffle($username);
    $count = strlen($username);
    $firstname = substr($username, 0, 3);
    $lastname = substr($username, 3);
    $stuff = explode("-", $phone);
    $username = str_replace("-","/", $phone);
?>
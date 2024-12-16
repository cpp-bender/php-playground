<?php
    setcookie("fav_food","pizza",  // add a cookie
    time()+86400 * 2,"/");

    setcookie("fav_food","pizza",  // delete a cookie
    time()-0,"/");

    setcookie("fav_food","pizza", 
    time()+86400 * 2,"/");
    setcookie("dessert","icecream",  
    time()+86400 * 2,"/");
    setcookie("fav_drink","water",  
    time()+86400 * 2,"/");

    foreach($_COOKIE as $key => $value){
        echo $key . " => " . $value . "<br>";
    }

?>
<?php
    $age = -50;

    if($age>= 18){
        echo "you may enter";
    }
    elseif($age == 0){
        echo "You were just born";
    }
    elseif($age <= 0){
        echo "That wasn't a valid age";
    }
    else{
        echo "you must be 18+ to enter";
    }
?>
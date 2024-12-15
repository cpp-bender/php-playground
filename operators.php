<?php
    $temp = 25;
    $cloudy = true;

    if($temp >= 0 && $temp<=30){
        echo "The weather is good.";
    }
    else if($temp>= 0 || $temp<=100){
        echo "The weather is bad.";
    }

    if(!$cloudy){
        echo "You can go out";
    }
    else{
        echo "<br>You can't go out. It's cloudy";
    }
?>
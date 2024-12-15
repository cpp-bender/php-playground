<?php
    $food1 = "apple";
    $food2 = "banana";
    $food3 = "orange";
    $food4 = "berry";

    $foods = array("apple", "banana", "orange"
    ,"berry");

    array_push($foods, "pineapple", "kiwi");
    array_pop($foods);    // removes from tail  
    array_shift($foods);  // removes from head

    $reversed_foods = array_reverse($foods);

    echo count($foods) . "<br>";

    foreach($foods as $food){
        echo "{$food} <br>";
    }
?>

<?php
    foreach($_SERVER as $key => $value){
        echo "{$key} = {$value} <br>" ;
    }

    if($_SERVER["REQUEST_METHOD"] === "GET"){
        echo "hit";
    }
?>
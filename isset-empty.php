<?php
    $username = "cppbender";
    if(isset($username)){
        echo "This variable is set";
    }else{
        echo "This variable is NOT set";
    }

    $x = "";

    if(empty($x)){
        echo "This variable is empty";
    }else{
        echo "This variable is NOT empty";
    }
?>
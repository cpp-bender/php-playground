<?php
    function say_hello($name){
        echo "hello {$name}";
    }

    function is_even($number){
        return true ? $number % 2 == 0 : false;
    }

    function hypotenuse(int $a, int $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }


    echo is_even(10);

    echo hypotenuse(3,4);

    say_hello("Ahmet");



?>
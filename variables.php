<?php
    $name = "Ahmet";
    $food = "iskender";
    $email = "ahmetaltioglu@gmail.com";
    $age = 20;
    $gpa = 3.1;
    $price = 23.99;
    $online = true;
    $quantity = 5;
    $quantitya = 10;

    echo "Hello {$name}<br>";
    echo "Do you like {$food}<br>";
    echo "Your email is {$email} <br>";
    echo "My age is {$age}<br>";
    echo "Your gpa is {$gpa}<br>";
    echo "Your {$food} is \${$price}<br>";
    echo "Online status: {$online}<br>";
    echo "Your check: {$online}<br>";
    $total = $price * $quantity;
    echo "Your ordered  {$quantity} x {$price}<br>";
    echo "Your check: \${$total}<br>";
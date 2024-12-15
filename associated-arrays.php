<?php
$capitals = array(
    "USA" =>   "DC",
    "Japan" => "Kyoto",
    "India" => "New Delhi"
);

$capitals["USA"] = "Florida";
$capitals["Turkey"] = "Ankara";
array_pop($capitals);
array_shift($capitals);
$keys = array_keys($capitals);
$values = array_values($capitals);
$capitals = array_flip($capitals);


foreach($keys as $key){
    echo $key . "<br>";
}

foreach ($capitals as $key => $value) {
    echo $key . ":" . $value . "<br>";
}

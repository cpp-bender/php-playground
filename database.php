<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";
    
    try{
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect <br>";
    }

    if($conn){
        echo "Connected <br>";
    }

    $query = "INSERT INTO users (user, passwords)
            VALUES ('cppbender', 'pizza123')";

    mysqli_query($conn, $query);


    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello <br>
</body>
</html>
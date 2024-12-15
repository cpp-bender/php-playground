<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for-loop.php" method="post">
        <label>Enter a number</label> <br>
        <input type="text" name="num"><br>
        <input type="submit" value="Start"> 
    </form>
    
</body>
</html>
<?php
    $number = $_POST["num"];

    for($i = 0; $i<=$number; $i++)
    {
        echo "{$i} <br>";
    }
?>
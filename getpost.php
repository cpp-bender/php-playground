<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getpost.php" method="post">
        <label>food</label><br>
        <input type="text" name="food"><br>
        <label>price</label> <br>
        <input type="text" name="price"><br>
        <label>quantity</label> <br>
        <input type="text" name="qty"><br>
        <input type="submit" value="Check">
    </form>
    <?php
        $quantity = $_POST["qty"];
        $f = $_POST["food"];
        $p = $_POST["price"] * $quantity;
        echo "You ordered {$quantity} x {$f} <br>";
        echo "Your check is: {$p}";
    ?>
</body>
</html>
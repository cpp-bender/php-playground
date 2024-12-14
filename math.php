<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php"  method="post">
        <label for="">x:</label>
        <input type="text" name="x"><br>
        <label for="">y:</label>
        <input type="text" name="y"><br>
        <label for="">z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="Calc">
    </form>
    <?php
        $x = $_POST["x"];
        $y = $_POST["y"];
        $z = $_POST["z"];
        $total = null;

        $total = abs($x);  // absolotue
        $total = floor($x); // floor
        $total = ceil($x);  // ceil
        $total = pow($x, $y);  // power
        $total = sqrt($x);  // squared-root
        $total = max($x, $y, $z);  // max
        $total = max($x, $y, $z);  // min
        $total = pi();  // PI number
        $total = rand(1, 100);
        echo $total;
    ?>
</body>
</html>
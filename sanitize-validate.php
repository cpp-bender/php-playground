<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="input.php" method="post">
    username: <br>
    <input type="text" name="username"> <br>
    <input type="submit" name="login" value="login">
    </form>
<!-- <script>alert("bam")</script> -->
</body>

</html>

<?php
    if (isset($_POST["login"])){
        $username = $_POST["username"];
        $username = filter_input(INPUT_POST,"username",
            FILTER_SANITIZE_SPECIAL_CHARS);
        echo "hello " . $username;
    }
?>
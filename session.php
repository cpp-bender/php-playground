<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
        username: <br>
        <input type="text" name = "username"> <br>
        password: <br>
        <input type="password" name = "password"> <br>
        <input type="submit" name="login" value="login"><br>
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php
    session_start();

    if(isset($_POST["login"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        if(!empty($_POST["username"]) &&
        !empty($_POST["password"])){
            header("Location: index.php");
        }
        else{
            echo "Missing username/password <br>";
        }
    }
    if(isset($_POST["logout"])){
        session_destroy();
    }
?>
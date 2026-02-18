<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="IssetandEmpty.php" method="post">
        <label for="user">username: </label>
        <input type="text" id="user" name="username"><br>
        <label for="pswd">password:&nbsp;</label>
        <input type="password" id="pswd" name="password"><br>
        <input type="submit" name="login">
    </form>
</body>
</html>


<?php
    //  isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    $username = null;

    foreach($_POST as $key => $value){
        echo "{$key} = {$value}" . "<br>";
    }

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Hello {$username}";
        }
        elseif(empty($password)){
            echo "Password is missing.";
        }
        else{
            echo "Welcome {$username}";
        }
    }
    // else{
    //     echo "This variable is NOT set";
    // }

    ?>
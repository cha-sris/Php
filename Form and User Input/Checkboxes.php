<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Checkboxes.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="foods[]" value="Hamburger">
        Hamburger <br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog <br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["submit"])){
        // if(empty($_POST[""])){
        //     echo "Select your preference/s.";
        // }
        $foods = $_POST["foods"];

        foreach($foods as $food){
            echo $food . "<br>";
        }

    }
?>
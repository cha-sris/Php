<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Circle.php" method="post">
        <label for="rad">Enter radius: </label>
        <input type="number" name="radius" id="rad">

        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
    $r = $_POST["radius"];
    $Circumference = null;
    $Area = null;
    $Volume = null;

    //  Formula
    $Circumference = 2 * pi() * $r;
    $Area = pi() * pow($r,2);
    $Volume = 4 / 3 * pi() * pow($r,3);

    //  Round off
    $Circumference = round($Circumference, 2);
    $Area = round($Area, 2);
    $Volume = round($Volume, 2);

    //  Output
    echo "Circumference = {$Circumference}" . "<br>";
    echo "Area = {$Area}" . "<br>";
    echo "Volume = {$Volume}" . "<br>";
?>
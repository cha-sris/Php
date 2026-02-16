<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="MathFunctions.php" method="post">
        <label for="X">x: </label>
        <input type="text" name="x" id="X"><br>

        <label for="Y">y: </label>
        <input type="text" name="y" id="Y"><br>

        <label for="Z">z: </label>
        <input type="text" name="z" id="Z"><br>

        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    $total1 = abs($x);
    $total2 = round($x);
    $total3 = floor($x);
    $total4 = ceil($x);
    $total5 = sqrt($x);
    $total6 = pow($x,$y);
    $total7 = max($x,$y, $z);
    $total8 = min($x,$y, $z);
    $total9 = pi();
    $total10 = rand($x, $z);

    echo "x = {$x}" . "<br>";
    echo "y = {$y}" . "<br>";
    echo "z = {$z}" . "<br>";
    echo "abs(x) = {$total1}" . "<br>";
    echo "round(x) = {$total2}". "<br>";
    echo "floor(x) = {$total3}" . "<br>";
    echo "ceil(x) = {$total4}" . "<br>";
    echo "sqrt(x) = {$total5}" . "<br>";
    echo "pow(x,y) = {$total6}" . "<br>";
    echo "max(x,y,z) = {$total7}" . "<br>";
    echo "min(x,y,z) = {$total8}" . "<br>";
    echo "pi = {$total9}" . "<br>";
    echo "rand = {$total10}" . "<br>";


?>
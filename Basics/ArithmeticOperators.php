<?php
    //  Arithmetic Opertors
    // + - * / ** %

    $x = 10;
    $y = 2;

    $z1 = $x + $y . "<br>"; 
    $z2 = $x - $y . "<br>";
    $z3 = $x * $y . "<br>";
    $z4 = $x / $y . "<br>";
    $z5 = $x ** $y . "<br>";
    $z6 = $x % $y . "<br>";

    echo "Arithmetic Operators <br>";

    echo $z1;
    echo $z2;
    echo $z3;
    echo $z4;
    echo $z5;
    echo $z6;

    // Increment/ Decrement operators

    $counter = 12;

    $counter++;

    echo "<br> Increment/Decrement Operators <br>";

    echo $counter . "<br>";

    $counter += 3;

    echo $counter . "<br>";

    $counter--;

    echo $counter . "<br>";
?>
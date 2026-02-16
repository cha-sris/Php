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

    //  Operator Precedence

    // (), **, * / %, + -

    $total = 3 - 0.000768;

    echo "<br>Operator Precendence <br>";
    echo $total . "<br>";
    echo (($a=5) + ($b=2)) * ($c=3) - $a ** $b + $a * $b / $c % $b;

    // $a = 5, $b = 2, $c = 3

    // $a + $b = 5 + 2 = 7

    // 7 * $c = 7 * 3 = 21

    // $a ** $b = 5 ** 2 = 25

    // $a * $b = 5 * 2 = 10

    // $a * $b / $c = 10 / 3 ≈ 3.333333333...

    // 3.333333333... % $b = 3.333333333... % 2 = 1.333333333...

    // 21 - 25 + 1.333333333... = -2.666666667...

    // Final result is approximately -2.67, but PHP rounds this to -3 for display

?>
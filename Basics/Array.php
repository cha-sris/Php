<?php
    $foods = array("apple", "orange", "banana", "coconut");

    array_push($foods, "pineapple", "kiwi");

    // removes the last element in foods array
    array_pop($foods);
    
    // removes the first element in foods array
    array_shift($foods);

    $reversed_foods = array_reverse($foods);

    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[3] . "<br>";
    // echo $foods[4] . "<br>";
    // echo $foods[5] . "<br>";

    foreach($foods as $food){
        //  for each food in foods, display each food
        echo $food . "<br>";
    }
    echo "<br>";
    foreach($reversed_foods as $rFood){
        //  for each food in foods, display each food
        echo $rFood . "<br>";
        }
    echo "<br>";

    for($i = 0; $i <= count($foods); $i++){
        echo $foods[$i] . "<br>";
    }
?>
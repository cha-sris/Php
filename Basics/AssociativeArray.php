<?php
    // associative array = An array made of key => value pairs

    $capitals = ["USA" => "Washington D.C.",
                 "Japan" => "Tokyo", 
                 "South Korea" => "Seoul", 
                 "Nepal" => "Kathmandu"];

    $capitals["USA"] = "Las Vegas";
    $capitals["China"] = "Beijing";

    foreach($capitals as $key => $value){
        echo "{$key} = {$value}" . "<br>";
    }

    echo "<br>";

    $keys = array_keys($capitals);

    foreach($keys as $key){
        echo "{$key}" . "<br>";
    }

     echo "<br>";

     $capitals = array_flip($capitals);

     foreach($capitals as $key => $value){
        echo "{$key} = {$value}" . "<br>";
        // echo "{$value} = {$key}" . "<br>";
     }


?>
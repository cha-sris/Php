<?php 
    $age = 21;

    $adult = false;

    if ($age >= 18){
        $adult = true;
    }

    if ($adult){
        echo "You may enter this program.";
    }
    elseif($age <= 0){
        echo "Bruhhh really?";
    }
    elseif($age == 0){
        echo "You were just born.";
    }
    else{
        echo "You must be 18+ to enter.";
    }
?>
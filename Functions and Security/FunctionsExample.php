<?php
    //  function = write some code once, reuse when you need it type () after function name to invoke ex. add() subtract() multiply() divide()

    function happy_birthday($name, $age){
        echo "Happy Birthday to you" . "<br>";
        echo "Happy Birthday dear {$name}" . "<br>";
        echo "Happy Birthday to you" . "<br>";
        echo "{$age}?? Nah you old twin, it's over" . "<br><br>";
    }

    happy_birthday("Cha", 22);
    happy_birthday("Sris", 20);


    function is_even($number){
        $result = $number % 2;
        return $result;
    }

    echo is_even(10) . "<br><br>";

    function hypotenuse(int $a, $b){
        $c = sqrt(pow($a,2) + pow($b,2));
        return $c;
        // echo $c;
        }
        
        echo hypotenuse(3,4);
?>
<?php
    //String
    $name = "Cha-Sris";
    $food = "pizza";
    $email = "fake@gmail.com";

    //integer
    $age = 22;
    $user = 2;
    $quantity = 4;

    //float
    $gpa = 3.5;
    $price = 5.99;
    $tax_rate = 5.1;

    //boolean
    $employee = true;
    $online = false;
    $for_sale = true;

    echo "Hello {$name} <br>";
    
    echo "You like {$food}. <br>";

    echo "You have ordered {$quantity} x \${$price} {$food}. <br>";

    $total = $quantity * $price;
    echo "Your bill is {$total} <br>";

    echo "Your email is {$email}. <br>";

    echo "You are {$age} years old. <br>";

    echo "There are {$user} users online. <br>";

    echo "You would like to buy {$quantity} items. <br>";

    echo "Your gpa is {$gpa}. <br>";

    echo "Your pizza is \${$price} <br>";

    echo "The sales tax rate is: {$tax_rate}% <br>";

    echo "Online statue: {$online} ";
    ?>
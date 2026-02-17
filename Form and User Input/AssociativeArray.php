<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="AssociativeArray.php" method="post">
        <label for="country">Enter the name of the country: </label>
        <input type="text" id="country" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php 
    $capitals = ["USA" => "Washington D.C.",
                "Japan" => "Tokyo",
                "South Korea" => "Seoul",
                "Nepal" => "Kathmandu"];

    $capital = $capitals[$_POST["country"]];

    echo " The capital is {$capital}";

    // echo "{$country} = {$value}";

?>
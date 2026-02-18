<?php
    $username = "Cha Sris";
    $username2 = ["Cha","for", "Sris"];
    $phone = "123-456-7890";

    $username = strtolower($username);      // "cha sris"
    $username = strtoupper($username);      // "CHA SRIS"
    $username = trim($username);            // "CHA SRIS" (no leading/trailing spaces)
    $username = str_pad($username, 20, "0"); // "CHA SRIS00000000000"
    $phone = str_replace("-", "", $phone);   // Replace "-" with ""
    $username = strrev($username);          // "00000000000SIRS AHC"
    // Removed str_shuffle() - it randomizes the string, making output unpredictable
    $username_for_comparison = $username;   // Save for strcmp
    $equals = strcmp($username_for_comparison, "Cha Sris");
    $count = strlen($username);
    $index = strpos($phone, "-");           // Will be false since we removed all "-"
    
    // Split BEFORE all the transformations for meaningful results
    $original = "Cha Sris";
    $fullname = explode(" ", $original);    //  Breakdowns the array
    $firstName = $fullname;              // "Cha"
    $lastname = $fullname;               // "Sris"
    
    $username2 = implode(" ", $username2);  //  Combines the array

    echo $username2;
?>
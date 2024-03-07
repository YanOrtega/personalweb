<?php
 
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "personal_web";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong!");
    }
   
?>
<?php
    $dbName = "GMoL3Ug233";
    $dbUsername = "GMoL3Ug233";
    $dbPassword = "el5WyOmSwF";
    $dbHost = "remotemysql.com";
    
    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
    
    if($conn){
        echo "Login success";
    }
    else{
        echo "Login failed";
    }
?>
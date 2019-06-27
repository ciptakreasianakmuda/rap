<?php
    require "conn.php";
    $user_name = $_POST["user_name"];
    $user_pass = $_POST["password"];
    $mysql_qry = "SELECT * FROM registration WHERE email LIKE '$user_name' AND password LIKE '$user_pass';";

    $result = mysqli_query($conn, $mysql_qry);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        echo "Login success. Welcome ".$firstname." ".$lastname;
    }
    else {
        echo "Login failed";
    }
?>
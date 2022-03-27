<?php

    $Token_number = $_GET['Token_number']; 
    $conn = mysqli_connect("localhost", "root", "", "parking_data") or die("conection failed!");
    $sql = "DELETE FROM parking_info where Token_number = '{$Token_number}'";
    $result = mysqli_query($conn, $sql) or die("query Failed");
    header("location: http://localhost/project1/index.php");
    $mysqli_close($conn);
?>
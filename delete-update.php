<?php
    $entry_date = $_GET['Entry_date']; 
    $conn = mysqli_connect("localhost", "root", "", "parking_update_data") or die("connection failed!");
    $sql = "DELETE FROM parking_info where Entry_date = '{$entry_date}'";
    $result = mysqli_query($conn, $sql) or die("query Failed");
    header("location: http://localhost/project1/record.php");
    mysqli_close($conn);
?>
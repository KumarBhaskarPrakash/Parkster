<?php

  $owner_name = $_POST['owner_name'];
  $vehicle_name = $_POST['vehicle_name'];
  $vehicle_number = $_POST['vehicle_number'];
  $entry_date = $_POST['entry_date'];
  $exit_date = $_POST['exit_date'];
  $token_number = $_POST['token'];
  $conn = Mysqli_connect("localhost", "root", "", "parking_update_data") or die("conection failed!");
  $sql = "INSERT INTO parking_info(Owner_name, Vehicle_nume, Vehicle_number, Entry_date, Exit_date, Token_number) VALUES ('{$owner_name}','{$vehicle_name}','{$vehicle_number}','{$entry_date}','{$exit_date}', '{$token_number}')";
  $result = Mysqli_query($conn, $sql) or die("query Failed");
  header("location: http://localhost/project1/record.php");
  mysqli_close($conn);
?>
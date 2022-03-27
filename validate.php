<?php
    session_start();
    $name = $_POST["username"];
    $password = $_POST["password"];
    $connection = mysqli_connect("localhost", "root", "", "user_data") or die("connection failed!");
    $sql = "SELECT * FROM admin_info where user_name = '{$name}' && password = '{$password}'";
    $result = mysqli_query($connection, $sql) or die("query failed!");
    
    $num = mysqli_num_rows($result);
    if($num == 1){
        $_SESSION["username"]= $name;
        header("location:http://localhost/project1/index.php");
    }else{
        header("location:http://localhost/project1/login.php");
    }
?>
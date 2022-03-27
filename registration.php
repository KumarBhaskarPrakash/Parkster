<?php
    session_start();

    $name = $_POST["username"];
    $password = $_POST["password"];
    $co_pass = $_POST["co-password"];
    
    if($password == $co_pass){
        $connection = mysqli_connect("localhost", "root", "", "user_data") or die("connection failed!");
        $sql = "SELECT * FROM admin_info where user_name = '{$name}' && password = '{$password}'";
        $result = mysqli_query($connection, $sql) or die("query failed!");
    
        $num = mysqli_num_rows($result);
        if($num == 1){
            echo "you have alraedy signup";
        }else{
            $sql = "INSERT INTO admin_info(user_name, password) VALUES('{$name}', '{$password}')";
            $result = mysqli_query($connection, $sql);
            mysqli_close($connection);
            header("location:http://localhost/project1/index.php");
        }
    
    } else{
        echo "confirm password is not same";
    }
   
?>
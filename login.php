<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Parkster:-Parking Lot Management System</h1>
   <div class="form">
       <div class="login-form">
           <h1>Login Form</h1>
           <form action="validate.php" method="POST">
               <label for="">Username :</label>
               <input type="text" name="username" placeholder="Username"/> <br> <br>
               <label for="">Password :</label>
               <input type="password" name="password" placeholder="Password"/> <br> <br>
               <input type="submit" class="submit" value= "login"> <br><br>
            </form>
       </div>
   </div>
</body>
</html>
<?php 
 session_start();
 if(!isset($_SESSION["username"])){
    header("locatin:http://localhost/project1/login.php");
}else{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center" id="header">
                   <h1> Parking Lot Management System</h1>
                   <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="record.php">All Record</a></li>
                        <li><a href="admin.php">Make Parking Admin</a></li>
                        <li><a href="logout.php" style="color: orange;">Logout <?php echo $_SESSION['username'];?></a></li>
                    </ul>
                </div>
            </div>
        </div>        
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="register1">All Vehicle Entry And Exit Records</h2>
                </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                   <div class="input-group">
                       <div class="input-group-prepend">
                           <span class="input-group-text" >Search</span>
                       </div>
                        <input type="text" class="form-control" onkeyup="search()" id="text" placeholder="Search Vehicle Details">
                   </div>
                   
                <table class="table table-striped" id="table" >
                    <?php
                       


                        $conn = mysqli_connect("localhost", "root", "", "parking_update_data") or die("conection failed!");
                        $sql = "SELECT * FROM parking_info";
                        $result = mysqli_query($conn, $sql) or die("query Failed");
                        if(mysqli_num_rows($result)>0){
                        ?>
                            <thead>
                        <tr>
                            <th>Owner Name</th>
                            <th>Vehicle Name</th>
                            <th>Vehicle Number</th>
                            <th>Entry Date</th>
                            <th>Exit Date</th>
                            <th>Token Number</th>
                            <th>Delete Record</th>
                          
                        </tr>
                    </thead>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                   
                    <tbody>                      
                        <tr>
                            <td><?php echo $row['Owner_name']; ?></td>
                            <td> <?php echo $row['Vehicle_nume']; ?> </td>
                            <td><?php echo $row['Vehicle_number']; ?></td>
                            <td> <?php echo $row['Entry_date']; ?></td>
                            <td><?php echo $row['Exit_date']; ?></td>
                            <td><?php echo $row['Token_number']; ?></td>
                            <td><a href="delete-update.php?Entry_date=<?php echo $row['Entry_date'];?>">Delete</a></td>
                        </tr>  
                    </tbody>
                    <?php
                    }
                    ?>
                </table> 
                <?php
                }else{
                    echo "No Data found";
                }
                    ?>         
               </div>
            </div>
        </div>
    </section>
    <script>    
        const search = () =>{
            var input_value = document.getElementById("text").value.toUpperCase();
            var table = document.getElementById("table");
            var tr = table.getElementsByTagName("tr");
            for(var i =0; i<tr.length; i++){
               td = tr[i].getElementsByTagName("td")[0];
               
               if(td){
                 var text_value = td.textContent;
                 if(text_value.toUpperCase().indexOf(input_value)>-1){
                    tr[i].style.display = "";
                 }else{
                    tr[i].style.display= "none";
                 }
               }
            }

        }   
    </script>
    <?php
}
?>

<?php
  session_start();

  if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
  } else{
    header("Location: ../index.php");
  }

?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All</title>

    <?php include 'imports/headerImport.php'; ?>
</head>
<body>

        <div class="container">

            <?php 
              include 'imports/dbSettings.php';

              $sql ="SELECT * FROM customers";

              
            foreach($con->query($sql) as $row){
              echo '
                    <div class="allTranactDiv">
                       <p>Transaction ID: '.$row['customerID'].'</p> 
                       <p>Name: '.$row['customerName'].'</p> 
                       <p>Timestamp: '.$row['datetime'].'</p> 
                       <p>Price: '.$row['price'].' €</p> 
                    </div>
                    <br>
               
              ';
            }
            
            ?>


        </div>

        <div class="logOutDiv">
          <a href="ki4.php" class="linkLogout">Zurück</a>
        </div>   
</body>
</html>
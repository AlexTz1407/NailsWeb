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
<html>
<head>
  <title>Nails</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php include 'imports/headerImport.php'; ?>

</head>
<body>

  <div class="logOutDiv">
    <a href="logout.php" class="linkLogout">Logout</a>
  </div>

  <div class="container">
    <h1>Nail Business</h1>
    <h2>Verwalten Sie Ihre Kunden und Transaktionen</h2>
    
    <div class="row">
      <div class="column">
        <img src="../images/Bild1web.jpg" class="nails-image">
        <div class="caption">
          <h2>Kunden anzeigen</h2>
          <a href="allTransactions.php" class="btn">Alle Transaktionen anzeigen</a>
        </div>
      </div>
      <div class="column">
        <img src="../images/Bild2web.jpg" class="nails-image">
        <div class="caption">
          <h2>Kunden hinzufügen</h2>
          <form method="POST" action="newTransaction.php">
            <label name="name">Name:</label>
            <br>
            <input for="name" type="text" name="name"><br>
          
            <label name="price">Preis:</label>
            <br>
            <input for="price" type="text" name="price">
            
            <br><br>

            <input type="submit" value="Kunde hinzufügen">
          </form> 
        </div>
      </div>
      
    </div>
  </div>

  <style>
    .nails-image {
      width: 100%;
    }
    .caption {
      text-align: center;
      padding: 10px;
      color: #fff;
      background-color: #000;
    }
    .btn {
      background-color: #000;
      padding: 5px 10px;
      color: #fff;
      text-decoration: none;
    }
  </style>
  
</body>
</html>

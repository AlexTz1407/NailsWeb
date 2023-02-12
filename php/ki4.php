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
    
    <div class="row">
      <div class="column">
        <img src="../images/Bild1web.jpg">
        
		<div class="raum1">
<form action="/action_page.php">
<h1>Kunden Anzeigen</h1>


 
 
<div class="test">
    <a href="allTransactions.php">Zu allen Transaktionen</a>
  </div>
</form> 
</div>
      </div>
      <div class="column">
        <img src="../images/Bild2web.jpg">
        
		<div class="raum1">


<form method="POST" action="newTransaction.php">
    <h1>Kunden Hinzufügen</h1>

    <label name="name">Name:</label>
    <br>
    <input for="name" type="text" name="name"><br>
  
    <label name="price">Preis:</label>
    <br>
    <input for="price" type="text" name="price">
    
    <br><br>

    <input type="submit" value="Absenden">
</form> 

</div>
      </div>
      
    </div>
  </div>
</body>
</html>

<!-- "2023-01-06" -->
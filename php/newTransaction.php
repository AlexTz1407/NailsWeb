<?php 

    try{

        include 'imports/dbSettings.php';

        $customerName="";
        $price="";

        if(isset($_POST['name']) && isset($_POST['price'])){
            $customerName = $_POST['name'];
            $price = $_POST['price'];
        }

        $sql = "INSERT INTO customers (customerName, price) VALUES (?,?)";

        $stmt = $con->prepare($sql);

        $stmt->execute([$customerName, $price]);

        $con = null;

        header("location: ki4.php");

    } catch(PDOException $e){
        echo "Fehler:".$e;
    }




?>
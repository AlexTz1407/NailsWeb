<?php

try{
    include "imports/dbSettings.php";

    if(isset($_POST["submit"]) && isset($_POST['username']) && isset ($_POST['password'])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE username='".$username."' ";
        $stmt2 = $con->prepare($sql);
        $stmt2->execute();
        
        $stmt = $con->prepare("SELECT * FROM users WHERE username=:username");
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        $userExists = $stmt->fetchAll();
        
        $passwordHashed = $userExists[0]["password"];
        $checkPassword = password_verify($password, $passwordHashed);
        
        if($checkPassword === false){
        echo "<h1>Login fehlgeschlagen, Passwort stimmt nicht überein! Versuchen Sie es erneut</h1>";
            
        }
        if($checkPassword === true){
            
            session_start();

            foreach($con-> query($sql) as $row){
                
                $_SESSION["username"] = $row['username'];
                $_SESSION["id"] =$row['id'];      
                $_SESSION["email"] =$row['email'];      
            }
            //Connection schließen, da sie nicht mehr benötigt wird
            $con = null;

            //Weiterleitung
            header("Location: ki4.php");
        }
	
    }
}catch(PDOException $e){
    echo "Fehler: ".$e;
}




?>
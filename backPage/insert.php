<?php
    session_start();
    require 'connectionDB.php';
        
        $us = $_REQUEST['inputU'];
        $pswd = $_REQUEST['inputP'];
        $email = $_REQUEST['inputE'];
        
        $sql = "INSERT INTO user (username, email, password) VALUES ('$us', '$email', '$pswd')";
        
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        $_SESSION["username"]=$us;
        $_SESSION["password"]=$pswd;
        $_SESSION["autorized"]=1; 
        header("location: ../userPage/home.php");
    } else {
        echo "Error non entraaaaaaa: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();


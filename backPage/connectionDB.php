<?php

$dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "users";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n". $conn -> error);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error)."<br>";
        }
        
function insertUser($user, $pass, $mail)
    {
        $us = $user;
        $pswd = $pass;
        $email = $mail;
        
        $sql = "INSERT INTO user (username, email, password) VALUES ('$us', '$email', '$pswd')";
        
        if ($conn->query($sql) === TRUE) 
            {
                echo "New record created successfully";
                header("location: home.php");
            } 
        else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    
    $conn->close();
    }
<?php

    session_start();
        
    require 'connectionDB.php';
    
    $mess= $_POST["message"];
    $my_us=$_SESSION["username"];
    
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
    
    while($row = $result->fetch_assoc()){
        if($row["username"]==$my_us)
        {
            $my_id=$row["id"];
            $sql = 'INSERT INTO message (date, id_sender, message) VALUES (now(),"'.$my_id.'","'.$mess.'")';
            $conn->query($sql);
            $result="SUCCESS";

        }
    }
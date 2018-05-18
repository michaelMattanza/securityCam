<?php

    session_start();
        
    require 'connectionDB.php';
    
    $mess= $_POST["message"];
    $my_us=$_SESSION["username"];
    $admin=$_POST["adminId"];
    
    $sql='SELECT * FROM user';
    $result=$conn->query($sql);
    
    while($row = $result->fetch_assoc()){
        if($row["username"]==$my_us)
        {
            $my_id=$row["id"];
            $sql2 = 'INSERT INTO message (date, id_sender, id_receiver, message) VALUES (now(),"'.$my_id.'","'.$admin.'","'.$mess.'")';
            $conn->query($sql2);
            $res="SUCCESS";

        }
    }

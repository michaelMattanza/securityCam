<?php
    session_start();
    require 'connectionDB.php';

        $alreadyExist= false;
        $us = $_POST["InsertedName"];
        $pswd = $_POST["InsertedPass"];
        $email = $_POST["InsertedMail"];

        
        
        $sqlControll= 'SELECT * FROM user';
        $result=$conn->query($sqlControll);
        while ($rowControll = $result->fetch_assoc()){
            if($rowControll["username"]==$us)
            {
                $alreadyExist = true;
                $response = json_encode($alreadyExist);
                echo $response;
                
            }
        }
        if($alreadyExist==false){
        $sql = 'INSERT INTO user (username, email, password, chmod) VALUES ("'.$us.'", "'.$email.'", "'.$pswd.'", "user")';
        $conn->query($sql);

        $sql2= 'SELECT * FROM user';
        $result=$conn->query($sql2);
        while($row= $result->fetch_assoc() )
        {
            if($row["username"] == $us){
                $myId= $row["id"];
            }
        }
        $_SESSION["username"]=$us;
        $_SESSION["password"]=$pswd;
        $_SESSION["id"]=$myId;
        $_SESSION["authorized"]=1; 
        $_SESSION["chmod"]="user";
        $response = json_encode($alreadyExist);
        echo $response;
        }
    


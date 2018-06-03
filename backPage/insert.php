<?php
    session_start();
    require 'connectionDB.php';
        
        $us = $_POST['inputU'];
        $pswd = $_POST['inputP'];
        $email = $_POST['inputE'];
        
        $sqlControll= 'SELECT * FROM user';
        $result=$conn->query($sqlControll);
        while ($rowControll = $result->fetch_assoc()){
            if($rowControll["username"]==$us)
            {
                $alreadyExist= true;
                $myjson= json_encode($alreadyExist);
                return $myjson;
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
        $_SESSION["autorized"]=1; 
        header("location: ../userPage/home.php");
        }


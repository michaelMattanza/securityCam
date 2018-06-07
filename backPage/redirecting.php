
        <?php  
        session_start();

        require 'connectionDB.php';
        
        $res= "no";
        $name_readed = $_POST['user']; 
        $psswd_readed = $_POST['pass'];
        
        $sql = 'SELECT * FROM user WHERE username="'.$name_readed.'"';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
    // output data of each row
            while($row = $result->fetch_assoc()) {
                
                //echo "<br>"."Connecting to "." - Username: " . $name_readed."<br>";
                if($name_readed == $row["username"] && $psswd_readed == $row["password"])
                {      
                    $_SESSION["username"]=$name_readed;
                    $_SESSION["password"]=$psswd_readed;
                    $_SESSION["id"]= $row["id"];
                    $_SESSION["autorized"]=1;
                    if($row["chmod"] == 'admin')
                    {
                        $res ="administrator";
                        $response= json_encode($res);
                        echo $response;
                    }
                    else{
                        $res ="user";
                        $response= json_encode($res);
                        echo $response;  
                    }
                }
                
                else if($name_readed == $row["username"] && $psswd_readed != $row["password"])
                {
                    $res ="password";
                    $response= json_encode($res);
                    echo $response;
                }
               
                
            }
        }
        if($res=="no"){
            $res = "no";
            $response= json_encode($res);
            echo $response;
        }
        
        
        $conn->close();
       
        ?>

 
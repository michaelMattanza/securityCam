<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php   
        session_start();
        
        require 'connectionDB.php';
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);
        

        $name_readed = $_GET['inputUser']; 
        $psswd_readed = $_GET['inputPass'];

        if ($result->num_rows > 0) {
    // output data of each row
            while($row = $result->fetch_assoc()) {
                echo $row["username"].'<br> '.$row["password"];
                //echo "<br>"."Connecting to "." - Username: " . $name_readed."<br>";
                if($name_readed == $row["username"] && $psswd_readed == $row["password"])
                {
                    $_SESSION["username"]=$name_readed;
                    $_SESSION["password"]=$psswd_readed;
                    $_SESSION["autorized"]=1;
                    if($row["chmod"] == 'admin')
                    {
                        echo $row["chmod"];
                        header("location: ../adminPage/homeAdm.php");
                    }
                    else
                        header("location: ../userPage/home.php");
                   
                }
            }
        }
        else {
            $_SESSION["autorized"]=0;
            echo "Error, pleas retry";         
            header("location: ../index.php");
        }
        $conn->close();
       
        ?>
    </body>
</html>
 
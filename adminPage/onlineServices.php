<?php
 session_start();
 if($_SESSION["autorized"]==0)
 {
    Header( "Location:login.php" );
 }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="UTF-8">
        <title>SecurityCam</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="col-12">
                <div  class="row"  style="margin-bottom: 3%;">
                    <img src="../immagini/logo.png" class="rounded mx-auto d-block">
                </div>
            </div>
            <div class="row" style="margin-top: 2%; margin-bottom: 2%;"> <!-- TITLE AND MENU -->
                <div class="col-4">
                    <a href="homeAdm.php">
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="margin-right:2%" >Home</button>
                    </a>
                </div>
                <div class="col-4">
                    <a href="usersList.php">
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="margin-right:2%">Clienti</button>
                    </a>
                </div>
                <div class="col-4">
                    <a  href="messageInfo.php">    
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="margin-right:2%">Messaggi</button>
                    </a>
                </div>
                
            </div>
            <div id="thisdiv">   
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Data attivazione</th>
                            <th scope="col">Data scadenza</th>
                        </tr>
                    </thead>
                    <tbody>
        <?php
         require '../backPage/connectionDB.php';
         $sql = "SELECT * FROM user";
         $result = $conn->query($sql);
    
         
        
         $sqlw = "SELECT * FROM subscription";
         $res = $conn->query($sqlw);
    
         while($row = $res->fetch_assoc()) 
            {
                while($row2 = $result->fetch_assoc()) 
               {
                if($row2["id"] == $row["id_user"]){
                    $urs=$row2["username"];
                }
               }
                echo '<tr>';
                echo '<th scope="row">'.$row["id"].'</th>';
                echo '<td>'.$urs.'</td>';
                echo '<td>'.$row["date_activate"].'</td>';
                echo '<td>'.$row["date_ending"].'</td>';
                echo '</tr>';
            }
         
        
        ?>
                    </tbody>
                </table>
            </div>

        </div>
        
        <script src="../backPage/framework/jquery-3.3.1.min.js"></script> 

    <script type='text/javascript'>

           function changeFunction(){
          var userName = $('#inputUser').val();
          var role=$('#inputGroupSelect01').val();

         $.ajax({
           method: "POST",
           url: "../backPage/changeChmod.php",
           data: { "userId": userName, "userRole": role },
           success: function (response){
               $('#thisdiv').load(document.URL +  ' #thisdiv');
        }

        });
      }
  </script>
    </body>
</html>

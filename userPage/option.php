<?php
 session_start();
 if($_SESSION["autorized"]==0)
 {
    header( "location: ../../index.php" );
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
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>SecurityCam</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>
    <body>
        
        <div class="container">
            <div class="col-12">
                <div class="row" style="margin-top: 2%;"> <!-- TITLE AND MENU -->
                    <div class="col-4">
                        <a href="home.php">
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="margin-right:2%" >Home</button>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="../index.php">
                           <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="margin-right:2%">Presentazione sistema</button>
                        </a>
                    </div>
                    <div class="col-4">
                        <a  href="../backPage/logout.php">    
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="margin-right:2%">Logout</button>
                        </a>
                    </div>

                </div> 
                
                <form method="POST">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                                <b><p style="position: center; margin-top: 2%;">Inserisci il messaggio per gli admin</p></b>
                                <textarea rows="15" cols="95" style="
                                          .boxsizingBorder {
                                            -webkit-box-sizing: border-box;
                                               -moz-box-sizing: border-box;
                                                    box-sizing: border-box;
                                        }
                                          position: center; 
                                          display: block; margin: 0 auto;" 
                                          name="messToSend" id="messToSend"></textarea> 
                            </div>    
                        <div class="col-2"></div>
                    </div>
                
                
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <input type="hidden" name="user_id" value="1">
                             <button type="submit" class="btn btn-outline-primary btn-block" style="margin-top: 1%" onclick="sendMsgFunction()">Invia</button>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </form>
                
                <div class="row" style="margin-top: 2%;">
                    
                <table class="table" id="messTable">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Data</th>
                        <th scope="col">Messsaggio</th>
                    </tr>
                </thead>
                <tbody>          
                  <?php
                    require '../backPage/connectionDB.php';
                    
                    $sql='SELECT * FROM user';
                    $result=$conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        if($row["username"] == $_SESSION["username"])
                        {
                            $myId = $row["id"];
                        }
                    }

                    $sql1='SELECT * FROM message where id_receiver='.$myId.' ORDER BY id DESC';
                    $result1=$conn->query($sql1);
                    while($row1 = $result1->fetch_assoc()){
                        echo '<tr>';
                        echo '<td>'.$row1["id"].'</td>';
                        echo '<td>'.$row1["date"].'</td>';
                        echo '<td>'.$row1["message"].'</td>';
                        echo '</tr>';
                    }
                    
                  ?>
                    </tbody>
                </table>
                </div>
                
            </div>
        </div>
        <script src="../backPage/framework/jquery-3.3.1.min.js" ></script> 

    <script type='text/javascript'>

           function sendMsgFunction(){
          var mess = $('#messToSend').val();
          var sendto= 0;

         $.ajax({
           method: "POST",
           url: "../backPage/sendMessage.php",
           data: {  
               "message": mess,
               "adminId": sendto
           },
           success: function (response){
               window.alert("Messaggio inviato correttamente!");
        }

        });
      }
      
  </script>
    </body>
</html>

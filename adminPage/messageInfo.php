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
        <meta charset="UTF-8">
        <title></title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
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
                        <button type="button" class="btn btn-outline-dark btn-lg btn-block " style="margin-right:2%" >Home</button>
                    </a>
                </div>
                <div class="col-4">
                    <a href="video.php">
                        <button type="button" class="btn btn-outline-dark btn-lg btn-block " style="margin-right:2%">Users</button>
                    </a>
                </div>
                <div class="col-4">
                    <a  href="option.php">    
                        <button type="button" class="btn btn-outline-dark btn-lg btn-block " style="margin-right:2%">Messages</button>
                    </a>
                </div>
                
            </div>
            

            
            <div id="thisdiv" style="margin-top: 2%; margin-bottom: 1%;">   
            <table class="table" id="messTable">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Messsage</th>
                    </tr>
                </thead>
                <tbody>
        <?php
         require '../backPage/connectionDB.php';
         $sql = "SELECT * FROM message ORDER BY id Desc";
         $result = $conn->query($sql);
         $sql = "SELECT * FROM user";
         $res2= $conn->query($sql);
         
         if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) 
            {
                while ($rowName = $res2->fetch_assoc())
                {
                    if($row["id_sender"] == $rowName["id"])
                        $tempName = $rowName["username"];
                }
                   echo '<tr class="clickable-row">';
                   echo '<th scope="row"><button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal">Reply</button></th>';
                   echo '<td>'.$tempName.'</td>';
                   echo '<td>'.$row["date"].'</td>';
                   echo '<td>'.$row["message"].'</td>';
                   echo '</tr>';
                
             }
         }
        
        ?>
                    </tbody>
                </table>
            </div>
        <script src="../backPage/framework/jquery-3.3.1.min.js" 
     integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   
      crossorigin="anonymous"></script> 

      
      </div>
    </body>
</html>

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
        <div class="container" id="thisdiv"> 
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
                    <a href="video.php">
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="margin-right:2%">Users</button>
                    </a>
                </div>
                <div class="col-4">
                    <a  href="option.php">    
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="margin-right:2%">Messages</button>
                    </a>
                </div>
                
            </div>
            

<!-- Button trigger modal -->
<form method="POST">

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Answer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <textarea rows="6" cols="50" id="resp"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="sendFunction()">Send</button>
                  </div>
                </div>
              </div>
            </div>
             <!-- Modal end -->           
            
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
         $sql= 'SELECT * FROM user';
         $result = $conn->query($sql);
         while($row = $result->fetch_assoc())
         {
             $us= $_SESSION["username"];
             if($row["username"]==$us)
             {
                echo $myId= $row["id"];
             }
         }
         $sql1= 'SELECT * FROM message WHERE id_receiver='.$myId.' GROUP BY id ASC';
         $result1 = $conn->query($sql1);
         
         while($row2 = $result1->fetch_assoc())
         {
             while($row = $result->fetch_assoc())
            {
                if($row2["id_sender"]==$row["id"])
                {
                   $senderUs=$row["username"];
                }
            }
            echo '<tr class="clickable-row">';
            echo '<th scope="row"><button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#exampleModal" id="usr-selected" name="usr-selected" value="'.$toSend.'">Reply</button></button></th>';
            echo '<td>'.$senderUs.'</td>';
            echo '<td>'.$row2["date"].'</td>';
            echo '<td>'.$row2["message"].'</td>';
            echo '</tr>';
         }
        /*  echo '<tr class="clickable-row">';
                   echo '<th scope="row"><button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#exampleModal" id="usr-selected" name="usr-selected" value="'.$toSend.'">Reply</button></button></th>';
                   echo '<td>'.$tempName.'</td>';
                   echo '<td>'.$row["date"].'</td>';
                   echo '<td>'.$row["message"].'</td>';
                   echo '</tr>';
         */
        ?>
                    </tbody>
                </table>
            </div>
        </form>


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


                    <script src="../backPage/framework/jquery-3.3.1.min.js" 
     integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   
      crossorigin="anonymous"></script> 
      <script type="text/javascript">
           function sendFunction(){
          var userName = $('#usr-selected').val();
          var text=$('#resp').val();
          console.log(userName);
          console.log(text);

         $.ajax({
           method: "POST",
           url: "../backPage/sendMessage.php",
           data: { "adminId": userName, "message": text },
           success: function (response){
               window.alert("Done");
                $('#exampleModal').modal('hide');
                $('#thisdiv').load(document.URL +  ' #thisdiv');
        }

        });
      }          
      </script>
      </div>
    </body>
</html>

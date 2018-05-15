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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <meta charset="UTF-8">
        <title></title>
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
            <div id="thisdiv">   
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">A/U</th>
                        </tr>
                    </thead>
                    <tbody>
        <?php
         require '../backPage/connectionDB.php';
         $sql = "SELECT * FROM user ORDER BY chmod";
         $result = $conn->query($sql);
         
         if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) 
            {
                echo '<tr>';
                echo '<th scope="row">'.$row["id"].'</th>';
                echo '<td>'.$row["username"].'</td>';
                echo '<td>'.$row["email"].'</td>';
                echo '<td>'.$row["chmod"].'</td>';
                echo '</tr>';
            }
         }
        
        ?>
                    </tbody>
                </table>
            </div>
            <form method="POST" >
        <div class="row"style="margin-top: 5%;" >
            <div class="col-3">
                
            </div>
            <div class="col-6" name="thisdiv" name="thisdiv">
               <label for="inputUsername">Insert username</label>
               <input type="text" class="form-control" name="inputUser" style="margin-bottom: 2%" id="inputUser">
               <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Convert account type to: </label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="inputSelected">
                  <option selected>Choose...</option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
                   
                   <button type="button" class="btn btn-outline-primary" onclick="changeFunction()">Submit</button>
                </div>
              <!-- this need to be added -->
              <div id='resultDiv' ></div>
            </div>
            <div class="col-3">
            </div>
        </div>
    </form>
        </div>
        
        <script src="../backPage/framework/jquery-3.3.1.min.js" 
     integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   
      crossorigin="anonymous"></script> 

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

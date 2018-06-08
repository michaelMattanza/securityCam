<?php
session_start();
$_SESSION["response"]= false;
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
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SecurityCam</title>
    </head>
    <body>
        <div class="row">
         <div class="container">
<!-- TITLE -->
             <div class="col-12">
                <div  class="row"  style="margin-bottom: 3%;">
                    <img src="../immagini/logo.png" class="rounded mx-auto d-block">
                </div>
            </div>
             
<!-- BODY -->  
            <div class="row">
            <div class="col-2"></div>
                <div class="col-8">
                    <form>

                     <div class="form-group">
                        <label for="inputEmail">Email*</label>
                        <input type="text" class="form-control" name="inputE" id="inputE" placeholder="example@domain.com" required>
                     </div>

                     <div class="form-group">
                        <label for="inputUsername">Nome utente*</label>
                        <input type="text" class="form-control" name="inputU" id="inputU" placeholder="MyUsername" required>
                     </div>

                     <div class="form-group">
                        <label for="inputPassword">Password*</label>
                        <input type="password" class="form-control" name="inputP" id="inputP" placeholder="Password1234" required>
                     </div>

                        <button type="button" class="btn btn-outline-primary" onclick="changeFunction()">Registrati</button>
                    </form>
                    </div>
            <div class="col-2"></div>
            </div>
         <!-- -->
            </div>
        </div>
                <script src="../backPage/framework/jquery-3.3.1.min.js"></script> 

    <script type='text/javascript'>

           function changeFunction(){
          var pass = $('#inputP').val();
          var usr= $('#inputU').val();
          var mail=$('#inputE').val();
          
          if(usr==null|| usr == "", pass==null||pass=="", mail==null||mail==""){
              window.alert("Campo/i vuoti");
              return false;
          }
          
          console.log(usr);
         $.ajax({
           method: "POST",
           url: "../backPage/insert.php",
           data: { "InsertedPass": pass, 
               "InsertedName": usr,
               "InsertedMail": mail
           },
           success: function (response){
               var r= JSON.parse(response);

            if(r === true)
            {  
                window.alert("Nome utente gia esistente");
            }
            else{
                window.location.replace("home.php");
            }
        }

        })  ;
      }
  </script>
    </body>
</html>

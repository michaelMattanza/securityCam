<?php
 session_start();
 if($_SESSION["autorized"]==0)
 {
    Header( "Location:login.php" );
 }
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>SecurityCam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        body {
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
</head>
    <body>
    <div class="row">
     <div class="container">
         <div class="col-12">
            <div  class="row"  style="margin-bottom: 3%;">
             <img src="../immagini/logo.png" class="rounded mx-auto d-block">
            </div>
         </div>
            <div class="row">
                        <div class="col-6">
                            <div class="row" style="margin-bottom: 10%;">
                            <div class="card" style="width:98%;">
                                <div class="card-body">
                                    <h4 class="card-title">Users</h4>
                                    <p class="card-text">Amministra utenti registrati</p>
                                </div>
                                <div class="card-footer">
                                    <a type="button" class="btn btn-primary btn-lg btn-block" href="usersList.php">Vai!</a>
                                </div>
                                 </div>
                            </div>

                            <div class="row" style="margin-bottom: 10%;">
                                <div class="card" style="width:98%;">
                                    <div class="card-body">
                                        <h4 class="card-title">Messaggi</h4>
                                        <p class="card-text">Visualizza Messaggi ricevuti</p>
                                    </div>
                                    <div class="card-footer">
                                        <a type="button" class="btn btn-primary btn-lg btn-block" href="messageInfo.php">Vai!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="col-6">

                                    <div class="row" style="margin-bottom: 10%;">
                                            <div class="card" style="width:98%;">
                                                <div class="card-body">
                                                    <h4 class="card-title">Informazioni sistema</h4>
                                                    <p class="card-text">Presentazione del sistema</p>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="onlineServices.php" type="button" class="btn btn-primary btn-lg btn-block" >Vai!</a>
                                                </div>
                                            </div>
                                        </div>
                                   

                                    <div class="row" style="margin-bottom: 10%;">
                                        <div class="card" style="width:98%;">
                                            <div class="card-body">
                                                <h4 class="card-title">Logout</h4>
                                                <p class="card-text">Esci dal sistema</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="option.html" type="button" class="btn btn-primary btn-lg btn-block" >Vai!</a>
                                            </div>
                                        </div>
                                    </div>
                             </div>

                        </div>
                    </div>
                </div>
    </body>
</html>

<?php
 session_start();
 if($_SESSION["authorized"]==0 || $_SESSION["chmod"]=="admin")
 {
    header( "location: ../index.php" );
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
                <div class="col-10" align="right;"><img src="../immagini/logo.png" class="rounded mx-auto d-block"></div>
            </div>
             
         </div>
            <div class="row">
                           <div class="col-6">
                            <div class="row" style="margin-bottom: 10%;">
                            <div class="card" style="width:98%;">
                            <!--    <div align="center"><img src="../immagini/streamingI.jpeg" style="width: 20%; height: 30%;"></div> -->
                                <div class="card-body">
                                    <h4 class="card-title"> <img src="../immagini/userStreaming.jpeg" style="width: 20%; height: 30%;">Streaming</h4>
                                    <p class="card-text">Vai alla pagina di Streaming.</p>
                                </div>
                                <div class="card-footer">
                                    <a type="button" class="btn btn-primary btn-lg btn-block" href="http://192.168.1.56:8765/" target="_blank">Vai!</a>
                                </div>
                                 </div>
                            </div>

                            <div class="row" style="margin-bottom: 10%;">
                                <div class="card" style="width:98%;">
                                    <div class="card-body">
                                        <h4 class="card-title"> <img src="../immagini/userGallery.jpeg" style="width: 20%; height: 30%;">Galleria</h4>
                                        <p class="card-text">Apri la galleria dei video salvati.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="http://192.168.1.56/video.php" target="_blank" type="button" class="btn btn-primary btn-lg btn-block">Vai!</a>
                                    </div>
                                </div>
                            </div>
                    </div>

                            <div class="col-6">

                                    <div class="row" style="margin-bottom: 10%;">
                                            <div class="card" style="width:98%;">
                                                <div class="card-body">
                                                    <h4 class="card-title"> <img src="../immagini/userNews.jpeg" style="width: 20%; height: 30%;">News</h4>
                                                    <p class="card-text">Presentazione del sistema</p>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="../index.php" type="button" class="btn btn-primary btn-lg btn-block" >Vai!</a>
                                                </div>
                                            </div>
                                        </div>
                                   

                                    <div class="row" style="margin-bottom: 10%;">
                                        <div class="card" style="width:98%;">
                                            <div class="card-body">
                                                <h4 class="card-title"> <img src="../immagini/userOption.jpeg" style="width: 20%; height: 30%;">Impostazioni</h4>
                                                <p class="card-text">Backup, logout, contatta un admin.</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="option.php" type="button" class="btn btn-primary btn-lg btn-block" >Vai!</a>
                                            </div>
                                        </div>
                                    </div>
                             </div>

                        </div>
         
             <div class="row">
                 <div class="col-5"></div>
                 <div class="col-4"><b>Scadenza abbonamento:</b><br>
                 <?php
                 $exist = false;
                 require '../backPage/connectionDB.php';
                 $sql= "SELECT * from subscription";
                 $r= $conn->query($sql);
                 
                 while($row = $r->fetch_assoc()){
                     if($row["id_user"]==$_SESSION["id"])
                     {
                         echo '<p>'.$row["date_ending"].'</p>';
                         $exist= true;
                     }
                 }
                 if($exist == false){echo '<p>Abbonamento non attivo</p>';}
                 ?>
                 </div>
                 <div class="col-3"></div>
             </div>
                    </div>
                </div>
               <script src="../backPage/framework/jquery-3.3.1.min.js"></script> 
        <script type="text/javascript">
            function controlStreaming(){
                var url = $('#urlStreaming').val();
                $.ajax({
                 method: "POST",
                 url: "../backPage/controlRasp.php",
                 data: { 
                     "urlChoosed": url
                 },
                 success: function (response){
                     $('#thisdiv').load(document.URL +  ' #thisdiv');
              }

              });
        }
        </script>
    </body>
</html>

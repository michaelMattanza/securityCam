<?php
 session_start();
 if($_SESSION["authorized"]==0)
 {
    header( "location: ../index.php" );
 }
?>
<!DOCTYPE html>
<html>
    <head>
        
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
                       <a href="streaming.php">
                           <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="margin-right:2%">Streaming</button>
                        </a>
                    </div>
                    <div class="col-4">
                        <a  href="infoproject.html">
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="margin-right:2%">Option</button>
                        </a>
                    </div>

                </div>

                <div class="row" style="margin-top: 2%;"> <!-- VIDEO CONTAINER -->
                    <?php

                        $dir    = '../video';
                        $scanned_directory = array_diff(scandir($dir), array('..', '.'));

                            for($i=2, $n = count($scanned_directory) + 2; $i<$n; $i++)
                            {
                                $handle = opendir('../video/'.$scanned_directory[$i].'/');
                                $url = '../video/'.$scanned_directory[$i].'/';
                                while (false !== ($file = readdir($handle))) {
                                    if ($file != "." && $file != "..") {
                                   echo '<video width: "23%" height: "23%" controls>';
                                    echo '<source src="'.$url.$file.'" type="video/mp4">';
                                    echo '</video>';
                                    }
                                }
                            }
                            closedir($handle);


                    ?>
                </div>

            </div>

        </div>
    </body>
</html>

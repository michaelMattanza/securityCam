<?php
        session_start();
        if($_SESSION["autorized"]==0)
        {
           header( "location: ../../index.php" );
        }
        session_destroy();
        echo 'You have been logged out';
        header("location: ../../index.php");
?>

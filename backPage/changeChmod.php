<?php 
 session_start();
 if($_SESSION["autorized"]==0)
 {
    Header( "Location:login.php" );
 }
     
    $var1= $_POST["userId"]; // change here userId as used in jquery block 
    $var2= $_POST["userRole"];// change here userRole as used in jquery  Block
    require 'connectionDB.php';
    
     $sql = 'UPDATE user SET chmod="'.$var2.'" WHERE username="'.$var1.'"';
     $conn->query($sql);

     $result="SUCCESS";
?>
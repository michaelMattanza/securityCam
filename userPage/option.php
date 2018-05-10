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
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Form contattare admin</p>
        <p>Logout</p>
        <p>Link esterni (forse in info project)</p>
    </body>
</html>

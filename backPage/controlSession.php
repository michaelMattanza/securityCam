<?php
session_start();
require 'connectionDB.php';

$sql="SELECT * FROM user";
$result = $conn->query($sql);
if ($_SESSION["authorized"]==0)
{
    header("location: ../login.php");
}
if($_SESSION["authorized"]==1)
{
    $usr=$_SESSION["username"];
        while ($row = $result->fetch_assoc())
        {
            if($row["username"] == $usr)
            {
                if($row["chmod"] == "admin")
                {
                    header("location: ../adminPage/homeAdm.php");
                }
                else
                {
                    header("location: ../userPage/home.php");
                }
            }
        }
    
}
 


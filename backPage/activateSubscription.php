<?php
session_start();
require 'connectionDB.php';

$subChoosed=$_POST["customRadioInline1"];
if($_SESSION["username"]==null){
    Header( "Location:../login.php" );
}
$us=$_SESSION["username"];
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

 while($row = $result->fetch_assoc()){
        if($row["username"]==$us)
        {
            $my_id=$row["id"];
        }
    }
$n= date('Y-m-d');
 
  $sql = 'SELECT * FROM subscription"
          . "WHERE id_user='.$my_id;
$result = $conn->query($sql);

 while($row = $result->fetch_assoc()){
        if($row["date_ending"]>$n)
        {
            Header( "Location:../login.php" );
        }
    }  
 
if($subChoosed == "30")
{
    $date1= date('Y-m-d', strtotime(' + 1 month'));
    $result="Success";
}
if($subChoosed == "90")
{
    $date1= date('Y-m-d', strtotime(' + 3 month'));
    $result="Success";
}
if($subChoosed == "180")
{
   $date1= date('Y-m-d', strtotime(' + 6 month'));
   $result="Success";
}

if($result == "Success")
{
    $sql = 'INSERT INTO subscription (id_user, date_activate, date_ending) VALUES ("'.$my_id.'",now(),'.$date1.')';
    $conn->query($sql);
}

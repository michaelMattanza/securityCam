<?php
session_start();
require 'connectionDB.php';

$subChoosed=$_POST["customRadioInline1"];
$us=$_SESSION["username"];
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

 while($row = $result->fetch_assoc()){
        if($row["username"]==$us)
        {
            $my_id=$row["id"];
        }
    }

if($subChoosed == "30")
{
    $today= new Date(date("Y-m-d"));
    $next_month = $today->add(new DateInterval('P1M'));
    $result= "Success";
}
if($subChoosed == "90")
{
    $today= date("Y-m-d");
    $date1 = date('Y-m-d', strtotime(' + 3 month'));
    $result= "Success";
}
if($subChoosed == "180")
{
   $today= date("Y-m-d");
   $date = strtotime(date("Y-m-d", strtotime($today)) . " +6 month");
   $result= "Success";
}

if($result == "Success")
{
    $sql = 'INSERT INTO subscription (id_user, date_activate, date_ending) VALUES ("'.$my_id.'",now(),'.$date1.')';
    $conn->query($sql);
}

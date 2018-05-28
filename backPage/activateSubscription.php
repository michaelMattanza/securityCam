<?php
session_start();
require 'connectionDB.php';
 if($_SESSION["autorized"]==0)
 {
    header( "location: ../index.php" );
 }
$my_id= $_SESSION["id"];
$sqlControll= "SELECT * FROM subscription";
$resultControll = $conn->query($sqlControll);

$subChoosed=$_POST["sub_selected"];

while($rowControll = $resultControll->fetch_assoc())
    {
        if($_SESSION["id"] == $rowControll["id_user"])
        {
            echo $_SESSION["id"].'<br>';
            echo $rowControll["id_user"].'<br>';
            //add_date
            $end_date= $rowControll["date_ending"];
            $new_date= date_create_from_format('Y-m-d', $end_date);
    
            echo $end_date.'<br>';
            
            if($subChoosed == "30")
                {
                    $temp= $new_date->add(new DateInterval('P1M')) -> format('Y-m-d');
                }
            if($subChoosed == "90")
                {
                    $temp= $new_date->add(new DateInterval('P3M')) -> format('Y-m-d');
                }
           if($subChoosed == "180")
                {
                    $temp= $new_date->add(new DateInterval('P6M')) -> format('Y-m-d');
                }
                $newsql= 'UPDATE subscription SET date_ending="'.$temp.'" WHERE id_user='.$my_id;
                $conn->query($newsql);
            $done= true;
        }
    }

if($done == false){


    $sql = 'SELECT * FROM subscription WHERE id_user='.$my_id;
    $result = $conn->query($sql);

    if($subChoosed == "30")
    {
        $date1= date('Y-m-d', strtotime(' + 1 month'));
        $res="Success";
    }
    if($subChoosed == "90")
    {
        $date1= date('Y-m-d', strtotime(' + 3 month'));
        $res="Success";
    }
    if($subChoosed == "180")
    {
       $date1= date('Y-m-d', strtotime(' + 6 month'));
       $res="Success";
    }

        $sql = 'INSERT INTO subscription (id_user, date_activate, date_ending) VALUES ("'.$my_id.'",now(),"'.$date1.'")';
        $conn->query($sql);
}

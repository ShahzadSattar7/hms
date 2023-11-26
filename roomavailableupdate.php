<?php
include("config.php");

    $id=$_POST['id'];
    $roomcat=$_POST['roomcat'];
    $status=$_POST['status'];
    $roomrate=$_POST['roomrate'];

    
    $qry="UPDATE roomavailable SET roomcat='$roomcat',status='$status',roomrate='$roomrate' WHERE id='$id'";
    $result=mysqli_query($con,$qry);
    
    if($result){

        header("Location:roomavailableview.php");
    }
    else {
        echo "error";
    }
    

mysqli_close($con);
?>
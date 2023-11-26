<?php
include("config.php");

    $id=$_POST['id'];
    $guestname=$_POST['guestname'];
    $roomstatus=$_POST['roomstatus'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $payment=$_POST['payment'];


    
    $qry="UPDATE roombooking SET guestname='$guestname',roomstatus='$roomstatus',checkin='$checkin',checkout='$checkout',payment='$payment' WHERE id='$id'";
    $result=mysqli_query($con,$qry);
    
    if($result){

        header("Location:roombookingview.php");
    }
    else {
        echo "error";
    }
    

mysqli_close($con);
?>
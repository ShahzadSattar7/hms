<?php
include("config.php");
$id=$_GET['id'];

$qry="DELETE FROM roombooking where id='$id'";
$result=mysqli_query($con,$qry);
if($result){
    header("location:roombookingview.php");
}
else{
    echo "error";
}    
mysqli_close($con);
?>
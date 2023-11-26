<?php
include("config.php");
$id=$_GET['id'];

$qry="DELETE FROM guest where id='$id'";
$result=mysqli_query($con,$qry);
if($result){
    header("location:guestview.php");
}
else{
    echo "error";
}    
mysqli_close($con);
?>
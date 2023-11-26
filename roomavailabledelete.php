<?php
include("config.php");
$id=$_GET['id'];

$qry="DELETE FROM roomavailable where id='$id'";
$result=mysqli_query($con,$qry);
if($result){
    header("location:roomavailableview.php");
}
else{
    echo "error";
}    
mysqli_close($con);
?>
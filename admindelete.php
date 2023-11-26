<?php
include("config.php");
$id=$_GET['id'];

$qry="DELETE FROM admin where id ='$id'";
$result=mysqli_query($con,$qry);
if($result){
    header("location: adminview.php");
}
else{
    echo "error";
}    
mysqli_close($con);
?>
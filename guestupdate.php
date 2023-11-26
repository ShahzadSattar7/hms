<?php
include("config.php");

    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    
    
    $qry="UPDATE guest SET name='$name',email='$email' WHERE id='$id'";
    $result=mysqli_query($con,$qry);
    
    if($result){

        header("Location:guestview.php");
    }
    else {
        echo "error";
    }
    

mysqli_close($con);
?>
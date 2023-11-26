<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" ></div>
            <div class="col-12" >
                <h1>Room Available</h1>
                <form method="post">
                    <div>
                        <label class="form-label">Roomcategory</label>
                        <input type="text" class="form-control" name="roomcat">
                    </div>
                    <div>
                        <label class="form-label">Status</label>
                        <input type="text" class="form-control" name="status">
                    </div>
                    <div>
                        <label class="form-label">Roomrate</label>
                        <input type="text" class="form-control" name="roomrate">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary" name="save">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['save'])){  
    $roomcat=$_POST['roomcat'];
    $status=$_POST['status'];
    $roomrate=$_POST['roomrate'];
    
    $qry="INSERT INTO roomavailable(roomcat,status,roomrate) VALUE ('$roomcat','$status','$roomrate')";
    $result=mysqli_query($con,$qry);
    
    if($result){
        header("location:roomavailableview.php");
    }
    else {
        echo "error";
    }
    
}
mysqli_close($con);
?>
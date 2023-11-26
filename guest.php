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
                <h1>Guest</h1>
                <form method="post">
                    <div>
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div>
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
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
    $name=$_POST['name'];
    $email=$_POST['email'];
    
    $qry="INSERT INTO guest(name,email) VALUE ('$name','$email')";
    $result=mysqli_query($con,$qry);
    
    if($result){
        header("location:guestview.php");
    }
    else {
        echo "error";
    }
    
}
mysqli_close($con);
?>
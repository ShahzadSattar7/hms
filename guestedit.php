<?php
include("config.php");

$id=$_GET['id'];
$qry="SELECT * FROM guest WHERE id='$id'";
$result= mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" ></div>
            <div class="col-12" >
            
                <form method="post" action="guestupdate.php">
                    <div>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-outline-primary" name="edit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
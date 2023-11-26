<?php
include("config.php");

$id=$_GET['id'];
$qry="SELECT * FROM roombooking WHERE id='$id'";
$result= mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" ></div>
            <div class="col-12" >
            
                <form method="post" action="roombookingupdate.php">
                    <div>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Guestname</label>
                        <input type="text" class="form-control" name="guestname" value="<?php echo $row['guestname'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Roomstatus</label>
                        <input type="text" class="form-control" name="roomstatus" value="<?php echo $row['roomstatus'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Checkin</label>
                        <input type="date" class="form-control" name="checkin" value="<?php echo $row['checkin'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Checkout</label>
                        <input type="date" class="form-control" name="checkout" value="<?php echo $row['checkout'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Payment</label>
                        <input type="text" class="form-control" name="payment" value="<?php echo $row['payment'] ?>">
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
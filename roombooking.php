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
                <h1>Room Booking</h1>
                <form method="post">
                    <div>
                        <label class="form-label">Guestname</label>
                        <input type="text" class="form-control" name="guestname">
                    </div>
                    <div>
                        <label class="form-label">Roomstatus</label>
                        <input type="text" class="form-control" name="roomstatus">
                    </div>
                    <div>
                        <label class="form-label">Checkin</label>
                        <input type="date" class="form-control" name="checkin">
                    </div>
                    <div>
                        <label class="form-label">Checkout</label>
                        <input type="date" class="form-control" name="checkout">
                    </div>
                    <div>
                        <label class="form-label">Payment</label>
                        <input type="text" class="form-control" name="payment">
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
    $guestname=$_POST['guestname'];
    $roomstatus=$_POST['roomstatus'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $payment=$_POST['payment'];
    $qry="INSERT INTO roombooking(guestname,roomstatus,checkin,checkout,payment) VALUE ('$guestname','$roomstatus','$checkin','$checkout','$payment')";
    $result=mysqli_query($con,$qry);
    
    if($result){
        header("location:roombookingview.php");
    }
    else {
        echo "error";
    }
    
}
mysqli_close($con);
?>
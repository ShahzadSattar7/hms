<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Room Booking View </h1>
        <table class="table table-hover">
            <tr>
                <td>id</td>
                <td>guestname</td>
                <td>roomstatus</td>
                <td>checkin</td>
                <td>checkout</td>
                <td>payment</td>
                <td>Action</td>
            </tr>
            <?php
            $qry="SELECT * FROM roombooking";
            $result= mysqli_query($con,$qry);
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['guestname']."</td>";
                    echo "<td>".$row['roomstatus']."</td>";
                    echo "<td>".$row['checkin']."</td>";
                    echo "<td>".$row['checkout']."</td>";
                    echo "<td>".$row['payment']."</td>";
                    echo "<td> <a href='roombookingdelete.php?id=".$row['id']."'class='btn btn-danger'> delete </a>";
                    echo "<a href='roombookingedit.php?id=".$row['id']."'class='btn btn-success'> edit </a></td>";

                    echo "</tr>";
                }
            }
            else{
                echo " record not found";
            }
            mysqli_close($con);
            ?>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .dashboard {
            padding: 20px;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Hotel Management System</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="admin.php">Admin</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    
                <li class="nav-item">
                <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                        <a class="nav-link" href="roombookingview.php">Room Booking View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="roomavailable.php"> Adds Room Available</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="guestview.php">Guest View</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Room Booking</h5>
                        <p class="card-text">Book rooms for your guests.</p>
                        <a href="roombooking.php" class="btn btn-success">Book a Room</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Room Availability</h5>
                        <p class="card-text">Check the availability of rooms.</p>
                        <a href="roomavailableview.php" class="btn btn-info">Check Availability</a>
                    </div>
                </div>
            </div>
        

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Guests</h5>
                        <p class="card-text">View and manage guest information.</p>
                        <a href="guest.php" class="btn btn-warning">Enter Guests</a>
                    </div>
                </div>
            </div>

            <!-- Add more cards as needed -->

        </div>
    </div>

    <footer>
        <p>&copy; 2023 Hotel Management System</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

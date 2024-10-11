<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<head>
    <title>QT-Quick Ticket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Montserrat', sans-serif;
            color: #333;
        }

        .navvvvvvbar {
            margin-bottom: 0;
            background-color: #4a4a4a;
            padding: 20px;
            color: #fff;
            text-align: center; 
            font-size: 24px;
            letter-spacing: 2px;
        }

        .home-button {
            position: absolute;
            left: 20px;
            top: 20px;
            margin-right: 20px;
        }

        .home-button a {
            color: #fff;
            text-decoration: none;
            font-size: 20px;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #6c5ce7;
            transition: background-color 0.3s;
        }

        .home-button a:hover {
            background-color: #5a47d0;
        }

        .navbar {
            margin-bottom: 0;
            background-color: #222;
            border: 0;
            font-size: 18px;
        }

        .navbar-nav li {
            margin-right: 15px; /* Space between the buttons */
        }

        .navbar-nav li a {
            color: #d5d5d5 !important;
            padding: 15px 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar-nav li a:hover {
            background-color: #444 !important;
            color: #fff !important;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }

        .navbar-nav li.active a {
            color: #fff !important;
            background-color: #444 !important;
        }

        .dropdown-menu li a {
            color: #000 !important;
            padding: 10px 20px;
        }

        .dropdown-menu li a:hover {
            background-color: #444 !important;
            color: #fff !important;
        }

        /* Custom palette for links */
        .navbar-nav li a[href="book.php"],
        .navbar-nav li a[href="bookbus.php"],
        .navbar-nav li a[href="mybookings.php"],
        .navbar-nav li a[href="trainschedule.php"] {
            background-color: #28a745 !important; /* Green background */
            color: #fff !important; /* White text */
            border-radius: 5px;
        }

        .navbar-nav li a[href="book.php"]:hover,
        .navbar-nav li a[href="bookbus.php"]:hover,
        .navbar-nav li a[href="mybookings.php"]:hover,
        .navbar-nav li a[href="trainschedule.php"]:hover {
            background-color: #218838 !important; /* Darker green on hover */
            color: #fff !important;
        }
    </style>
</head>

<nav class="navvvvvvbar">
    <span class="home-button"><a href="home.php">Home</a></span>
    <b>QT- Quick Ticket</b>
</nav>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="book.php">Train Ticket</a></li>
                <li><a href="bookbus.php">Bus Ticket</a></li>
                <li><a href="mybookings.php">User Bookings</a></li>
                <li><a href="trainschedule.php">Train Schedule</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">User: <?php echo " " . $_SESSION['name']; ?>
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="myprofile.php">My Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

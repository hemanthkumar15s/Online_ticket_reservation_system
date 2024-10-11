<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:index.php");
}
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='index.css'>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: url('a.jpg') no-repeat center center fixed; /* Set your background image */
            background-size: cover;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Slight transparency */
            border-radius: 8px;
            border: 2px solid grey;
            margin: 50px auto; /* Centered with auto margins */
            padding: 50px 100px; /* Consistent padding */
            max-width: 600px; /* Fixed width for better fit */
            text-align: center; /* Center text */
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-bottom: 20px; /* Reduced bottom margin for heading */
        }

        button {
            background-color: black;
            color: white;
            border: none;
            padding: 15px 20px; /* Button padding */
            border-radius: 5px;
            font-size: 18px; /* Increased font size */
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s; /* Added hover transition */
        }

        button img {
            margin-right: 10px; /* Space between icon and text */
        }

        button:hover {
            background-color: white;
            color: black;
            transform: scale(1.05); /* Slightly enlarge button on hover */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
    <title>User Bookings</title>
</head>
<body>

<h1> User Bookings &nbsp</h1>

<div class="container">
    <a href='trainbookings.php'>
        <button>
            <img src="https://img.icons8.com/dusk/44/000000/train-ticket.png"/> View Train Bookings
        </button>
    </a>
    <br><br>
    <a href='busbookings.php'>
        <button>
            <img src="https://img.icons8.com/officel/50/000000/bus-ticket.png"/> View Bus Bookings
        </button>
    </a>
</div>

<?php include 'footer.php'; ?>

</body>
</html>

<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:adminindex.php");
}
include 'adminheader.php';
?>

<style>
    body {
        font-family: Montserrat, sans-serif;
        background: url('a4.jpg') no-repeat center center fixed; /* Set your background image */
        background-size: cover; /* Cover the entire background */
        color: #333; /* Default text color */
        margin: 0; /* Remove default margins */
        padding: 0; /* Remove default padding */
    }

    h1 {
        text-align: center;
        margin: 50px 0;
        color: #333;
    }

    h1 img {
        vertical-align: middle; /* Align image with text */
        margin-left: 10px; /* Space between text and image */
    }

    .container {
        border-spacing: 10px;
        font-size: 18px !important;
        border: 2px solid grey;
        margin: 50px auto; /* Center the container */
        padding: 50px 120px; /* Padding on all sides */
        background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Box shadow for depth */
        max-width: 800px; /* Limit the maximum width */
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transition for hover effects */
    }

    .container:hover {
        transform: translateY(-5px); /* Slight upward movement on hover */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
    }

    button {
        background-color: black; /* Button background color */
        border: 2px solid black; /* Button border color */
        color: white; /* Button text color */
        padding: 15px 30px; /* Padding for buttons */
        border-radius: 5px; /* Rounded corners */
        cursor: pointer; /* Pointer cursor on hover */
        display: block; /* Block display for buttons */
        width: 100%; /* Full width for buttons */
        margin: 10px 0; /* Space between buttons */
        text-align: center; /* Center align text in button */
        transition: background-color 0.3s ease, transform 0.3s ease; /* Transition for hover effects */
    }

    button:hover {
        background-color: rgba(255, 255, 255, 0.8); /* Change background color on hover */
        color: black; /* Change text color on hover */
        transform: scale(1.05); /* Slightly increase size on hover */
    }
</style>

<html>
<head>
    <link rel='stylesheet' href='index.css'>
</head>
<body>
    <h1><b>Admins Data Base</b> </h1>

    <div class="container">
        <a href='admintraindb.php'>
            <button>View Train Bookings</button>
        </a>
        <a href='adminbusdb.php'>
            <button>View Bus Bookings</button>
        </a>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>

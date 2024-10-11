<?php
include 'homehead.php';
?>

<style>
    .container {
        border-spacing: 0px;
        font-family: Montserrat, sans-serif;
        font-size: 18px !important;
        border: 0px solid grey;
        margin-top: 50px;
        margin-bottom: 200px;
        padding: 50px 120px; /* Combined padding properties */
        align-content: center;
        background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white background */
        border-radius: 50px; /* Optional: add rounded corners */
    }

    button {
        background-color: black; /* Solid color for buttons */
        border: 2px solid black; /* Border color for buttons */
        color: white;
        padding: 15px 30px; /* Add padding for better button size */
        border-radius: 5px; /* Add rounded corners */
        cursor: pointer; /* Pointer on hover */
        display: flex; /* Align icon and text */
        align-items: center; /* Center items vertically */
        justify-content: center; /* Center items horizontally */
        text-align: center; /* Center align text */
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease; /* Transition for hover effects */
    }

    button:hover {
        background-color: rgba(85, 85, 85, 0.8); /* Change background color on hover */
        transform: scale(1.05); /* Slightly increase size on hover */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Add shadow effect */
    }

    button img {
        width: 30px; /* Ensure consistent icon size */
        height: 30px; /* Ensure consistent icon size */
        margin-right: 10px; /* Space between icon and text */
    }
</style>

<html>
<head>
    <link rel='stylesheet' href='index.css'>
</head>
<body>
    <h1 style="text-transform: capitalize;"><center><b> Welcome To QT - Booking Portal </b></center></h1>

    <div class="container">
        <a href='book.php'>
            <button>
                <img src="https://img.icons8.com/nolan/54/train.png"/>&nbsp;&nbsp;Book Train Tickets
            </button>
        </a>
        <br><br>

        <a href='bookbus.php'>
            <button>
                <img src="https://img.icons8.com/nolan/54/bus.png"/>&nbsp;&nbsp;Book Bus Tickets
            </button>
        </a>
    </div>

    <?php include 'footer.php'; ?> 
</body>
</html>

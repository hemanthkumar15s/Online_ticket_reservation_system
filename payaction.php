<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}

$name = $_POST['name'];
$card = $_POST['cno'];
$EM  = $_POST['Em'];
$EY = $_POST['Ey'];
$Cvv = $_POST['Cvv'];
$Pin = $_POST['Pin'];

$sql_transactions = "INSERT INTO transactions(email, source, dest, Name, Class, Type, NoOfpass, card_no, expmonth, expyear, cvv, pin, Amt, Route) VALUES ('" . $_SESSION['email'] . "', '" . $_SESSION['source'] . "', '" . $_SESSION['dest'] . "', '" . $_SESSION['name'] . "', '" . $_SESSION['Class'] . "', '" . $_SESSION['Type'] . "', '" . $_SESSION['NoOfpass'] . "', '$card', '$EM', '$EY', '$Cvv', '$Pin', '" . $_SESSION['final'] . "', '" . $_SESSION['Route'] . "')";

if (mysqli_query($connect, $sql_transactions)) {
    echo "<h1><center>Your Ticket has been successfully booked</center></h1><br>";
    header("location: bookdone.php");
    exit; // Ensure that no further code is executed after the redirect
} else {
    echo "<h1><center>Error: Could not book your ticket. Please try again later.</center></h1>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='index.css'>
    <link rel="shortcut icon" href="logofig.jpg" />
    <title>Payment Confirmation</title>
    <style>
        body {
            background: url('a5.jpg') no-repeat center center fixed; /* Add your background image */
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-top: 20%;
            color: black;
            font-size: 2em;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <?php include 'footer.php'; ?>
</body>
</html>

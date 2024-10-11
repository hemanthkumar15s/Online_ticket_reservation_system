<?php
include 'connect.php';
session_start();

if (empty($_SESSION['log'])) {
    header("location:index.php");
    exit;
}

$name = $_POST['name'] ?? '';
$card = $_POST['cno'] ?? '';
$EM = $_POST['Em'] ?? '';
$EY = $_POST['Ey'] ?? '';
$Cvv = $_POST['Cvv'] ?? '';
$Pin = $_POST['Pin'] ?? '';

$sql_transactions = "INSERT INTO bustransactions(email, source, dest, Name, Bus_No, NoOfpass, card_no, expmonth, expyear, cvv, pin, Amt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $connect->prepare($sql_transactions);
$stmt->bind_param("ssssssssssss", $_SESSION['email'], $_SESSION['source'], $_SESSION['dest'], $_SESSION['name'], $_SESSION['busnum'], $_SESSION['NoOfpass'], $card, $EM, $EY, $Cvv, $Pin, $_SESSION['final']);

if ($stmt->execute()) {
    echo "<h1><center>Your Ticket has been successfully booked</center></h1><br>";
    header("location: busbookdone.php");
} else {
    echo "<h1><center>Booking failed. Please try again.</center></h1><br>";
}

$stmt->close();
$connect->close();
?>

<style>
    body {
        font-family: Montserrat, sans-serif;
        background-image: url('a4.jpg'); /* Change the path to your image */
        background-size: cover; /* Cover the entire page */
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Prevent repeating the image */
        color: #fff; /* Set text color for better visibility */
    }

    h1 {
        text-align: center;
        margin-top: 50px;
    }

    /* Add any additional styles as needed */
</style>

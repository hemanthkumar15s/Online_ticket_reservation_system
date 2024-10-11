<?php
include 'connect.php';
$pid = $_GET['pid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='index.css'>
    <link rel="shortcut icon" href="logofig.jpg" />
    <title>Ticket Details</title>
    <style>
        body {
            font-family: Montserrat, sans-serif;
            background: url('a5.jpg') no-repeat center center fixed; /* Add your background image */
            background-size: cover;
            color: #343434;
            margin: 0;
            padding: 0;
        }

        .ticket {
            max-width: 600px;
            margin: 50px auto;
            background: rgba(255, 193, 7, 0.9); /* Semi-transparent background */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: box-shadow 0.3s ease;
        }

        .ticket:hover {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
            margin-top: 0;
            color: black;
        }

        h2 {
            font-size: 18px;
            margin: 10px 0;
            color: #343434;
        }

        span {
            color: black;
            font-weight: 500;
        }

        .thank-you {
            text-align: center;
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .ticket {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<h1 align="left">Ticket Details</h1>
<br>

<?php
$sel = "SELECT * FROM `transactions` WHERE `T_No.` = $pid";
$rs = $connect->query($sel);
while ($row = $rs->fetch_assoc()) {
    ?>
    <div class="ticket" id="printable">
        <h1><b>QT - BOOKING</b> &nbsp; Booking ID: <?php echo $row['T_No.']; ?></h1>
        <h2 align="center"><span><?php echo $row['source']; ?> &nbsp; To &nbsp; <?php echo $row['dest']; ?></span></h2>
        <h2><span>DATE & TIME: &nbsp; <?php echo $row['Date']; ?></span></h2>
        <h2><span>CLASS: &nbsp; <?php echo $row['Class']; ?></span></h2>
        <h2><span>TYPE: &nbsp; <?php echo $row['Type']; ?></span></h2>
        <h2><span>NO. OF PASSENGERS: &nbsp; <?php echo $row['NoOfpass']; ?></span></h2>
        <h2><span>AMOUNT: &nbsp; ₹<?php echo $row['Amt']; ?></span></h2>
        <h2><span>ROUTE: &nbsp; <?php echo $row['Route']; ?></span></h2>
        <div class="thank-you">WISH YOU A HAPPY & SAFE JOURNEY</div>
    </div>
    <?php
}
?>

<?php include 'footer.php'; ?>
</body>
</html>

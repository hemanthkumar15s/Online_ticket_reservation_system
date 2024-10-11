<h1 align="center"><mark>Ticket Details</mark></h1>
<br>

<style>
body {
    background-image: url('a4.jpg'); /* Replace with your image path */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: #343434; /* Ensures text is readable */
}

.ticket {
    font-family: Montserrat, sans-serif;
}

.ticketdesign {
    background: linear-gradient(to bottom, rgba(255, 193, 7, 0.8) 0%, rgba(255, 193, 7, 0.8) 19%, rgba(217, 217, 217, 0.8) 19%, rgba(217, 217, 217, 0.8) 100%);
    height: auto;
    padding: 2em;
    margin-top: 50px;
    border-radius: 10px; 
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.ticketstructure {
    width: 75em;
    margin: 0 auto; 
}

h1 {
    font-size: 40px;
    margin-top: 0;
}

h2 {
    font-size: 20px;
    margin: 10px 0;
    color: black;
}

span {
    color: black;
}

#options {
    text-align: center;
}

.printable {
    text-align: left;
}
</style>

<?php
include 'connect.php';
$pid = $_GET['pid'];

$sel = "SELECT * FROM `bustransactions` WHERE `T_No.` = $pid";
$rs = $connect->query($sel);
while ($row = $rs->fetch_assoc()) {
?>

<div class="ticket" id="printable">
    <div class="ticketdesign ticketstructure">
        <h1 align="left">
            <b>QT - Booking</b>
            <span style="float: right;">Ticket No: <?php echo $row['T_No.']; ?></span>
        </h1>
        <div class="title">
            <br>
            <h1 align="center">
                <span><?php echo $row['source']; ?> &nbsp; To &nbsp; <?php echo $row['dest']; ?></span>
            </h1>
            <h2 align="left"><span>Name: &nbsp; <?php echo $row['Name']; ?></span></h2>
            <h2 align="left"><span>Date & Time: &nbsp; <?php echo $row['Date']; ?></span></h2>
            <h2 align="left"><span>Bus No: &nbsp; <?php echo $row['Bus_No']; ?></span></h2>
            <h2 align="left"><span>No of Passengers: &nbsp; <?php echo $row['NoOfpass']; ?></span></h2>
            <h2 align="left"><span>Amount: &nbsp; ₹<?php echo $row['Amt']; ?></span></h2>
            <h2 align="center"><span>Wish you a happy & safe journey</span></h2>
        </div>
    </div>
</div>

<?php
}
?>

<br><br><br><br><br>

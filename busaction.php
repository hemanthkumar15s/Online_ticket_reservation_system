<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:index.php");
}

include 'header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];
$no = $_POST['number'];

if ($source == $dest) {
    echo "<h1><center>Selected source and destination same, Please refill the details</center></h1><br><br>";
    echo '<center>
    <form action="bookBUS.php">
        <button style="background-color: black; padding: 25px 70px; type="submit"; align=center;">
            <span style="color:white;"><h3>Go back</h3></span>
        </button>
    </form><br><br>';
} else {
    $sql_price = "SELECT * FROM `pricebus` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest'";
    $result = $connect->query($sql_price);
    while ($row = $result->fetch_assoc()) {
        $final = $row["Price"] * $no;
        $busnum = $row["Bus_No."];

        echo "<br><br><br><h1><center>Total fare of bus number <b>" . $busnum . "</b> from <b>" . $source . " to " . $dest . "</b> is: ₹ <b>" . $final . "</b></center></h1><br><br>";
        echo '<center>
        <form action="buspay.php">
            <button style="background-color: black; padding: 25px 70px; type="submit"; align=center;">
                <span style="color:white;"><h3>Checkout</h3></span>
            </button>
        </form><br><br>

        <form action="bookBUS.php">
            <button style="background-color: black; padding: 25px 70px; type="submit"; align=center;">
                <span style="color:white;"><h3>Go back</h3></span>
            </button>
        </form><br><br>';
    }
    $_SESSION['final'] = $final;
    $_SESSION['source'] = $source;
    $_SESSION['dest'] = $dest;
    $_SESSION['busnum'] = $busnum;
    $_SESSION['NoOfpass'] = $no;
}
?>

<style>
    body {
        background-image: url('a4.jpg'); /* Replace with your image path */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        font-family: Montserrat, sans-serif;
    }

    h1 {
        color: #333;
    }

    center {
        background: rgba(255, 255, 255, 0.8); /* Slightly transparent white background for contrast */
        border-radius: 10px; /* Rounded corners for the center */
        padding: 20px; /* Padding for spacing */
        margin: 0 auto; /* Centering */
        max-width: 600px; /* Maximum width */
    }
</style>

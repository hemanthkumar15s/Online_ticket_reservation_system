<?php
include 'connect.php';
session_start();

if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}

include 'header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$type = $_POST['type'];
$no = $_POST['number'];

if ($source == $dest) {
    echo "<h1 class='alert'><center>Selected source and destination are the same. Please refill the details.</center></h1><br><br>";
} else {
    echo "<h1 class='header'><center><b><img src='https://img.icons8.com/cotton/80/000000/route.png'/> SELECT ROUTE AND PROCEED TO CHECKOUT :</center></b></h1>";

    $sql_price = "SELECT * FROM `price` WHERE `source` = '$source' AND `dest` = '$dest' AND `type` = '$type' AND `class` = '$class'";
    $result = $connect->query($sql_price);
    
    $final = 0;
    $Route = '';

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $final = $row["Price"];
            $Route = $row["Route"];
            $final = $final * $no;
            echo "<br><br><h1 class='result'><center>Total <b>" . $class . " Class, " . $type . "</b> Journey type fare from <b>" . $source . " to " . $dest . "</b> is: ₹ <b>" . $final . "</b> and route via <b>" . $source . " " . $Route . " " . $dest . "</b></center></h1><br><br>";
            echo '<center>
            <form action="pay.php">
                <button class="button" type="submit" align="center">
                    <span><h3>Checkout</h3></span>
                </button>
            </form></center>';
        }
    } else {
        echo "<h1 class='alert'><center>No route found for the selected criteria. Please check the details.</center></h1><br><br>";
    }

    $_SESSION['final'] = $final;
    $_SESSION['source'] = $source;
    $_SESSION['dest'] = $dest;
    $_SESSION['Class'] = $class;
    $_SESSION['Type'] = $type;
    $_SESSION['NoOfpass'] = $no;
    $_SESSION['Route'] = $source . " " . $Route . " " . $dest;
}
?>
<br><br>
<center>
<form action="book.php">
    <button class="button" type="submit" align="center">
        <span><h3>Go back</h3></span>
    </button>
</form><br><br>

<style>
    body {
        font-family: Montserrat, sans-serif;
        background-image: url('a5.jpg'); /* Add your image path here */
        background-size: cover; /* Cover the entire page */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Prevent repetition */
        color: #333;
    }
    .header {
        font-size: 36px;
        margin: 20px 0;
        color: #333;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }
    .result {
        font-size: 24px;
        margin: 20px 0;
        color: yellow;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }
    .alert {
        color: #f44336;
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }
    .button {
        background-color: black;
        color: white;
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        transition: background-color 0.3s ease, transform 0.2s ease;
        text-align: center;
    }
    .button:hover {
        background-color: #555;
        transform: scale(1.05);
    }
</style>

<?php include 'footer.php'; ?>

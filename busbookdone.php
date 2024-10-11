<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='index.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('a4.jpg'); /* Update with your background image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #343434;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }

        #font {
            font-family: Montserrat, sans-serif;
            font-size: 18px !important;
        }

        h2 {
            text-align: center;
        }

        .btn-custom {
            background-color: black;
            border: none;
            color: white;
        }

        .btn-custom:hover {
            background-color: darkgray;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2><b><img src="https://img.icons8.com/ios-filled/50/000000/summary-list.png"/> Booking Summary</b></h2>
        <br>

        <?php 
        $result = mysqli_query($connect , "SELECT * FROM `bustransactions` WHERE `email`='".$_SESSION['email']."' ORDER BY `T_No.` DESC LIMIT 1");
        while ($row = mysqli_fetch_assoc($result)): 
            $tno = $row["T_No."];
            $_SESSION['tno'] = $tno;
        ?>

        <table class="table table-striped" id="font">
            <tr>
                <th>Ticket No</th>
                <td><?php echo $row['T_No.']; ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $_SESSION['name'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $_SESSION['email'] ?></td>
            </tr>
            <tr>
                <th>Source Station</th>
                <td><?php echo $_SESSION['source'] ?></td>
            </tr>
            <tr>
                <th>Destination</th>
                <td><?php echo $_SESSION['dest'] ?></td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>₹&nbsp;<?php echo $_SESSION['final'] ?></td>
            </tr>
        </table>

        <div style="text-align: center;">
            <a href="busprint.php?pid=<?php echo $_SESSION['tno'] ?>" target="_blank">
                <button class="btn btn-custom">
                    <h3>Print Ticket</h3>
                </button>
            </a>
        </div>
        <?php endwhile; ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

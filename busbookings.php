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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>QT - Ticket Database</title>
    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            background-image: url('a4.jpg'); /* Update with your background image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #343434;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }

        #database_table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        #database_table td, #database_table th {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        #database_table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #database_table th {
            padding-top: 11px;
            padding-bottom: 11px;
            background-color: black;
            color: white;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>
        <b>
            <img src="https://img.icons8.com/nolan/64/database.png" alt="Database Icon"/> USER'S BUS BOOKINGS 
            <img src="https://img.icons8.com/ultraviolet/50/000000/bus.png" alt="Bus Icon"/>
        </b>
    </h2>
    <table id="database_table" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Date & Time</th>
                <th>Booking ID</th>
                <th>Name</th>
                <th>Source</th>
                <th>Destination</th>
                <th>Bus Number</th>
                <th>Amount Paid</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql_transactions = "SELECT * FROM `bustransactions` WHERE `email`='" . $_SESSION['email'] . "'";
            $result = $connect->query($sql_transactions);
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>' . $row["Date"] . '</td>
                        <td>' . $row["T_No."] . '</td>
                        <td>' . $row["Name"] . '</td>
                        <td>' . $row["source"] . '</td>
                        <td>' . $row["dest"] . '</td>
                        <td>' . $row["Bus_No"] . '</td>
                        <td>₹ ' . $row["Amt"] . '</td>
                        <td><a href="busprint.php?pid=' . $row["T_No."] . '" target="_blank">Click Here</a></td>
                      </tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#database_table').DataTable({
        "order": [[1, "desc"]]
    });
});
</script>

<?php include 'footer.php'; ?>

</body>
</html>

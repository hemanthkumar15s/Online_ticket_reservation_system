<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:index.php");
}
include 'adminheader.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='index.css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        body {
            background: url('a4.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Montserrat, sans-serif;
            color: white; /* Text color for contrast */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Shadow for depth */
        }

        table#data {
            font-size: 16px;
            border-collapse: collapse;
            width: 100%;
        }

        #data td, #data th {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        #data tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #data th {
            padding: 11px;
            background-color: black;
            color: white;
        }

        button {
            background-color: black;
            border-color: black;
            color: white;
            transition: background-color 0.3s ease; /* Animation for hover effect */
        }

        button:hover {
            background-color: rgba(0, 0, 0, 0.8); /* Darker on hover */
        }

        h3 {
            text-align: center;
        }

        .back-button {
            display: block;
            margin: 20px auto;
            text-align: center;
        }
    </style>
    <title>QT - Booking | Train Passengers Database</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h3>TRAIN PASSENGERS DATABASE</h3>
        <div class="table-responsive">
            <table id="data" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Booking ID</th>
                        <th>Name</th>
                        <th>Source</th>
                        <th>Destination</th>
                        <th>Amount Paid</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $result = mysqli_query($connect, "SELECT * FROM transactions");
                    while ($row = mysqli_fetch_assoc($result)): 
                    ?>
                    <tr>
                        <td><?php echo $row['Date']; ?></td>
                        <td><?php echo $row['T_No.']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['source']; ?></td>
                        <td><?php echo $row['dest']; ?></td>
                        <td><?php echo $row['Amt']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <div class="back-button">
            <a href='admin.php'><button><span>Go Back</span></button></a>
        </div>
    </div>
</body>
</html>

<script>
$(document).ready(function() {
    $('#data').DataTable({
        "order": [[ 1, "desc" ]]
    });
});
</script>

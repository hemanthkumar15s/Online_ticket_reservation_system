<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:index.php");
}
include 'adminheader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='index.css'>
    <title>BUS PASSENGERS DATABASE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <style>
        body {
            font-family: Montserrat, sans-serif;
            background: url('a4.jpg') no-repeat center center fixed; /* Set your background image */
            background-size: cover; /* Cover the entire background */
            color: #333; /* Default text color */
            margin: 0; /* Remove default margins */
            padding: 0; /* Remove default padding */
        }

        h3 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        table#data {
            font-size: 16px;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            border-spacing: 0;
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
            padding-top: 11px;
            padding-bottom: 11px;
            background-color: black;
            color: white;
        }

        .btn-custom {
            background-color: black;
            border: 2px solid black;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-custom:hover {
            background-color: rgba(255, 255, 255, 0.8);
            color: black;
            transform: scale(1.05);
        }

        .back-button-container {
            text-align: center; /* Center align the back button */
            margin-top: 20px; /* Space above the back button */
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>BUS PASSENGERS DATABASE</h3>
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
                    $result = mysqli_query($connect, "SELECT * FROM bustransactions");
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
    </div>

    <div class="back-button-container">
        <a href='admin.php'>
            <button class="btn-custom"><span>Go Back</span></button>
        </a>
    </div>

    <script>
        $(document).ready(function(){
            $('#data').DataTable({
                "order": [[ 1, "desc" ]]
            });
        });
    </script>
</body>
</html>

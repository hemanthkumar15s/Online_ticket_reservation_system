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
    <link rel='stylesheet' href='index.css'>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: url('a1.jpg') no-repeat center center fixed; /* Set your background image */
            background-size: cover;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .table {
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.9); /* Slight transparency */
            border-radius: 8px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            width: 80%; /* Set width to fit page */
            padding: 20px; /* Added padding */
            border-collapse: collapse;
        }

        th, td {
            padding: 10px; /* Padding for cells */
            text-align: left;
            border-bottom: 1px solid #ddd; /* Bottom border for rows */
        }

        th {
            background-color: #f2f2f2; /* Light background for header */
        }
    </style>
    <title>User Profile Details</title>
</head>
<body>

<h2><img src="https://img.icons8.com/dusk/50/000000/checked-user-male.png"/><b>USER PROFILE DETAILS</b></h2>

<table class="table table-striped">
    <tr>
        <th>Name</th>
        <td><?php echo $_SESSION['name'] ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $_SESSION['email'] ?></td>
    </tr>
    <tr>
        <th>User Id</th>
        <td><?php echo $_SESSION['userid'] ?></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?php echo $_SESSION['Gender'] ?></td>
    </tr>
    <tr>
        <th>Date of Birth</th>
        <td><?php echo $_SESSION['dob'] ?></td>
    </tr>
    <tr>
        <th>Contact Number</th>
        <td><?php echo $_SESSION['phone'] ?></td>
    </tr>
</table>

<?php include 'footer.php'; ?>

</body>
</html>

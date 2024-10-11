<?php
include 'head2.php';

session_start();
?>
<html>
<head>
    <link rel='stylesheet' href='index.css'>
    <link rel="shortcut icon" href="logofig.jpg" />
    <style>
        body {
            background-image: url('a.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #F5F1F0; /* Fallback color */
        }
        h2 {
            color: white;
        }
        button {
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #555; /* Hover effect */
        }
    </style>
</head>
<body>
<?php
session_destroy();
echo '<center><h2>Thank You for using ET - Booking Application</h2></center><br>';
echo '<center><table><tr><td><a href="index.php"><button style="background-color:black;">Sign in ! &nbsp;&nbsp;Again</button></a></td></tr></table></center>';
?>
</body>
</html>

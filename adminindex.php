<?php
include 'connect.php';
include 'head2.php';
?>
<html>
<head>
    <link rel='stylesheet' href='index.css'>
    <style>
        .table {
            font-family: Montserrat, sans-serif;
        }
        body {
            background: url('a4.jpg') no-repeat center center fixed; /* Add your background image path */
            background-size: cover; /* Cover the entire body */
        }
    </style>
    <title>QT - Booking</title> <!-- Updated title -->
</head>
<body>
    <div>
        <center>
            <img src="https://img.icons8.com/bubbles/280/000000/admin-settings-male.png" />
        </center>
    </div>
    <br>
    <br>
    <h1>
        <center><b>Admin Sign In</b></center>
    </h1>

    <form method='post' action='adminauthenticate.php'>
        <div>
            <table align="center" class="table">
                <tr>
                    <td><h2><b>Email id : </b></h2></td>
                    <td><input type="email" name="email" maxlength='50'></td>
                </tr>
                <tr>
                    <td><h2><b>Password : </b></h2></td>
                    <td><input type="password" name="password" maxlength='50'></td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <center>
                            <button type='Submit' style="background-color:black; border-color:black" name='login_submit'>
                                <b>Sign in</b>
                            </button>
                        </center>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <center>
        <h3>
            <a href='sindex.php' style="color: black"><b>User Sign In?</b></a>
        </h3>
    </center>
</body>
</html>

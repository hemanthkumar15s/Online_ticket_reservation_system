<?php
include 'connect.php';
include 'head2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='index.css'>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: url('a5.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Slight transparency */
            border-radius: 8px;
            padding: 20px 30px; /* Adjusted padding */
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 500px; /* Reduced width for a snug fit */
            margin: 50px auto; /* Centered margin with some vertical space */
            text-align: center;
        }

        h2 {
            margin: 0 0 10px; /* Reduced margin for header */
        }

        .table {
            width: 100%;
            margin: 15px 0; /* Adjusted margin */
        }

        .table h2 {
            font-weight: bold;
            font-size: 16px; /* Decreased font size */
        }

        .table input {
            width: calc(100% - 20px); /* Adjusted to accommodate padding */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
            margin-bottom: 10px; /* Added margin for spacing */
        }

        .table input:focus {
            border-color: #000;
            outline: none;
        }

        button {
            background-color: #000;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            width: 100%; /* Full width for button */
        }

        button:hover {
            background-color: #fff;
            color: #000;
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
        
        footer {
            background-color: #2d2d30;
            color: #fff;
            text-align: center;
            padding: 10px 0; /* Reduced padding for footer */
            position: relative; /* Ensure footer fits within the content */
            margin-top: 20px; /* Space between container and footer */
        }
    </style>
    <title>QT - Booking</title>
</head>
<body>

<div class="container">
    <div>
        <img src="https://img.icons8.com/bubbles/300/000000/user.png" alt="User Icon"/>
    </div>
    <h2>User Sign In</h2>
    <form method='post' action ='authenticate.php'>
        <table class="table">
            <tr>
                <td><h2>Email id:</h2></td>
                <td><input type="email" name="email" maxlength='50' required></td>
            </tr>
            <tr>
                <td><h2>Password:</h2></td>
                <td><input type="password" name="password" maxlength='50' required></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <button type='submit' name='login_submit'><b>Sign In</b></button>
                </td>
            </tr>
        </table>
    </form>
    <h3><a href='register.php'><b>Register</b></a></h3>
    <h3><a href='adminindex.php'><b>Admin Sign In?</b></a></h3>
</div>

<?php include 'footer.php'; ?>
</body>
</html>

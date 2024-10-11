<?php
include 'connect.php';
include 'head2.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='index.css'>
    <link rel="shortcut icon" href="logofig.jpg" />
    <title>Payment Details</title>
    <style>
        body {
            background: url('a5.jpg') no-repeat center center fixed; /* Add your background image */
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .form-container {
            margin: 50px auto;
            padding: 30px;
            background: rgba(255, 255, 255, 0.9); /* White background with transparency */
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            transition: box-shadow 0.3s ease;
        }

        .form-container:hover {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="number"], input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #333;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2><b>Enter Payment Details:</b></h2>
        <form method='post' action='payaction.php'>
            <table align="center">
                <tr>
                    <td><h3>Card No.:</h3></td>
                    <td colspan='2'><input type="number" name="cno" placeholder="1111-2222-3333-4444" maxlength='16' required></td>
                </tr>
                <tr>
                    <td><h3>Name on Card:</h3></td>
                    <td colspan='2'><input type="text" name="name" placeholder="Prajwal N. Sutar" maxlength='50' required></td>
                </tr>
                <tr>
                    <td><h3>Expiry Date:</h3></td>
                    <td><input type="number" name="Em" placeholder='MM' maxlength='2' required></td>
                    <td><input type="number" name="Ey" placeholder='YY' maxlength='2' required></td>
                </tr>
                <tr>
                    <td><h3>CVV No:</h3></td>
                    <td colspan='2'><input type="password" name="Cvv" maxlength='3' required></td>
                </tr>
                <tr>
                    <td><h3>PIN NO:</h3></td>
                    <td colspan='2'><input type="password" name="Pin" maxlength='4' required></td>
                </tr>
                <tr>
                    <td colspan='3'>
                        <button type='submit' name='register_submit'>Complete Payment</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>

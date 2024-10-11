<?php
include 'connect.php';
include 'head2.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:index.php");
}
?>

<html>
<head>
    <style>
        body {
            font-family: Montserrat, sans-serif;
            background-image: url('a4.jpg'); /* Update this path */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* No repeat */
            color: #343434; /* Default text color */
        }

        .formm {
            font-size: 18px !important;
            background-color: rgba(245, 241, 240, 0.9); /* Semi-transparent background */
            padding: 30px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3); /* Shadow effect */
            max-width: 500px; /* Max width of form */
            margin: 50px auto; /* Center the form */
        }

        h2 {
            margin-bottom: 20px; /* Space below the title */
        }

        h3 {
            margin: 10px 0; /* Space above and below the headings */
        }

        button {
            background-color: black;
            border-color: black;
            color: white; /* White text for the button */
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #333; /* Darker shade on hover */
        }
    </style>
    <link rel='stylesheet' href='index.css'>
    <link rel="shortcut icon" href="logofig.jpg" />
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="formm">
    <h2 align="center"><b>Enter Payment Details :</b></h2>
    <form method='post' action='buspayaction.php'>
        <table align="center">
            <tr>
                <td><h3>Card No.:</h3></td>
                <td colspan='2'><input type="number" name="cno" placeholder="1111-2222-3333-4444" maxlength='50'></td>
            </tr>
            <tr>
                <td><h3>Name on Card:</h3></td>
                <td colspan='2'><input type="text" name="name" placeholder="Prajwal N. Sutar" maxlength='50'></td>
            </tr>
            <tr>
                <td><h3>Expiry Date:</h3></td>
                <td><input type="number" name="Em" placeholder='MM' maxlength='2'></td>
                <td><input type="number" name="Ey" placeholder='YY' maxlength='2'></td>
            </tr>
            <tr>
                <td><h3>CVV No:</h3></td>
                <td colspan='2'><input type="password" name="Cvv" maxlength='3'></td>
            </tr>
            <tr>
                <td><h3>PIN NO:</h3></td>
                <td colspan='2'><input type="password" name="Pin" maxlength='4'></td>
            </tr>
            <tr>
                <td colspan='3'><center><button type='submit' name='register_submit'>Complete Payment</button></center></td>
            </tr>
        </table>
    </form>
    <br>
    <br>
</div>

<?php include 'footer.php'; ?>

</body>
</html>

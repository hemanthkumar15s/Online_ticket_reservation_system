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
            background: url('a6.jpg') no-repeat center center fixed;
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
            max-width: 500px; /* Fixed width for a snug fit */
            margin: 50px auto; /* Centered margin */
            text-align: center;
        }

        h2 {
            margin: 0 0 10px; /* Reduced margin for header */
        }

        h3 {
            margin: 10px 0; /* Consistent margin for subheadings */
        }

        .table {
            width: 100%;
            margin: 15px 0; /* Adjusted margin */
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
    <title>QT - Registration Page</title>
</head>
<body>

<div class="container">
    <div>
        <img src="https://img.icons8.com/bubbles/250/000000/add-user-male.png" alt="User Icon"/>
    </div>
    <h2>User Registration</h2>
    <form method='post' action='register_insert.php'>
        <table class="table">
            <tr>
                <td><h3>Name:</h3></td>
                <td colspan='2'><input type="text" name="name" maxlength='50' required></td>
            </tr>
            <tr>
                <td><h3>Email Id:</h3></td>
                <td colspan='2'><input type="email" name="email" maxlength='50' required></td>
            </tr>
            <tr>
                <td><h3>Gender:</h3></td>
                <td><input type="radio" name="Gender" value="M"> Male</td>
                <td><input type="radio" name="Gender" value="F" required> Female</td>
            </tr>
            <tr>
                <td><h3>Date of Birth:</h3></td>
                <td colspan='2'><input type="text" name="dob" maxlength='50' placeholder='yyyy-mm-dd' required></td>
            </tr>
            <tr>
                <td><h3>Password:</h3></td>
                <td colspan='2'><input type="password" name="password" maxlength='50' required></td>
            </tr>
            <tr>
                <td><h3>Contact No:</h3></td>
                <td colspan='2'><input type="tel" name="phone" maxlength='10' required></td>
            </tr>
            <tr>
                <td colspan='3'>
                    <center>
                        <button type='submit' name='register_submit'>Submit</button>
                    </center>
                </td>
            </tr>
        </table>
    </form>
    <div align="center">
        <h3><a href='sindex.php'>Registered? Sign In!</a></h3>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>

<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';
?>

<style>
    body {
        font-family: Montserrat, sans-serif;
        background-image: url('a1.jpg'); /* Replace with your image path */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: #f7f7f7; /* Fallback color */
    }

    h1 {
        font-size: 32px;
        color: #333;
        text-transform: capitalize;
        text-align: center;
        margin-bottom: 50px;
        animation: fadeIn 0.8s ease-in-out;
    }

    .container {
        background-color: rgba(255, 255, 255, 0.5); /* White with transparency */
        border-radius: 10px;
        padding: 50px 120px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease;
        max-width: 800px;
        margin: 0 auto;
    }

    .container:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    button {
        font-size: 18px;
        background-color: #000;
        color: white;
        border: 2px solid black;
        padding: 15px 30px;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    button:hover {
        background-color: #555;
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    button img {
        width: 30px;
        height: 30px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<html>
<head>
    <link rel='stylesheet' href='index.css'>
    <br><br>
    <h1>Welcome <?php echo " " . $_SESSION['name'] . " " ?> to QT - Ticket Booking Portal</h1>

    <div class="container">
        <a href='book.php'>
            <button>
                <img src="https://img.icons8.com/nolan/54/train.png"/>
                Book Train Tickets
            </button>
        </a>
        <br><br>

        <a href='bookbus.php'>
            <button>
                <img src="https://img.icons8.com/nolan/54/bus.png"/>
                Book Bus Ticket
            </button>
        </a>
    </div>

<?php include 'footer.php'; ?>
</html>

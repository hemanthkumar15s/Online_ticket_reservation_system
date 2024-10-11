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
        background-image: url('a4.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .container {
        max-width: 500px;
        margin: 30px auto;
        padding: 30px;
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 50px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .container:hover {
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        transform: translateY(-3px);
    }

    .button {
        padding: 15px 32px;
        color: white;
        background-color: #333;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.2s ease;
        display: block;
        margin: 20px auto;
    }

    .button:hover {
        background-color: #555;
        transform: translateY(-2px);
    }

    select, input[type=number] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    select:focus, input[type=number]:focus {
        border-color: #333;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
        animation: fadeIn 0.5s;
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

    .form-row {
        margin-bottom: 20px;
    }

    .input-icon {
        position: relative;
    }

    .input-icon i {
        position: absolute;
        left: 10px;
        top: 12px;
        color: #000;
    }

    .input-icon select, .input-icon input[type=number] {
        padding-left: 40px; /* Add padding for icon */
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <h1><b>Bus Ticket Booking</b></h1>
    <form method='post' action='busaction.php' align='center'>
        <div class="container">
            <div class="form-row input-icon">
                <label for="inputState">SOURCE BUS-STOP :</label>
                <i class="fas fa-bus"></i>
                <select id="inputState" class="form-control" name="source">
                    <option>Thane Railway Station</option>
                    <option>Dadoji Kondadev Stadium</option>
                    <option>Court Naka</option>
                    <option>Kalwa Naka</option>
                    <option>Shivaji Maharaj Hospital</option>
                    <option>Vitawa / Paryache Maidan</option>
                    <option>Sha Damodar Vitavkar Marg</option>
                    <option>Ganpati Pada</option>
                    <option>Mukund Company</option>
                    <option>Ganesh Nagar</option> 
                    <option>Digha Gaon</option>
                    <option>MSEB</option> 
                    <option>Reliable Plaza</option>
                    <option>Airoli Naka</option> 
                    <option>Airoli Railway Station</option> 
                    <option>Bharat Bijali</option>
                    <option>Siemens Company</option> 
                    <option>Rabale Police Station</option> 
                    <option>Rabale Naka</option>
                </select>
            </div>

            <div class="form-row input-icon">
                <label for="inputState">FINAL BUS-STOP :</label>
                <i class="fas fa-bus-alt"></i>
                <select id="inputState" class="form-control" name="dest">
                    <option>Thane Railway Station</option>
                    <option>Dadoji Kondadev Stadium</option>
                    <option>Court Naka</option>
                    <option>Kalwa Naka</option>
                    <option>Shivaji Maharaj Hospital</option>
                    <option>Vitawa / Paryache Maidan</option>
                    <option>Sha Damodar Vitavkar Marg</option>
                    <option>Ganpati Pada</option>
                    <option>Mukund Company</option>
                    <option>Ganesh Nagar</option> 
                    <option>Digha Gaon</option>
                    <option>MSEB</option> 
                    <option>Reliable Plaza</option>
                    <option>Airoli Naka</option> 
                    <option>Airoli Railway Station</option> 
                    <option>Bharat Bijali</option>
                    <option>Siemens Company</option> 
                    <option>Rabale Police Station</option> 
                    <option>Rabale Naka</option>
                </select> 
            </div>

            <div class="form-row input-icon">
                <label for="inputState">NO OF PASSENGERS :</label>
                <i class="fas fa-user-friends"></i>
                <input type="number" name="number" required min="1" max="5">
            </div>

            <div>   
                <button type="submit" class="button" name="login_submit">Proceed</button>
            </div>
        </div>
    </form>

<?php include 'footer.php'; ?> 
</body>

<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-image: url('a5.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Montserrat, sans-serif;
        }

        .container {
            font-size: 18px !important;
            margin: 30px auto;
            padding: 50px;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            max-width: 500px;
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
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
            display: block;
            margin: 20px auto;
        }

        .button:hover {
            background-color: #555;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        label i {
            margin-right: 10px;
        }

        select, input[type=number] {
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
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
    </style>
</head>
<body>
    <h1>Train Ticket Booking</h1>
    <form method='post' action='book_action.php' align='center'>
        <div class="container">
            <div class="form-row">
                <div class="form-group">
                    <label for="source"><i class="fas fa-map-marker-alt"></i> SOURCE STATION :</label>
                    <select id="source" class="form-control" name="source">
                        <option value="Panvel">Panvel</option>
                        <option value="Khandeshwar">Khandeshwar</option>
                        <option value="Manasarovar">Manasarovar</option>
                        <option value="Kharghar">Kharghar</option>
                        <option value="Belapur CBD">Belapur CBD</option>
                        <option value="Seawood Darave">Seawood Darave</option>
                        <option value="Nerul">Nerul</option>
                        <option value="Juinagar">Juinagar</option>
                        <option value="Turbhe">Turbhe</option>
                        <option value="Koparkhairne">Koparkhairne</option>
                        <option value="Ghansoli">Ghansoli</option>
                        <option value="Rabale">Rabale</option>
                        <option value="Airoli">Airoli</option>
                        <option value="Thane">Thane</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="dest"><i class="fas fa-map-signs"></i> FINAL DESTINATION :</label>
                    <select id="dest" class="form-control" name="dest">
                        <option value="Panvel">Panvel</option>
                        <option value="Khandeshwar">Khandeshwar</option>
                        <option value="Manasarovar">Manasarovar</option>
                        <option value="Kharghar">Kharghar</option>
                        <option value="Belapur CBD">Belapur CBD</option>
                        <option value="Seawood Darave">Seawood Darave</option>
                        <option value="Nerul">Nerul</option>
                        <option value="Juinagar">Juinagar</option>
                        <option value="Turbhe">Turbhe</option>
                        <option value="Koparkhairne">Koparkhairne</option>
                        <option value="Ghansoli">Ghansoli</option>
                        <option value="Rabale">Rabale</option>
                        <option value="Airoli">Airoli</option>
                        <option value="Thane">Thane</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="class"><i class="fas fa-train"></i> Train Class :</label>
                    <select id="class" class="form-control" name="class">
                        <option>First</option>
                        <option>Second</option>
                        <option>A.C</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="type"><i class="fas fa-exchange-alt"></i> JOURNEY TYPE :</label>
                    <select id="type" class="form-control" name="type">
                        <option>Single</option>
                        <option>Return</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="number"><i class="fas fa-users"></i> NO OF PASSENGERS :</label>
                    <input type="number" id="number" name="number" required min="1" max="5">
                </div>

                <button type="submit" class="button" name="login_submit">Proceed</button>
            </div>
        </div>
    </form>

<?php include 'footer.php'; ?>
</body>
</html>

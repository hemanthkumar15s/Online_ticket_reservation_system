<head>
  <title>QT - Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
    body {
      background: url('a4.jpg') no-repeat center center fixed;
      background-size: cover;
      color: white; /* Adjust text color for contrast */
    }

    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
      background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
      border: 0;
      font-size: 23px !important;
      letter-spacing: 2px;
      padding: 10px;
      transition: background-color 0.3s ease; /* Animation for hover effect */
    }

    .navbar:hover {
      background-color: rgba(0, 0, 0, 0.9); /* Darker on hover */
    }

    .navvvvvvbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: rgba(255, 193, 7, 0.8); /* Semi-transparent yellow */
      border: 0;
      font-size: 30px !important;
      letter-spacing: 4px;
      text-align: left;
      padding: 17px;
      color: black;
      transition: background-color 0.3s ease; /* Animation for hover effect */
    }

    .navvvvvvbar:hover {
      background-color: rgba(255, 193, 7, 1); /* Fully opaque on hover */
    }

    footer {
      background-color: rgba(242, 242, 242, 0.9);
      padding: 25px;
    }
  </style>
</head>

<body>
  <nav class="navvvvvvbar navvvvvvbar-default navvvvvvbar-fixed-top">
    <div class="navvvvvvbar-brand navvvvvvbar-center"><b>&nbsp&nbsp&nbsp<mark>QT - Booking</mark></b></div>
  </nav>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="glyphicon glyphicon-user"></span>
              Admin: <?php echo " " . $_SESSION['name'] . "" ?> &nbsp<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Add your content here -->

</body>

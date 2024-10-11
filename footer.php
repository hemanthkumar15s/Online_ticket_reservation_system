<head>
  <style>
    footer {
      font-family: Montserrat, sans-serif;
      background-color: rgba(45, 45, 48, 0.8); /* Semi-transparent background */
      color: #fff;
      font-size: 18px !important;
      letter-spacing: 2px;
      padding: 20px;
      text-align: center;
      position: relative; /* Ensure it is in flow with the document */
      width: 100%; /* Full width */
      bottom: 0; /* Stick to the bottom if necessary */
      left: 0; /* Align to the left */
      margin-top: 50px; /* Space above the footer */
      z-index: 1000; /* Ensure it stays on top */
    }

    footer a {
      color: #FFC107;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    footer a:hover {
      color: #fff;
    }

    .footer-icons img {
      width: 40px;
      margin: 0 10px;
      transition: transform 0.3s ease;
    }

    .footer-icons img:hover {
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <footer class="text-center">
    <div class="footer-icons">
      <!-- LinkedIn icon with clickable link -->
      <a href="http://linkedin.com/in/hemanthkumarpoondla" target="_blank"><img src="https://img.icons8.com/color/60/000000/linkedin.png" alt="LinkedIn" /></a>
      <!-- GitHub icon with clickable link -->
      <a href="https://github.com/hemanthkumar15s" target="_blank"><img src="https://img.icons8.com/color/60/000000/github.png" alt="GitHub" /></a>
    </div>
    <h3>&copy; 2024 <a href="#">QT - Booking</a></h3>
  </footer>
</body>

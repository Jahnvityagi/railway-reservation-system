<?php
session_start();

if (empty($_SESSION["id"])) {
  ?> <script LANGUAGE='JavaScript'>
    window.alert('Please Login to proceed.');
    window.location.href = 'register.php';
  </script>

<?php
}
include_once("database_connect_deep.php");
if (!$Connection) {
  echo "<script type='text/javascript'>alert('Database failed');</script>";
  die('Could not connect: ' . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Indian Railways</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="images/favicon.png" rel="icon">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <?php include("head.php"); ?>
  <!-- Nav Start -->
  <div>
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
      <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <img class="navbar-brand" src="images/logo.png" height=5% width=5%>
        <a class="navbar-brand text-brand" href="index.php">Indian<span class="color-b">Railways</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
          <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
          <ul class="navbar-nav" id="topheader">
            <li class="nav-item">
              <a class="nav-link " href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bookings
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="booktkt.php">Book a Ticket</a>
                <a class="dropdown-item" href="tracktkt.php">Track your bookings</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="services_ac.php">AC Class</a>
                <a class="dropdown-item" href="services_exec.php">Executive Class</a>
                <a class="dropdown-item" href="services_unr.php">Unreserved Class</a>
                <a class="dropdown-item" href="services_sleeper.php">Sleeper Class</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="heritage.php">Heritage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <?php
              if (isset($_SESSION['id'])) {
                echo '<a class="btn btn-primary" href="logout.php">Logout</a>';
              } else
                echo '<a class="nav-link" href="register.php">Login</a>';
              ?>
            </li>
          </ul>
        </div>
        <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
          <span class="fa fa-search" aria-hidden="true"></span>
        </button>
      </div>
    </nav>
  </div>
  <!-- Nav End -->

  <div>
    <?php
    $id = $_SESSION["id"];
    $query = "SELECT * FROM tickets WHERE passenger_id='$id' ";
    $Execute = mysqli_query($Connection, $query);
    $DataRow = mysqli_fetch_all($Execute);
    if ($DataRow) {
      ?><div style="margin-top:10%; margin-bottom:-4%; ">
        <h3 style="color:#2D7CAF; margin-left:5%"> Bookings </h3>
        <?php

          echo "<table style='border: 1px solid black; margin-left:5%; width:90%; '>";
          echo "<tr>";
          echo "<th>Booking ID</th>";
          echo "<th style='width:8%;'>Class</th>";
          echo "<th style='width:8%;'>Quota</th>";
          echo "<th style='width:10%'>PNR</th>";
          echo "<th style='width:10%' >Delay</th>";
          echo "<th style='width:10%' >Source</th>";
          echo "<th style='width:10%' >Destination</th>";
          echo "<th style='width:10%' >Departure</th>";
          echo "<th style='width:20%' >Train name</th>";
          echo "<th style='width:15%' >Cancel ticket</th>";
          echo "</tr>";
          for ($i = 0; $i < sizeof($DataRow); $i++) {
            $train_id = $DataRow[$i][1];
            $train_query = "SELECT * from train_info where id='$train_id' limit 1";
            $exc = mysqli_query($Connection,$train_query);
            $data = mysqli_fetch_array($exc);
            echo "<tr>";
            echo "<td>" . $DataRow[$i][0] . "</td>";
            echo "<td>" . $DataRow[$i][3] . "</td>";
            echo "<td>" . $DataRow[$i][4] . "</td>";
            echo "<td>" . $DataRow[$i][5] . "</td>";
             if($data["delay"]) echo "<td>" .$data["delay"]. "</td>";
             else echo "<td>"."No delay"."</td>";
            echo "<td>" . $data['source'] . "</td>";
            echo "<td>" . $data['destination'] . "</td>";
            echo "<td>" . $data['departure'] . "</td>";
            echo "<td>" . $data['train_name'] . "</td>";
            echo "<td> <button id='myBtn' type='button' class='btn btn-primary'
             data-toggle='modal' data-target='#cancelModal'>Cancel now</button> </td>
            ";
            echo "</tr>";
          }
          echo "</table>";
          ?>
        <!-- ( [0] => Array ( [0] => 8 [1] => 2 [2] => 1 [3] => Executive [4] => Tatkal [5] => 55395499 ) 
            [1] => Array ( [0] => 9 [1] => 2 [2] => 1 [3] => Executive [4] => Tatkal [5] => 93637195 ) )
        -->
      </div><?php
            } else {
              ?>
      <canvas id="drawing" width="1000%" height="100%" style="margin-top:10%; margin-left:13%; margin-bottom:-4%">
        Your browser does not support the canvas element.
      </canvas>
      <script>
        var drawing = document.getElementById("drawing");
        var con = drawing.getContext("2d");
        con.lineWidth = "5";
        con.fillStyle = "#B3DAF3";
        con.fillRect(10, 10, 2000, 80);
        con.font = "17px Arial";
        con.fillStyle = "#2D7CAF";
        con.fillText("There are no upcoming bookings yet. Press the 'Book a ticket' button to make a booking.", 200, 57);
      </script>
    <?php
    }
    ?>
  </div>
   <!-- Modal -->
   <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Confirm</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="cancel.php" method="post">
                <div class="form-group">
                  <label  style="color: black;">Booking ID</label>
                  <input type="text" class="form-control" id="id" name="id" aria-describedby="name" 
                  placeholder="Enter your booking ID">
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Go back</button>
              <button type="submit" name="submit" class="btn btn-primary">cancel ticket</button>
            </div>
            </form>
          </div>
        </div>
      </div>
  </div>
  <?php include("footer.php"); ?>
</body>

</html>
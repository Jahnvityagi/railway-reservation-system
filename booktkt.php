<?php
session_start();

if (empty($_SESSION["id"])) {
  ?> <script LANGUAGE='JavaScript'>
    window.alert('Please Login to proceed.');
    window.location.href = 'register.php';
  </script>

<?php
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

  <link href="css/style.css" rel="stylesheet">
  <link href="css/bookings_style.css" rel="stylesheet">
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

  <div id="booking" class="section" style="position:relative; margin-top:4%">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-pull-7 ">
            <div class="booking-form ">
              <form>
                <div class="row ">
                  <div class="col-sm-6 ">
                    <div class="form-group">
                      <span class="form-label">From</span>
                      <input class="form-control" type="text" id="from" name="from" required>
                    </div>
                  </div>
                  <div class="col-sm-6 ">
                    <div class="form-group">
                      <span class="form-label">To</span>
                      <input class="form-control" type="text" id="to" name="to" required>
                    </div>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-sm-6 ">
                    <div class="form-group">
                      <span class="form-label">Class</span>
                      <select class="form-control" id="bclass" name="bclass">
                        <option>Executive</option>
                        <option>AC</option>
                        <option>Unreserved</option>
                        <option>Sleeper</option>
                      </select>
                      <span class="select-arrow "></span>
                    </div>
                  </div>
                  <div class="col-sm-6 ">
                    <div class="form-group ">
                      <span class="form-label ">Quota</span>
                      <select class="form-control" id="bquota" name="bquota">
                        <option>Tatkal</option>
                        <option>General</option>
                      </select>
                      <span class="select-arrow "></span>
                    </div>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-sm-3 ">
                    <div class="form-group">
                      <span class="form-label">Seats</span>
                      <input class="form-control" type="number" id="seats" name="seats" required>
                    </div>
                  </div>
                  <div class="col-sm-9 ">
                    <div class="form-group">
                      <span class="form-label">Date of Departure</span>
                      <input class="form-control" type="date" required>
                    </div>
                  </div>
                </div>
                <div class="form-btn ">
                  <button class="submit-btn" onclick="check(); return false;">Check availability</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-7 col-md-push-5 ">
            <div id="booktxt" class="booking-cta">
              <h1>Make your reservation Now</h1>
              <p>Book Trains in Advance and enjoy hassle-free travel.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function check() {
      var source = document.getElementById("from").value;
      var destination = document.getElementById("to").value;
      var quota = document.getElementById("bquota").value;
      var Class = document.getElementById("bclass").value;
      var seats = document.getElementById("seats").value;
      var dataString = source + '*' + destination + '*' + quota + '*' + Class + '*' + seats;
      if (source == '' || destination == '' || seats =='' ) {
        alert("Please Fill All Fields");
      } else {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("booktxt").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "book.php?q=" + dataString, true);
        xhttp.send();
      }
    } 
    function book(){
    var train_id = document.getElementById("train_id").value;
    var quota = document.getElementById("bquota").value;
    var Class = document.getElementById("bclass").value;
    var seats = document.getElementById("seats").value;
    var String = train_id +'*'+ quota +'*' +Class +'*' +seats;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("booktxt").innerHTML = this.responseText;
          }
        };
    xhttp.open("GET", "ticket.php?q=" +String, true);
    xhttp.send(); 
    }
  </script>

  <?php include("footer.php"); ?>
</body>

</html>
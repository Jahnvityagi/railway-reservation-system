<?php session_start(); ?>

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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bookings
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="booktkt.php">Book a Ticket</a>
                <a class="dropdown-item" href="tracktkt.php">Track your bookings</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
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
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Indian Railways services</h1>
            <span class="color-text-a">AC Class</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                AC Class services
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="images/ac3.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="images/ac2.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="images/ac1.jpg" alt="">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">$$$</span>
                  </div>

                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Class:</strong>
                      <span>AC</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Code:</strong>
                      <span>1A</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Rates:</strong>
                      <span>Expensive</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Total berths:</strong>
                      <span>18-24</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Tatkal:</strong>
                      <span>N</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Bedding:</strong>
                      <span>Y
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  First AC sleeper Class of the Indian Railways are the most expensive mode of travelling. These are fully AC coaches. It consists of 4 or 2 berths per compartment and there are no side upper or side lower berths in 1A coaches. Compartment having 2 berths are called coupe and ones with 4 berths are called cabin.
                </p>
                <p class="description color-text-a no-margin">

                  Each compartment has a door which passengers can lock from inside. Charges are rocket high for First AC, sometimes even more than those of flight ticket but is worth giving a try. The berths are more comfortable and spacious, there is a small ladder to reach upper berth, dustbins to throw garbage (thanks to Swachh Bharat Abhiyan) and there are small tables for every passenger to have meals.

                  For trains like Rajdhani and Duronto, food is served in cutlery plates and bowls and there is special menu for 1A passengers unlike in 2A and 3A coaches where food is loaded from IRCTC’s Kitchen setups at various places. Also in some trains there is a button in each First AC compartment to call attendant at any point of time.

                </p>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Amenities</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                  <li>2-berth</li>
                  <li>4-berth</li>
                  <li>Food</li>
                  <li>Doors with locks</li>
                  <li>Dustbins</li>
                  <li>Special menu</li>
                  <li>Washrooms with shower facilities</li>
                  <li>Blankets</li>
                  <li>FIre-proof curtains</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 offset-md-1">


          <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/HYkRR3-nm1U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

        </div>
      </div>
    </div>
  </section>


  <?php include("footer.php"); ?>
</body>

</html>
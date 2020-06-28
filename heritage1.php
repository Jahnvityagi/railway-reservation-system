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
              <a class="nav-link active" href="heritage.php">Heritage</a>
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
                        <h1 class="title-single">Our Heritage - National Rail Museum</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Heritage
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ About Star /-->
    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about-img-box">
                        <img src="images/nationalrail.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="sinse-box">
                        <h3 class="sinse-title">National Rail Museum
                            <span></span>
                            <br> Since 1977</h3>
                        <p>Delhi</p>
                    </div>
                </div>
                <div class="col-md-12 section-t8">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <img src="images/national.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-2  d-none d-lg-block">
                            <div class="title-vertical d-flex justify-content-start">
                                <span>Indian Railways Heritage</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 section-md-t3">
                            <div class="title-box-d">
                                <h3 class="title-d">National
                                    <span class="color-d">Rail</span> Museum
                                    <br> ,Delhi.</h3>
                            </div>
                            <p class="color-text-a">
                            The National Rail Museum in Chanakyapuri, New Delhi, displays exhibits on the history of rail transport in India. The museum was inaugurated on 1 February 1977, and spans over 10 acres. 
                            It is open every day except Mondays and national holidays.
                            </p>
                            <p class="color-text-a">
                            The National Rail Museum was first proposed in 1962, under the advisement of rail enthusiast 
                            Michael Graham Satow. Construction began in 1970 and on 7 October 1971 the foundation stone was laid at the 
                            museum's present site in Chanakyapuri, New Delhi, by the then-President of India V. V. Giri. 
                            The museum was inaugurated as the Rail Transport Museum in 1977 by Kamalapati Tripathi, the minister for public transportation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ About End /-->

    <?php include("footer.php") ?>

</body>

</html>
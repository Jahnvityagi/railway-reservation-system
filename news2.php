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
              <a class="nav-link active" href="index.php">Home</a>
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
            <h1 class="title-single">Proud Achievement for Indian Railways</h1>
            <span class="color-text-a">,says Piyush Goyal</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                News
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ News Single Star /-->
  <section class="news-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="news-img-box">
            <img src="images/news2.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
          <div class="post-information">
            <ul class="list-inline text-center color-a">
              <li class="list-inline-item mr-2">
                <strong>Author: </strong>
                <span class="color-text-a">Financial Express</span>
              </li>
              <li class="list-inline-item mr-2">
                <strong>Category: </strong>
                <span class="color-text-a">Proud</span>
              </li>
              <li class="list-inline-item">
                <strong>Date: </strong>
                <span class="color-text-a">23 Sep. 2019</span>
              </li>
            </ul>
          </div>
          <div class="post-content color-text-a">
            <p class="post-intro">
                Asserting Indian Railways' 'Make-in-India' approach, Railway Minister Piyush Goyal has recently said that India is "one amongst only 7 countries in the world which make their own train sets".
            </p>
            <p>
            Addressing a gathering, Goyal said India is becoming a global power. India has been able to make its own train sets, Goyal said adding that this became possible since the central government is working in “proactive mode as well as in a transparent fashion”.            </p>
            <blockquote class="blockquote">
              <p class="mb-4">Indian Railways has already started Vande Bharat Express from Delhi to Varanasi. During the Navratras, Indian Railways was hoping to start it from Delhi to Vaishno Devi, Katra too</p>
              <footer class="blockquote-footer">
                <strong>Piyush Goyal</strong>
                <cite title="Source Title">,Railway Minister</cite>
              </footer>
            </blockquote>
            <p>
                Vande Bharat Express is a semi-high speed engineless train set that has already generated export interest from various countries. Indian Railways is currently working on a plan to manufacture more energy-efficient versions of the Vande Bharat Express in both chair car and sleeper versions. According to the plans, by 2022, 40 such train sets will be ready for the Indian Railways network.
              </p>
          </div>
          <div class="post-footer">
            <div class="post-share">
              <span>Share: </span>
              <ul class="list-inline socials">
                <li class="list-inline-item">
                  <a href="www.facebook.com">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="www.twitter.com">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="www.instagram.com">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>    
    </div>
  </section>
  <!--/ News Single End /-->

  < <?php include("footer.php"); ?>

</body>
</html>

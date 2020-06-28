<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Indian Railways</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>


  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Train</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" id="form" name="form">
        <div class="row">
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Class">Class</label>
              <select class="form-control form-control-lg form-control-a" name="Class" id="Class">
                <option>Executive Class</option>
                <option>AC Class</option>
                <option>Unreserved Class</option>
                <option>Sleeper Class</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Quota">Quota</label>
              <select class="form-control form-control-lg form-control-a" id="quota" name="quota">
                <option>General Quota</option>
                <option>Tatkal Quota</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Source">Source Station</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Source Station" name="source" id="source">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Destination">Destination Station</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Destination Station" name="destination" id="destination">
            </div>
          </div>
          <div class="col-md-12" style="text-align:center">
            <button type="submit" name="submit" class="btn btn-b" onclick="search(); return false;">Search Train</button>
          </div>
          <div class="col-md-12">
            <div id="txtHint" style=" text-align: center; font-size: 1.1rem; font-weight: 300; margin-top : 4%;" >Train info will be listed here...</div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <script>
    function search() {
      var source = document.getElementById("source").value;
      var destination = document.getElementById("destination").value;
      var quota = document.getElementById("quota").value;
      var Class = document.getElementById("Class").value;
      var dataString = source + '*' + destination + '*' + quota + '*' + Class;
      if (source == '' || destination == '') {
        alert("Please Fill All Fields");
      } 
      else if(source == destination){
        alert("Source and Destination cannot be same.")
      }
      else {
        // AJAX code to submit form.
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "searchtrain.php?q=" + dataString, true);
        xhttp.send();
      }
    }
  </script>

</body>

</html>
<?php
include_once("database_connect_deep.php");
if (!$Connection) {
    echo "<script type='text/javascript'>alert('Database failed');</script>";
    die('Could not connect: ' . mysqli_connect_error());
}
$q = $_GET['q'];
$params = explode('*', $q);
$source = $params[0];
$dest = $params[1];
$train_check_query = "SELECT * FROM train_info WHERE source='$source' AND destination='$dest' ";
$Execute = mysqli_query($Connection, $train_check_query);
$DataRow = mysqli_fetch_all($Execute);
$farecol = 0;
$seatscol = 0;
if ($params[3] == "Executive") {
    $seatscol = 5;
    if ($params[2] == "Tatkal") {
        $farecol = 15;
    } else {
        $farecol = 16;
    }
} else if ($params[3] == "Unreserved") {
    $seatscol = 6;
    if ($params[2] == "Tatkal") {
        $farecol = 11;
    } else {
        $farecol = 12;
    }
} else if ($params[3] == "Sleeper") {
    $seatscol = 7;
    if ($params[2] == "Tatkal") {
        $farecol = 14;
    } else {
        $farecol = 13;
    }
} else if ($params[3] == "AC") {
    $seatscol = 8;
    if ($params[2] == "Tatkal") {
        $farecol = 9;
    } else {
        $farecol = 10;
    }
}

echo

    "
<div id='bookingresult'>
<div class='section-center'>
<div class='container'>
    <div class='row'>
    <div class='col-md-12 '>
        <div class='booking-form'>";

if (sizeof($DataRow) == 0)
    echo "
        <h2>No trains are available.</h2>
        </div>  </div>  </div>  </div>  </div>  </div> 
         ";
else {

    echo
        "
            <h5><i> Following Trains are available: </i>  </h5>      
            <table style='  border: 1px solid black;      '>";
    echo "<tr>";
    echo "<th>Train ID</th>";
    echo "<th>Train Name</th>";
    echo "<th>Departure</th>";
    echo "<th>Seats</th>";
    echo "<th>Fare</th>";
    echo "</tr>";
    for ($i = 0; $i < sizeof($DataRow); $i++) {
        echo "<tr>";
        echo "<td>" . $DataRow[$i][0] . "</td>";
        echo "<td>" . $DataRow[$i][1] . "</td>";
        echo "<td>" . $DataRow[$i][2] . "</td>";
        echo "<td>" . $DataRow[$i][$seatscol] . "</td>";
        echo "<td>" . $DataRow[$i][$farecol] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "
    <form style='margin-top:2%'>
    <div class='row '>
      <div class='col-sm-6 '>
        <div class='form-group'>
          <span class='form-label'>Enter Train ID:</span>
          <input class='form-control' type='number' id='train_id' name='train_id' >
        </div>
      </div>
      <div class='col-sm-6 '>
        <div class='form-group'>
        <span class='form-label'>Enter Transaction ID:</span>
        <input class='form-control' type='number' id='trans_id' name='trans_id' >
        </div>
      </div>
     </div> 
    <div class='form-btn' >
      <button class='submit-btn' onclick='book(); return false;'>Book Now</button>
    </div>
  </form>
    ";
    echo "</div>

                </div>
                </div>
            </div>
            </div>
        </div>
    ";
}
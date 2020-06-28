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
if ($params[3] == "Executive Class") {
    $seatscol = 5;
    if ($params[2] == "Tatkal Quota") {
        $farecol = 15;
    } else {
        $farecol = 16;
    }
} else if ($params[3] == "Unreserved Class") {
    $seatscol = 6;
    if ($params[2] == "Tatkal Quota") {
        $farecol = 11;
    } else {
        $farecol = 12;
    }
} else if ($params[3] == "Sleeper Class") {
    $seatscol = 7;
    if ($params[2] == "Tatkal Quota") {
        $farecol = 14;
    } else {
        $farecol = 13;
    }
} else if ($params[3] == "AC Class") {
    $seatscol = 8;
    if ($params[2] == "Tatkal Quota") {
        $farecol = 9;
    } else {
        $farecol = 10;
    }
}
if (sizeof($DataRow) == 0)
    echo "No Trains Available";
else {
    echo "<table style='  border: 1px solid black;      '>";
    echo "<tr>";
    echo "<th>Train Name</th>";
    echo "<th>Departure</th>";
    echo "<th>Seats</th>";
    echo "<th>Fare</th>";
    echo "</tr>";
    for ($i = 0; $i < sizeof($DataRow); $i++) {
        echo "<tr>";
        echo "<td>" . $DataRow[$i][1] . "</td>";
        echo "<td>" . $DataRow[$i][2] . "</td>";
        echo "<td>" . $DataRow[$i][$seatscol] . "</td>";
        echo "<td>" . $DataRow[$i][$farecol] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
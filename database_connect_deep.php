<?php

$servername = "localhost";
$username = "id11782941_root";
$password = "railway-root";
$database = "id11782941_railway_reservation";

// Create connection
$Connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$Connection) {
    die("DB Connection failed: " . mysqli_connect_error());
}

?>
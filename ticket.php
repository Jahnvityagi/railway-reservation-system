<?php
session_start();
include_once("database_connect_deep.php");
if (!$Connection) {
    echo "<script type='text/javascript'>alert('Database failed');</script>";
    die('Could not connect: ' . mysqli_connect_error());
}
$p_id = $_SESSION['id'];
$q = $_GET['q'];
$params = explode('*', $q);
$train_id = $params[0];
$Class = $params[2];
$Quota = $params[1];
$seats = intval($params[3]);
$train_check_query = "SELECT * FROM train_info WHERE id='$train_id' ";
$Execute = mysqli_query($Connection, $train_check_query);
$DataRow = mysqli_fetch_array($Execute);
echo "
<div id='bookingresult'>
<div class='section-center'>
<div class='container'>
    <div class='row'>
    <div class='col-md-12 '>
        <div class='booking-form'>";
        
if ($DataRow) {
    if($seats <0)
        {
            echo "<h2>Seats cannot be negative.</h2>";
        }
    else{
        $pnr=array();
        for ($x = 1; $x <= $seats; $x++) {
            $pnrl = rand(100,100000000);
            array_push($pnr, $pnrl);
            $Query = "INSERT INTO tickets(train_id, passenger_id, class,quota,pnr) VALUES('$train_id', '$p_id', '$Class', '$Quota', '$pnrl')";
            $Execute = mysqli_query($Connection, $Query);
            if(!$Execute)
            {
                echo "<script type='text/javascript'>alert('Database failed');</script>";
                die('Could not connect: ' . mysqli_connect_error());
            }
        }
        echo "<h5>Congratulations! Your ticket(s) have been booked. The PNR(s) are as follows:<br></h5>";
        echo "<h5><i>";
        for ($x = 0; $x < $seats; $x++) {
            echo $pnr[$x];
            echo "<br>";
        }
        echo "</h5><i>";
        $query = "select * from passenger where id='$p_id'";
        $exc = mysqli_query($Connection,$query);
        $data = mysqli_fetch_array($exc);
        $email= $data['email'];
        $subject = "Booking successful!";
        $message = " Hi! You have successfully booked ticket(s) with our railways. Thank you for using our services!";
            
        $mail=mail($email, $subject, $message, "From:jahnvi@railway-reservation.tk");
        
        if (!$mail)
        {
        echo"Message not sent this time";
        }
    }
 } else {
    echo "<h2>No train with given ID is available.</h2>";
 }


 ?>

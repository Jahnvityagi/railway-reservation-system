<?php
include_once("database_connect_deep.php");
if(!$Connection){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
      die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST["submit"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $fname = $_POST["first_name"];
        $lname = $_POST["last_name"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $city = $_POST["city"];
        $phone = $_POST["phone"];
        $user_check_query = "SELECT * FROM passenger WHERE email='$email'LIMIT 1";
        $result = mysqli_query($Connection, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            ?>
            <script LANGUAGE='JavaScript'>
                window.alert('An account with this email alreday exists');
                window.location.href = 'register.php';
            </script>

            <?php
                    } else {
                        $Query = "INSERT INTO passenger(first_name, last_name, email, phone, password, age, city, gender) VALUES('$fname', '$lname', '$email', '$phone', '$password', '$age', '$city', '$gender')";
                        $Execute = mysqli_query($Connection, $Query);
                        if ($Execute) { 
                        $subject = "Welcome!";
                        $message = " Hi! Welcome to Railway Reservation System. You have successfully created an account with us. Thank you!";
                            
                        $mail=mail($email, $subject, $message, "From:jahnvi@railway-reservation.tk");
                        
                        if (!$mail)
                        {
                        echo"Message not sent this time";
                        }?>
               <script LANGUAGE='JavaScript'>
                     window.alert('Account created successfully. Please login to continue.');
                     window.location.href='index.php';
                     </script>
        <?php
                    } else {
                        echo ("not successful");
                    }
                }
            } else {
                ?>
            <script LANGUAGE='JavaScript'>
                     window.alert('You did not enter all fields.');
                     window.location.href='register.php';
                     </script>
<?php
    }
}
?>
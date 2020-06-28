<?php
include_once("database_connect_deep.php");
if (!$Connection) {
    echo "<script type='text/javascript'>alert('Database failed');</script>";
    die('Could not connect: ' . mysqli_connect_error());
}
if (isset($_POST["submit"])) {
    session_start();
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = $_POST["email"];
        $Password = $_POST["password"];
        $user_check_query = "SELECT id FROM passenger WHERE email='$email' AND password='$Password' LIMIT 1";
        $Execute = mysqli_query($Connection, $user_check_query);
        $id = 0;
        $DataRow = mysqli_fetch_array($Execute);
        if ($DataRow) {
            $id = $DataRow['id'];
            $_SESSION["id"] = $id;
            ?>
<script LANGUAGE='JavaScript'>
    window.alert('Logged in successfully.');
    window.location.href = 'index.php';
</script>
<?php
        } else {
            ?>
<script LANGUAGE='JavaScript'>
    window.alert('Incorrect credentials.');
    window.location.href = 'register.php';
</script>
<?php
    }
}
 else {
?>
<script LANGUAGE='JavaScript'>
window.alert('You did not enter all fields.');
window.location.href = 'register.php';
</script>
<?php
    }
}
?>
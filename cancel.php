<?php
include_once("database_connect_deep.php");
if (!$Connection) {
    echo "<script type='text/javascript'>alert('Database failed');</script>";
    die('Could not connect: ' . mysqli_connect_error());
}
if (isset($_POST["submit"])) {
    if (!empty($_POST["id"])) {
        $b_id = $_POST["id"];
        $query = "delete from tickets where ticket_id='$b_id'";
        $Execute = mysqli_query($Connection, $query);

        if ($Execute) {

            ?>
            <script LANGUAGE='JavaScript'>
                window.alert('Cancelled successfully.');
                window.location.href = 'tracktkt.php';
            </script>
        <?php
                } else {
                    ?>
            <script LANGUAGE='JavaScript'>
                window.alert('Could not cancel.');
                // window.location.href = 'tracktkt.php';
            </script>
        <?php
                }
            } else {
                ?>
        <script LANGUAGE='JavaScript'>
            window.alert('You did not enter all fields.');
            window.location.href = 'register.php';
        </script>
<?php
    }
}
?>

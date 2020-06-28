<?php
session_start();
session_destroy();
?>

<script LANGUAGE='JavaScript'>
    window.alert('You have logged out successfully.');
    window.location.href = 'index.php';
</script>
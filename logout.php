<?php
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    session_destroy();
    header("location:index.php?logout=true");
?>

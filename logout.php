<?php
    echo ' halooo';
    session_start();
    unset($_SESSION["ROLE"]);
    session_destroy();
    header('location:login.php');
    exit();
?>
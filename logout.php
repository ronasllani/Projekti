<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['role']);
    header('Location: login.php');
    $_SESSION['success'] = "Logged Out Successfully!";
    die;
?>


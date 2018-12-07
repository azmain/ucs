<?php
session_start();
unset($_SESSION['username']);
$_SESSION['status'] = "Idle";
// destroy session
session_destroy();

header("location: home.php");

?>
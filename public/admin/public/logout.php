<?php
session_start();
unset($_SESSION['username']);
$_SESSION['status']="Idle"
session_destroy();

header("location: home.php");

?>
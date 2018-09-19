<?php 

$servername = "localhost";
$dbname = "extra";
$username ="root";
$password = "admin";

$con = mysqli_connect($servername , $username , $password , $dbname);

//$con = mysqli_connect("localhost", "root") or $con = mysql_connect("localhost", "root", "");


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

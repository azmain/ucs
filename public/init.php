<?php 

$servername = "localhost";
$dbname = "extra";
$username ="root";
$password = "ashrafnmd";

//$con = mysql_connect($servername , $username , $password,$dbname);

$con = mysqli_connect("localhost", "root") or $conn = mysql_connect("localhost", "root", "");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

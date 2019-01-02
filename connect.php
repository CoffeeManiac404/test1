<?php
$host = "localhost";
$id = "root";
$pass= "";
$db = "carwash";

$conn = mysqli_connect($host,$id,$pass);
	if (!$conn) die("Connection for user $db_user refused!");
	mysqli_select_db($conn,$db) or die("Can not connect to database!");
?>

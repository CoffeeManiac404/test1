<?php
include("connect.php");
$sql2 = mysqli_query($conn, "SELECT nopol FROM cuci where status = 'SELESAI' ORDER BY id DESC LIMIT 1");	
$result = array();

while($row2 = mysqli_fetch_array($sql2)){
	array_push($result, array('nopoltampil' => $row2[0]));
}

echo json_encode(array("result2" => $result));
?>
<?php
include("connect.php");
$sql = mysqli_query($conn, "SELECT nopol,jenken,nama,status FROM cuci ORDER BY id DESC LIMIT 6");
$result = array();

while($row = mysqli_fetch_array($sql)){
	array_push($result, array('nopol' => $row[0], 'jenken' => $row[1], 'nama' => $row[2], 'status' => $row[3]));
}

echo json_encode(array("result" => $result));
?>
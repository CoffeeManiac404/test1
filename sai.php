<?php 
include('connect.php');

$id = $_GET['sai'];

$upd2 =  mysqli_query($conn, "UPDATE `cuci` SET `status`='SELESAI' WHERE id = '$id' ");
if($upd2)
{
  echo"<script language='javascript'>window.alert('Berhasil');
            window.location='admin.php'</script>";
}
else {
  echo"<script language='javascript'>window.alert('GAGAL');
            window.location='admin.php'</script>";
}

 ?>
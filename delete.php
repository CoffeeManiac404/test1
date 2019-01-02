<?php
include('connect.php');
$dell = $_GET['del'];

$delet = mysqli_query($conn, "DELETE FROM cuci where id = '$dell'");
if ($delet)
{
	    echo"
      <script language='javascript'>
        window.alert('Berhasil');
        window.location='admin.php';
      </script>
    ";	
}
else
{
		    echo"
      <script language='javascript'>
        window.alert('Gagal');
        window.location='admin.php';
      </script>";

}

?>
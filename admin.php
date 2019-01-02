<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <link href="aset/css/bootstrap.min.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
<link href="aset/css/font-awesome.min.css" rel="stylesheet" />

    <link href="aset/tab/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="aset/tab/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="aset/tab/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="aset/tab/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="aset/tab/scroller.bootstrap.min.css" rel="stylesheet">

  <link href="aset/tab/custom.min.css" rel="stylesheet">

    <link rel="stylesheet" href="aset/css/style.css" />
    <link rel="stylesheet" href="aset/css/styles.css" />
    <link rel="stylesheet" href="aset/css/hover.css" />
    <link rel="stylesheet" href="aset/css/button.css" />
    <link rel="stylesheet" href="aset/css/font-awesome.css" />

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>    

</head>
<body>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data</h4>
        </div>
        <div class="modal-body">     
 <form action="" method="post">  
  
  <div class="form-group">
    <label for="nopol">Nomer Polisi : </label>
    <input type="text" name="nopol" class="form-control" id="nopol">
  </div>

   <div class="form-group">
  <label for="Jenis">Jenis Kendaraan:</label>
  <select class="form-control" name="jenis" id="sel1">
    <option>Mobil</option>
    <option>Motor</option>
    <option>Lainnya</option>
  </select>
</div>

<div class="form-group">
    <label for="nama">Nama Kendaraan : </label>
    <input type="text" class="form-control" name="nama" id="nopol">
  </div>
  <div class="form-group">
  <label for="sel1">Status:</label>
  <select class="form-control" id="sel1" name="status">
    <option>PROSES</option>
    <option>SELESAI</option>
  </select>
</div>
  </div>
        <div class="modal-footer">
          <input type="submit" name="kirim" class="btn btn-primary" value="Submit">
        </div>
      </div>
      </form>
    </div>
  </div>


<center>
<br>

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">+ ADD</button>

  <!-- Modal --> 
</div>

  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" style="width: 80%; font-size: 24px;">
    <thead>
    <th>Nomer Polisi</th>
    <th>Jenis</th>
    <th>Nama</th>
    <th>Status</th>
    <th>
      Opsi
    </th>
    </thead>
    <tbody>
  <?php
  include('connect.php');
  $tab = mysqli_query($conn, "SELECT * FROM cuci  ORDER BY id DESC limit 6");
  while ($tb = mysqli_fetch_array($tab))
  {
    echo "
        <tr>
      <td>$tb[1]</td>
      <td>$tb[2]</td>
      <td>$tb[3]</td>
      <td>$tb[5]</td>
      <td style='width:250px;'>
      <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal$tb[0]'>Edit</button>

      <div class='modal fade' id='myModal$tb[0]' role='dialog'>
    <div class='modal-dialog'>
    
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Edit Data</h4>
        </div>
        <div class='modal-body'>     

 <form action='' method='post'>  
  <div class='form-group'>
    <label for='nopol'>Nomer Polisi : </label>
    <input type='text' value='$tb[1]' name='nopol' class='form-control' id='nopol'>
  </div>

   <div class='form-group'>
  <label for='Jenis'>Jenis Kendaraan:</label>
  <select class='form-control' name='jenis' id='sel1'> ";

  switch ($tb[2]) {
    case 'Mobil':
          
                echo "
    <option value='Mobil' selected>Mobil</option>
    <option value='Motor'>Motor</option>
    <option value='Lainnya'>Lainnya</option>
    ";

      break;

    case 'Motor':
      # code...
    echo "
    <option value='Mobil'>Mobil</option>
    <option value='Motor' selected>Motor</option>
    <option value='Lainnya'>Lainnya</option>
    ";
      break;
    
    default:
      echo "
    <option value='Mobil'>Mobil</option>
    <option value='Motor'>Motor</option>
    <option value='Lainnya' selected>Lainnya</option>
    ";
      break;
  }
  echo "
  </select>
</div>
<div class='form-group'> 
    <label for='nama'>Nama Kendaraan : </label>
    <input type='text' class='form-control' value='$tb[3]' name='nama' id='nopol'>
  </div>
  <div class='form-group'>
  <label for='sel1'>Status:</label>
  <select class='form-control' id='sel1' name='status'>";

  if ($tb[5] == 'PROSES') {
    echo "
        <option value='PROSES' selected>PROSES</option>
    <option value='SELESAI'>SELESAI</option>
    ";
  }
  else
  {
    echo "
        <option value='PROSES'>PROSES</option>
    <option value='SELESAI' selected>SELESAI</option>
    ";
  }
  echo "
  </select>
</div>
  </div>
        <div class='modal-footer'>
          <button type='submit' name='update' class='btn btn-primary' value='$tb[0]'>Kirim</button>
        </div>
      </div>
      </form>
    </div>
  </div>

      <a href='delete.php?del=$tb[0]'><input type='button' class='btn btn-danger' value='Delete' name=''/></a>
    ";

    if ($tb['status'] == 'SELESAI') 
    {
      echo "<a href='sai.php?sai=$tb[0]'><input type='button' class='btn btn-basic' value='SELESAI' name='' disabled></a>
      </td>
      </tr>";
    }
    else
    {
      echo "<a href='sai.php?sai=$tb[0]'><input type='button' class='btn btn-success' value='SELESAI' name=''/></a>
      </td>
      </tr>";
    }
  }
   ?>
  </tbody>
                     </table>
</center>

<?php
include('connect.php');

if (isset($_POST['kirim'])) {

  $nopol = $_POST['nopol'];
  $jenis = $_POST['jenis'];
  $nama = $_POST['nama'];
  $status =  $_POST['status'];
  $tanggal = date("Y-m-d");


$masuk = mysqli_query($conn, "INSERT INTO `cuci`(`nopol`, `jenken`, `nama`,`tanggal`,`status`) VALUES('$nopol','$jenis','$nama','$tanggal','$status')");
  if ($masuk) {
    echo"
      <script language='javascript'>
        window.alert('Berhasi');
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
      </script>
    "; 
  }

}

if (isset($_POST['update'])) 
{
  $id = $_POST['update'];
  $nopol = $_POST['nopol'];
  $jenis = $_POST['jenis'];
  $nama = $_POST['nama'];
  $status =  $_POST['status'];
  $tanggal = date("Y-m-d");

$upd2 =  mysqli_query($conn, "UPDATE `cuci` SET nopol = '$nopol', jenken = '$jenis', nama = '$nama', tanggal = '$tanggal', status ='$status' WHERE id = '$id'");
if($upd2)
{
  echo"<script language='javascript'>window.alert('Berhasil');
            window.location='admin.php'</script>";
}
else {
  echo"<script language='javascript'>window.alert('GAGAL $id');
            window.location='admin.php'</script>";
}
}

?>


</body>
</html>
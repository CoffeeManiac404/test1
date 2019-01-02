<!DOCTYPE html>
<html>
<head>
  <title>Car Wash</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <style>
  	html,body 
  	{

  background: url(img/back.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
  font-family: bebas;
	}
  .footer {
    position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
}

/* Container holding the image and the text */
.container {
    position: relative;
    text-align: center;
    color: black;
}

/* Bottom left text */
.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

/* Top left text */
.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}

/* Top right text */
.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
}

/* Bottom right text */
.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

/* Centered text */
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
  </style>
</head>
<body><center><br>
<img src="img/list.png" style="width: 20%; position: center;">
<br><br>
<table border="1" style="width: 98%; font-size: 24px;" class="table">
<thead>	
<tr style="background-color: rgb(127,127,127);">	
<th>Nomer Polisi</th>
<th>Jenis</th>
<th>Nama</th>
<th>Status</th>
</tr>
</thead>
<tbody id="susu">	
</tbody>
</table>
<div class="container" style="position: fixed; bottom: 100px; right: 90px">
  <img src="img/plat2.png" style="width: 400px;">
  <div class="bottom-left"></div>
  <div class="top-left"></div>
  <div class="top-right"></div>
  <div class="bottom-right"></div>
  <div class="centered" style="top: 30px;" id="kocak"></div><br>
</div>

<div class="container" style="position: fixed; bottom: 40px; right: 95px">
  <div class="centered"><img src="img/logo.png" style="width:40%;"></div><br>
  </div>

</center>
    <script type="text/javascript" src="tampil.js"></script>
</body>
</html>
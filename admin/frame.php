<?php 
ob_start();
error_reporting(0);
session_start();
$waktu=time()+60;
$expired=2000;
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	if($waktu < $_SESSION['timeout']){
		unset($_SESSION['timeout']);
		$_SESSION['timeout']=$waktu+$expired;
		}else{
			
		include"logout.php";
			
		}
include"../appConfig/conn.php";
include"../appConfig/region.php";
include"../appConfig/timeZone.php";
include"../appConfig/libb.php";
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Paragon Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />


<link rel="stylesheet" href="css/jquery-ui.min.css" />

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link rel="stylesheet" href="jees/plugin/jquery-ui/jquery-ui.min.css" /> 

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>

 
</head>
<body>

<!--Header-part-->
<div id="header">
<img  width="200px" src="img/paragon.png" alt="Logo" />
</div>

<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
   <?php include"nav.php";?>
  </ul>
</div>



<div id="sidebar"><a href="?load=dashboard" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <?php include"sidebar.php"; ?>
  </ul>
</div>

<div id="content">
<?php

if(isset($_SESSION['username']) AND isset ($_SESSION['password'])){
	$cekLoad = $_GET['load'];

	switch ($cekLoad) {
		case "dashboard": 	include "dashboard.php"; 			 	break;
		case "jadwal"	: 	include "data/jadwal/jadwal.php"; 	 	break;
		case "pengguna"	: 	include "data/pengguna/pengguna.php"; 	break;
		case "lapangan"	: 	include "data/lapangan/lapangan.php"; 	break;
		case "member"	: 	include "data/member/member.php"; 		break;
		case "boking"	: 	include "data/boking/boking.php"; 		break;
		case "laporan"	: 	include "data/laporan/laporan.php"; 	break;
	}

}else{

	 echo "<script type='text/javascript'>
	window.alert('Maaf, Anda Tidak Dapat Mengakses Halaman Ini, Silahkan Login Terlebih Dahulu'); 
	window.location =('index.php')</script>";
}

?>
</div>

<div class="row-fluid">
  <div id="footer" class="span12"> 2020 &copy; PARAGON FUTSAL YOGYAKARTA  </div>
</div>
<script src="js/jquery.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 
<script src="jees/plugin/jquery-ui/jquery-ui.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
$(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"notif/fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-menu').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();
// submit form and get new records
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"notif/insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
// load new notifications
$(document).on('click', '.dropdown-toggle', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});
</script>




</body>
</html>
<?php
}else{
	echo"
	<script type='text/javascript' language='javascript'>
	window.alert('Maaf Untuk Masuk ke Halaman ini Anda harus Login Terlebih Dahulu');
	window.location=('index.php');
	";
}
?>
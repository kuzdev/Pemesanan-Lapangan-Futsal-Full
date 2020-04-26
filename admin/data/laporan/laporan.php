<?php 
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	$loadModule="data/laporan/proses.php";
	switch($_GET[action]){
		default:
		include"view.php";
		break;
		
		case"informasi":
		include"isi-informasi.php";
		break;
		
		case"print":
		include"print.php";
		break;
		}
	
	}else{
		echo"
		<script language='javascript'>
		window.alert('Anda Tidak Dapat Mengakses laman ini');
		window.location=('frame.php?load=laporan')
		</script>
		";
		}

?>
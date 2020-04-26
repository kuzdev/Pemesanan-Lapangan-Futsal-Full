<?php

if(isset($_SESSION['username']) AND isset ($_SESSION['password'])){
	if($_GET['load']=="dashboard"){
		include"dashboard.php";
	}elseif($_GET['load']=="jadwal"){
		include"data/jadwal/jadwal.php";
	}elseif($_GET['load']=="lapangan"){
		include"data/lapangan/lapangan.php";
	}elseif($_GET['load']=="member"){
		include"data/member/member.php";
	}elseif($_GET['load']=="boking"){
		include"data/boking/boking.php";
	}elseif($_GET['load']=="pengguna"){
		include"data/pengguna/pengguna.php";
	}elseif($_GET['load']=="laporan"){
		include"data/laporan/laporan.php";
	}



}else{

	 echo "<script type='text/javascript'>
	window.alert('Maaf, Anda Tidak Dapat Mengakses Halaman Ini, Silahkan Login Terlebih Dahulu'); 
	window.location =('index.php')</script>";
}

?>
<?php

if($_GET['p']=="home"){
	include"home.php";

}elseif($_GET['p']=="profil"){
	include"profil.php";
	}elseif($_GET['p']=="info-lapangan"){
	include"info-lapangan.php";
	}elseif($_GET['p']=="cara-boking"){
	include"cara-boking.php";
	}elseif($_GET['p']=="tampil-jadwal"){
	include"data-jadwal.php";
	}elseif($_GET['p']=="keranjang-boking"){
	include"keranjang-boking.php";
	}elseif($_GET['p']=="rincian-data-boking"){
	include"rincian-data-boking.php";
	}elseif($_GET['p']=="rincian-transaksi"){
	include"rincian-transaksi.php";
	}elseif($_GET['p']=="tampil-invoice"){
	include"data-invoice.php";
	}elseif($_GET['p']=="cetak-invoice"){
	include"cetak-transaksi.php";
	}elseif($_GET['p']=="tampil-history-boking"){
	include"history-boking.php";
	}

?>
<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
$p=$_GET['p'];
$action=$_GET['action'];
include"appConfig/conn.php";

if($p=="boking" AND $action=="tambah-boking"){
	
	$validasi = mysql_query("SELECT * FROM tboking_temp WHERE idSession='$_SESSION[username]'");
	$ketemu=mysql_num_rows($validasi);
	if($ketemu > 0){
		echo"
		<script language='javascript'>
	window.alert('Maaf, Anda Hanya Dapat Melakukan 1 Kali Boking Lapangan ');
	window.location=('paragon.php?p=keranjang-boking')
	</script>
		
		";
				
		}else{
			
				$jadwal=mysql_query("SELECT * FROM tjadwal,tlapangan,tjam WHERE
						 tjadwal.kdLapangan=tlapangan.kdLapangan AND
						 tjadwal.kdJam=tjam.kdJam AND tjadwal.kdJadwal='$_GET[id]'")or die(mysql_error());
							$_data=mysql_fetch_array($jadwal);
							$subtotal=$_data['harga'] *1;
	$SQL="INSERT INTO tboking_temp (kdJadwal,nomorLapangan,tglBokingTemp,
									jamBokingTemp,hargaTemp,subTotalTemp,idSession)
		VALUES('$_data[kdJadwal]','$_data[noLapangan]','$_data[tglJadwal]','$_data[jam]','$_data[harga]',
		'$subtotal','$_SESSION[username]')";
	mysql_query($SQL) or die(mysql_error());
	
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('paragon.php?p=keranjang-boking')
	</script>
	";
			
			
			}
	
	
	
	}elseif($p=="boking" AND $action=="hapusData"){
		mysql_query("DELETE FROM tboking_temp WHERE idSession='$_SESSION[username]'");
		echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('index.php')
	</script>
	";
		
	}elseif($p=="boking" AND $action=="selesai-boking"){
$cekkeranjang = mysql_num_rows(mysql_query("SELECT * FROM tboking_temp WHERE idSession='$_SESSION[username]'"));
if ($cekkeranjang == 0){
	echo "<script>window.alert('Maaf Transaksi Tidak Dapat Di Proses !!!');
        window.location=('index.php')</script>";  
}else{
function isi_keranjang(){
	$isikeranjang = array();
	$sid = $_SESSION["username"];
	$sql = mysql_query("SELECT * FROM tboking_temp WHERE idSession='$sid'");
	
	
	while ($r=mysql_fetch_array($sql)) {
		$isikeranjang[] = $r;
	}
	return $isikeranjang;
}
$tahun=date("Y");
$tgl_skrg = date("Ymd");

$query=mysql_query("SELECT MAX(noInvoice) As nomorOrder FROM tboking");
							$kode=mysql_fetch_array($query);
							$kodeJadi=$kode["nomorOrder"];
							$noOrder=(int)substr($kodeJadi,4,6);
							$noOrder++;
							$char = "INV-";
							$newID = $char . sprintf("%06s", $noOrder);
$lunas="B";
$tot=mysql_query("SELECT SUM(subTotalTemp) AS total FROM tboking_temp WHERE idSession='$_SESSION[username]'");
$t=mysql_fetch_array($tot);

mysql_query("INSERT INTO tboking(noInvoice,tglInvoice,usernameBoking,an,alamat,kontak,totalBayar,statusBayar)
			VALUES ('$newID',$tgl_skrg,'$_SESSION[username]','$_POST[nmLengkap]',
					'$_POST[txtAlamat]','$_POST[kontak]','$t[total]','$lunas')");
  
$id_orders=mysql_insert_id();
$isikeranjang = isi_keranjang();
$jml          = count($isikeranjang);

for ($i = 0; $i < $jml; $i++){
  mysql_query("INSERT INTO trincian_boking(kdBoking,kdJadwal,noLapangan,tglBoking,jamBoking,hargaBoking,subTotal) 
               VALUES('$id_orders','{$isikeranjang[$i]['kdJadwal']}','{$isikeranjang[$i]['nomorLapangan']}', '{$isikeranjang[$i]['tglBokingTemp']}','{$isikeranjang[$i]['jamBokingTemp']}','{$isikeranjang[$i]['hargaTemp']}',
'{$isikeranjang[$i]['subTotalTemp']}')") or die(mysql_error());

mysql_query("UPDATE tjadwal SET statusBoking='B' WHERE kdJadwal='{$isikeranjang[$i]['kdJadwal']}'");
}

  mysql_query("DELETE FROM tboking_temp
	  	         WHERE idSession = '$_SESSION[username]'");
 
header('location:paragon.php?p=rincian-transaksi&id='.$newID); 

}
		
		}
	
	
	}else{
		echo"
	<script language='javascript'>
	window.alert('Anda Tidak Dapat Melakukan Pembokingan Online, Silahkan Daftar atau Login Terlebih Dahulu');
	window.location=('paragon.php?p=home')
	</script>
	";
		}


?>
<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	

	$loadPage= $_GET['load'];
	$action =$_GET['action'];
	
	if($loadPage=="boking" AND $action=="tambahItem"){
	
	$item=mysql_query("SELECT * FROM tjadwal,tlapangan,tjam WHERE tjadwal.kdLapangan=tlapangan.kdLapangan 
						   AND tjadwal.kdJam=tjam.kdJam AND tjadwal.kdJadwal='$_GET[id]'");
	$_data=mysql_fetch_array($item);
	
	//ini bagian tboking temp yang isinya tabel buat nampung jadwal
	$SQL=mysql_query("SELECT * FROM tboking_temp WHERE jamBokingTemp='$_data[jam]'");
	$ketemu=mysql_num_rows($SQL);
	if($ketemu > 0){
		echo"
   <script language='javascript'>
	window.alert('Jam Sudah Diboking');
	window.location=('../../frame.php?load=boking&action=input')
	</script>
		";
	}else{
	$subtotal = $_data['harga'] *1;
		 
	$SQL="INSERT INTO tboking_temp (kdJadwal,nomorLapangan,tglBokingTemp,jamBokingTemp,hargaTemp,subTotalTemp,idSession) 
	VALUES ('$_data[kdJadwal]','$_data[noLapangan]','$_data[tglJadwal]','$_data[jam]','$_data[harga]','$subtotal','$_SESSION[username]')";
	mysql_query($SQL) or die (mysql_error());
    echo"
   <script language='javascript'>
	window.alert('Jam Boking Berhasil Ditambah');
	window.location=('../../frame.php?load=boking&action=input')
	</script>
		";
	}
	}elseif($loadPage=="boking" AND $action=="hapusData"){
		
		mysql_query("DELETE FROM tboking WHERE kdboking=$_GET[id]")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?load=boking')
	</script>
	";
		
		
		
	}elseif($loadPage=="boking" AND $action=="ubahStatus"){
		mysql_query("UPDATE tboking SET statusBayar='$_POST[rbStatus]' WHERE kdBoking='$_POST[id]'");
	echo"
	<script language='javascript'>
	window.alert('Status Transaksi Berhasil Dirubah');
	window.location=('../../frame.php?load=boking')
	</script>
	";
		
	
	}elseif($loadPage=="boking" AND $action=="selesai-boking"){
	$cekkeranjang = mysql_num_rows(mysql_query("SELECT * FROM tboking WHERE idSession='$_SESSION[username]'"));
if ($cekkeranjang == 0){
	echo "<script>window.alert('Maaf Transaksi Tidak Dapat Di Proses !!!');
        window.location=('../../frame.php?load=boking')</script>";  
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
							$noOrder=(int)substr($kodeJadi,3,3);
							$noOrder++;
							$char = "INV";
							$newID = $char . sprintf("%03s", $noOrder);
$lunas="B";
$tot=mysql_query("SELECT SUM(subTotalTemp) AS totalBayar FROM tboking_temp WHERE idSession='$_SESSION[username]'");
$r=mysql_fetch_array($tot);


mysql_query("INSERT INTO tboking (noInvoice,tglInvoice,usernameBoking,an,alamat,kontak,totalBayar,statusBayar)
			 VALUES('$newID','$tgl_skrg','$_SESSION[username]',
			'$_POST[txtNmLengkap]','$_POST[txtAlamat]',
			 		'$_POST[txtKontak]','$r[totalBayar]','$lunas')") or die(mysql_error());

  
$id_orders=mysql_insert_id();
$isikeranjang = isi_keranjang();
$jml          = count($isikeranjang);

for ($i = 0; $i < $jml; $i++){
  mysql_query("INSERT INTO trincian_boking(kdBoking,noLapangan,kdJadwal,hargaBoking,jamBoking,tglBoking,subTotal) 
               VALUES('$id_orders','{$isikeranjang[$i]['nomorLapangan']}','{$isikeranjang[$i]['kdJadwal']}', '{$isikeranjang[$i]['hargaTemp']}','{$isikeranjang[$i]['jamBokingTemp']}','{$isikeranjang[$i]['tglBokingTemp']}',
'{$isikeranjang[$i]['subTotalTemp']}')") or die(mysql_error());
mysql_query("UPDATE tjadwal SET statusBoking='B' WHERE kdJadwal='{$isikeranjang[$i]['kdJadwal']}'");

}

  mysql_query("DELETE FROM tboking_temp
	  	         WHERE idSession = '$_SESSION[username]'");
 
	echo"
		<script language='javascript'>
		window.alert('Transaksi Berhasil dihapus');
		window.location=('../../frame.php?load=boking')
		</script>
		
		";

	}			
	
	}
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?load=boking')
		</script>
		
		";
		}
?>
<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	$loadPage= $_GET['load'];
	$action =$_GET['action'];
	
	if($loadPage=="jadwal" AND $action=="simpanData"){	
    $SQL="INSERT INTO tjadwal (tglJadwal,kdLapangan,kdJam,harga,statusBoking) 
	VALUES 	('$_POST[txtTglJadwal]','$_POST[cboLapangan]','$_POST[cboJam]','$_POST[txtHarga]','R')";
	mysql_query($SQL) or die (mysql_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=jadwal')
	</script>
	";
	
	}elseif($loadPage=="jadwal" AND $action=="hapusData"){
		
	mysql_query("DELETE FROM tjadwal WHERE kdJadwal=$_GET[id]")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?load=jadwal')
	</script>
	";
		
		
		
	}elseif($loadPage=="jadwal" AND $action=="ubahData"){
		  
	$SQL="UPDATE tjadwal SET tglJadwal='$_POST[txtTglJadwal]',
							 kdLapangan='$_POST[cboLapangan]',
							 kdJam='$_POST[cboJam]',
							 harga='$_POST[txtHarga]'
							    
		  WHERE kdJadwal='$_POST[id]'";	
	mysql_query($SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../frame.php?load=jadwal')
	</script>
	";
	
	}	
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?load=jadwal')
		</script>
		
		";
		}
?>

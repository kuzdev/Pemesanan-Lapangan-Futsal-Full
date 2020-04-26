<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	
	$loadPage= $_GET['load'];
	$action =$_GET['action'];
	
	if($loadPage=="pengguna" AND $action=="simpanData"){ //simpan
		$username = htmlspecialchars($_POST['txtUsername']);
		$nama = htmlspecialchars($_POST['txtNmLengkap']);
		$kontak = htmlspecialchars($_POST['txtKontak']);
		$alamat = htmlspecialchars($_POST['txtAlamat']);
		$aktif = htmlspecialchars($_POST['rbAktif']);
	
	$pass=md5($_POST['txtPassword']);	
	$SQL="INSERT INTO tpengguna (username,password,nmPengguna,
								alamatPengguna,kontak,aktif) 
		VALUES ('$username','$pass','$nama',
				'$alamat','$kontak','$aktif')";
	mysql_query($SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=pengguna')
	</script>
	";
	
	}elseif($loadPage=="pengguna" AND $action=="hapusData"){
		
		mysql_query("DELETE FROM tpengguna WHERE kdPengguna=$_GET[id]")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?load=pengguna')
	</script>
	";
		
		
		
	}elseif($loadPage=="pengguna" AND $action=="ubahData"){
	
	if(isset($_POST['txtPassword'])){
		$username = htmlspecialchars($_POST['txtUsername']);
		$nama = htmlspecialchars($_POST['txtNmLengkap']);
		$kontak = htmlspecialchars($_POST['txtKontak']);
		$alamat = htmlspecialchars($_POST['txtAlamat']);
		
		$pass1=md5($_POST['txtPassword']);
		$SQL1="UPDATE tpengguna SET username='$username',
								  password='$pass1',
								  nmPengguna='$nama',
								 
								  kontak='$kontak',
								  alamatPengguna='$alamat',
								  aktif='$_POST[rbAktif]'
			WHERE kdPengguna='$_POST[id]'";
	mysql_query($SQL1) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../frame.php?load=pengguna')
	</script>
	";
	
		
		}else{
			
		
		$SQL2="UPDATE tpengguna SET userpengguna='$username',
								  nmLengkap='$nama',
								  kontak='$kontak',
								  alamatPengguna='$alamat',
								  aktif='$_POST[rbAktif]'
			WHERE kdpengguna='$_POST[id]'";
	mysql_query($SQL2) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../frame.php?load=pengguna')
	</script>
	";
			
			
			}	
		}	
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?load=pengguna')
		</script>
		
		";
		}
?>
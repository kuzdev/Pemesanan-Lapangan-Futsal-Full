<?php
session_start();

if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	include"../../../appConfig/upFile.php";
	$loadPage= $_GET['load'];
	$action =$_GET['action'];
	
	
	if($loadPage=="member" AND $action=="simpanData"){
	
		$username = htmlspecialchars($_POST['txtUsername']);
		$nama = htmlspecialchars($_POST['txtNmLengkap']);
		$kontak = htmlspecialchars($_POST['txtKontak']);
		$alamat = htmlspecialchars($_POST['txtAlamat']);
		
		$passw = htmlspecialchars($_POST['txtPassword']);
	$pass=md5($passw);	
	$SQL="INSERT INTO tmember (usermember,passmember,nmLengkap,
								alamat,Member,kontak,aktif) 
		VALUES ('$_POST[txtUsername]','$pass','$_POST[txtNmLengkap]',
				'$_POST[txtAlamat]','$_POST[txtKontak]','$_POST[rbAktif]')";
	mysql_query($SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
	}elseif($loadPage=="member" AND $action=="hapusData"){
		
		mysql_query("DELETE FROM tmember WHERE kdMember=$_GET[id]")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil hapus');
	window.location=('../../frame.php?load=member')
	</script>
	";
		
		
		
	}elseif($loadPage=="member" AND $action=="ubahData"){

	
	if(isset($_POST['txtPassword'])){
		$username = htmlspecialchars($_POST['txtUsername']);
		$nama = htmlspecialchars($_POST['txtNmLengkap']);
		$kontak = htmlspecialchars($_POST['txtKontak']);
		$alamat = htmlspecialchars($_POST['txtAlamat']);
		$pass1=md5(htmlspecialchars($_POST['txtPassword']));
		$SQL1="UPDATE tmember SET usermember='$username',
								  passmember='$pass1',
								  nmLengkap='$nama',
								 
								  kontak='$kontak',
								  alamat='$alamat',
								  aktif='$_POST[rbAktif]'
			WHERE kdMember='$_POST[id]'";
	mysql_query($SQL1) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
		
		}else{
			
		
		$SQL2="UPDATE tmember SET usermember='$_POST[txtUsername]',
								  nmLengkap='$_POST[txtNmLengkap]',
							
								  kontak='$_POST[txtKontak]',
								  alamat='$_POST[txtAlamat]',
								  aktif='$_POST[rbAktif]'
			WHERE kdMember='$_POST[id]'";
	mysql_query($SQL2) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../frame.php?load=member')
	</script>
	";
			
			
			}	
		}	
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?load=member')
		</script>
		
		";
		}
?>
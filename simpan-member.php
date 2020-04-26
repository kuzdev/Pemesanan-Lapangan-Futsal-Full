<?php
include"appConfig/conn.php";
include"appConfig/upFile.php";

$username = $_POST['txtUsername'];
$pass = $_POST['txtPassMember'];
$nama = $_POST['txtNmLengkap'];
$alamat = $_POST['txtAlamat'];
$telp = $_POST['txtKontak'];
$query1=mysql_query("SELECT*FROM tmember where usermember='$username'");
$data=mysql_fetch_assoc($query1);
if (!empty($data)) {
	
	echo"
	<script language='javascript'>
		window.alert('username sudah ada, gunakan yang lain ya!');
		window.location=('index.php')
		</script>
	";
	
}


if (empty($username) && empty($pass) && empty($nama) && empty($alamat) && empty($telp))
{
	echo"
	<script language='javascript'>
		window.alert('Form tidak boleh kosong');
		window.location=('index.php')
		</script>
	";
}
	elseif (empty($username) or empty($pass) or empty($nama) or empty($alamat) or empty($telp))
{
	echo"
	<script language='javascript'>
		window.alert('Lengkapi Data kosong');
		window.location=('index.php')
		</script>
	";
}
	elseif ($data['usermember']=="$username")
{
	echo"
	<script language='javascript'>
		window.alert('USERNAME WES ONO');
		window.location=('index.php')
		</script>
	";
}
	// exit;


// $cariData =mysql_query("SELECT * FROM tmember WHERE emailMember='$email'");
// $ketemu=mysql_num_rows($cariData);
// if($ketemu > 0){
// 	echo"
// 	<script language='javascript'>
// 		window.alert('Email: $email  Sudah Terdaftar!! Silahkan gunakan akun lain :)');
// 		window.location=('index.php')
// 		</script>
// 	";
	
	
	else{

		$tgl=date("Ymd");
		 $addres_file = $_FILES['upPhoto']['tmp_name'];
		  $tipe_file   = $_FILES['upPhoto']['type'];
		  $filename    = $_FILES['upPhoto']['name'];
		  $enkrip	   = md5($filename);
		  $filenameenkrip = $enkrip.$filename;
		  
		  $pass = md5($_POST['txtPassMember']);
		 
	  if(empty($addres_file)){	   
				mysql_query("INSERT INTO tmember (usermember,passmember,nmLengkap,alamat,kontak,aktif)
							VALUES ('$username','$pass','$nama','$alamat','$telp','Y')")or die(mysql_error());
							echo"
		<script language='javascript'>
		window.alert('Data Berhasil Disimpan');
		window.location=('login.php')
		</script>
		";
	  }else{
		   if($tipe_file !="image/jpg" AND $tipe_file != "image/jpeg" and $tipe_file !="image/png"){
				  echo"
				  <script language='javascript'>
				  window.alert('Upload Gambar Gagal Pastikan File Bertipe JPEG');
				  window.location=('index.php')
				  </script>
				  ";
				  }else{
				$pass = md5($_POST['txtPassMember']);
				 upMemberLaman($filenameenkrip);	 
					mysql_query("INSERT INTO tmember 
					(usermember,passmember,nmLengkap,alamat,kontak,fotoMember,aktif)
					VALUES 
					('$username','$pass','$nama','$alamat','$telp','$filenameenkrip','Y')")or die(mysql_error());
		
	echo"
		<script language='javascript'>
		window.alert('Data Berhasil Disimpan');
		window.location=('login.php')
		</script>
		";
				  }
		  
		  
		  
		  }
		  }

?>
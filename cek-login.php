<?php
session_start();
include "appConfig/conn.php";
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$username 	= antiinjection($_POST['txtUsername']);
$pass     	= md5( antiinjection($_POST['txtPassword']));


$waktu = time()+25200;
$expired=60;

$query=mysql_query("SELECT * FROM tmember WHERE usermember='$username'");
$in=mysql_num_rows($query);
$r=mysql_fetch_array($query);

if ($in > 0)
{
  if ($r['passmember'] == $pass) 
  {
  
    $_SESSION['kdMember']   	  = $r['kdMember'];
    $_SESSION['username']    		  = $r['usermember'];

    $_SESSION['password']      	  = $r['passmember'];
    $_SESSION['nmLengkap']  		  = $r['nmLengkap'];
    $_SESSION['foto']      		  = $r['fotoMember'];
    $_SESSION['kontak']         = $r['kontak'];
    $_SESSION['alamat']         = $r['alamat'];

	  
  $_SESSION['timeout']		= $waktu+$expired;
  $waktulog= time();												
										
  header('location:paragon.php?p=home');
 
  }
  else 
  {
    echo "<script type='text/javascript'>
    window.alert(' Password Anda Salah'); 
    window.location =('login.php')</script>";  
  }
}
  
  else
  {
    echo "<script type='text/javascript'>
    window.alert('Username tidak ditemukan'); 
    window.location =('login.php')</script>";

  }
?>

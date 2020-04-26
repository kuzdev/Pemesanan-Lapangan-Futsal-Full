<?php
session_start();
include "../appConfig/conn.php";
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$username	= antiinjection($_POST['txtUsername']);
$pass    	= antiinjection(md5($_POST['txtPassword']));
$email		= antiinjection($_POST['txtUsername']);


$waktu = time()+25200;
$expired=60;

$query=mysql_query("SELECT * FROM tpengguna WHERE username='$username'");
$in=mysql_num_rows($query);
$r=mysql_fetch_array($query);

if ($in > 0)
{
  if ($r['password'] == $pass) 
  {
    $_SESSION['kdPengguna'] = $r['kdPengguna'];
    $_SESSION['username']   = $r['username'];
    $_SESSION['password']   = $r['password'];
    $_SESSION['nmLengkap']  = $r['nmLengkap'];
    $_SESSION['avatar']     = $r['avatar'];
    $_SESSION['role']       = $r['role'];
    $_SESSION['timeout']		= $waktu+$expired;
    $waktulog= time();												
    header('location:frame.php?load=dashboard');
  }

  else 
  {
    echo "<script type='text/javascript'>
    window.alert(' Password Anda Salah'); 
    window.location =('index.php')</script>";  
  }
}
  
  else
  {
    echo "<script type='text/javascript'>
    window.alert('Username tidak ditemukan'); 
    window.location =('index.php')</script>";
  }

?>

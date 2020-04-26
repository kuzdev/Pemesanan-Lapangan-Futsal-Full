<?php
date_default_timezone_set('Asia/Jakarta'); 
$weeks = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$day = date("w");
$now = $weeks[$day];
$dateNowLong  = date("Ymd");
$dateDay= date("d");
$dateMoon= date("m");
$dateYears= date("Y");
$cloockNow= date("H:i:s");
$moonName=array(1=> "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", 
                    "Oktober", "November", "Desember");
?>

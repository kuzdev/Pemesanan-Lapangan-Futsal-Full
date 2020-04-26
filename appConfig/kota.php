<?php
require_once "conn.php";
$tampil=mysql_query("SELECT * FROM tkota WHERE kdProvinsi='$_GET[ambilProv]' ORDER BY kota");
$jml=mysql_num_rows($tampil);
if($jml > 0){
    echo"<select name='cboKota'>
     <option value='0' selected>- Pilih Kota -</option>";
     while($r=mysql_fetch_array($tampil)){
         echo "<option value=$r[kdKota]>$r[kota]</option>";
     }
     echo "</select>";
}else{
    echo "<select name='cboKota'>
     <option value=0 selected>- Data Wilayah Tidak Ada-</option
     </select>";
}

?>
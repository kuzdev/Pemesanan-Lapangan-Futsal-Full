<?php
$SQL=mysql_query("SELECT * FROM tjadwal WHERE kdJadwal='$_GET[id]'");
$_data=mysql_fetch_array($SQL);
echo"
<div id='content-header'>
  <div id='breadcrumb'> <a href='?load=dashboard' title='Go to Home' class='tip-bottom'><i class='icon-home'></i> Home</a> <a href='?load=jadwal' class='tip-bottom'>Module Jadwal</a> <a href='?load=jadwal&action=edit&id=$_GET[kdJadwal]' class='current'>Edit Data Jadwal</a> </div>
  <h1></h1>
</div>
<div class='container-fluid'>
  <hr>
  <div class='row-fluid'>
    <div class='span12'>
      <div class='widget-box'>
        <div class='widget-title'> <span class='icon'> <i class='icon-align-justify'></i> </span>
          <h5>Isi Data Dengan Lengkap</h5>
        </div>
        <div class='widget-content nopadding'>
          <form action='$loadModule?load=jadwal&action=ubahData' method='POST' class='form-horizontal' enctype='multipart/form-data'>
		  <input type='hidden' name='id' value='$_data[kdJadwal]'>
            
			  <div class='control-group'>
              <label class='control-label'>Tanggal</label>
              <div class='controls'>
                <div  data-date='12-02-2017' class='input-append date datepicker'>
                  <input type='date'  data-date-format='mm-dd-yyyy' value='$_data[tglJadwal]' class='span11' name='txtTglJadwal' >
                  <span class='add-on'><i class='icon-th'></i></span> </div>
              </div>
            </div>
          <div class='control-group'>
              <label class='control-label'>Nomor Lapangan</label>
              <div class='controls'>
                <select name='cboLapangan' >";
				if($_data['kdLapangan']==0){
					echo"
                  <option selected>-- Pilih Nomor Lapangan --</option>
				  ";
					}
				 $lapangan=mysql_query("SELECT * FROM tlapangan ORDER BY noLapangan ASC");
				 while($lap=mysql_fetch_array($lapangan)){
					 if($_data['kdLapangan']==$lap['kdLapangan']){
					 echo"<option value='$lap[kdLapangan]' selected>$lap[noLapangan]</option>";
					 }else{
						 
					 echo"<option value='$lap[kdLapangan]'>$lap[noLapangan]</option>";	 
					}
				 }
				echo"
                </select>
              </div>
            </div>
              <div class='control-group'>
              <label class='control-label'>Jam</label>
              <div class='controls'>
                <select name='cboJam'>";
				if($_data['kdJam']==0){
					echo"
                  <option selected>-- Pilih Jam Operasional --</option>";
				}
				 $jam=mysql_query('SELECT * FROM tjam ORDER BY jam ASC');
				 while($j=mysql_fetch_array($jam)){
					 if($_data['kdJam']==$j['kdJam']){
					 echo"<option value='$j[kdJam]' selected>$j[jam]</option>";
					 }else{
				   echo"<option value='$j[kdJam]'>$j[jam]</option>";
						 
				}
				 }
				 echo"
                </select>
              </div>
            </div>
            
            <div class='control-group'>
              <label class='control-label'>Harga :</label>
              <div class='controls'>
                <input type='text' class='span2'  name='txtHarga' value='$_data[harga]' required/>
              </div>
            </div>
            <div class='form-actions'>
              <button type='submit' class='btn btn-success'>Ubah Data</button>
            </div>
          </form>
        </div>
      </div>
     </div>
     </div>
     </div>
     


";

?>

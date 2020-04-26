<?php
$SQL=mysql_query("SELECT * FROM tlapangan WHERE kdLapangan='$_GET[id]'");
$_data=mysql_fetch_array($SQL);
echo"
<div id='content-header'>
  <div id='breadcrumb'> <a href='?load=dashboard' title='Go to Home' class='tip-bottom'><i class='icon-home'></i> Home</a> <a href='?load=lapangan' class='tip-bottom'>Module Lapangan</a> <a href='?load=lapangan&action=edit&id=$_GET[kdLapangan]' class='current'>Edit Data Lapangan</a> </div>
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
          <form action='$loadModule?load=lapangan&action=ubahData' method='POST' class='form-horizontal' enctype='multipart/form-data'>
		  <input type='hidden' name='id' value='$_data[kdLapangan]'>
            <div class='control-group'>
              <label class='control-label'>Nomor Lapangan :</label>
              <div class='controls'>
                <input type='text' class='span2' placeholder='Nomor Lapangan' name='txtNoLapangan' value='$_data[noLapangan]' required/>
              </div>
            </div>
			<div class='control-group'>
              <label class='control-label'>Gambar Lama :</label>
              <div class='controls'>
                ";
				if(isset($_data['gambarLapangan'])){
					echo"<img src='../assets/gambar/lapangan_img/small/small_$_data[gambarLapangan]'>";
					
					
					}else{
						
						echo"Tidak Ada Gambar";
						}
				
				
				echo"
              </div>
            </div>
                <div class='control-group'>
              <label class='control-label'>Ganti Gambar Baru :</label>
              <div class='controls'>
                <input type='file' class='span12' placeholder='First name' name='upPhoto' />
              </div>
            </div>
           <div class='control-group'>
              <label class='control-label'>Deskripsi :</label>
              <div class='controls'>
                 <textarea name='txtDeskripsi' class='textarea_editor span12' rows='12' placeholder='Enter text ...' required>$_data[deskripsi]</textarea>
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
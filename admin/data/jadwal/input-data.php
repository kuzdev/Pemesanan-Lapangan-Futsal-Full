<div id="content-header">
  <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=lapangan" class="tip-bottom">Module Jadwal</a> <a href="?load=lapangan&action=input" class="current">Input Data Jadwal</a> </div>
  <h1></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Isi Data Dengan Lengkap</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="data/jadwal/proses.php?load=jadwal&action=simpanData" method="POST" class="form-horizontal" enctype="multipart/form-data">
           <div class="control-group">
              <label class="control-label">Tanggal</label>
              <div class="controls">
                <div  data-date="12-02-2017" class="input-append date datepicker">
                  <input type="date"  value="<?=date('Y-m-d') ?>" class="span11" name="txtTglJadwal" >
                  </div>
              </div>
            </div>
          <div class="control-group">
              <label class="control-label">Nomor Lapangan</label>
              <div class="controls">
                <select name="cboLapangan" >
                  <option>-- Pilih Nomor Lapangan --</option>
                 <?php
				 $lapangan=mysql_query("SELECT * FROM tlapangan ORDER BY noLapangan ASC");
				 while($lap=mysql_fetch_array($lapangan)){
					 echo"<option value='$lap[kdLapangan]'>$lap[noLapangan]</option>";
					 }
				 ?>
                </select>
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Jam</label>
              <div class="controls">
                <select name="cboJam" >
                  <option>-- Pilih Jam Operasional --</option>
                 <?php
				 $jam=mysql_query("SELECT * FROM tjam ORDER BY jam ASC");
				 while($j=mysql_fetch_array($jam)){
					 echo"<option value='$j[kdJam]'>$j[jam]</option>";
					 }
				 ?>
                </select>
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Harga :</label>
              <div class="controls">
                <input type="text" class="span2"  name="txtHarga" required/>
              </div>
            </div>
              
           
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </form>
        </div>
      </div>
     </div>
     </div>
     </div>
 
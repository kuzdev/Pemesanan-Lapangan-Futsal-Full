<div id="content-header">
  <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=lapangan" class="tip-bottom">Module Lapangan</a> <a href="?load=lapangan&action=input" class="current">Input Data Lapangan</a> </div>
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
          <form action="data/lapangan/proses.php?load=lapangan&action=simpanData" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Nomor Lapangan :</label>
              <div class="controls">
                <input type="text" class="span2" placeholder="Nomor Lapangan" name="txtNoLapangan" required/>
              </div>
            </div>
                <div class="control-group">
              <label class="control-label">Gambar Lapangan :</label>
              <div class="controls">
                <input type="file" class="span12" placeholder="First name" name="upPhoto" required/>
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Deskripsi :</label>
              <div class="controls">
                 <textarea name="txtDeskripsi" class="textarea_editor span12" rows="12" placeholder="Enter text ..." required></textarea>
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
     
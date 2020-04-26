<div id="content-header">
  <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=boking" class="tip-bottom">Module Boking </a> <a href="?load=boking&action=input" class="current">Isi Informasi Data boking</a> </div>
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
          <form action="data/boking/proses.php?load=boking&action=selesai-boking" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Nama Lengkap:</label>
              <div class="controls">
                <input type="text" class="span10" placeholder="Nama Lengkap" name="txtNmLengkap" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat:</label>
              <div class="controls">
                <input type="text" class="span12" placeholder="Alamat" name="txtAlamat" />
              </div>
            </div>
            <!-- <div class="control-group">
              <label class="control-label">Email:</label>
              <div class="controls">
                <input type="email" class="span6" placeholder="example@.com" name="txtEmail" />
              </div>
            </div> -->
            <div class="control-group">
              <label class="control-label">Kontak:</label>
              <div class="controls">
                <input type="text" class="span5" placeholder="0822-3333-3333" name="txtKontak" />
              </div>
            </div>
            
              
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Simpan Transaksi</button>
            </div>
          </form>
        </div>
      </div>
     </div>
     </div>
     </div>
     
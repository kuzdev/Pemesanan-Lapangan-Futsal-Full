<div id="content-header">
  <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=member" class="tip-bottom">Module Member</a> <a href="?load=member&action=input" class="current">Input Data Member</a> </div>
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
          <form action="data/member/proses.php?load=member&action=simpanData" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Username:</label>
              <div class="controls">
                <input type="text" class="span6" placeholder="username" name="txtUsername" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password:</label>
              <div class="controls">
                <input type="password" class="span6" placeholder="Password" name="txtPassword" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Lengkap:</label>
              <div class="controls">
                <input type="text" class="span6" placeholder="Nama Lengkap" name="txtNmLengkap" />
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Kontak:</label>
              <div class="controls">
                <input type="text" class="span6" placeholder="0890-000-000" name="txtKontak" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat :</label>
              <div class="controls">
                <input type="text" class="span12" placeholder="Jl.Example" name="txtAlamat" />
              </div>
            </div>
           <!--  <div class="control-group">
              <label class="control-label">Email Member:</label>
              <div class="controls">
                <input type="email" class="span6" placeholder="example@ex.com" name="txtEmail" />
              </div>
            </div> -->
            <div class="control-group">
              <label class="control-label">Aktif :</label>
              <div class="controls">
                <input type="radio" value="Y" name="rbAktif"> Aktif
                <input type="radio" value="N" name="rbAktif"> Tidak Aktif
                
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
     
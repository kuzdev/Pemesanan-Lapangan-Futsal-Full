<?php
$SQL=mysql_query("SELECT * FROM tmember WHERE kdMember='$_GET[id]'");
$_data=mysql_fetch_array($SQL);
echo"
<div id='content-header'>
  <div id='breadcrumb'> <a href='?load=dashboard' title='Go to Home' class='tip-bottom'><i class='icon-home'></i> Home</a> <a href='?load=member' class='tip-bottom'>Module member</a> <a href='?load=member&action=edit&id=$_GET[kdMember]' class='current'>Edit Data Member</a> </div>
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
          <form action='$loadModule?load=member&action=ubahData' method='POST' class='form-horizontal' enctype='multipart/form-data'>
		  <input type='hidden' name='id' value='$_data[kdMember]'>
            <div class='control-group'>
              <label class='control-label'>Username:</label>
              <div class='controls'>
                <input type='text' class='span6' placeholder='username' name='txtUsername' value='$_data[usermember]' />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Password:</label>
              <div class='controls'>
                <input type='password' class='span6' placeholder='Kosongkan Saja Jika Password Tidak Diganti!' name='txtPassword' />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Nama Lengkap:</label>
              <div class='controls'>
                <input type='text' class='span6' placeholder='Nama Lengkap' name='txtNmLengkap' value='$_data[nmLengkap]' />
              </div>
            </div>
			<div class='control-group'>
              <label class='control-label'>Kontak:</label>
              <div class='controls'>
                <input type='text' class='span6'  name='txtKontak' value='$_data[kontak]' />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Alamat :</label>
              <div class='controls'>
                <input type='text' class='span12' placeholder='Jl.Example' name='txtAlamat' value='$_data[alamat]' />
              </div>
            </div>
          
            <div class='control-group'>
              <label class='control-label'>Aktif :</label>
              <div class='controls'>";
			  if($_data['aktif']=="Y"){
				  echo"
				  <input type='radio' value='Y' name='rbAktif' checked> Aktif
                <input type='radio' value='N' name='rbAktif'> Tidak Aktif
				  ";
				  
				  
				  }else{
					echo"
				<input type='radio' value='Y' name='rbAktif'> Aktif
                <input type='radio' value='N' name='rbAktif' checked> Tidak Aktif
					
					";  
					  
					  }
			  
			  echo"
                
                
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
 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=pengguna" class="current">Module pengguna</a> </div>
    <h1>Daftar Pengguna</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       <a href="?load=pengguna&action=input"><button class="btn btn-success"><i class="icon-plus"></i> &nbsp; Tambah Data</button></a>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data pengguna</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>Username</th>
                  <th>Nama Lengkap</th>
                  <th>Alamat</th>
                 
                  <th>Kontak</th>
                  <th>Aktif</th>
                  <th width="20%">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
			   $SQL=mysql_query("SELECT * FROM tpengguna ORDER BY nmPengguna ASC");
			   $no=1;
			   while($_data=mysql_fetch_array($SQL)){
				  
				   if($no % 2==1){
					   $class="gradeU";
					   
					   }else{
						 $class="gradeX";  
						   }
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$_data[username]</td>
				  <td>$_data[nmPengguna]</td>
				   <td>$_data[alamatPengguna]</td>
		
				  <td>$_data[kontak]</td>
				  <td>";
				  if($_data['aktif']=="Y"){
					  echo"Aktif";
					  
					  }else{
						  
						 echo"Tidak Aktif"; 
						  }
				  echo"</td>
				
                  <td class='center'>  
           <a href='?load=pengguna&action=edit&id=$_data[kdPengguna]'><button class='btn btn-primary'> <i class='icon-pencil'></i> &nbsp; Edit</button></a>
             
					 <a  href='$loadModule?load=pengguna&action=hapusData&id=$_data[kdPengguna]'><button class='btn btn-danger'><i class='icon-trash'></i> &nbsp; Delete</button></a>
				 
			 
            
           </td>
                </tr> 
				   
				   ";
				   
				   
				  $no++; }
			   ?>
 
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
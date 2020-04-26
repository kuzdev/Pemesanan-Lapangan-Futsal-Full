 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=lapangan" class="current">Module Lapangan</a> </div>
    <h1>Daftar Lapangan</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       <a href="?load=lapangan&action=input"><button class="btn btn-success"><i class="icon-plus"></i> &nbsp; Tambah Data</button></a>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data Lapangan</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="2%">No</th>
                  <th width="10%">Gambar</th>
                  <th width="5%">Nomor Lapangan</th>
                  <th>Deskripsi</th>
                  <th width="20%">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
			   $SQL=mysql_query("SELECT * FROM tlapangan ORDER BY noLapangan ASC");
			   $no=1;
			   while($_data=mysql_fetch_array($SQL)){
				   $text=$_data['deskripsi'];
				   $deskripsi=substr($text,0,50);
				   if($no % 2==1){
					   $class="gradeU";
					   
					   }else{
						 $class="gradeX";  
						   }
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>";
				  if(isset($_data['gambarLapangan'])){
					  echo"<img src='../assets/gambar/lapangan_img/small/small_$_data[gambarLapangan]'>";
					  
					  
					  }else{
						  echo"Tidak Ada Gambar";
						  }
				  echo"</td>
                  <td>$_data[noLapangan]</td>
                  <td>$deskripsi </td>
                  <td class='center'>  
           <a href='?load=lapangan&action=edit&id=$_data[kdLapangan]'><button class='btn btn-primary'> <i class='icon-pencil'></i> &nbsp; Edit</button></a>
             ";
			 if(isset($_data['gambarLapangan'])){
				 echo" <a href='$loadModule?load=lapangan&action=hapusData&id=$_data[kdLapangan]&fimage=$_data[gambarLapangan]'><button class='btn btn-danger'><i class='icon-trash'></i> &nbsp; Delete</button></a>";
				 
				 
				 }else{
					 echo"<a href='$loadModule?load=lapangan&action=hapusData&id=$_data[kdLapangan]'><button class='btn btn-danger'><i class='icon-trash'></i> &nbsp; Delete</button></a>";
				 }
			 echo"
            
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
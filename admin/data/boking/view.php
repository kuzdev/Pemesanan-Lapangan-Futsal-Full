 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=boking" class="current">Module Boking</a> </div>
    <h1>Daftar Boking</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       <!-- <a href="?load=boking&action=input"><button class="btn btn-success"><i class="icon-plus"></i> &nbsp; Buat Invoice</button></a> -->
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data Boking</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.Invoice</th>
                  <th>Tgl Invoice</th>
                  <th>Member ID</th>
                  <th>Atas Nama</th>
                  <th>Kontak</th>
                  <th>Total Bayar</th>
                  <th>Status Bayar</th>
                  <th width="20%">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
			   $SQL=mysql_query("SELECT * FROM tboking  ORDER BY noInvoice DESC");
			   $no=1;
			   while($_data=mysql_fetch_array($SQL)){
				   $tglInvoice = region($_data['tglInvoice']);
				   $total=idr_f($_data['totalBayar']);
				   if($no % 2==1){
					   $class="gradeU";
					   
					   }else{
						 $class="gradeX";  
						   }
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$tglInvoice</td>
				  <td>$_data[usernameBoking]</td>
				  <td>$_data[an]</td>
				  <td>$_data[kontak]</td>
				  <td>$total</td>
				  <td>";
				  if($_data['statusBayar']=="L"){
					echo"Lunas";
					  }else{
					echo"Belum Lunas";	  
					}
				  
				  echo"</td>
				 
                  
                  <td class='center'>  
		   <a href='?load=boking&action=edit&id=$_data[kdBoking]'><button class='btn btn-primary btn-mini'> <i class='icon-eye-open'></i> &nbsp; Details</button></a>
	
           <a href='$loadModule?load=boking&action=hapusData&id=$_data[kdBoking]'><button class='btn btn-danger btn-mini'><i class='icon-trash'></i> &nbsp; Delete</button></a>
			
           
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

<script src="js/jquery.gritter.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.popover.js"></script>
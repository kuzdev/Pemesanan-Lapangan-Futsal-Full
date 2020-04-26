  <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="?load=dashboard"> <i class="icon-dashboard"></i>My Dashboard </a> </li>
        <li class="bg_lg"> <a href="?load=pengguna"> <i class="icon-th"></i> Data Pengguna</a> </li>
         <li class="bg_lg"> <a href="?load=jadwal"> <i class="icon-th-list"></i> Data Jadwal</a> </li>
        <li class="bg_ly"> <a href="?load=lapangan"> <i class="icon-inbox"></i> Data Lapangan  </a> </li>
        <li class="bg_lo"> <a href="?load=member"> <i class="icon-th"></i> Data Pelanggan</a> </li>
        <li class="bg_ls"> <a href="?load=boking"> <i class="icon-fullscreen"></i> Data Pemesanan</a> </li>
   
      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box--> 
<!--End-Chart-box--> 

    <hr/>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data Boking</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                <th>#</th>
                  <th>No.Invoice</th>
                  <th>Tgl Invoice</th>
                   <th>Atas Nama</th>
                   <th>Kontak</th>
                  <th>Total Bayar</th>
                  <th>Status Bayar</th>
                  
                </tr>
              </thead>
              <tbody>
               <?php
			   $SQL=mysql_query("SELECT * FROM tboking  ORDER BY noInvoice ASC");
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
				  <td>$_data[noInvoice]</td>
				  <td>$tglInvoice</td>
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
  
<!--end-Footer-part-->
<!-- <script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script> -->

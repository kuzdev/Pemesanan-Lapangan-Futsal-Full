<div id="content-header">
  <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=boking" class="tip-bottom">Module Lapangan</a> <a href="?load=boking&action=input" class="current">Buat Invoice Boking Lapangan</a> </div>
  <h1></h1>
</div>
<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
            <h5>INVOICE</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span6">
                <table class="">
                  <tbody>
                     <tr>
                      <td><h4>PARAGON FUTSAL YOGYAKARTA</h4></td>
                    </tr>
                    <tr>
                      <td>
                      Jl. Kabupaten, Gamping, Sleman
                      </td>
                    </tr>
                  
                    <tr>
                      <td>Phone: 0274-761090</td>
                    </tr>
                    <tr>
                      <td>paragonfutsal.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="span6">
                <table class="table table-bordered table-invoice">
                  <tbody>
                    <tr>
                    <tr>
                    <?php
					$query=mysql_query("SELECT MAX (noOrder) As nomorOrder FROM tboking");
							$kode=mysql_fetch_array($query);
							$kodeJadi=$kode['nomorOrder'];
							$noOrder=(int)substr($kodeJadi,3,3);
							$noOrder++;
							$char = "INV";
							$newID = $char . sprintf("%03s", $noOrder);
					echo"		
                      <td class='width30'>Nomor Invoice:</td>
                      <td class='width70'><strong>$newID</strong></td>";
					  ?>
                    </tr>
                    <tr>
                      <td>Tanggal :</td>
                      <td><strong><?php $tgl=date("d/m/y");  echo"$tgl";?></strong></td>
                    </tr>
                 
                  <td class="width30">Lihat Jadwal :</td>
                    <td class="width70">
                    <a href="#myModal" data-toggle="modal" class="btn btn-success">View </a>  
                    <div id="myModal" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>DAFTAR JADWAL LAPANGAN FUTSAL PARAGON Futsal</h3>
              </div>
              <div class="modal-body">
                 <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data</h5>
          </div>
    
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="2%">No</th>
                  <th width="10%">Tanggal</th>
                  <th width="5%">Lapangan</th>
                  <th>Jam</th>
                  <th>Harga</th>
                  <th width="20%">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
			   $SQL=mysql_query("SELECT * FROM tjadwal,tlapangan,tjam WHERE 
			   tjadwal.kdLapangan=tlapangan.kdLapangan AND tjadwal.kdJam=tjam.kdJam AND tjadwal.statusBoking='R' ORDER BY tjadwal.tglJadwal ASC");
			   $no=1;
			   while($_data=mysql_fetch_array($SQL)){
				   $harga=idr_f($_data['harga']);
				   $tgl=region($_data['tglJadwal']);
				   if($no % 2==1){
					   $class="gradeU";
					   
					   }else{
						 $class="gradeX";  
						   }
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$tgl</td>
                  <td>$_data[noLapangan]</td>
                  <td>$_data[jam] </td>
				  <td>$harga</td>
                  <td class='center'>  
           <a href='$loadModule?load=boking&action=tambahItem&id=$_data[kdJadwal]'><button class='btn btn-primary'> <i class='icon-plus'></i> &nbsp; Tambah</button></a>
            
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
                    
                    
                    </td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class="row-fluid">
              <div class="span12">
                <table class="table table-bordered table-invoice-full">
                  <thead>
                    <tr>
                  <th>#</th>
                  <th>Nomor lapangan</th>
                  <th>Tgl.Boking</th>
                  <th>Jam Boking</th>
                  <th>Harga</th>
                 <th>Subtotal</th>
                 <th>Aksi</th>
                  
                </tr>
                  </thead>
                  <tbody>
                    <?php
			   $SQL=mysql_query("SELECT * FROM tboking_temp WHERE idSession='$_SESSION[username]'");
			   $no=1;
			   if($no % 2==1){
					   $class="gradeU";
					   
					   }else{
						 $class="gradeX";  
						   }
						   
				while($_data=mysql_fetch_array($SQL)){
					$harga=idr_f($_data['hargaTemp']);
					$sub=$_data['hargaTemp'] * 1;
					$subtotal=idr_f($sub);
					$tglboking=$_data['tglBokingTemp'];
					echo"
					  <tr class='$class'>
							  <td>$no</td>
							  <td>$_data[nomorLapangan]</td>
							  <td>$tglboking</td>
							  <td>$_data[jamBokingTemp]</td>
							  <td>$harga</td>
							  <td>$subtotal</td>
							  <td class='center'>  
                       
		<a href='$loadModule?load=boking&action=hapusData&id=$_data[kdBokingTemp]'><button class='btn btn-danger'><i class='icon-trash'></i> &nbsp; Delete</button></a>
            
           </td>
                	   </tr>
					
					";
					
					
					$no++;}
				   ?>
                  </tbody>
                </table>
                <table class="table table-bordered table-invoice-full">
                  <tbody>
                    <tr>
                      <td class="msg-invoice" width="85%"><h4>Invoice Boking Lapangan Vigor </h4>
                        <a href="#" class="tip-bottom" title="Kasir"></a> |  <a href="#" class="tip-bottom" title="BCA (78889991) - Mandiri (788928292)-BRI (082928938) ">BCA (78889991) - Mandiri (788928292)-BRI (082928938) </a> |  <a href="#" class="tip-bottom" title="SWIFT code">A/N  </a>|  <a href="#" class="tip-bottom" title="IBAN Billing address">Paragon Futsal </a></td>
                      <td class="right"><strong>Total Bayar</strong> <br>
                        </td>
                        <?php
						$to=mysql_query("SELECT SUM(subTotalTemp) AS subtotal FROM tboking_temp WHERE idSession='$_SESSION[username]'");
						$r=mysql_fetch_array($to);
						$total=$r['subtotal'];
						$totalRp=idr_f($total);
						echo"
						<td class='right'>$totalRp<strong>
                    </td>
						
                      
                    </tr>
                  </tbody>
                </table>
                <div class='pull-right'>
                  <h4><span>TOTAL BERSIH:&nbsp;Rp. $totalRp</span></h4>
                  <br>";
				  ?>
                  <a class="btn btn-primary btn-large pull-right" href="?load=boking&action=informasi">Lanjutkan Transaksi</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.popover.js"></script>

 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
<?php
$SQL=mysql_query("SELECT * FROM tboking WHERE kdBoking='$_GET[id]'");

$_data=mysql_fetch_array($SQL) or die (mysql_error());
$tglInvoice=region($_data['tglInvoice']);
$totalRp=idr_f($_data['totalBayar']);
echo"
<div id='content-header'>
  <div id='breadcrumb'> <a href='?load=dashboard' title='Go to Home' class='tip-bottom'><i class='icon-home'></i> Home</a> <a href='?load=boking' class='tip-bottom'>Module Lapangan</a> <a href='?load=boking' class='current'>Rincian Invoice Boking Lapangan</a> </div>
  <h1></h1>
</div>
<div class='container-fluid'><hr>
    <div class='row-fluid'>
      <div class='span12'>
        <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='icon-briefcase'></i> </span>
            <h5>INVOICE</h5>
          </div>
          <div class='widget-content'>
            <div class='row-fluid'>
              <div class='span6'>
                <table class=''>
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
              <div class='span6'>
                <table class='table table-bordered table-invoice'>
                  <tbody>
                    <tr>
					
                    <tr>
                      <td class='width30'>Nomor Invoice:</td>
                      <td class='width70'><strong>$_data[noInvoice]</strong></td>';
					  
                    </tr>
					<tr>
					<td>Status Bayar</td>
					<td>";
					if($_data['statusBayar']=="L"){
						echo"<label class='label label-success'>Lunas</label>";
						
						
						}else{
						echo"<label class='label label-important'>Belum Lunas</label>";
							
							}
					
					echo"</td>
					</tr>
                    <tr>
                      <td>Tanggal Invoice :</td>
                      <td><strong>$tglInvoice</strong></td>
                    </tr>
                 <tr>
                  <td>Username Boking :</td>
                    <td>
					   $_data[usernameBoking]                
                    </td>
					</tr>
					<tr>
					<td>Atas Nama :</td>
                    <td>
					   $_data[an]                
                    </td>
					</tr>
					<tr>
					<td>Alamat :</td>
                    <td>
					  $_data[alamat]                 
                    </td>
					</tr>
					<tr>
						<td>Kontak :</td>
                    <td>
					  $_data[kontak]                 
                    </td>
					</tr>
					<tr>
					<td>Cetak Invoice</td>
					<td><form method='post' action='data/boking/cetak-invoice.php' target='_BLANK'>
					<input type='hidden' name='id' value='$_data[kdBoking]'> 
					<button type='submit' class='btn btn-success'><i class='icon-print'></i>&nbsp; Cetak</button>
					</form></td>
					</tr>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class='row-fluid'>
              <div class='span12'>
                <table class='table table-bordered table-invoice-full'>
                  <thead>
                    <tr>
                  <th>#</th>
                  <th>Nomor lapangan</th>
                  <th>Tgl.Boking</th>
                  <th>Jam Boking</th>
                  <th>Harga</th>
                 <th>Subtotal</th>
              
                  
                </tr>
                  </thead>
                  <tbody>";
                   
			   $SQL=mysql_query("SELECT * FROM trincian_boking WHERE kdBoking='$_data[kdBoking]'");
			   $no=1;
			   if($no % 2==1){
					   $class='gradeU';
					   
					   }else{
						 $class='gradeX';  
						   }
						   
				while($r=mysql_fetch_array($SQL)){
					$harga=idr_f($r['hargaBoking']);
					$subtotal=idr_f($r['subTotal']);
					$tglboking=$r['tglBoking'];
					echo"
					  <tr class='$class'>
							  <td>$no</td>
							  <td>$r[noLapangan]</td>
							  <td>$tglboking</td>
							  <td>$r[jamBoking]</td>
							  <td>$harga</td>
							  <td>$subtotal</td>
							 
                	   </tr>
					
					";
					
					
					$no++;}
				   echo"
                  </tbody>
                </table>
                <table class='table table-bordered table-invoice-full'>
                  <tbody>
                    <tr>
                      <td class='msg-invoice' width='85%'><h4>Invoice Boking Lapangan Vigor </h4>
                        <a href='#' class='tip-bottom' title='Kasir'></a> |  <a href='#' class='tip-bottom' title='BCA (78889991) - Mandiri (788928292)-BRI (082928938) '>BCA (78889991) - Mandiri (788928292)-BRI (082928938) </a> |  <a href='#' class='tip-bottom' title='SWIFT code'>A/N  </a>|  <a href='#' class='tip-bottom' title='IBAN Billing address'>Paragon Futsal </a></td>
                      <td class='right'><strong>Ubah Status Pembayaran</strong> <br>
                        </td>
                        
						<td class='right'>
						<form action='$loadModule?load=boking&action=ubahStatus' method='POST' enctype='multipart/form-data'>
						<input type='hidden' name='id' value='$_data[kdBoking]'>
						";
						if($_data['statusBayar']=="L"){
							echo"
							<input type='radio' value='L' name='rbStatus' checked> Lunas
							<input type='radio' value='B' name='rbStatus'> Belum Lunas
							";
							
							
							}else{
								echo"
							<input type='radio' value='L' name='rbStatus'> Lunas
							<input type='radio' value='B' name='rbStatus' checked> Belum Lunas
							";
								
								}
						
						
						echo"
						
                    </td>
						
                      
                    </tr>
                  </tbody>
                </table>
                <div class='pull-right'>
                  <h4><span>TOTAL BERSIH:&nbsp;Rp. $totalRp</span></h4>
                  <br>
				   
                  <button  type='submit' class='btn btn-primary btn-large pull-right'><i class='icon-save'></i>&nbsp Simpan Perubahan</button>
				  </form>
				  </div>
				 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>";
 ?>
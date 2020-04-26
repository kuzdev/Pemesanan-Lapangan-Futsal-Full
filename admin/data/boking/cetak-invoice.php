<!DOCTYPE html>
<html lang="en">
<head>
<title>Cetak Invoice</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../../css/matrix-style.css" />
<link rel="stylesheet" href="../../css/matrix-media.css" />
<link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<?php
ob_start();
error_reporting(0);
include"../../../appConfig/conn.php";
include"../../../appConfig/libb.php";
include"../../../appConfig/region.php";

$SQL=mysql_query("SELECT * FROM tboking WHERE kdBoking='$_POST[id]'");

$_data=mysql_fetch_array($SQL) or die (mysql_error());
$tglInvoice=region($_data['tglInvoice']);
$totalRp=idr_f($_data['totalBayar']);
echo"

<div class='container-fluid'>
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
					<td colspan='2'>
					<a href='javascript:;' onClick='window.print()'>Cetak Bukti Transaksi</a>
					</td>
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
                      <td class='msg-invoice' width='85%'><h4>Invoice Boking Lapangan </h4>
                        <a href='#' class='tip-bottom' title='Kasir'></a> |  <a href='#' class='tip-bottom' title='BCA (78889991) - Mandiri (788928292)-BRI (082928938) '>BCA (78889991) - Mandiri (788928292)-BRI (082928938) </a> |  <a href='#' class='tip-bottom' title='SWIFT code'>A/N  </a>|  <a href='#' class='tip-bottom' title='IBAN Billing address'>Paragon Futsal </a></td>
                      <td>
					     <div class='pull-right'>
                  <h4><span>TOTAL :&nbsp;Rp. $totalRp</span></h4>
                  <br>
				   
				  </div>
					  </td>
                    </tr>
                  </tbody>
                </table>
             
				 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>";
 ?>

  
  


<!--end-Footer-part--> 
<script src="../../js/jquery.min.js"></script> 
<script src="../../js/jquery.ui.custom.js"></script> 
<script src="../../js/bootstrap.min.js"></script> 
<script src="../../js/matrix.js"></script>
</body>
</html>

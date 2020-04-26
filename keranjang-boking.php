  <div class="container">
        <div class="jumbotron text-center bg-transparent margin-none">
            <h1>KERANJANG PEMESANAN ANDA</h1>
            <p></p>
        </div>
        <div class="page-section">
            <div class="row">
                <div class="col-md-12 col-lg-12">
				 <h4 class="page-section-heading"> DAFTAR RINCIAN PEMESANAN</h4>
                    <div class="panel panel-default">
                        <!-- Data table -->
                       <table class="table">
                                  <tbody>
                                  <tr>
                                  <td colspan="6" align="left">
                                  <?php
								  $query=mysql_query("SELECT MAX(noInvoice) As noInvoice FROM tboking");
							$kode=mysql_fetch_array($query);
							$kodeJadi=$kode["noInvoice"];
							$noOrder=(int)substr($kodeJadi,4,6);
							$noOrder++;
							$char = "INV-";
							$newID = $char . sprintf("%06s", $noOrder);
                            echo"<label class='label label-danger'><h5>
                            <font color='#FFFFFF'>INVOICE : <strong># $newID </font></strong></h5></label>";
								  ?>
                                  
                                  </td>
                                  </tr>
                                    <tr>
                                      <td>No</td>
                                      <td>Tgl Jadwal</td>
                                      <td>Nomor Lapangan</td>
                                      <td>Jam</td>
                                      <td>Harga</td>
                                      <td>Batalkan Booking</td>
                                    </tr>
                                    <?php
						$boking=mysql_query("SELECT * FROM tboking_temp WHERE idSession='$_SESSION[username]'");
						$no=1;
						if (mysql_num_rows($boking) >0)
             {
                
            
            while($_data=mysql_fetch_array($boking)){
							$tgl=region($_data['tglBokingTemp']);
							$harga=idr_f($_data['hargaTemp']);
						
							echo"
							 <tr>
                                      <td>$no</td>
                                      <td>$tgl</td>
                                      <td>$_data[nomorLapangan]</td>
                                      <td>$_data[jamBokingTemp]</td>
                                      <td>$harga</td> 

                                      <td>	<a href='prosesBoking.php?p=boking&action=hapusData&id=$_data[kdBokingTemp]' class='btn btn-danger btn-xs' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete'><i class='fa fa-times'></i></a></td>
                                    </tr>
							
							";
							
							
							}
									?>

               <?php 
                   } else { echo "
                     <td align='center'><h3>Belum ada Transaksi</h3></td>";
                                      }
                ?>


                                  
                                    <tr>
                                      <td colspan="3">&nbsp;</td>
                                      <td><h3><strong>TOTAL BAYAR</strong></h3></td>
                                      <?php
									  $Total = mysql_query("SELECT SUM(subTotalTemp) AS subtotal FROM tboking_temp WHERE idSession='$_SESSION[username]'");
									  $tot=mysql_fetch_array($Total);
									  $tott=$tot['subtotal'];
									  $totRp=idr_f($tott);
									  echo"<td colspan='2'><label class='label label-primary'><h4><strong>Rp. $totRp</strong></h4></label></td>";
									  ?>
                                      
                                    </tr>
                                    <tr>
                                       <!-- <td colspan="4">   
                                     <a href='?p=tampil-jadwal'> <button class="btn btn-success">Pilih Lapangan lagi</button>  </td> -->
                                    <td colspan="8" align="right">   
                                     <a href='?p=rincian-data-boking'> <button class="btn btn-success">Lanjutkan Transaksi</button>  </td>

                                     
                                    </tr>
                                  </tbody>
                                </table>
                                   
                                              
                    </div>
                </div>
            </div>
        </div>
    </div>

        
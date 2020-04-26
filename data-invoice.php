  <div class="container">
        <div class="jumbotron text-center bg-transparent margin-none">
            <h1>DATA INVOICE ANDA</h1>
            <p></p>
      <!--   </div>
        <div class="page-section"> -->
            <div class="row">
                <div class="col-md-12 col-lg-12">
				 <h4 class="page-section-heading"> DAFTAR DATA INVOICE </h4>
                    <div class="panel panel-default">
                        <!-- Data table -->
                        <table data-toggle="data-table" class="table" cellspacing="0" width="100%">
                             <thead>
                                        <tr>
                                            <th>Tgl.Invoice</th>
                                            <th>No.Invoice</th>
                                            <th>Atas Nama</th>
                                            <th>Tgl.Boking </th>
                                            <th>Nomor Lapangan</th>
                                            <th>Jam</th>
                                            <th>Harga</th>
                                            <th>Total Bayar</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                     	  <tr>
                                            <th>Tgl.Invoice</th>
                                            <th>No.Invoice</th>
                                            <th>Atas Nama</th>
                                            <th>Tgl.Boking </th>
                                            <th>Nomor Lapangan</th>
                                            <th>Jam</th>
                                            <th>Harga</th>
                                            <th>Total Bayar</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
									<?php
									$no=1;
									$tglSekarang =date("Ymd");
									$SQL="SELECT * FROM tboking,trincian_boking WHERE trincian_boking.kdBoking=tboking.kdBoking AND tboking.usernameBoking='$_SESSION[username]'";
									$ExecuteQuery=mysql_query($SQL)or die(mysql_error());
									
									if($no%2==1){
										$class="odd gradeX";
																			
										}else{
											$class="even gradeC";
										}
										while($_data=mysql_fetch_array($ExecuteQuery)){
										$tglInvoice= region($_data['tglInvoice']);
										$tglBoking= region($_data['tglBoking']);
										$harga=idr_f($_data['hargaBoking']);
										$total=idr_f($_data['totalBayar']);
										
										echo"
										<tr class=$class>
                                            <td>$tglInvoice</td>
											<td>$_data[noInvoice]</td>
                                            <td>$_data[an]</td>
											<td>$tglBoking</td>
                                            <td>$_data[noLapangan]</td>
											<td>$_data[jamBoking]</td>
											<td>$harga</td>
											<td>Rp. $total</td>
											
                                            <td>";
											if($_data['statusBayar']=="B"){
												echo"<label class='label label-danger'>Belum Lunas</label>";
																							
												}elseif($_data['statusBoking']=="L"){
													echo"
													<label class='label label-success'>Lunas</label>
													";
													
													}
											
											
											echo"
											</td>
										<td>
							
									<a href='?p=cetak-invoice&id=$_data[kdBoking]'><button class='btn btn-success'><i class='fa fa-print'></i>&nbsp; Cetak</button></a>
									</td>
											
							        </tr>
                                        
										
										";
										$no++;
										}
									?>
                                       
                                      
                                    </tbody>
                        </table>
                        <!-- // Data table -->
                    </div>
                </div>
   <!--          </div> -->
        </div>
    </div>
        
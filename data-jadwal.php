  <div class="container">
        <div class="jumbotron text-center bg-transparent margin-none">
            <h1>Daftar Jadwal Lapangan Paragon Futsal Yogyakarta</h1>
            <p></p>
       
            <div class="row">
                <div class="col-md-12 col-lg-12">
				 <h4 class="page-section-heading"> DAFTAR JADWAL LAPANGAN </h4>
                    <div class="panel panel-default">
                        <!-- Data table -->
                        <table data-toggle="data-table" class="table" cellspacing="0" width='100%'>
                             <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tgl.Jadwal</th>
                                            <th>Nomor Lapangan </th>
                                            <th>Jam </th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                           
                                        </tr>
                                    </thead>
                                 <!--    <tfoot>
                                     	    <th>No</th>
                                            <th>Tgl.Jadwal</th>
                                            <th>Nomor Lapangan </th>
                                            <th>Jam </th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                    </tfoot> --> 
                                    <tbody>
									<?php
									$no=1;
									$tglSekarang =date("Ymd");
									$SQL="SELECT * FROM tjadwal,tlapangan,tjam WHERE 
										  tjadwal.kdLapangan=tlapangan.kdLapangan AND
										  tjadwal.kdJam=tjam.kdJam AND tjadwal.tglJadwal > '$tglSekarang' ORDER BY 
										  tjadwal.tglJadwal DESC ";
									$ExecuteQuery=mysql_query($SQL)or die(mysql_error());
									
									if($no%2==1){
										$class="odd gradeX";
																			
										}else{
											$class="even gradeC";
										}
										while($_data=mysql_fetch_array($ExecuteQuery)){
										$tglJadwal= region($_data['tglJadwal']);
										$harga=idr_f($_data['harga']);
										
										echo"
										<tr class=$class>
                                            <td>$no</td>
											<td>$tglJadwal</td>
                                            <td>$_data[noLapangan]</td>
                                            <td>$_data[jam]</td>
											<td>$harga</td>
                                            <td>";
											if($_data['statusBoking']=="B"){
												echo"<label class='label label-danger'>Terpakai</label>";
																							
												}elseif($_data['statusBoking']=="R"){
													echo"
													<label class='label label-success'>Tersedia</label>
													";
													
													}
											
											
											echo"
											</td>
										<td>";
							
							if($_data['statusBoking']=="R"){
								echo"
								<a href='prosesBoking.php?p=boking&action=tambah-boking&id=$_data[kdJadwal]'><button type='button' class='btn btn-success'>Boking</button>
										</a>

								";
								
								
								}else{
									
									
									}
										
							echo"			
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
            </div>
     
    </div>
        
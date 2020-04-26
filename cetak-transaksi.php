 <?php
 $SQL =mysql_query("SELECT * FROM tboking WHERE kdBoking='$_GET[id]'");
 $_data=mysql_fetch_array($SQL);
 $tgl = region($_data['tglInvoice']);
 $totalBayar=idr_f($_data['totalBayar']);
 echo"
  <div class='container'>
        <div class='jumbotron text-center bg-transparent margin-none'>
            <h1>RINCIAN TRANSAKSI ANDA</h1>
            <p></p>
        </div>
        <div class='page-section'>
            <div class='row'>
                <div class='col-md-12 col-lg-12'>
				 <h4 class='page-section-heading'></h4>
                    <div class='panel panel-default'>
                       <div class='panel-body'>
                            <table class='table'>
  <tbody>
    <tr>
      <td colspan='6' align='center'><h3><strong>#RINCIAN TRANSAKSI ANDA</strong></h3></td>
    </tr>
    <tr>
      <td width='30%'><h4><strong>PARAGON FUTSAL YOGYAKARTA</strong></h4></td>
      <td colspan='2'><strong>RINCIAN IDENTITAS</strong></td>
      <td colspan='3'><strong>RINCIAN INVOICE</strong></td>
    </tr>
    <tr>
      <td>JL.SUPRAPTO - 0561 000 999</td>
      <td width='21%'>USERNAME MEMBER</td>
      <td width='15%'>$_data[usernameBoking]</td>
      <td width='15%'>NO INVOICE</td>
      <td colspan='2'><strong># $_data[noInvoice]</strong></td>
    </tr>
    <tr>
      <td>Silahkan Transfer Ke No. Rekening : <br>
      - BCA (071828282)<br>
       - BRI (829283838)<br>
       - BNI (83984490)</td>
      <td>ATAS NAMA</td>
      <td><strong><label class='label label-primary'>$_data[an]</label></strong></td>
      <td>STATUS</td>
      <td colspan='2'>";
	  if($_data['statusBayar']=="L"){
		  echo"<strong><label class='label label-success'>LUNAS</label></strong>";
		  }elseif($_data['statusBayar']=="B"){
			  echo"<strong><label class='label label-danger'>BELUM LUNAS</label></strong>";
			  
			  
			  }
	  echo"</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>ALAMAT</td>
      <td>$_data[alamat]</td>
      <td>TGL. INVOICE</td>
      <td colspan='2'>$tgl</td>
    </tr>
    <tr>
      <td rowspan='2'><strong>RINCIAN BOKING</strong></td>
      // <td>EMAIL</td>
      // <td>$_data[email]</td>
      <td><h4><strong>TOTAL BAYAR</strong></h4></td>
      <td colspan='2'><h4><label class='label label-success'>Rp. $totalBayar</label></h4></td>
    </tr>
    <tr>
      <td>KONTAK</td>
      <td>$_data[kontak]</td>
      <td>&nbsp;</td>
      <td width='12%'>&nbsp;</td>
      <td width='7%'>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>TGL.BOKING</strong></td>
      <td><strong>JAM</strong></td>
      <td><strong>NOMOR LAPANGAN</strong></td>
      <td><strong>HARGA</strong></td>
      <td colspan='2'><strong>SUBTOTAL</strong></td>
    </tr>";
	$rincian=mysql_query("SELECT * FROM trincian_boking WHERE kdBoking='$_data[kdBoking]'");
	while($r=mysql_fetch_array($rincian)){
		$tglboking=region($r['tglBoking']);
		$harga=idr_f($r['hargaBoking']);
		$subtotal = idr_f($r['subTotal']);
		echo"
		<tr>
      <td><label class='label label-primary'><strong>$tglboking</strong></label></td>
      <td><label class='label label-primary'><strong>$r[jamBoking]</strong></label></td>
      <td><label class='label label-primary'><strong>$r[noLapangan]</strong></label></td>
      <td><label class='label label-primary'><strong>Rp. $harga</strong></label></td>
      <td colspan='2'><label class='label label-danger'><strong>Rp. $subtotal</strong></label></td>
    </tr>
		
		";
		
		}
    echo"
    <tr>
      <td colspan='10' align='right'><a href='javascript:; onClick=window.print()'><button class='btn btn-primary'><i class='fa fa-print'></i>&nbsp;Cetak Transaksi</button></td>

    </tr>
  </tbody>
</table>


                        </div>
                                   
                                              
                    </div>
                </div>
            </div>
        </div>
    </div>

        
 
 
 ";
 
 ?>
 
 
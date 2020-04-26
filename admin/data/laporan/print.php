<?php ob_start(); ?>
<html>
<head>
	<title>Cetak PDF</title>
	<style>
		table {
			border-collapse:collapse;
			table-layout:fixed;width: auto;
		}
		table td {
			word-wrap:break-word;
			width: 10%;
		}
	</style>
</head>
<body>
	<?php
	// Load file koneksi.php
	include"koneksi.php";   

	if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter
		$filter = $_GET['filter']; // Ambil data filder yang dipilih user

		if($filter == '1'){ // Jika filter nya 1 (per tanggal)
			$tgl = date('d-m-y', strtotime($_GET['tanggal']));

			echo '<b>Data Transaksi Tanggal '.$tgl.'</b><br /><br />';

			$query = "SELECT * FROM tboking WHERE DATE(tglInvoice)='".$_GET['tanggal']."'"; // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
		}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
			$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

			echo '<b>Data Transaksi Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />';

			$query = "SELECT * FROM tboking WHERE MONTH(tglInvoice)='".$_GET['bulan']."' AND YEAR(tglInvoice)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
		}else{ // Jika filter nya 3 (per tahun)
			echo '<b>Data Transaksi Tahun '.$_GET['tahun'].'</b><br /><br />';

			$query = "SELECT * FROM tboking WHERE YEAR(tglInvoice)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
		}
	}else{ // Jika user tidak memilih filter
		echo '<b>Semua Data Transaksi</b><br /><br />';

		$query = "SELECT * FROM tboking ORDER BY tglInvoice"; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
	}
	?>
	<table border="1" cellpadding="8" >
	<!-- 	<center>
			<img src="download.jpg" style="margin-top:100px;">
		</center> -->
	    <tr>
            <!-- <td><b>Tanggal</b></td> -->
            <td><b>Kode Boking</b></td>
            <td><b>No. Invoice</b></td>
            <td><b>Tgl Invoice</b></td>
            <td><b>User Name</b></td>
            <td><b>Nama</b></td>
            <td><b>Alamat</b></td>
            <td><b>Kontak</b></td>
            <td><b>Status</b></td>
            <td><b>Harga</b></td>
    </tr>



	<?php
	$sql = mysql_query( $query); // Eksekusi/Jalankan query dari variabel $query
	$row = mysql_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

	if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
		while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
			$tgl = date('d-m-Y', strtotime($data['tglInvoice'])); // Ubah format tanggal jadi dd-mm-yyyy

 			echo "<tr>";
            // echo "<td>".$tgl."</td>";
            echo "<td>".$data['kdBoking']."</td>";
            echo "<td>".$data['noInvoice']."</td>";
            echo "<td>".$data['tglInvoice']."</td>";
            echo "<td>".$data['usernameBoking']."</td>";
            echo "<td>".$data['an']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td>".$data['kontak']."</td>";
            echo "<td>".$data['statusBayar']."</td>";
            echo "<td>".$data['totalBayar']."</td>";
        	echo "</tr>";    
			
			
			$total =+ $data['totalBayar'];
			
		}
		$query = mysql_query("SELECT SUM(totalBayar) AS total FROM tboking ");
		while ($row = mysql_fetch_array($query)){

		

            echo "<tr cellspacing='10' border='0'>";
			echo "<td align='right' colspan='8'><b > Total</b></td>";
			// $total = 0;  
			
            echo "<td>".$row['total']."</td>";
			echo "</tr>";
		}
	}else{ // Jika data tidak ada
		echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
	}
	?>
	</table>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

require_once('plugin/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A3','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Transaksi.pdf', 'D');
?>

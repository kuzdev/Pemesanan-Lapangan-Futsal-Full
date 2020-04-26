
 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=laporan" class="current">Module Laporan</a> </div>
    <h1 >Data Laporan</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">


      <form method="get" action="">
        <label><b>Filter Berdasarkan</b></label><br>
        <select name="filter" id="filter">
            <option value="">Pilih</option>
            <option value="1">Per Tanggal</option>
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
        </select>
        <br />

        <div id="form-tanggal">
            <label>Tanggal</label><br>
            <input type="text" name="tanggal" class="input-tanggal" />
            <br /><br />
        </div>

        <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan">
                <option value="">Pilih</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br /><br />
        </div>

        <div id="form-tahun">
            <label>Tahun</label><br>
            <select name="tahun">
                <option value="">Pilih</option>
                <?php
                $query = "SELECT YEAR(tglInvoice) AS tahun FROM tboking GROUP BY YEAR(tglInvoice)"; // Tampilkan tahun sesuai di tabel transaksi
                $sql = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query

                while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo '<option value="'.$data['tahun'].'">'.$data['tahun'].'</option>';
                }
                ?>
            </select>
            <br /><br />
        </div>

        <button type="submit">Tampilkan</button>
        <a href="">Reset Filter</a>
    </form>
    <hr />


    <?php
    if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
        $filter = $_GET['filter']; // Ambil data filder yang dipilih user

        if($filter == '1'){ // Jika filter nya 1 (per tanggal)
            $tgl = date('d-m-Y', strtotime($_GET['tanggal']));

            echo '<b>Data Transaksi Tanggal '.$tgl.'</b><br /><br />';
            echo '<a href="print.php?filter=1&tanggal='.$_GET['tanggal'].'">Cetak PDF</a><br /><br />';

            $query = "SELECT * FROM tboking WHERE DATE(tglInvoice)='".$_GET['tanggal']."'"; // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
        }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

            echo '<b>Data Transaksi Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />';
            echo '<a href="print.php?filter=2&bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'">Cetak PDF</a><br /><br />';

            $query = "SELECT * FROM tboking WHERE MONTH(tglInvoice)='".$_GET['bulan']."' AND YEAR(tglInvoice)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
        }else{ // Jika filter nya 3 (per tahun)
            echo '<b>Data Transaksi Tahun '.$_GET['tahun'].'</b><br /><br />';
            echo '<a href="print.php?filter=3&tahun='.$_GET['tahun'].'">Cetak PDF</a><br /><br />';

            $query = "SELECT * FROM tboking WHERE YEAR(tglInvoice)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
        }
    }else{ // Jika user tidak mengklik tombol tampilkan
        echo '<b>Semua Data Transaksi</b><br /><br />';
        echo '<a href="print.php">Cetak PDF</a><br /><br />';

        $query = "SELECT * FROM tboking ORDER BY tglInvoice"; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
    }
    ?>
   
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5> Data Laporan</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <table border="1" cellpadding="8">
    <tr>
            <td>Tanggal</td>
            <td>kd Boking</td>
            <td>no Inv</td>
            <td>tgl Inv</td>
            <td>Nama</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Kontak</td>
            <td>Status</td>
            <td>Harga</td>
    </tr>

              </thead>
              <tbody>

 <?php
    $sql = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query
    $row = mysql_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

    if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
        while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
            $tgl = date('d-m-Y', strtotime($data['tglInvoice'])); // Ubah format tanggal jadi dd-mm-yyyy

            echo "<tr>";
            echo "<td>".$tgl."</td>";
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
            $total += $data['totalBayar'];
        }

            echo "<tr cellspacing='10' border='0'>";
            echo "<td align='right' colspan='9'><b > Total</b></td>";
        
            echo "<td>".$total."</td>";
            echo "</tr>";
    }else{ // Jika data tidak ada
        echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
    }
    ?>
    </table>
               
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
 
   </script>
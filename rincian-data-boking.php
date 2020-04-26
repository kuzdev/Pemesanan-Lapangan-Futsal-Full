  <?php 
  $id = $_SESSION['username'];
  $nm = $_SESSION['nmLengkap'];
  $kn = $_SESSION['kontak'];
  $al = $_SESSION['alamat']
  


  ?>
  <div class="container">
        <div class="jumbotron text-center bg-transparent margin-none">
            <h1>RINCIAN INFORMASI PEMESAN</h1>
            <p></p>
        </div>
        <div class="page-section">
            <div class="row">
                <div class="col-md-12 col-lg-12">
				 <h4 class="page-section-heading"> Isilah Data Anda Dengan Lengkap dan Benar</h4>
                    <div class="panel panel">
                       <div class="panel-body">
                            <form action="prosesBoking.php?p=boking&action=selesai-boking" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group"><label for="">User</label>
                                            <input type="text" name="" class="form-control" value="<?= $id ?>">
                                        </div>
                                         <div class="form-group"><label for="">Nama</label>
                                            <input type="text" name="nmLengkap" class="form-control" value="<?= $nm ?>">
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-4">
                                       
                                        <div class="form-group"><label for="">No HP</label>
                                            <input type="number" name="kontak" class="form-control" value="<?= $kn?>">
                                        </div>
                                    <div class="col-md-4">
                                       
                                       <div class="form-group"><label for="alamat">Alamat</label>
                                           <input type="text" name="alamat" class="form-control" value="<?= $al?>">
                                    </div>
                                         <button type="submit" class="btn btn-primary">Selesaikan Boking</button>
                                        
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>             
                    </div>
                </div>
            </div>
        </div>
    </div>

        
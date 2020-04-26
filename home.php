
<div class="parallax cover overlay cover-image-full home">
                <img class="parallax-layer" src="assets/images/cover.jpg" alt="Learning Cover" />
                <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-speed="8" 

                    data-opacity="true">
                    <div class="v-center">
                        <div class="page-section overlay-bg-white-strong relative paper-shadow" 
                        data-z="1">
                            <h4 class="text-display-1 margin-v-0-15 display-inline-block">PARAGON FUTSAL YOGYAKARTA</h4>
                            
                            <?php
                                if(isset($_SESSION['username'])){
                                    echo' <p class="text-subhead">Selamat Datang '.$_SESSION[nmLengkap].' di PARAGON Futsal Yogyakarta</p>';
                                    
                                }else{
                                    echo'
                                        <a class="btn btn-green-500 btn-md paper-shadow" data-hover-z="2" 
                                        data-animated data-toggle="modal" 
                                        href="#modal-overlay-signup">DAFTAR MEMBER PARAGON SEKARANG</a>
                                    ';

                                }

                            ?>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="modal grow modal-overlay modal-backdrop-body fade modal-md" id="modal-overlay-signup">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <div class="modal-dialog ">
                    <div class="v-cell">
                        <div class="modal-content">
                            <div class="modal-body" width="auto;">
                                <div class="wizard-container wizard-1" id="wizard-demo-1">
                                    <div data-scrollable-h>
                                        <ul class="wiz-progress">
                                            <li class="active">Mulai Akun</li>
                                            <li>Rincian</li>
                                            <li>Informasi Kontak</li>
                                        </ul>
                                    </div>
                                    <form width="auto" action="simpan-member.php" method="POST" data-toggle="wizard"
                                        class="max-width-320 h-center" enctype="multipart/form-data">
                                        <fieldset class="step relative paper-shadow form-horizontal" data-z="2">
                                            <div class="page-section-heading">
                                                <h2 class="text-h3 margin-v-0">Mulai Membuat Akun Anda</h2>
                                                <h3 class="text-h4 margin-v-10 text-grey-400">Silahkan Isikan Klik Next
                                                    Untuk Melanjutkan</h3>
                                            </div>


                                            <div class="text-right">
                                                <button type="button" class="wiz-next btn btn-primary">Next</button>
                                            </div>
                                        </fieldset>


                                        <fieldset class="step relative paper-shadow" data-z="2">
                                            <div class="page-section-heading">
                                                <h2 class="text-h3 margin-v-0">LENGKAPI DATA AKUN ANDA</h2>
                                                <h3 class="text-h4 margin-v-10 text-grey-400">Klik Line Untuk Mengisi
                                                    Data
                                                </h3>
                                            </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"><label for="">Username</label>
                                                <input type="text"  name="txtUsername" class="form-control" id="wiz-lusername" 
                                                placeholder="atur username" >
                                            </div>
                                        <div class="form-group"><label for="">Password</label>
                                                <input type="password" id="wiz-lpass" name="txtPassMember" placeholder="Password"  
                                                 class="form-control" >
                                        </div>
                                         <div class="form-group"><label for="">Nama Lengkap</label>
                                                <input type="text" id="wiz-lname" name="txtNmLengkap" placeholder="Nama Lengkap" 
                                                class="form-control" >
                                            </div>
                                           
                                    </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <button type="button"
                                                        class="wiz-prev btn btn-default">Previous</button>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <button type="button" class="wiz-next btn btn-primary">Next</button>
                                                </div>
                                            </div>
                                        </fieldset>


                                        <fieldset class="step relative paper-shadow" data-z="2">
                                            <div class="page-section-heading">
                                                <h2 class="text-h3 margin-v-0">Informasi Kontak</h2>
                                                <h3 class="text-h4 margin-v-10 text-grey-400">Klik Line Untuk Mengisi Data
                                                </h3>
                                            </div>

                                           <!--  <div class="form-group form-control-material">
                                                <textarea name="txtAlamat" rows="5" class="form-control"
                                                    id="wiz-address" placeholder="Alamat"  ></textarea>
                                                 <label for="txtAlamat">Alamat tinggal kamu?</label>

                                            </div>
                                                </div> -->
                                        <div class="form-group"><label for="">Alamat</label>
                                                <input type="text" id="wiz-lpass" name="txtAlamat" placeholder="Alamat kamu sekarang?"
                                                 for="txtAlamat"  class="form-control" >
                                        </div>
                                        <div class="form-group"><label for="">Kontak</label>
                                                <input type="number" id="wiz-lpass" name="txtKontak" placeholder="Nomor Whatsapp kamu?"
                                                 for="txtKontak"  class="form-control" >
                                        </div>
                                            
                                            <!-- 
                                            <div class="form-group form-control-material">
                                                <input name="txtKontak" class="form-control" type="number" id="wiz-nohp1"
                                                    placeholder="Nomor HP/ Telpon" maxlength="12" />
                                                 <label for="txtKontak">Nomor telepon/Whatsapp</label>

                                            </div> -->



                                            <div class="form-group form-control-material">

                                                <label for="wiz-photo">Upload Foto:</label>
                                            
                                            <div class="form-group form-control-material">
                                                <input class="form-control" type="file" id="wiz-photo" name="upPhoto" />
                                                </div>
                                            </div> <br>

                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <button type="button"
                                                        class="wiz-prev btn btn-default">Previous</button>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                                </div>
                                            </div>
                                        </fieldset>

                                 

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> </div>

    <marquee bgcolor="white" hspace="7" SCROLLAMOUNT="10"><b>Selamat datang, selamat menikmati layanan pemesanan tiket lapangan futsal berbasis Online</b></marquee>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <div class="page-section">
                    <div class="width-350 width-300-md width-100pc-xs paragraph-inline">
                        <div class="embed-responsive embed-responsive-16by9">
                          <img src='assets/images/profil.jpg'>
                        </div>
                    </div>
                 
                 <h2>Seklias Tentang Paragon</h2> <br>
                    <p align="justify">
                       Paragon Futsal merupakan futsal center yang berlokasi di Jalan Kabupaten KM.0,5, Nogotirto, Gamping, Nogotirto, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta. Memiliki tiga lapangan yang didukung dengan 2 Line Syntethic Grass, 1 Line Avacourt ukuran standar internasional (ukuran 28 x 18 m), toilet bersih & kamar mandi air hangat, ruang tunggu nyaman, serta parkir luas, tersedia pula kantin pada Paragon Futsal Yogyakarta.  
                    </p>
                    <br/>  <br/>  <br/> <br>
                  
                    <div>
                        <h2>Alamat Paragon</h2> <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15812.47243669991!2d110.3412948!3d-7.7772994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x936332fb1001af32!2sParagon%20Futsal!5e0!3m2!1sid!2sid!4v1580416573214!5m2!1sid!2sid" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" border="1"></iframe>
                    </div>

                    
    



</div>

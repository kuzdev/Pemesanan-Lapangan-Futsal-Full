 <div class='container'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#main-nav'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>

                <div class='navbar-brand navbar-brand-logo'>
                   <img width='100%;' src='assets/images/imglogo.png'>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse' id='main-nav'>
                <ul class='nav navbar-nav navbar-nav-margin-left'>
                    <li class='active'>
                        <a href='index.php'>Home</a>
                    </li>
                    <li><a href='?p=cara-boking'>Cara Boking </a></li>

                        <li><a href='?p=info-lapangan'>Info lapangan </a></li>
                    
                    <li class=''>
                        <a href='?p=tampil-jadwal'>Pesan Lapangan</a>
                    </li>
                   

                   
                    
                 <!--        
                    <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Pusat Informasi  <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                            <li><a href='?p=profil'>Profil </a></li>
                          
                            <li><a href='?p=cara-boking'>Cara Boking Online </a></li>
                          </ul>
                    </li>
 -->
                 
               

                   
                        <?php
                        session_start(); 
                        if(isset($_SESSION['username'])){
                            echo"
                        <li class='dropdown'>
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Transaksi Kamu<span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                           
                               <li><a href='?p=keranjang-boking'>Data Keranjang</a></li>
                                <li><a href='?p=tampil-invoice'>Data Invoice</a></li>
                                <li><a href='?p=tampil-history-boking'>History Boking </a></li>

                            </ul>
                        </li>

                            ";


                        }

                        ?>
                        
                    
                </ul>
                <div class='navbar-right'>
                    <ul class='nav navbar-nav navbar-nav-bordered navbar-nav-margin-right'>
                        <!-- user -->
                        <?php
                            if(isset($_SESSION['username'])){
                                echo"
                            <li class='dropdown user'>
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown'>";
                            if(isset($_SESSION['foto'])){
                                echo"
 <img src='assets/gambar/member_img/small/small_$_SESSION[foto]' alt='' class='img-circle' /> $_SESSION[nmLengkap]<span class='caret'></span>
                            </a>
                                ";
                            }else{
                                echo"
<img src='assets/gambar/user.png' alt='' class='img-circle' /> $_SESSION[nmLengkap]<span class='caret'></span>
                            </a>

                                ";

                            }
                            echo"
                               
                            <ul class='dropdown-menu' role='menu'>
                            
                                <li><a href='logout.php'><i class='fa fa-sign-out'></i> Logout</a></li>
                            </ul>
                           </li>
                         </ul>
                                ";

                            }else{

                            echo"  <a href='login.php' class='navbar-btn btn btn-primary'>Log In</a>
                            ";

                            }
                        ?>
                      
                            
                     
                        <!-- // END user -->
                 
                  
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
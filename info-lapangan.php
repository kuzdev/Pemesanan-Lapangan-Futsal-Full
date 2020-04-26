 <div class='container'>
        <div class='page-section'>
            <div class='row'>
                <div class='col-md-12 col-lg-9'>
                    <div class='page-section padding-top-none'>
                        <div class='s-container'>
                            <h3 class='text-display-1 margin-top-none'>Info Lapangan Paragon Futsal Yogyakarta</h3>

                        </div>
                        <br/>

                        <?php
                        $SQL=mysql_query("SELECT * FROM tlapangan ORDER BY noLapangan ASC");
                        while($_data=mysql_fetch_array($SQL)){
                            echo"
                             <h4 class='text-display-1 margin-top-none'>Lapangan Nomor : $_data[noLapangan]</h4>
                             <img class='paragraph-inline width-280 clearfix-xs width-100pc-xs' src='assets/gambar/lapangan_img/height/$_data[gambarLapangan]' alt='image' /> 
                             <p style='text-align:justify;'>$_data[deskripsi]</p>
                             
                             <br><br>
                            ";



                        }


                        ?>
                           
                      
                    </div>
                                                       
                </div>
               
            </div>
        </div>
    </div>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("header.php") ?>
    </head>
    <body>
        <!-- PRIMARY NAVIGATION -->
        <?php 
            include("nav_structure.php");
        ?>
        <!--PRIMARY NAVIGATION ENDS HERE -->

        <!-- CAROUSEL STARTS HERE -->
        <?php
            //include("carousel.php");
        ?>
        <!-- CAROUSEL ENDS HERE -->

        
        <!-- START CONTENT -->
        <!-- SOCIAL MEDIA ICONS FLOATING -->
        <?php 
            //include("social_float.php");
        ?>
        <?php 
            $domain = array (
                'contact'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="well"> <h1 style="text-align:center;color:#900;"><?php echo gettext('Hubungi Kami'); ?> </h1></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="text-center header panel-title"><h3><?php echo gettext('Kantor Pusat'); ?></h3></div>
                            </div>
                            <div class="panel-body text-center">
                                <h4> PT Sinarmas Asset Management </h4>

                                <div>
                                Sinar Mas Land Plaza, Menara 3, Lantai 7<br>
                                Jl. M.H Thamrin No. 51, Jakarta 10350 – Indonesia <br>
                                Phone : (021) 392 5550<br>
                                Fax : (021) 392 5539 / (021) 392 7177<br />
                                Email: <a href="mailto:cs@sinarmas-am.co.id">cs@sinarmas-am.co.id</a><br>
                                </div>
                                <hr>
                                <div id="map1" class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.114950722875!2d106.823495!3d-6.18992!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd15fd65626c45ef6!2sSinar+Mas+Land+Plaza+Jakarta!5e0!3m2!1sen!2sid!4v1500057570083" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="text-center header panel-title"><h3><?php echo gettext('Kantor Cabang'); ?></h3></div>
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id ="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse"  href="#jabodetabek"> Jabodetabek </a>
                                        </h4>
                                    </div>
                                    <div id="jabodetabek" class="panel-collapse collapse">
                                        <div class="panel-body text-center">
                                            <h4> Bali </h4>
                                            <div>
                                            Graha Sinarmas, Jl Tantular No. 8, Denpasar - Bali 80234 <br>
                                            <?php echo gettext('Telepon'); ?>: (0361) 229 933 <br>
                                            Fax: (0361) 229 936 <br>
                                            </div>
                                            <br>
                                            
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7888.478953969985!2d115.22799599999999!3d-8.668761!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10fff0556e2f635a!2sSinarmas+Sekuritas.+PT+-+Bali!5e0!3m2!1sen!2sid!4v1500103070372" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4> Bogor </h4>
                                            <div>
                                            Jl Pajajaran No. 38A Warung Jambu - Bogor 16150  <br>
                                            <?php echo gettext('Telepon'); ?>: (021) 831 8282 <br>
                                            Fax: (021) 831 8302 <br>
                                            </div>
                                            <br>

                                            
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7927.26983230958!2d106.808715!3d-6.567679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a9a2e1d5f867a38!2sSinarmas+Sekuritas.+PT+-+Bogor!5e0!3m2!1sen!2sid!4v1500103318422" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4> Fatmawati </h4>
                                            <div>
                                            Golden Plaza Blok B/22 Jl. RS Fatmawati No. 15 - Jakarta 12420  <br>
                                            <?php echo gettext('Telepon'); ?>: (021) 766 8283 <br>
                                            Fax: (021) 766 8231 <br>
                                            </div>
                                            <br>
                                            
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7931.78792211541!2d106.79648600000002!3d-6.27767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc3a18d236cd390c!2sSinarmas+Multifinance.+PT+-+Fatmawati!5e0!3m2!1sen!2sid!4v1500103524530" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>


                                        
                                        </div> <!-- END OF inner PANEL-BODY-->
                                    </div> <!-- end of panel-collapse -->
                                </div> <!-- end of  inner panel default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse"  href="#jabar"> Jawa Barat </a>
                                        </h4>
                                    </div>
                                    <div id="jabar" class="panel-collapse collapse">
                                        <div class="panel-body text-center">
                                            <h4> Bekasi </h4>
                                            <div>
                                            Graha Sinarmas, Jl Tantular No. 8, Denpasar - Bali 80234 <br>
                                            <?php echo gettext('Telepon'); ?>: (0361) 229 933 <br>
                                            Fax: (0361) 229 936 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7888.478953969985!2d115.22799599999999!3d-8.668761!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10fff0556e2f635a!2sSinarmas+Sekuritas.+PT+-+Bali!5e0!3m2!1sen!2sid!4v1500103070372" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4> Kelapa Gading </h4>
                                            <div>
                                            Jl Pajajaran No. 38A Warung Jambu - Bogor 16150  <br>
                                            <?php echo gettext('Telepon'); ?>: (021) 831 8282 <br>
                                            Fax: (021) 831 8302 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7927.26983230958!2d106.808715!3d-6.567679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a9a2e1d5f867a38!2sSinarmas+Sekuritas.+PT+-+Bogor!5e0!3m2!1sen!2sid!4v1500103318422" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4> Mangga Dua </h4>
                                            <div>
                                            Golden Plaza Blok B/22 Jl. RS Fatmawati No. 15 - Jakarta 12420  <br>
                                            <?php echo gettext('Telepon'); ?>: (021) 766 8283 <br>
                                            Fax: (021) 766 8231 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7931.78792211541!2d106.79648600000002!3d-6.27767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc3a18d236cd390c!2sSinarmas+Multifinance.+PT+-+Fatmawati!5e0!3m2!1sen!2sid!4v1500103524530" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4> Permata Hijau </h4>
                                            <div>
                                            Golden Plaza Blok B/22 Jl. RS Fatmawati No. 15 - Jakarta 12420  <br>
                                            <?php echo gettext('Telepon'); ?>: (021) 766 8283 <br>
                                            Fax: (021) 766 8231 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7931.78792211541!2d106.79648600000002!3d-6.27767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc3a18d236cd390c!2sSinarmas+Multifinance.+PT+-+Fatmawati!5e0!3m2!1sen!2sid!4v1500103524530" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            <h4> Sukabumi </h4>
                                            <div>
                                            Golden Plaza Blok B/22 Jl. RS Fatmawati No. 15 - Jakarta 12420  <br>
                                            <?php echo gettext('Telepon'); ?>: (021) 766 8283 <br>
                                            Fax: (021) 766 8231 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7931.78792211541!2d106.79648600000002!3d-6.27767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc3a18d236cd390c!2sSinarmas+Multifinance.+PT+-+Fatmawati!5e0!3m2!1sen!2sid!4v1500103524530" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>




                                        
                                        </div> <!-- END OF inner PANEL-BODY-->
                                    </div> <!-- end of panel-collapse -->
                                </div> <!-- end of  inner panel default -->


                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse"  href="#jateng"> Jawa Tengah </a>
                                        </h4>
                                    </div>
                                    <div id="jateng" class="panel-collapse collapse">
                                        <div class="panel-body text-center">
                                            <h4> Bandung </h4>
                                            <div>
                                            Gedung Bank Sinarmas Lt. 2, Jl. Abdul Rivai no: 2, Bandung. 40171 <br>
                                            <?php echo gettext('Telepon'); ?>:  (022) 421 2536 / (022) 421 2537<br>
                                            Fax:  (022) 426 6691 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.771361685594!2d107.603556!3d-6.904272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7d032aa727bedff!2sSinarmas+Sekuritas!5e0!3m2!1sen!2sid!4v1500114935560" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4> Cilacap </h4>
                                            <div>
                                            Komplek Hotel Tiga Intan, KL RE. Martadinata No. 192 - Cilacap 53212 <br>
                                            <?php echo gettext('Telepon'); ?>: (0282) 538 777 / (0282) 536 224<br>
                                            Fax:  (0282) 538 227 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7907.076673357845!2d108.99906!3d-7.732577!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x70120164167a71c5!2sSinarmas+Sekuritas.+PT+-+Cilacap!5e0!3m2!1sen!2sid!4v1500115039280" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4> Cimahi </h4>
                                            <div>
                                            Jalan Amir Machmud No.491 Cimahi Tengah  <br>
                                            <?php echo gettext('Telepon'); ?>:  022-6646860 <br>
                                            Fax:  022-6647233 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126755.72723141345!2d107.546865!3d-6.876646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ae7c98c816bf37c!2sSekuritas+Sinarmas!5e0!3m2!1sen!2sid!4v1500115129661" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4> Cirebon </h4>
                                            <div>
                                            Gedung Bank Sinarmas Jl .Dr. Wahidin No.29, Cirebon. 45122  <br>
                                            <?php echo gettext('Telepon'); ?>: (0231) 238 805 <br>
                                            Fax:  (0231) 246 556 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7925.0610132920465!2d108.551301!3d-6.704915!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x59b3ae9cb02a56f!2sSinarmas+Sekuritas!5e0!3m2!1sen!2sid!4v1500115194943" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4> Kudus </h4>
                                            <div>
                                            Jl. A Yani Ruko Kav. 16 - Kudus 59317 <br>
                                            <?php echo gettext('Telepon'); ?>:  (0291) 446 322 <br>
                                            Fax:  (0291) 446 322 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7923.2892422971545!2d110.840098!3d-6.813008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdb3d03ffac49aa0c!2sSinarmas+Sekuritas.+PT+-+Kudus!5e0!3m2!1sen!2sid!4v1500115301029" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4> Purwokerto </h4>
                                            <div>
                                            Gedung Bank Sinarmas Jl. S Parman No. 77 - Purwokerto 53141  <br>
                                            <?php echo gettext('Telepon'); ?>:  (0281) 642 244 <br>
                                            Fax:  (0281) 642 244 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7912.663453700677!2d109.243291!3d-7.428494!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x434659ab6c6bb64!2sSinarmas+Sekuritas.+PT+-+Purwokerto!5e0!3m2!1sen!2sid!4v1500115393756" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4> Tasikmalaya </h4>
                                            <div>
                                            Gedung Bank Sinarmas Lantai 2 Jl. Sutisna Senjaya No. 65, Tasikmalaya. 46126  <br>
                                            <?php echo gettext('Telepon'); ?>:  (0265) 311 771 / (0265) 334 733<br>
                                            Fax:  (0265) 335 596 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7914.466726308823!2d108.228119!3d-7.327666!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa0eb219fe7efea5!2sPT+Sinarmas+Sekuritas!5e0!3m2!1sen!2sid!4v1500115457333" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>

                                        
                                        </div> <!-- END OF inner PANEL-BODY-->
                                    </div> <!-- end of panel-collapse -->
                                </div> <!-- end of  inner panel default -->


                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse"  href="#jatim"> Jawa Timur </a>
                                        </h4>
                                    </div>
                                    <div id="jatim" class="panel-collapse collapse">
                                        <div class="panel-body text-center">
                                            <h4> Kediri </h4>
                                            <div>
                                            Gedung Bank Sinarmas, Jl. Erlangga No. 32-34, Kediri - Jawa Timur 41312 <br>
                                            <?php echo gettext('Telepon'); ?>:   (0354) 693 955<br>
                                            Fax:  (0354) 682 770<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7905.499927681402!2d112.021198!3d-7.81627!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc2bb61da4e527b6!2sMultifinance+Sinarmas!5e0!3m2!1sen!2sid!4v1500115682411" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            <h4> Magelang </h4>
                                            <div>
                                            Gedung Bank Sinarmas Lt. 3Jl.Tentara Pelajar No. 3-5, Magelang. 56111 <br>
                                            <?php echo gettext('Telepon'); ?>:  (0293) 360 999<br>
                                            Fax:   (0293) 313 188 <br>
                                            </div>
<br>
                                            <div class="map">
                                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7911.758664370189!2d110.217548!3d-7.478575!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x71206e5f7aff337!2sSekuritas+Sinarmas!5e0!3m2!1sen!2sid!4v1500115758616" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            <h4> Pekalongan</h4>
                                            <div>
                                            Gedung Bank Sinarmas. Lantai 3 Jl.Dr Cipto No. 39, Pekalongan. 51128  <br>
                                            <?php echo gettext('Telepon'); ?>:  (0285) 412 449 <br>
                                            Fax:   (0285) 412 449 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7922.0077002360895!2d109.67798!3d-6.890141!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf8861ee81b925075!2sSinarmas+Sekuritas.+PT+-+Pekalongan!5e0!3m2!1sen!2sid!4v1500115822971" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            <h4> Semarang </h4>
                                            <div>
                                            Sultan Agung Shophouse,Jl.Sultan Agung no.104-106 kav.9, Semarang. 50232 <br>
                                            <?php echo gettext('Telepon'); ?>: (024) 850 2683 / (024) 850 9278 <br>
                                            Fax:   (024) 850 2684<br>
                                            </div>
                                            <br>
                                            <!-- NOT VALID MAP -->
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7925.0610132920465!2d108.551301!3d-6.704915!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x59b3ae9cb02a56f!2sSinarmas+Sekuritas!5e0!3m2!1sen!2sid!4v1500115194943" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div><hr>
                                            <h4> Sidoarjo </h4>
                                            <div>
                                            Ruko Asuransi Sinarmas Lantai 3 Jl. A. Yani No. 3B - Sidoarjo 61219 <br>
                                            <?php echo gettext('Telepon'); ?>: (031) 895 9650 <br>
                                            Fax: (031) 895 9651<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7912.295788894782!2d112.717874!3d-7.448885000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2219505c0fcba787!2sSinarmas+Sekuritas.+PT+-+Sidoarjo!5e0!3m2!1sen!2sid!4v1500115984055" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            <h4> Solo </h4>
                                            <div>
                                            Gedung Bank Sinarmas Jl.Raya Solo Baru. Ruko super makmur II No.10 F &10 G, Solo. 57552 <br>
                                            <?php echo gettext('Telepon'); ?>: (0271) 622 259<br>
                                            Fax: (0271) 623 469<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7909.359088195677!2d110.815392!3d-7.609807000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf272d1ab7be03425!2sSinarmas+Sekuritas.+PT+-+Solo!5e0!3m2!1sen!2sid!4v1500116054671" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            <h4> Tegal</h4>
                                            <div>
                                            Gedung Bank Sinarmas Jl. Jenderal Sudirman no. 2 -Tegal. 52113 <br>
                                            <?php echo gettext('Telepon'); ?>: (0283) 320 184<br>
                                            Fax: (0283) 324 238<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7922.344438467889!2d109.13591000000001!3d-6.869957!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4eda740355dff2a0!2sSinarmas+Sekuritas.+PT+-+Tegal!5e0!3m2!1sen!2sid!4v1500116125132" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                            <hr>
                                            <h4> Yogyakarta</h4>
                                            <div>
                                            Gedung  Bank Sinarmas, Jl.Balapan Kemakmuran no.11. <br>
                                            <?php echo gettext('Telepon'); ?>: (0274) 557 222<br>
                                            Fax: 0274-519626<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63248.97260326883!2d110.38359300000002!3d-7.783380000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd68efe4e935c0a32!2sBank+Sinarmas+-+Balapan+Kemakmuran!5e0!3m2!1sen!2sid!4v1500116201245" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                            <hr>

                                        
                                        </div> <!-- END OF inner PANEL-BODY-->
                                    </div> <!-- end of panel-collapse -->
                                </div> <!-- end of  inner panel default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse"  href="#ntb"> Nusa Tenggara Barat </a>
                                        </h4>
                                    </div>
                                    <div id="ntb" class="panel-collapse collapse">
                                        <div class="panel-body text-center">
                                            <h4> Malang </h4>
                                            <div>
                                            Gedung Bank Sinarmas Jl. Basuki Rachmat No. 58, Malang. 65111<br>
                                            <?php echo gettext('Telepon'); ?>: (0341) 335 888<br>
                                            Fax: (0341) 335 999<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7902.4181928830185!2d112.628928!3d-7.977328000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x50a4e7ee5246d73!2sSinarmas+Sekuritas.+PT+-+Malang!5e0!3m2!1sen!2sid!4v1500116665749" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            
                                            <h4> Mataram </h4>
                                            <div>
                                            Gedung Bank Sinarmas Jl. Pejanggik, Kel: Cilinaya Mataram - Lombok 83125<br>
                                            <?php echo gettext('Telepon'); ?>: (0370) 620 128<br>
                                            Fax: (0370) 620 470 <br>
                                            </div>
<br>
                                            <div class="map">
                                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7890.245999409568!2d116.115444!3d-8.584171!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0ddc3370d7d5b10!2sSinarmas+Sekuritas.+PT+-+Mataram!5e0!3m2!1sen!2sid!4v1500116734451" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            <h4>Surabaya Beverly</h4>
                                            <div>
                                            JL. R.A Kartini  no 59, Surabaya <br>
                                            <?php echo gettext('Telepon'); ?>: 031-5673766<br>
                                            Fax: 031-5673166 <br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7915.322772141979!2d112.736749!3d-7.279315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbe850313e49%3A0x4525e35734a8d833!2sJl.+RA.Kartini+No.59%2C+DR.+Soetomo%2C+Tegalsari%2C+Kota+SBY%2C+Jawa+Timur+60264%2C+Indonesia!5e0!3m2!1sen!2sid!4v1500116828798" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>

                                        
                                        </div> <!-- END OF inner PANEL-BODY-->
                                    </div> <!-- end of panel-collapse -->
                                </div> <!-- end of  inner panel default -->


                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse"  href="#maluku"> Maluku </a>
                                        </h4>
                                    </div>
                                    <div id="maluku" class="panel-collapse collapse">
                                        <div class="panel-body text-center">
                                            <h4>Ambon </h4>
                                            <div>
                                            Gedung Bank Sinarmas Jl. Sam Ratulangi Lt. 2, No. 78 - Ambon 97127<br>
                                            <?php echo gettext('Telepon'); ?>: (0911) 341 055<br>
                                            Fax:  (0911) 341 054<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63703.67251346604!2d128.17!3d-3.705!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x59997d1931e23e6d!2sBank+Sinarmas.+PT+Tbk!5e0!3m2!1sen!2sid!4v1500117021130" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            
                                            <h4> Pontianak </h4>
                                            <div>
                                            Gedung Bank Sinarmas, Jl. Gajah Mada no. 1a/b, Pontianak. 78121<br>
                                            <?php echo gettext('Telepon'); ?>: (0561) 707 1130 / (0561) 585 218<br>
                                            Fax: (0561) 585 298<br>
                                            </div>
<br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.635107896631!2d109.341552!3d-0.035513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7661dfab55f7233!2sSinarmas+Sekuritas.+PT+-+Pontianak!5e0!3m2!1sen!2sid!4v1500117079162" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            

                                        
                                        </div> <!-- END OF inner PANEL-BODY-->
                                    </div> <!-- end of panel-collapse -->
                                </div> <!-- end of  inner panel default -->


                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse"  href="#sum">Sumatera </a>
                                        </h4>
                                    </div>
                                    <div id="sum" class="panel-collapse collapse">
                                        <div class="panel-body text-center">
                                            <h4>Banda Aceh</h4>
                                            <div>
                                            Gedung Asuransi Sinarmas Lt.3 Jl. Sri Ratu Safiatuddin No.45 kel peunayong, Banda Aceh 23122<br>
                                            <?php echo gettext('Telepon'); ?>:(0651) 32822<br>
                                            Fax: (0651) 32821<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7942.499049262063!2d95.33378!3d5.529954000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad3b4348d46b2d05!2sPT+Asuransi+Sinar+Mas!5e0!3m2!1sen!2sid!4v1500117252123" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            
                                            <h4> Lampung </h4>
                                            <div>
                                             Gedung Bank Sinarmas.Lantai II Jl. Ikan Hiu No.3 Teluk Betung, Bandar Lampung 35223<br>
                                            <?php echo gettext('Telepon'); ?>: (0721) 471 358<br>
                                            Fax: (0721) 471 379<br>
                                            </div>
<br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7943.604777198493!2d105.264419!3d-5.446945!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd826fc552779ca55!2sSinarmas+Sekuritas.+PT+-+Bandar+Lampung!5e0!3m2!1sen!2sid!4v1500117343140" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4>Makassar</h4>
                                            <div>
                                            Gedung Bank Sinarmas Jl.Pengayoman N0.182, Makassar<br>
                                            <?php echo gettext('Telepon'); ?>: (0411) 456 789<br>
                                            Fax: (0411) 448 989<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7947.3147934591625!2d119.44210450000002!3d-5.158707!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x795e56b819297b50!2sPT+SINARMAS+SEKURITAS!5e0!3m2!1sen!2sid!4v1500117431765" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            
                                            <h4> Padang </h4>
                                            <div>
                                            Gedung Bank Sinarmas Lt 2 Jl. Damar No. 67 A-B, Padang 25116<br>
                                            <?php echo gettext('Telepon'); ?>: (0751) 811 950<br>
                                            Fax: (0751) 811 948<br>
                                            </div>
<br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7978.553267249416!2d100.354077!3d-0.9441480000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ccd3d2a3320ee17!2sSinarmas+Sekuritas.+PT+-+Padang!5e0!3m2!1sen!2sid!4v1500117504867" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4>Palembang</h4>
                                            <div>
                                            Gedung ASM Jl.Jend Sudirman Km 3,5 No.2937 I / J, Palembang 30129<br>
                                            <?php echo gettext('Telepon'); ?>: (0711) 353 791<br>
                                            Fax:  (0711) 353 921<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7968.9146256513395!2d104.750154!3d-2.970523!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab5771aeaa1bc6bb!2sSinarmas+Sekuritas.+PT+-+Palembang!5e0!3m2!1sen!2sid!4v1500117574562" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                            <hr>
                                            
                                            <h4>Pekanbaru </h4>
                                            <div>
                                             Gedung Bank Sinarmas. Jl. Riau No 105 lantai 2 â€“ Pekanbaru 28155<br>
                                            <?php echo gettext('Telepon'); ?>: (0761) 856 123<br>
                                            Fax: (0761) 859 599<br>
                                            </div>
<br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.288122643618!2d101.429236!3d0.535501!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7dfcd296383f33d!2sSinarmas+Sekuritas.+PT+-+Pekanbaru!5e0!3m2!1sen!2sid!4v1500117665615" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>

                                            <h4>Tanjung Pinang </h4>
                                            <div>
                                            Gedung Bank Sinarmas Lt.3 Jl. Engku Putri No. 41 Lantai 2<br>
                                            <?php echo gettext('Telepon'); ?>: (0771) 312 565<br>
                                            Fax: (0771) 312 863<br>
                                            </div>
<br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1838.0720628824008!2d104.4830338510689!3d1.083717825008162!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b22990c91b91fbc!2sSinarmas+Sekuritas.+PT!5e0!3m2!1sen!2sid!4v1500117764151" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>

                                        
                                        </div> <!-- END OF inner PANEL-BODY-->
                                    </div> <!-- end of panel-collapse -->
                                </div> <!-- end of  inner panel default -->


                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse"  href="#batam"> Batam </a>
                                        </h4>
                                    </div>
                                    <div id="batam" class="panel-collapse collapse">
                                        <div class="panel-body text-center">
                                            <h4>Batam </h4>
                                            <div>
                                            Gedung Bank Sinarmas lantai 3 Komp.Nagoya Hill Blok P No. 12-A, Batam 29432<br>
                                            <?php echo gettext('Telepon'); ?>: (0778) 703 0262<br>
                                            Fax: (0778) 749 3661<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6198.282469558081!2d104.00991914219081!3d1.1452657030758837!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd80906fa8c7bd0db!2sSinarmas+Sekuritas.+PT!5e0!3m2!1sen!2sid!4v1500118053184" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            
                                            <h4> Medan</h4>
                                            <div>
                                            Gedung Bank Sinarmas, JL. Mangkubumi no. 18, Medan. 20151<br>
                                            <?php echo gettext('Telepon'); ?>: (061) 456 4132 / (061) 451 0158<br>
                                            Fax: (061) 456 3810<br>
                                            </div>
<br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7964.035255225297!2d98.679274!3d3.583426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x24da8596ac2d6692!2sSinarmas+Sekuritas.+PT+-+Medan!5e0!3m2!1sen!2sid!4v1500118121200" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            

                                        
                                        </div> <!-- END OF inner PANEL-BODY-->
                                    </div> <!-- end of panel-collapse -->
                                </div> <!-- end of  inner panel default -->


                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse"  href="#sul"> Sulawesi</a>
                                        </h4>
                                    </div>
                                    <div id="sul" class="panel-collapse collapse">
                                        <div class="panel-body text-center">
                                            <h4>Kendari</h4>
                                            <div>
                                            Gedung Bank Sinarmas Lantai 4, Jl. MT. Haryono No. 88 A, Wua â€“ Wua Kendari 93117<br>
                                            <?php echo gettext('Telepon'); ?>: (0401) 319 0738 / (0401) 319 1423<br>
                                            Fax: (0401) 319 0452<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7960.200754993295!2d122.516914!3d-3.999783!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x445eb64831986869!2sSinarmas+Sekuritas.+PT+-+Kendari!5e0!3m2!1sen!2sid!4v1500118233091" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            
                                            <h4>Palu</h4>
                                            <div>
                                            Gedung Bank Sinarmas Lt. 2 Jl. Masjid Raya Lolu No. 10 Palu Sulawesi Tengah 94121<br>
                                            <?php echo gettext('Telepon'); ?>: (0451) 458 482<br>
                                            Fax: (0451) 458 179<br>
                                            </div>
<br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7978.651989571625!2d119.874336!3d-0.9001020000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdacfb8e907c618c5!2sSinarmas+Sekuritas.+PT+-+Palu!5e0!3m2!1sen!2sid!4v1500118310359" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            

                                        
                                        </div> <!-- END OF inner PANEL-BODY-->
                                    </div> <!-- end of panel-collapse -->
                                </div> <!-- end of  inner panel default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse"  href="#kal"> Kalimantan</a>
                                        </h4>
                                    </div>
                                    <div id="kal" class="panel-collapse collapse">
                                        <div class="panel-body text-center">
                                            <h4>Balikpapan</h4>
                                            <div>
                                             Gedung Bank SinarmasLt.2, Jl. Jenderal Sudirman No. 1B-C Pasar Baru, Balikpapan 76113<br>
                                            <?php echo gettext('Telepon'); ?>: (0542) 750 865<br>
                                            Fax: (0542) 750 864<br>
                                            </div>
                                            <br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7966.216936064394!2d114.60096200000001!3d-3.323368!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1fab84aeb90fbb37!2sSinarmas+Sekuritas.+PT+-+Banjarmasin!5e0!3m2!1sen!2sid!4v1500118422177" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <hr>
                                            
                                            <h4>Samarinda</h4>
                                            <div>
                                            Jl.Kh. Ahmad Dahlan No.45 lantai 3, Samarinda 75117<br>
                                            <?php echo gettext('Telepon'); ?>: (0541) 746 564<br>
                                            Fax: (0541) 738 674<br>
                                            </div>
<br>
                                            <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127669.39764989671!2d117.15435400000001!3d-0.49624000000000007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x12f09a5321dca85b!2sBank+Sinarmas!5e0!3m2!1sen!2sid!4v1500118477265" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            

                                        
                                        </div> <!-- END OF inner PANEL-BODY-->
                                    </div> <!-- end of panel-collapse -->
                                </div> <!-- end of  inner panel default -->




                            </div> <!-- END OF PANEL-GROUP -->
                        </div> <!-- end of outer panel body -->
                    </div> <!-- END OF OUTER PANEL DEFAULT -->

                </div>              
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title text-center"> <h3> <?php echo gettext('Agen Penjual'); ?> </h3> </div>
                        </div>
                        <div class="panel-body">
                            <div class="row agen">
                                <div class="col-md-3 col-md-offset-2">
                                    <h5> Sinarmas Sekuritas </h5>
                                    <a href="http://www.sinarmassekuritas.co.id/" target="_blank">
                                        <img class="img-responsive" src="gallery/smlogo.png" alt="Sinarmas Sekuritas">
                                    </a>

                                </div>

                                <div class="col-md-3 col-md-offset-2">
                                    <h5> Sinarmas Bank </h5>
                                    <a href="http://www.banksinarmas.com/id/index.php" target="_blank">
                                        <img class="img-responsive" src="gallery/logobsim.jpg" alt="Sinarmas Bank">
                                    </a>

                                </div>
                            </div> <!-- END OF ROW AGEN -->

                        </div>

                    </div>



                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title text-center"> <h3> <?php echo gettext('Komentar dan Saran'); ?> </h3> </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="form_handler/mail_saran.php">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="fname" name="name" type="text" placeholder="<?php echo gettext('Nama'); ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="email" name="email" type="email" placeholder="Email" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="phone" name="phone" type="tel" placeholder="<?php echo gettext('Telepon'); ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="phone" name="handphone" type="tel" placeholder="Handphone" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <textarea class="form-control" id="message" name="komentar" placeholder="<?php echo gettext('Komentar'); ?>" rows="7"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1 text-center">
                                        <button type="reset" class="btn btn-default btn-lg btn-block">Reset</button>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <div style="font-size:12px;color:grey;text-align:center"><?php echo gettext('Terima kasih atas kepercayaan Anda. Untuk informasi lebih lanjut, silakan hubungi Layanan Pelanggan kami di (021) 5050 7000 atau kirim email ke <a href="mailto:cs@sinarmas-am.co.id"><strong>cs@sinarmas-am.co.id</strong></a>'); ?></div>
                        </form>


                        </div>
                    </div>
                </div> 
            </div>
        </div>
    
                
                <!-- SIDEBAR STARTS HERE -->
                <?php 
                    //include("sidebar.php"); 
                ?>
                <!-- SIDEBAR ENDS HERE -->
        
        <!-- CONTENT ENDS HERE -->

        <!-- FOOTER STARTS HERE -->
        <?php include("footer.php") ?>
        <!-- FOOTER ENDS HERE -->
    
    <!-- To load jQuery and Javascript -->
    <?php include("jsload.php") ?>

    </body>
</html>

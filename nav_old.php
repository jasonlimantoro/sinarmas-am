<?php 
    include ("Locale/setup.php");
    putenv("LANG=$lang");
    setlocale(LC_ALL, $lang);
    bindtextdomain('navigation', 'Locale');
    bind_textdomain_codeset('navigation', 'UTF-8');

    textdomain('navigation');
?>
<div class="navbar navbar-default" role="navigation">
    <div class "container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/sinarmas-am.co.id/"><img class="sinarmas_logo" src="gallery/logo-am.png" alt="Brand" style="position: relative;bottom: 10px;height: 40px;"> </a>
            <a class="navbar-brand"><img src='gallery/reksadana_logo.png' alt="Brand" style="position:relative;bottom:15px;"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/sinarmas-am.co.id/"><?php echo gettext('Beranda') ?></a></li>
                <li><a href="about-us"><?php echo gettext ('Tentang Kami') ?><span class="caret"></span></a>
                    <ul class="dropdown-menu"> 
                        <li><a href="vision-and-mission"><?php echo gettext('Visi dan Misi') ?></a></li>
                        <li><a href="award"><?php echo gettext('Penghargaan') ?></a></li>
                        <li><a href="management"><?php echo gettext('Manajemen') ?></a></li>
                    </ul>
                </li>
                <li><a href="#"><?php echo gettext('Produk') ?><span class="caret"></span></a>
                    <ul class="dropdown-menu"> 
                        <li><a href="#"><?php echo gettext('Reksa Dana Pasar Uang') ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="produk-danamas-rupiah-plus">Danamas Rupiah Plus</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><?php echo gettext('Reksa Dana Pendapatan Tetap') ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="produk-danamas-stabil">Danamas Stabil</a></li>
                                <li><a href="produk-simas-danamas-mantap-plus">Simas Danamas Mantap Plus</a></li>
                                <li><a href="produk-danamas-dolar">Danamas Dollar</a></li>
                                <li><a href="produk-simas-danamas-instrumen-negara">Simas Danamas Instrumen Negara</a></li>
                                <li><a href="produk-danamas-pasti">Danamas Pasti</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><?php echo gettext('Reksa Dana Campuran') ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="produk-simas-syariah-berkembang">Simas Syariah Berkembang</a></li>
                                <li><a href="produk-simas-satu">Simas Satu</a></li>
                                <li><a href="produk-danamas-fleksi">Danamas Fleksi</a></li>
                                <li><a href="produk-simas-satu-prima">Simas Satu Prima</a></li>
                            </ul>
                        <li>
                        <li><a href="#"><?php echo gettext('Reksa Dana Saham') ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="produk-simas-syariah-unggulan">Simas Syariah Unggulan</a></li>
                                <li><a href="produk-simas-danamas-saham">Simas Danamas Saham</a></li>
                                <li><a href="produk-simas-saham-unggulan">Simas Saham Unggulan</a></li>
                                <li><a href="produk-simas-saham-bertumbuh">Simas Saham Bertumbuh</a></li>
                                <li><a href="produk-simas-saham-maksima">Simas Saham Maksima</a></li>
                            </ul>
                        <li>
                        
                        <li><a href="#"><?php echo gettext('Reksa Dana Terproteksi') ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                                <li class="divider"></li>
                                <li class="dropdown-header">Simas Terproteksi</li>
                                
                                <li><a href="produk-simas-terproteksi-5">Simas Terproteksi 5</a></li>
                                <li><a href="produk-simas-terproteksi-6">Simas Terproteksi 6</a></li>
                                <li><a href="produk-simas-terproteksi-7">Simas Terproteksi 7</a></li>
                                <li><a href="produk-simas-terproteksi-8">Simas Terproteksi 8</a></li>
                                <li><a href="produk-simas-terproteksi-9">Simas Terproteksi 9</a></li>
                                <li><a href="produk-simas-terproteksi-10">Simas Terproteksi 10</a></li>
                                
                                <li class="divider"></li>
                                <li class="dropdown-header">Simas Gemilang</li>

                                <li><a href="produk-simas-gemilang-2">Simas Gemilang 2</a></li>
                                <li><a href="produk-simas-gemilang-3">Simas Gemilang 3</a></li>
                                <li><a href="produk-simas-gemilang-4">Simas Gemilang 4</a></li>
                                <li><a href="produk-simas-gemilang-5">Simas Gemilang 5</a></li>
                                <li><a href="produk-simas-gemilang-6">Simas Gemilang 6</a></li>
                                <li><a href="produk-simas-gemilang-7">Simas Gemilang 7</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="research"><?php echo gettext('Riset') ?></a></li>
                <li><a href="#"><?php echo gettext('Simas Kalkulator') ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="calculator-future-investment"><?php echo gettext('Investasi Masa Depan') ?></a></li>
                        <li><a href="calculator-actual-investment"><?php echo gettext('Investasi Aktual') ?></a></li>
                        <li><a href="calculator-routine-investment"><?php echo gettext('Investasi Rutin') ?></a></li>
                        <li><a href="calculator-periodic-investment"><?php echo gettext('Investasi Berkala (SIP)') ?></a></li>
                    </ul>
                </li>
                <li><a href="#"><?php echo gettext('Unduh') ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="download-form"><?php echo gettext('Formulir') ?></a></li>
                        <li><a href="download-prospectus"><?php echo gettext('Prospektus') ?> </a></li>
                    </ul>
                </li>
                
                <li><a href="education"><?php echo gettext('Edukasi') ?></a></li>
                <li><a href="faq">FAQ</a></li>
                <li><a href="contact-us"><?php echo gettext('Hubungi Kami') ?></a></li>

                <li style="height:50px; bottom:5px;"><a href="?lang=<?php echo gettext('en_US'); ?>"><span class="flag flag-<?php echo gettext('us'); ?>"></span></a>
                </li> 
                <!-- <li><a href="#"><?php echo gettext("Bahasa")?><span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?lang=id_ID">
                                <div class="flag flag-id"></div>
                            </a> 
                        </li> 
                        <li><a href="?lang=en_US">
                                <div class="flag flag-us"></div>
                            </a>
                        </li> 
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
</div>
<marquee style="background-color:#900; color:white"> FOR CONSTRUCTION PURPOSES (NOT ORIGINAL WEBSTE) </marquee>

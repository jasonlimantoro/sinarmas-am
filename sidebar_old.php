<?php 
    // FOR PRODUCT NAME 
    putenv("LANG=$lang");
    setlocale(LC_ALL, $lang);

    $domain = array (
        'sidebar',
        'navigation'
    );

    foreach ($domain as $d ) {
        bindtextdomain($d, 'Locale');
        bind_textdomain_codeset($d, 'UTF-8');
    }

    textdomain($domain[0]); // default domain
?>
<div class="col-md-4 col-xs-12">
    <div class="row">
        <div class="col-md-12 col-xs-12" style="top: 35px; padding-left:0px; padding-right:0px;">
            <img class="img-responsive" src="gallery/simas_rol.jpg" style="width:100%;height:auto;">
        </div>
    </div>
    
    <div class="row action" style=
    "margin-bottom: 0px;
    bottom: -10px;
    font-size: 10px;
    left: 20px;
    position: relative;">
        <a href="http://rol.sinarmas-am.co.id/registrasi.asp" target="_blank">
            <?php echo gettext('REGISTRASI'); ?>
        </a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="http://rol.sinarmas-am.co.id/aktivasi.asp" target="_blank">
            <?php echo gettext('AKTIVASI'); ?>
        </a>&nbsp;&nbsp;|&nbsp;&nbsp;

        <a href="http://rol.sinarmas-am.co.id/forgot_password.asp" target="_blank">
            <?php echo gettext('LUPA KATA SANDI'); ?>
        </a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="http://rol.sinarmas-am.co.id/" target="_blank">
            <?php echo gettext('MASUK'); ?>
        </a>
    </div>

    <div class="kelola">
        <a href="kelola">
            <img class="img-responsive" src="gallery/kelola.jpg" style="width: 100%;height: auto;">
        </a>
    </div>
    <div class="sip">
    <a href="sip">
        <img class="img-responsive" src="gallery/sip.jpg" style="width: 100%;">
    </a>
    </div>
    
    <div class="real-time">
        <h3><?php echo gettext('NAB Harian'); ?></h3>
        <span class="updated-date"><?php echo gettext('Update Terakhir: ') ?> </span>
        <div class="panel">
        <!-- Default panel contents -->
        <div class="panel-heading"><?php echo dgettext('navigation', 'Reksa Dana Pasar Uang') ?></div>
        <!-- Table -->
            <table class="table table-hover table-responsive table-bordered" id="RDPU">
                <thead> 
                    <tr>
                        <th><a href ="produk-danamas-rupiah-plus">Danamas Rupiah Plus</th>
                        <th> </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr class="update-table">
                        <td id="nab0"> </td>
                        <td>  </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        <div class="panel">
        <!-- Default panel contents -->
        <div class="panel-heading"><?php echo dgettext('navigation', 'Reksa Dana Pendapatan Tetap') ?></div>
        <!-- Table -->
            <table class="table table-hover table-responsive table-bordered" id="RDPT">
                <thead> 
                    <tr>
                        <th><a href ="produk-danamas-stabil">Danamas Stabil</th>
                        <th> </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab1"> </td>
                        <td></td>
                    </tr>
                </tbody>
                
                <thead> 
                    <tr>
                        <th><a href ="produk-simas-danamas-mantap-plus">Simas Danamas Mantap Plus</th>
                        <th> </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab2">  </td>
                        <td>  </td>
                    </tr>
                </tbody>

                <thead> 
                    <tr>
                        <th><a href ="produk-danamas-dollar">Danamas Dollar</th>
                        <th> </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab3">  </td>
                        <td>  </td>
                    </tr>
                </tbody>

                <thead> 
                    <tr>
                        <th><a href ="produk-simas-danamas-instrumen-negara">Simas Danamas Instrumen Negara</th>
                        <th> </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab4">  </td>
                        <td>  </td>
                    </tr>
                </tbody>

                <thead> 
                    <tr>
                        <th><a href ="produk-danamas-pasti">Danamas Pasti</th>
                        <th> </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab5">  </td>
                        <td>  </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="panel">
        <!-- Default panel contents -->
        <div class="panel-heading"><?php echo dgettext('navigation', 'Reksa Dana Campuran') ?></div>
        <!-- Table -->
            <table class="table table-hover table-responsive table-bordered" id="RDC">
                <thead> 
                    <tr>
                        <th><a href ="produk-simas-syariah-berkembang">Simas Syariah Berkembang</th>
                        <th>  </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab6">  </td>
                        <td>  </td>
                    </tr>
                </tbody>

                <thead> 
                    <tr>
                        <th><a href ="produk-simas-satu">Simas Satu</th>
                        <th>  </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab7">  </td>
                        <td>  </td>
                    </tr>
                </tbody>

                <thead> 
                    <tr>
                        <th><a href ="produk-danamas-fleksi">Danamas Fleksi</th>
                        <th></th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab8"> </td>
                        <td>  </td>
                    </tr>
                </tbody>


                <thead> 
                    <tr>
                        <th><a href ="produk-simas-satu-prima">Simas Satu Prima</th>
                        <th>  </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab9">  </td>
                        <td>  </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="panel">
        <!-- Default panel contents -->
        <div class="panel-heading"><?php echo dgettext('navigation', 'Reksa Dana Saham') ?></div>
        <!-- Table -->
            <table class="table table-hover table-responsive table-bordered" id="RDS">
                <thead> 
                    <tr>
                        <th><a href ="produk-simas-syariah-unggulan">Simas Syariah Unggulan</th>
                        <th>  </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab10">  </td>
                        <td>  </td>
                    </tr>
                </tbody>


                <thead> 
                    <tr>
                        <th><a href ="produk-simas-danamas-saham">Simas Danamas Saham</th>
                        <th>  </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab11">  </td>
                        <td>  </td>
                    </tr>
                </tbody>


                <thead> 
                    <tr>
                        <th><a href ="produk-simas-saham-unggulan">Simas Saham Unggulan</th>
                        <th>  </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab12"> </td>
                        <td>  </td>
                    </tr>
                </tbody>
                
                <thead> 
                    <tr>
                        <th><a href ="produk-simas-saham-bertumbuh">Simas Saham Bertumbuh</th>
                        <th>  </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab13">  </td>
                        <td>  </td>
                    </tr>
                </tbody>

                <thead> 
                    <tr>
                        <th><a href ="produk-simas-saham-maksima">Simas Saham Maksima</th>
                        <th>  </th>
                    </tr>
                </thead>
                
                <tbody> 
                    <tr> 
                        <td> <?php echo gettext('NAB'); ?> </td>
                        <td> Return YTD </td>
                    </tr>
                    <tr>
                        <td id="nab14">  </td>
                        <td>  </td>
                    </tr>
                </tbody>

            </table>
        </div>
        <h3> <?php echo gettext('Suku Bunga'); ?> </h3>
        <span class="update-date-sb"><?php echo gettext('Update Terakhir: '); ?> </span>
        <table class="table table-hover table-condensed table-bordered">
            <thead>
                <tr class="active">
                    <th><?php echo gettext('Tipe'); ?></th>
                    <th><?php echo gettext('Suku Bunga'); ?> </th>
                </tr>
            </thead>

            <tbody class="body_suku_bunga">

            </tbody>
        </table>
    </div>
</div>

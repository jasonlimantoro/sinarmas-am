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
            include("carousel.php");
        ?>
        <!-- CAROUSEL ENDS HERE -->
        
        <!-- START CONTENT -->
        <!-- SOCIAL MEDIA ICONS FLOATING -->
        <?php 
            include("social_float.php");
        ?>
        <?php 
            $domain = array (
                'calculator',
                'navigation'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12" style="text-align:justify;">
                    <h2>Simas <?php echo gettext('Kalkulator'); ?> - <?php echo gettext('Investasi Berkala'); ?></h2>
    <h4><?php echo gettext('Dapat menghitung hasil investasi berkala Reksa Dana PT Sinarmas Asset Management'); ?></h4>
    <?php echo gettext('<p>Simas Kalkulator  “Investasi Berkala” dibuat untuk mensimulasikan hasil investasi Anda pada reksa dana PT Sinarmas Asset Management. Simulasi ini dapat memberikan gambaran kepada Anda mengenai hasil investasi dari sejumlah dana yang Anda investasikan pada reksa dana PT Sinarmas Asset Management, dimana Simas Kalkulator “Investasi Berkala” langsung memperhitungkan Nilai Aktiva Bersih (NAB) pada reksa dana tersebut.</p><p>Pada Simas Kalkulator, Anda diminta untuk memilih produk yang Anda inginkan, nilai investasi setiap bulannya, periode investasi serta tanggal awal dan akhir investasi yang akan Anda simulasikan.</p><p><strong>Simulasi Investasi :</strong><br>Anda ingin melakukan investasi secara berkala pada reksa dana Simas Satu selama jangka waktu 2 tahun dengan jumlah investasi per bulan sebesar Rp 500.000,00. Berapakah hasil investasi Anda ?</p>'); ?>
    <div>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="field_product_ro"><?php echo gettext('Produk'); ?></label>
                <div class="col-sm-9">
                    <input class="form-control" id="field_product_ro" type="text" value="Simas Satu" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="field_invest_ro"> <?php echo gettext('Nilai Investasi / Bulan'); ?></label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <div class="input-group-addon">Rp</div>
                        <input class="form-control" id="field_invest_ro" type="number" value="500000" readonly>
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="field_periode_invest_ro"><?php echo gettext('Periode Investasi Setiap Tanggal'); ?></label>
                <div class="col-sm-9">

                    <input class="form-control" id="field_periode_invest_ro" type="number" value="1" readonly >

                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="field_tanggal_awal_ro"><?php echo gettext('Tanggal Awal Investasi'); ?> </label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-xs-3" style="padding-left:0px;">
                            <input class="form-control" id="field_tanggal_awal_ro" type="number" value="1" readonly>
                        </div>
                        <div class="col-xs-9" style="padding-left:0px; padding-right:0px;">
                            <input class="form-control" type="month" id="field_bulan_tahun_awal_ro" value="2012-03" disabled>
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="field_tanggal_akhir_ro"><?php echo gettext('Tanggal Akhir Investasi'); ?> </label>
                <div class="col-sm-9">
                    <input class="form-control" type="date" id="field_tanggal_akhir_ro" value="2014-02-28" disabled>


                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button class="btn btn-primary btn-block" type="button" onclick="calculate_try_periodic();"><?php echo gettext('Coba Hitung'); ?> </button>
                </div>
            </div>

            <script>
                function count_diff () {
                    var get_date1 = $("#field_tanggal_awal_ro").val();
                    var get_month = $("#month_ro").val();
                    var get_date2 = $("#field_tanggal_akhir_ro").val();
                    var dt1 = new Date(get_month + "-" + get_date1);
                    var dt2 = new Date(get_date2);
                    var diff_utc_1 = Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate());
                    var diff_utc_2 = Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate());
                    var diff_mili_second = diff_utc_2 - diff_utc_1;
                    var dif_days = diff_mili_second / (1000 * 3600 * 24);
                    var result = Math.floor(dif_days);
                    alert("The difference between " + dt1 + " and " + dt2 + " is " + result);
                }
            </script>

            
        </form>

        <table class="table table-hover table-responsive table-bordered">
            <thead>
                <tr class="success">
                    <th style="width:50%;"><?php echo gettext('Perincian'); ?></th>
                    <th><?php echo gettext('Hasil'); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="start_nav_ro"><?php echo gettext('NAB Awal'); ?> </td> 
                    <td id="result_ro0">  </td>
                </tr>

                <tr>
                    <td id="end_nav_ro"><?php echo gettext('NAB Akhir'); ?> </td> 
                    <td id="result_ro1">  </td>
                </tr>
                <tr>
                    <td><?php echo gettext('Unit Penyertaan'); ?> </td> 
                    <td id="result_ro2"> </td>
                </tr>
                <tr>
                    <td><?php echo gettext('Nilai Investasi Akhir'); ?></td> 
                    <td id="result_ro3"> </td>
                </tr>
                <tr>
                    <td><?php echo gettext('Jumlah Pokok Investasi'); ?> </td> 
                    <td id="result_ro4"> </td>
                </tr>
                <tr>
                    <td><?php echo gettext('Keuntungan'); ?>/<?php echo gettext('Kerugian'); ?> (Rp) </td> 
                    <td id="result_ro5"> </td>
                </tr>
                <tr>
                    <td><?php echo gettext('Keuntungan'); ?>/<?php echo gettext('Kerugian'); ?> (%) </td> 
                    <td id="result_ro6"> </td>
                </tr>
            </tbody>
        </table>

      
    
    </div>
    <p><?php echo gettext('Setelah 2 Tahun dengan Anda berinvestasi sebesar <span id="code3">...</span> setiap bulannya, Anda akan mendapatkan hasil investasi sebesar <span id="code4">...</span> dengan keuntungan sebesar <span id="code5">...</span> menjadi <span id="code6">...</span>.'); ?></p>
                    <!-- PANEL KALKULATOR STARTS HERE  -->
                    <?php // include('panel_kalkulator.php') ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading"> Simas  <?php echo gettext('Kalkulator'); ?> </div>
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_product"><?php echo gettext('Produk'); ?></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="field_product">
                                            <option selected disabled>Product</option>
                                            <option>Danamas Pasti</option>
                                            <option>Danamas Rupiah Plus</option>
                                            <option>Simas Danamas Saham</option>
                                            <option>Simas Satu</option>
                                            <option>Simas Satu Prima</option>
                                            <option>Simas Saham Unggulan</option>
                                        </select>
                                        <input type="hidden" id="product_code" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_invest"> <?php echo gettext('Nilai Investasi / Bulan'); ?></label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon">Rp</div>
                                            <input class="form-control" id="field_invest" type="number" name="investasi">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_periode_invest"><?php echo gettext('Periode Investasi Setiap Tanggal'); ?></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="field_periode_invest">
                                            <option selected disabled>Period</option>
                                            <option value="01">01</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_tanggal_awal"><?php echo gettext('Tanggal Awal Investasi'); ?> </label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-xs-3" style="padding-left:0px;">
                                                <input class="form-control" id="field_tanggal_awal" type="number" readonly>
                                            </div>
                                            <div class="col-xs-9" style="padding-left:0px; padding-right: 0px;">
                                                <input class="form-control" id='field_bulan_tahun_awal' type="month" min="2008-01">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_tanggal_akhir"><?php echo gettext('Tanggal Akhir Investasi'); ?> </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" id="field_tanggal_akhir" min="2008-01-01">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button class="btn btn-primary btn-block" type="button" onclick="calculate_periodic()"><?php echo gettext('Hitung'); ?> </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button class="btn btn-default btn-block" type="reset">Reset</button>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_nab_awal">NAB Awal </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" id="field_nab_awal">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_nab_akhir">NAB Akhir </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" id="field_nab_akhir">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_unit"> Unit Penyertaan</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input class="form-control" id="field_unit" type="number" name="investasi">
                                            <div class="input-group-addon">Unit</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_invest_akhir"> Nilai Investasi Akhir</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon">Rp</div>
                                            <input class="form-control" id="field_invest_akhir" type="number" name="investasi">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_jumlah_pokok"> Jumlah Pokok Investasi</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon">Rp</div>
                                            <input class="form-control" id="field_jumlah_pokok" type="number" name="investasi">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_profit_loss_num"> Profit / Loss</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon">Rp</div>
                                            <input class="form-control" id="field_profit_loss_num" type="number" name="investasi">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="field_profit_loss_percent"> Profit / Loss</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input class="form-control" id="field_profit_loss_percent" type="number" name="investasi">
                                            <div class="input-group-addon">%</div>
                                        </div>
                                    </div>
                                </div> -->

                                
                            </form>

                            <table class="table table-hover table-responsive table-bordered">
                                <thead>
                                    <tr class="success">
                                        <th style="width:50%;"><?php echo gettext('Perincian'); ?></th>
                                        <th><?php echo gettext('Hasil'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo gettext('NAB Awal'); ?> </td> 
                                        <td id="result0" style="font-weight: bold;">  </td>
                                    </tr>

                                    <tr>
                                        <td><?php echo gettext('NAB Akhir'); ?> </td> 
                                        <td id="result1" style="font-weight: bold;">  </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo gettext('Unit Penyertaan'); ?> </td> 
                                        <td id="result2" style="font-weight: bold;"> </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo gettext('Nilai Investasi Akhir'); ?></td> 
                                        <td id="result3" style="font-weight: bold;"> </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo gettext('Jumlah Pokok Investasi'); ?> </td> 
                                        <td id="result4" style="font-weight: bold;"> </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo gettext('Keuntungan'); ?>/<?php echo gettext('Kerugian'); ?> (Rp) </td> 
                                        <td id="result5" style="font-weight: bold;"> </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo gettext('Keuntungan'); ?>/<?php echo gettext('Kerugian'); ?> (%) </td> 
                                        <td id="result6" style="font-weight: bold;"> </td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>

                    <!-- PANEL KALKULATOR ENDS HERE  -->

                </div>
                <!-- SIDEBAR STARTS HERE -->
                <?php 
                    include("sidebar.php"); 
                ?>
                <!-- SIDEBAR ENDS HERE -->
            </div>
        </div>
        <!-- CONTENT ENDS HERE -->

        <!-- FOOTER STARTS HERE -->
        <?php include("footer.php") ?>
        <!-- FOOTER ENDS HERE -->
    
    <!-- To load jQuery and Javascript -->
    <?php include("jsload.php"); ?>
    
    </body>
</html>

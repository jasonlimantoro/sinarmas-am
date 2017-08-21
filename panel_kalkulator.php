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

<div class="panel panel-primary">
    <div class="panel-heading">Simas <?php echo gettext('Kalkulator'); ?> </div>
    <div class="panel-body">
        <form class="form-inline" name="masa_depan" style="padding-bottom:10px;">
            <div class="form-group">
                <label class="sr-only" for="field_invest"> <?php echo gettext('Jumlah Investasi'); ?> </label>
                <div class="input-group">
                    <div class="input-group-addon">Rp </div>
                    <input class="form-control" id="field_invest" type="number" name="investasi" placeholder="<?php echo gettext('Jumlah Investasi'); ?>" max="1000">
                    <div class="input-group-addon">.00</div>
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="field_jangka"> <?php echo gettext('Jangka Waktu Investasi'); ?> </label>
                <div class="input-group">
                    <input class="form-control" id="field_jangka" type="number" name="jangka" placeholder="<?php echo gettext('Jangka Waktu Investasi'); ?>">
                    <div class="input-group-addon"><?php echo gettext('Tahun'); ?></div>
                </div>
            </div>
            <div class="row" style="padding-top:10px; padding-bottom:10px;">
                <button class="btn btn-primary btn-block" type="button" onclick="count();"><?php echo gettext('Hitung'); ?> </buton>
                <button class="btn btn-default btn-block" type="reset">Reset</button>
            </div>
        
        
        </form>

            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="success">
                        <th><?php echo gettext('Jenis Investasi'); ?> </th>
                        <th><?php echo gettext('Indikasi Hasil Investasi'); ?>* </th>
                        <th><?php echo gettext('Simulasi Hasil Investasi'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo dgettext('navigation', 'Reksa Dana Saham'); ?> </td> 
                        <td id="indikasi1"> 20% </td>
                        <td id="result0"> </td>
                    </tr>

                    <tr>
                        <td><?php echo dgettext('navigation', 'Reksa Dana Campuran'); ?></td> 
                        <td id="indikasi2"> 15% </td>
                        <td id="result1"></td>
                    </tr>
                    <tr>
                        <td><?php echo dgettext('navigation', 'Reksa Dana Tetap'); ?> </td> 
                        <td id="indikasi3"> 7% </td>
                        <td id="result2"></td>
                    </tr>
                    <tr>
                        <td><?php echo dgettext('navigation', 'Reksa Dana Uang'); ?> </td> 
                        <td> 4% </td>
                        <td id="result3"></td>
                    </tr>
                </tbody>
                <caption align="bottom">
                *<?php echo gettext('Tingkat indikasi hasil investasi di atas bukanlah jaminan hasil investasi yang akan Anda peroleh, tetapi hanya merupakan simulasi investasi, berdasarkan rata – rata kinerja produk tersebut.'); ?>
                </caption>
                
            </table>
        
    </div>
</div>
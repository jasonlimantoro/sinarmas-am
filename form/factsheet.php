<?php 
    $domain = array (
        'product_general',
    );

    foreach ($domain as $d ) {
        bindtextdomain($d, 'Locale');
        bind_textdomain_codeset($d, 'UTF-8');
    }

    textdomain($domain[0]); // default domain
?>
<!-- Form factsheet -->
<form class="form-inline" method="post" action="form_handler/factsheet_handler.php">
    
    <fieldset class="ui-field-contain">
        <div class="form-group">
            <label for="bulan"></label>
            <select class="form-control"name="menuBulan" id="bulan"> 
                <option value="01"><?php echo gettext('Januari'); ?></option>
                <option value="02"><?php echo gettext('Februari'); ?></option>
                <option value="03"><?php echo gettext('Maret'); ?></option>
                <option value="04">April</option>
                <option value="05"><?php echo gettext('Mei'); ?></option>
                <option value="06"><?php echo gettext('Juni'); ?></option>
                <option value="07"><?php echo gettext('Juli'); ?></option>
                <option value="08"><?php echo gettext('Agustus'); ?></option>
                <option value="09">September</option>
                <option value="10"><?php echo gettext('Oktober'); ?></option>
                <option value="11">November</option>
                <option value="12"><?php echo gettext('Desember'); ?></option>
            </select>
        </div>

        <div class="form-group">
            <label for="tahun"></label>
            <select class="form-control" name="menuTahun" id="tahun">
                <option value="2016">2016</option>
                <option value="2017" selected>2017</option>
            </select>
        </div>
        <button class="btn btn-default" type="submit"> Submit </button>
    </fieldset>

    

<!--  CHECKED LATER
<script>
function is_valid_url(address) {
var test_url = new XMLHttpRequest();
test_url.open("GET", address, true);

test_url.onreadystatechange = function(){
    if (this.readyState == 4) {
        if (this.status == 200 || this.status == 0 ) {
            return true;
        }
        else {
            return false;
        }
    
    }
}
test_url.send(null);
}
function getpdf(){
var month = document.getElementById('bulan').value;
var year = document.getElementById('tahun').value;
url = "http://www.sinarmas-am.co.id/info/Factsheet/tahun%20" + year + "/Februari/Factsheet_DRPL_" + year + "-" + month + ".pdf";
window.location.href = url;
}
</script>
-->
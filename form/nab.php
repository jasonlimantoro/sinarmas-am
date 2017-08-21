<?php 
    putenv("LANG=$lang");
    setlocale(LC_ALL, $lang);

    $domain = array (
        'product_general',
    );

    foreach ($domain as $d ) {
        bindtextdomain($d, 'Locale');
        bind_textdomain_codeset($d, 'UTF-8');
    }

    textdomain($domain[0]); // default domain
?>
<form class="form-inline" name="fpr" id="fpr" target="_blank" method="post" valign="bottom" style="margin-top:-40px; margin-left:5px;">
      <!--<input name="kode_saham" type="hidden" value="009">-->
    <br>
    <br>
    <div class="form-group">
    <label class="sr-only" for="start_date_field"><?php echo gettext ('Tanggal'); ?> </label>
        <select class="form-control" name="menuTanggal" id="start_date_field">
            <option value="Date" selected disabled="disabled"><?php echo gettext ('Tanggal'); ?></option>
            
            <option value="1">1</option>
            
            <option value="2">2</option>
            
            <option value="3">3</option>
            
            <option value="4">4</option>
            
            <option value="5">5</option>
            
            <option value="6">6</option>
            
            <option value="7">7</option>
            
            <option value="8">8</option>
            
            <option value="9">9</option>
            
            <option value="10">10</option>
            
            <option value="11">11</option>
            
            <option value="12">12</option>
            
            <option value="13">13</option>
            
            <option value="14">14</option>
            
            <option value="15">15</option>
            
            <option value="16">16</option>
            
            <option value="17">17</option>
            
            <option value="18">18</option>
            
            <option value="19">19</option>
            
            <option value="20">20</option>
            
            <option value="21">21</option>
            
            <option value="22">22</option>
            
            <option value="23">23</option>
            
            <option value="24">24</option>
            
            <option value="25">25</option>
            
            <option value="26">26</option>
            
            <option value="27">27</option>
            
            <option value="28">28</option>
            
            <option value="29">29</option>
            
            <option value="30">30</option>
            
            <option value="31">31</option>
            
        </select>
    </div>
    
    <div class="form-group">
        <label class="sr-only" for="start_month_field"><?php echo gettext('Bulan'); ?> </label>
        <select class="form-control" id="start_month_field" name="menuBulan">
            <option value="Month" selected disabled="disabled"><?php echo gettext('Bulan'); ?></option>
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
        <label class="sr-only" for="start_year_field"><?php echo gettext('Tahun'); ?> </label>
        <select id="start_year_field" class="form-control" name="menuTahun">
            <option value="Year" selected disabled="disabled"><?php echo gettext('Tahun'); ?></option>
            
            <option value="2011">2011</option>
            
            <option value="2012">2012</option>
            
            <option value="2013">2013</option>
            
            <option value="2014">2014</option>
            
            <option value="2015">2015</option>
            
            <option value="2016">2016</option>
            
            <option value="2017">2017</option>
        
        </select>
    </div>
    &nbsp;&nbsp; <span style="font-family:Arial; font-size:12px;"><?php echo gettext('Sampai'); ?></span> &nbsp;&nbsp;

    <div class="form-group">
        <label class="sr-only" for="end_date_field"><?php echo gettext('Tanggal'); ?></label>
        <select class="form-control" id="end_date_field" name="menuTanggal1">
            <option value="Date1" selected disabled="disabled"><?php echo gettext('Tanggal'); ?></option>
            
            <option value="1">1</option>
            
            <option value="2">2</option>
            
            <option value="3">3</option>
            
            <option value="4">4</option>
            
            <option value="5">5</option>
            
            <option value="6">6</option>
            
            <option value="7">7</option>
            
            <option value="8">8</option>
            
            <option value="9">9</option>
            
            <option value="10">10</option>
            
            <option value="11">11</option>
            
            <option value="12">12</option>
            
            <option value="13">13</option>
            
            <option value="14">14</option>
            
            <option value="15">15</option>
            
            <option value="16">16</option>
            
            <option value="17">17</option>
            
            <option value="18">18</option>
            
            <option value="19">19</option>
            
            <option value="20">20</option>
            
            <option value="21">21</option>
            
            <option value="22">22</option>
            
            <option value="23">23</option>
            
            <option value="24">24</option>
            
            <option value="25">25</option>
            
            <option value="26">26</option>
            
            <option value="27">27</option>
            
            <option value="28">28</option>
            
            <option value="29">29</option>
            
            <option value="30">30</option>
            
            <option value="31">31</option>
        
        </select>
    </div>

    <div class="form-group">
        <label class="sr-only" for="end_month_field"><?php echo gettext('Bulan'); ?> </label>
        <select class="form-control" id="end_month_field" name="menuBulan1">
            <option value="Month1" selected disabled="disabled"><?php echo gettext('Bulan'); ?></option>
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
        <label class="sr-only" for="end_year_field"><?php echo gettext('Tahun'); ?></label>
        <select class="form-control" id="end_year_field" name="menuTahun1">
            <option value="Year1" selected disabled="disabled"><?php echo gettext('Tahun'); ?></option>
            
            <option value="2011">2011</option>
            
            <option value="2012">2012</option>
            
            <option value="2013">2013</option>
            
            <option value="2014">2014</option>
            
            <option value="2015">2015</option>
            
            <option value="2016">2016</option>
            
            <option value="2017">2017</option>
        
        </select>
    </div>
      <br>
      <br>
      <button class="btn btn-default" type="submit" onclick="set_action();"> Submit </button>
      <input type="hidden" id="bulandesc" name="bulandesc" value="">

      <button class="btn btn-default" type="submit" onclick="submitData2();"> Export to Excel </button>
      <button class="btn btn-default" type="reset">Reset</button>
      <script type="text/javascript">

function set_action()
{
    document.getElementById("fpr").action = "form_handler/nab_list.php" ;
			
	document.getElementById("fpr").submit();
}

function submitData()
 
		{
   			document.getElementById("fpr").action = "//www.sinarmas-am.co.id/id/nab_list.asp" ;
			
			document.getElementById("fpr").submit();
  		}
		
function submitData2()
 
		{
   			document.getElementById("fpr").action = "//www.sinarmas-am.co.id/id/nab_list_xls.asp" ;
			
			document.getElementById("fpr").submit();
  		}
		
 </script>
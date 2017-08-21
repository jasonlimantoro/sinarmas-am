<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sinarmas Aset Management</title>
        <meta charset="utf-8">
        <link rel="SHORTCUT ICON" href="../gallery/smsicon.ico">
         <!-- To ensure proper rendering and touch zooming -->
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../modules/css/main.min.css">  

        <script type="text/javascript">
            function _checkEntries(myForm) 	{
			
                if (myForm.mail.value == "") { alert("Masukkan Alamat E-mail"); return false;}
                if ( _email_verify(myForm.mail.value) == false ) {
                    // check email validity
                    alert("Alamat Email Salah. Silahkan Masukkan Alamat Email yang Benar.");
                    return false;}
                                    }
                                    function _email_verify(str) {
                if(!str.match(/^[\w]{1}[\w\.\-_]*@[\w]{1}[\w\-_\.]*\.[\w]{2,6}$/i)) {
                    return false;
                } else {
                    return true;
                }
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row" id="email_msg">
                <div class="col-md-12 col-xs-12">
                    <h1 align="center"> NAB DETAILS </h1>
                    <?php
                        $start_tanggal = $start_bulan = $start_tahun = '';
                        $end_tanggal = $end_bulan = $end_tahun = "";
                        $product_code = $product_name = "";
                        // FIELDS ARAY
                        $field = array(
                            'menuTanggal', 
                            'menuBulan',
                            'menuTahun',
                            'menuTanggal1',
                            'menuBulan1',
                            'menuTahun1',
                            'kode_saham',
                            'product_name'
                        );
                        $error = false;
                        foreach ($field as $f) {
                            if (!isset($_POST[$f])) {
                                $error = true;
                            }
                        }

                        if ($error) {
                            echo "<p align='center'>";
                            echo "Tidak ada data tersedia";
                            echo "<br>";
                            echo "Masukan tanggal awal dan akhir dengan benar!";
                            echo "</p>";
                        }
                        else {
                            $start_tanggal = $_POST['menuTanggal'];
                            $start_bulan = $_POST['menuBulan'];
                            $start_tahun = $_POST['menuTahun'];
                            // Make it concise
                            $str_start_date = "$start_bulan/$start_tanggal/$start_tahun";
                            
                            $end_tanggal = $_POST['menuTanggal1'];
                            $end_bulan = $_POST['menuBulan1'];
                            $end_tahun = $_POST['menuTahun1'];
                            // Make it concise
                            $str_end_date = "$end_bulan/$end_tanggal/$end_tahun";

                            $product_code = $_POST['kode_saham'];
                            $product_name = $_POST['product_name'];
                            
                            echo "<h3 align='center' style='color:red'> $product_name </h3>";
                            echo "<br>";
                            echo "<p align='center'>";
                            echo "Dari: $str_start_date";
                            echo "<br>";
                            echo "Sampai: $str_end_date </p>";
                        }
                    ?>
                    <table class="table table-hover table-responsive table-bordered table-condensed" id="nab_table">
                    <div class="report" align="center" style="color:red"> </div>
                        <thead>
                            <tr class="active">
                                <th>Tanggal</th>
                                <th>Reksa Dana</th>
                                <th>NAB</th>
                            </tr>
                        </thead>
                        <tbody class="body_nab">

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row email_form">
                <div class="col-md-12 col-xs-12">
                    <form class="form-horizontal" method="post" action="mail.php">
                        <div class="form-group">
                            <label for="email_field" class="col-sm-2 control-label">Masukan Alamat E-mail </label>
                            <div class="col-sm-10">
                                <input name="mail" type="email" class="form-control" id="email_field" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-primary btn-block" type="submit">Kirim Email </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-default btn-block" type="reset"> Reset </button>
                            </div>
                        </div>
                        <div class= "form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-default btn-block" onclick"window.close()"> Tutup </button>
                            </div>
                        </div>
                        <input type="hidden" name="bodymessage" id="table_content" value=""> 
                        <input type="hidden" name="product_type" value='<?php echo $product_name; ?>'>
                    </form>
                    <!-- <table width="50%" border="0" align="center">
                        <tbody>
                            <tr>
  	                            <td style="font-family:Arial; font-size:12px;">Masukkan alamat E-mail:<br>
                                    <form name="form" method="post" action="mail.php" onsubmit="return _checkEntries(this);">
                                    <input name="mail" type="text" style="width:250px;">
                                    &nbsp;
                                    <input name="submit" type="submit" value="Kirim Mail">
                                    <input type="hidden" name="bodymessage" id="table_content" value=""> 
                                    <input type="hidden" name="product_type" value='<?php echo $product_name; ?>'
                                    </form>
                                </td>
                             </tr>
   
                            <tr>
                                <td><input type="reset" value="Reset">
                                    &nbsp;
                                    <input type="button" value="Tutup" onclick="window.close()">
                                </td>
                            </tr>
                        </tbody>
                    </table> -->

                </div>
            </div>
        </div>
        <br>
        <br>
    <!-- To load jQuery and Javascript -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    <script>
    
    $(document).ready(function(){
        var nab_url ="http://trading.simasnet.com/ROL/prod_chart_daily.php";
        var start_date = '<?php echo $str_start_date; ?>';
        var end_date = '<?php echo $str_end_date; ?>';
        function addCommas(nStr)
        // THOUSAND SEPARATOR
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }

        // WE MUST USE POST
        $.post(nab_url, {
            product_code: '<?php echo $product_code; ?>', 
            start_date: start_date,
            end_date: end_date
            }, 
            function(nab_data){
                if (nab_data.results.length == 0) {
                    console.log("No data Avaliable");
                    $(".report").append("Tidak ada data tersedia untuk jangka waktu di atas. Silakan pilih tanggal lain. Terimakasih.");
                    $(".email_form").remove();
                }
                else {
                console.log(nab_data);
                $.each(nab_data.results, function(array_index, array_value){
                    var date = nab_data.results[array_index].date;
                    var nab = addCommas(nab_data.results[array_index].nab);
                    var product_name = '<?php echo $product_name; ?>';
                    $(".body_nab").append(
                    "<tr><td>" + date + "</td>" + 
                    "<td>" + product_name + "</td>" +
                    "<td>" + nab + "</td></tr>" 
                    )

                });
                // get that data and set it to the value of <input id="table_content">
                var x = document.getElementById("email_msg").innerHTML;
                document.getElementById("table_content").value = x;
                console.log(x);
                }
            });
        
    });
    
    </script>
    
    </body>
</html>

<?php
    // FACTSHEET 
    if (isset($_POST['menuBulan'])) {
        $month = $_POST['menuBulan'];
    }

    if (isset($_POST['menuTahun'])) {
        $year = $_POST['menuTahun'];
    }

    $product = $_POST['product_type'];

    // Month
    switch($month){
        case "01":
            $month_desc = "Januari";
            break;
        case "02":
            $month_desc = "Februari";
            break;
        case "03":
            $month_desc = "Maret";
            break;
        case "04":
            $month_desc = "April";
            break;
        case "05":
            $month_desc = "Mei";
            break;
        case "06":
            $month_desc = "Juni";
            break;
        case "07":
            $month_desc = "Juli";
            break;
        case "08":
            $month_desc = "Agustus";
            break;
        case "09":
            $month_desc = "September";
            break;
        case "10":
            $month_desc = "Oktober";
            break;
        case "11":
            $month_desc = "November";
            break;
        case "12":
            $month_desc = "Desember";
            break;

    }
    $pdf_url="http://www.sinarmas-am.co.id/info/Factsheet/tahun%20${year}/${month_desc}/Factsheet_${product}_${year}-${month}.pdf";
    header("Location:${pdf_url}");
?>

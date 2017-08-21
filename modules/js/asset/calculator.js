// periodic-calculator
function calculate_try_periodic() {
    var result_ro_array = ['13,335,054.81', '12,000,000,00','1,335,054.81','11,13%'];
    for (i=0; i < result_ro_array.length; i++){
        $("#result_ro" + eval("i+3")).html("<td><code>" + result_ro_array[i] + "</code></td>");
        $("#code" + eval("i+3")).html("<code>" + result_ro_array[i] + "</code>");
    }
}

// for tanggal awal and setiap tanggal
$("#field_periode_invest").change(function(){
var inputVal = $("#field_periode_invest").val();
$("#field_tanggal_awal").attr('value', inputVal);
});

function getProductCode(field_id){
    // field id string
    switch( $(field_id).val() ){
        case 'Simas Satu':
            product_code = '002';
            break;

        case 'Danamas Pasti':
            product_code = '005';
            break;

        case 'Danamas Rupiah Plus':
            product_code = '014';
            break;

        case 'Simas Danamas Saham':
            product_code = '020';
            break;

        case 'Simas Satu Prima':
            product_code = '049';
            break;

        case 'Simas Saham Unggulan':
            product_code = '050';
            break;

        default:
            product_code = '005';
    }

    $('#product_code').attr('value', product_code);

    return product_code;
}

function valid_date (dt1, dt2) {
    return dt2 - dt1 > 0;
}

function stringToDate(_date,_format,_delimiter){
    var formatLowerCase=_format.toLowerCase();
    var formatItems=formatLowerCase.split(_delimiter);
    var dateItems=_date.split(_delimiter);
    var monthIndex=formatItems.indexOf("mm");
    var dayIndex=formatItems.indexOf("dd");
    var yearIndex=formatItems.indexOf("yyyy");
    var month=parseInt(dateItems[monthIndex]);
    month-=1;
    var formatedDate = new Date(dateItems[yearIndex],month,dateItems[dayIndex]);
    return formatedDate;
}

function datetoString(date_obj){
    // format date into mm/dd/yyyy
    month = date_obj.getMonth() + 1; // remember js indexes month from 0!
    date = date_obj.getDate();
    year = date_obj.getFullYear();
    if (date_obj.getMonth() + 1 < 10 ) {
        month = "0" + month;
    } 

    if (date_obj.getDate() < 10 ) {
        date = "0" + date;
    } 

    date_complete_str = month + '/' + date + '/' + year;
    return date_complete_str;

}

function diffMonth(date1, date2){
    var year1 = date1.getFullYear();
    var year2 = date2.getFullYear();
    var month1 = date1.getMonth();
    var month2 = date2.getMonth();
    var diff_year = year2 - year1;
    var diff_month = month2 - month1;
    return diff_year*12 + diff_month + 1;

}

function sum(total, num){
    return total + num;
}

function calculate_periodic() {
    // Grab user input
        product_type = $('#field_product').val();
        invest_amount = $('#field_invest').val();
        period_date = $('#field_periode_invest').val();

            // DATE
                // start
        start_date = period_date;
        start_month_year = $('#field_bulan_tahun_awal').val();

        // if start date is filled
        if (start_date != '' && start_month_year != '') {
            start_date_temp = start_month_year + '-' + start_date; // 2012-07-08
            start_date_obj = stringToDate(start_date_temp, 'yyyy-mm-dd', '-');
            start_date_str = datetoString(start_date_obj);
        }

                // end
        end_date = $('#field_tanggal_akhir').val();
        
        if (end_date != '') {
        // if end date is filled
            end_date_temp = end_date; // 2012-08-09
            end_date_obj = stringToDate(end_date_temp, 'yyyy-mm-dd', '-');
            end_date_str = datetoString(end_date_obj);
        }

    // Basic Validation --> making sure all input forms are entered properly
    if (product_type == null || invest_amount == '' || period_date == null || start_month_year == '' || end_date == '') {
        alert('Masukkan Data yang lengkap!');

    }
    else if (!valid_date(start_date_obj, end_date_obj)) {
        alert('Tanggal awal lebih besar daripada tanggal akhir!');

    }
    else {
        
        // the month difference between start and end date 
        month_diff = diffMonth(start_date_obj, end_date_obj);

        // database request url
        nab_url ="http://trading.simasnet.com/ROL/prod_chart_daily.php";

        // perform post request
        $.post(nab_url, {
            product_code: getProductCode('#field_product'),
            start_date: start_date_str,
            end_date: end_date_str
        },
            function(nab_data){

                var array = nab_data.results;

                // Database error handling
                start_nab = 'unvailable';
                end_nab = 'unvailable';
                if (array.length == 0){
                    alert('Tidak ada data untuk range tanggal tersebut!')
                }

                // if data exist
                else {
                    if (array[0].date == start_date_str) {
                        start_nab = array[0].nab;
                    }

                    else {
                        alert("NAB Awal tidak ada data!");
                    }

                    if (array[array.length - 1].date == end_date_str) {
                        end_nab = array[array.length - 1].nab;
                    } 
                    else {
                        alert('NAB akhir tidak ada data');
                    }
                    // If there are no errors ...
                    if (start_nab != 'unvailable' && end_nab != 'unvailable') {
    
                        var date_array_all = []; // all date!
                        var date_array_requested = [start_date_str]; // requested date
                        var nab_array = []; // the main nab array

                        
                        $.each(array, function(index){
                            date_array_all.push(array[index].date)
                        });

                        for (var i = 0; i < month_diff - 1; i++) {
                            date_increment = new Date(start_date_obj.setMonth(start_date_obj.getMonth() + 1));
                            date_increment_str = datetoString(date_increment);
                            date_array_requested.push(date_increment_str);
                        }
                        
    
    
                        for (var i = 0; i < date_array_requested.length; i++) {
                            find_array_index = date_array_all.indexOf(date_array_requested[i]);
                            // if date exists //
                            if (find_array_index != -1) {
                                nab_array.push(array[find_array_index].nab);
                                
                            }
                            
                            // if date doesn't exist
                            else {
                                date_obj_escape = stringToDate(date_array_requested[i], 'mm/dd/yyyy', '/')
                                for (var increment = 0; increment < array.length; increment++) {
                                    date_increment_obj_escape = new Date(date_obj_escape.setDate(date_obj_escape.getDate() + 1))
                                    date_increment_str_escape = datetoString(date_increment_obj_escape)
                                    find_array_index_escape = date_array_all.indexOf(date_increment_str_escape)

                                    // if date exists after incrementing
                                    if (find_array_index_escape != -1) {
                                        nab_array.push(array[find_array_index_escape].nab);
                                        break;
                                    } 
                                }
                                
                            }

                        }

                        up_list = []; // Unit Participation
                        for (var i = 0; i < nab_array.length; i++) {
                            up_data = invest_amount/nab_array[i];
                            up_list.push(up_data);
                        }
                        console.log(array);
                        console.log(nab_array);
                        console.log(date_array_requested);
                        
    
                        // Answer list

                        // start_nab and end_nab are already defined!
                        unit = (up_list.reduce(sum)).toFixed(6);
                        total_value = (unit * end_nab).toFixed(2);
                        principal_value = (invest_amount * month_diff).toFixed(2);
                        profit_loss = (total_value - principal_value).toFixed(2);
                        profit_loss_p = ((profit_loss / principal_value) * 100).toFixed(3);
                        ans = [start_nab, end_nab, unit, total_value, principal_value, profit_loss, profit_loss_p];
    
                        // OUTPUT
                        if (profit_loss < 0) {
                            $('#result5').css('color', 'red');
                            $('#result6').css('color', 'red');
                        }
    
                        for (var i = 0; i < ans.length; i++) {
                            document.getElementById('result' + i).innerHTML = addCommas(ans[i]);
                        }
    
                    }

                }
                
            }

        )

    }

}

    

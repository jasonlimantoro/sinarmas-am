function addCommas(nStr) {
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
// // HTTP REQUEST Reksa Dana (RD)
// var th_arr = [
//     "Danamas Rupiah Plus",
//     "Danamas Stabil",
//     "Simas Danamas Mantap Plus",
//     "Danamas Dollar",
//     "Simas Danamas Instrumen Negara",
//     "Danamas Pasti",
//     "Simas Syariah Berkembang",
//     "Simas Satu",
//     "Danamas Fleksi",
//     "Simas Satu Prima",
//     "Simas Syariah Unggulan",
//     "Simas Danamas Saham",
//     "Simas Saham Unggulan",
//     "Simas Saham Bertumbuh",
//     "Simas Saham Maksima"
// ];

// var prod_daily_nav_url = "http://trading.simasnet.com/ROL/prod_daily_nav.php";
// var prod_suku_bunga_url = "http://trading.simasnet.com/ROL/prod_suku_bunga.php";

// var request1 = $.getJSON(prod_daily_nav_url, function (arr_check) {
//     var get_date = arr_check.results[0].nab_dt;

//     $(".updated-date").append(get_date);

//     $.each(arr_check.results, function (key, obj_array) {
//         $.each(th_arr, function (index, value) {
//             if (value === arr_check.results[key].nama) {
//                 var nab_data = addCommas(arr_check.results[key].nab);
//                 $("#nab" + index).html(function () {
//                     return "<td>" + nab_data + "</td>";
//                 });
//                 var ytd_data = addCommas(arr_check.results[key].ytd);
//                 $("#nab" + index).siblings().html(function () {
//                     return "<td>" + ytd_data + "%" + "</td>";
//                 });
//                 var rating_data = arr_check.results[key].rating;
//                 var dash_data = 5 - rating_data;
//                 var rating_star = "★ ".repeat(rating_data);
//                 var dash_str = "_  ".repeat(dash_data);

//                 $("th:contains('" + value + "')").siblings("th").html(function () {
//                     return "<div class='rating'>" + rating_star + dash_str + "</div>";
//                 });
//             }

//         });

//     });
// });

// var request2 = $.getJSON(prod_suku_bunga_url, function (sb_request) {
//     var tgl_update_sb = sb_request.results[0].tgl_update;
//     $(".update-date-sb").append(tgl_update_sb);
//     $.each(sb_request.results, function (array_index, array_value) {
//         var tipe = sb_request.results[array_index].tipe;
//         var sb = sb_request.results[array_index].suku_bunga;
//         $(".body_suku_bunga").append(
//             "<tr><td>" + tipe + "</td>" +
//             "<td>" + sb + " %" + "</td></tr>"
//         );
//     });
// });
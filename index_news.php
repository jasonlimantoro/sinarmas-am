<!DOCTYPE html>
<html lang='id'>
    <head>
        <?php include "header.php"; ?>
    </head>

    <body>
        <?php include "nav_structure.php"; ?>
        <?php 
            $domain = array (
                'index'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>
         <!-- The page -->
        <div id="page-wrapper">
            
            <?php include "nav_display.php"; ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-xs-12"> 
                            <h1>News</h1>

                            <h3 class="news-title-0" id="news-0"></h3>
                            <span class="news-date-0"></span>
                            <p class="news-detail-0"></p>
                            <h3 class="news-title-1" id="news-1"></h3>
                            <span class="news-date-1"></span>
                            <p class="news-detail-1"></p>
                            <h3 class="news-title-2" id="news-2"></h3>
                            <span class="news-date-2"></span>
                            <p class="news-detail-2"></p>
                            <h3 class="news-title-3" id="news-3"></h3>
                            <span class="news-date-3"></span>
                            <p class="news-detail-3"></p>
                            <h3 class="news-title-4" id="news-4"></h3>
                            <span class="news-date-4"></span>
                            <p class="news-detail-4"></p>
                            <h3 class="news-title-5" id="news-5"></h3>
                            <span class="news-date-5"></span>
                            <p class="news-detail-5"></p>
                            <h3 class="news-title-6" id="news-6"></h3>
                            <span class="news-date-6"></span>
                            <p class="news-detail-6"></p>
                            <h3 class="news-title-7" id="news-7"></h3>
                            <span class="news-date-7"></span>
                            <p class="news-detail-7"></p>
                            <h3 class="news-title-8" id="news-8"></h3>
                            <span class="news-date-8"></span>
                            <p class="news-detail-8"></p>
                            <h3 class="news-title-9" id="news-9"></h3>
                            <span class="news-date-9"></span>
                            <p class="news-detail-9"></p>
                            
                        </div>
                        <nav class="col-md-4 col-xs-12 sidebar-archived hidden-xs hidden-sm hidden-print">
                            <ul id="sidebar-affix" class="nav nav-stacked">
                                <h1>Archived</h1>
                                <li>
                                    <a href="#news-0" class="news-date-0"></a>
                                </li>
                                <li>
                                    <a href="#news-1" class="news-date-1"></a>
                                </li>
                                <li>
                                    <a href="#news-2" class="news-date-2"></a>
                                </li>
                                <li>
                                    <a href="#news-3" class="news-date-3"></a>
                                </li>
                                <li>
                                    <a href="#news-4" class="news-date-4"></a>
                                </li>
                                <li>
                                    <a href="#news-5" class="news-date-5"></a>
                                </li>
                                <li>
                                    <a href="#news-6" class="news-date-6"></a>
                                </li>
                                <li>
                                    <a href="#news-7" class="news-date-7"></a>
                                </li>
                                <li>
                                    <a href="#news-8" class="news-date-8"></a>
                                </li>
                                <li>
                                    <a href="#news-9" class="news-date-9"></a>
                                </li>
                            </ul>
                        
                        </nav>
                    </div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
        <?php include "jsload.php"; ?>
        
        <script>
            // NEWS CAROUSEL
            var news_link = "http://trading.simasnet.com/ROL/prod_news.php";
            var news_detail = "http://trading.simasnet.com/ROL/prod_news_detail.php"; // POST news_id first!!

            $.getJSON(news_link, function(news_request) {
                var news_array = news_request.results;
                $.each(news_array, function(i, value){

                    // Get the ID s
                    var get_id = news_array[i].news_id;

                    // Request news detail
                    $.post(news_detail, {
                        news_id: get_id
                    },
                    function (detail_request) {
                        var get_date = detail_request.tanggal;
                        var get_title = detail_request.judul;
                        var get_detail = detail_request.berita;

                        $(".news-title-" + i).append(get_title);
                        $(".news-date-" + i).append(get_date);
                        $(".news-detail-" + i).append(get_detail)
                        // To make the table responsive
                        $("table.MsoNormalTable").removeAttr("style").addClass("table table-responsive");
                    });

                    // stop after 10 news!
                    return (i !== 9);
                });
            });
            $('body')
            .scrollspy({
                target: '.sidebar-archived',
                offset: 30
            });
            $('#sidebar-affix').affix({
                offset: {
                    top: 40,
                    bottom: 435
                }
            });
        </script>
    </body>
</html>

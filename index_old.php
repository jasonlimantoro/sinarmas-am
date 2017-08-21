<!DOCTYPE html>
<html lang="id">
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
            // FOR NEWS
            putenv("LANG=$lang");
            setlocale(LC_ALL, $lang);

            $domain = array (
                'index'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h1> <?php echo gettext('Berita'); ?> </h1>
                    <div class="news-group">
                        <div class="news-date-0"> </div>
                        <div class="news-title-0"> </div>
                        <div class="news-detail-0"></div> 
                        <hr>

                        <div class="news-date-1"> </div>
                        <div class="news-title-1"> </div>
                        <div class="news-detail-1"></div> 
                        <hr>

                        <div class="news-date-2"> </div>
                        <div class="news-title-2"> </div>
                        <div class="news-detail-2"></div> 
                        <hr>

                        <div class="news-date-3"> </div>
                        <div class="news-title-3"> </div>
                        <div class="news-detail-3"></div> 
                        <hr>

                        <div class="news-date-4"> </div>
                        <div class="news-title-4"> </div>
                        <div class="news-detail-4"></div> 
                        <hr>

                        <div class="news-date-5"> </div>
                        <div class="news-title-5"> </div>
                        <div class="news-detail-5"></div> 
                        <hr>

                        <div class="news-date-6"> </div>
                        <div class="news-title-6"> </div>
                        <div class="news-detail-6"></div> 
                        <hr>

                        <div class="news-date-7"> </div>
                        <div class="news-title-7"> </div>
                        <div class="news-detail-7"></div> 
                        <hr>

                        <div class="news-date-8"> </div>
                        <div class="news-title-8"> </div>
                        <div class="news-detail-8"></div> 
                        <hr>

                        <div class="news-date-9"> </div>
                        <div class="news-title-9"> </div>
                        <div class="news-detail-9"></div> 
                        <hr>

                    </div> <!-- end of news-group -->

                    
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
    <?php include 'jsload.php'; ?>
    <script>
        $(document).ready(function () {
            var news_link = "http://trading.simasnet.com/ROL/prod_news.php";
            var news_detail = "http://trading.simasnet.com/ROL/prod_news_detail.php"; // POST news_id first!!

            $.getJSON(news_link, function(news_request){

                $.each(news_request.results, function(i, value){
                    var news_array = news_request.results;
                    // GET THE ID s
                    var get_id = news_array[i].news_id;

                    // REQUEST NEWS_DETAIL
                    $.post(news_detail, {
                        news_id: get_id
                    },
                    function(detail_request){
                        var get_date = detail_request.tanggal;
                        var get_title = detail_request.judul;
                        var get_detail = detail_request.berita;
                        $(".news-date-"+ i).append("<span style='color:#900'>" + get_date);
                        $(".news-title-"+ i).append(get_title);
                        $(".news-detail-"+ i).append(get_detail);
                        $(".news-group table").attr("class", "table table-responsive").removeAttr("style");
                    });
                    // STOP AFTER 10 NEWS!
                    return ( i !== 9);
                });

            });
        })

    </script>
    </body>
</html>

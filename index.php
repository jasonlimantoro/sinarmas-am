<!DOCTYPE html>
<?php 
    include ("Locale/setup.php");
    putenv("LANG=$lang");
    setlocale(LC_ALL, $lang);
    
    $domain = array (
        'navigation',
        'sidebar'
    );

    foreach ($domain as $d ) {
        bindtextdomain($d, 'Locale');
        bind_textdomain_codeset($d, 'UTF-8');
    }

    textdomain($domain[0]); // default domain

?>
<html lang='id'>
    <head>
        <!-- To ensure proper rendering and touch zooming -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include "header.php" ?>
        <link rel="stylesheet" href="modules/css/nav_test.css">

    </head>

    <body>
        <?php include "nav.php" ?>
         <!-- The page -->
        <div id="page-wrapper">
            
            <div class="navbar navbar-default" role='navigation' style="margin-bottom:0px;" >
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-1 col-sm-3" style="padding-left:0px;">

                            <div class="navbar-header">
                            
                                <div class="hamburger" style="display:inline;">
                                    <a class='navbar-brand' href="#menu" style="border-right:2px solid lightgrey;">
                                        <span style="color:#ce000c;" class="glyphicon glyphicon-menu-hamburger"></span>
                                    </a>
                                </div>
                                
                            </div>

                        </div>

                        <div class="col-md-8 col-sm-9">
                            <div class="logo-brand">
                                <a href="/sinarmas-am.co.id/">
                                    <img class="sinarmas_logo" src="gallery/logo-am.png" alt="Brand" style="
                                        width: 170px;
                                        padding-top: 5px;
                                        padding-left: 10px;
                                    "> 
                                </a>
                                <a href="/sinarmas-am.co.id/">
                                    <img class="sinarmas_logo" src="gallery/reksadana_logo.png" alt="Brand">
                                </a>
                            </div>
                        
                        </div>


                    </div>
                </div>
                
            </div>


            </div>
            <div class="content">
                <div class='section1'>
                    <div id="main-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#main-carousel" data-slide-to="1"></li>
                            <li data-target="#main-carousel" data-slide-to="2"></li>


                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" style="
                            padding-left: 15%;
                            padding-right: 15%;
                        ">
                            <div class="item active">
                                <div class="carousel-caption">
                                    <h3 style="color:white;" class="news-title-0"></h3>
                                    <p class="news-date-0"></p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="carousel-caption">
                                <h3 style="color:white;" class="news-title-1"></h3>
                                <p class="news-date-1"></p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="carousel-caption">
                                    <h3 style="color:white;" class="news-title-2"></h3>
                                    <p class="news-date-2"></p>
                                </div>
                            </div>

                        </div>
                        <!-- Left and right controls -->
                        <div>
                            <a class="left carousel-control" href="#main-carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            
                        </div>

                        <div>
                            <a class="right carousel-control" href="#main-carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>
                
                </div>


                <div class="section2" style='padding-top: 100px; padding-bottom: 100px;background-color: #ebebeb;'>
                    <h1 align='center' style='color:black; font-size:48px; position:relative; bottom:50px;'>Fitur Fitur</h1>
                    <div id="secondary-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#secondary-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#secondary-carousel" data-slide-to="1"></li>
                            <li data-target="#secondary-carousel" data-slide-to="2"></li>
                            <li data-target="#secondary-carousel" data-slide-to="3"></li>
                            <li data-target="#secondary-carousel" data-slide-to="4"></li>
                            <li data-target="#secondary-carousel" data-slide-to="5"></li>
                            <li data-target="#secondary-carousel" data-slide-to="6"></li>
                            <li data-target="#secondary-carousel" data-slide-to="7"></li>
                            <li data-target="#secondary-carousel" data-slide-to="8"></li>
                            <li data-target="#secondary-carousel" data-slide-to="9"></li>
                        </ol>
                        
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="award">
                                    <img class="img-responsive center-block" src="gallery/banner1.jpg" >
                                </a>
                                
                            </div>

                            <div class="item">
                                <a href="award">
                                
                                    <img class="img-responsive center-block" src="gallery/banner2.jpg" >
                                </a>
                                
                            </div>

                            <div class="item">
                                <a href="award">
                                    <img class="img-responsive center-block" src="gallery/banner3.jpg" >
                                
                                </a>
                                
                            </div>

                            <div class="item">
                                <a href="http://www.sinarmas-am.co.id/download/Tanya Jawab FAQ Tax Amnesty.pdf">
                                    <img class="img-responsive center-block" src="gallery/banner4.jpg" >
                                
                                </a>
                                
                            </div>

                            <div class="item">
                                <a href="#">
                                    <img class="img-responsive center-block" src="gallery/banner5.jpg" >
                                
                                </a>
                                
                            </div>

                            <div class="item">
                                <a href="award">
                                
                                    <img class="img-responsive center-block" src="gallery/banner6.jpg" >
                                </a>
                                
                            </div>

                            <div class="item">
                                <a href="http://www.sinarmas-am.co.id/download/FAQ Relaunced SIP.pdf">
                                
                                    <img class="img-responsive center-block" src="gallery/banner7.jpg">
                                </a>
                                
                            </div>

                            <div class="item">
                                <a href="#">
                                
                                    <img class="img-responsive center-block" src="gallery/banner8.jpg" >
                                </a>
                                
                            </div>

                            <div class="item">
                                <a href="#">
                                
                                    <img class="img-responsive center-block" src="gallery/banner9.jpg" width="720" height="315">
                                </a>
                                
                            </div>

                            <div class="item">

                                <a href="http://www.sinarmas-am.co.id/download/Pay_QR.pdf">
                                
                                    <img class="img-responsive center-block" src="gallery/banner10.jpg">
                                </a>
                                
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#secondary-carousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#secondary-carousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>

                <div class="section3">
                    <div class="container-fluid real-time" >
                        <div class="row">
                            <div class="col-md-9 col-md-offset-1">
                                <h1><?php echo dgettext('sidebar', 'NAB Harian'); ?></h1>
                                <span class='updated-date'><?php echo dgettext('sidebar', 'Update Terakhir: ') ?></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-1 col-sm-12">
                                
                                <table class="table">
                                    <thead>   
                                        <tr>
                                            <th colspan='2'><?php echo gettext('Reksa Dana Pasar Uang'); ?></th>
                                        </tr>
                                        <tr>
                                            <th> <a href="produk-danamas-rupiah-plus"> Danamas Rupiah Plus </a></th>
                                            <th></th>
                                        </tr>
                                    </thead>    

                                    <tbody>
                                        <tr>
                                            <td><?php echo dgettext('sidebar', 'NAB'); ?></td>
                                            <td>Return YTD</td>
                                        </tr>

                                        <tr> 
                                            <td id='nab0'></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table">
                                    <thead>   
                                        <tr>
                                            <th colspan='2'><?php echo gettext('Reksa Dana Pendapatan Tetap') ?></th>
                                        </tr>
                                        <tr>
                                            <th> <a href="produk-danamas-stabil"> Danamas Stabil </a></th>
                                            <th></th>
                                        </tr>
                                    </thead>    

                                    <tbody>
                                        <tr>
                                            <td><?php echo dgettext('sidebar', 'NAB'); ?></td>
                                            <td>Return YTD</td>
                                        </tr>

                                        <tr> 
                                            <td id='nab1'></td>
                                            <td></td>
                                        </tr>
                                    <tbody>

                                    <thead> 
                                        <tr>
                                            <th><a href ="produk-simas-danamas-mantap-plus">Simas Danamas Mantap Plus</th>
                                            <th> </th>
                                        </tr>
                                    </thead>

                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab2">  </td>
                                            <td>  </td>
                                        </tr>
                                    </tbody>

                                    <thead> 
                                        <tr>
                                            <th><a href ="produk-danamas-dollar">Danamas Dollar</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                    
                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab3">  </td>
                                            <td>  </td>
                                        </tr>
                                    </tbody>

                                    <thead> 
                                        <tr>
                                            <th><a href ="produk-simas-danamas-instrumen-negara">Simas Danamas Instrumen Negara</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                    
                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab4">  </td>
                                            <td>  </td>
                                        </tr>
                                    </tbody>

                                    <thead> 
                                        <tr>
                                            <th><a href ="produk-danamas-pasti">Danamas Pasti</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                    
                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab5">  </td>
                                            <td>  </td>
                                        </tr>
                                    </tbody>
                                </table>


                                <table class="table">
                                    <thead> 
                                        <tr>
                                            <th colspan='2'><?php echo gettext('Reksa Dana Campuran') ?></th>
                                        </tr>
                                        <tr>
                                            <th><a href ="produk-simas-syariah-berkembang">Simas Syariah Berkembang</th>
                                            <th>  </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab6">  </td>
                                            <td>  </td>
                                        </tr>
                                    </tbody>

                                    <thead> 
                                        <tr>
                                            <th><a href ="produk-simas-satu">Simas Satu</th>
                                            <th>  </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab7">  </td>
                                            <td>  </td>
                                        </tr>
                                    </tbody>

                                    <thead> 
                                        <tr>
                                            <th><a href ="produk-danamas-fleksi">Danamas Fleksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab8"> </td>
                                            <td>  </td>
                                        </tr>
                                    </tbody>


                                    <thead> 
                                        <tr>
                                            <th><a href ="produk-simas-satu-prima">Simas Satu Prima</th>
                                            <th>  </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab9">  </td>
                                            <td>  </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="col-md-4 col-md-offset-2 col-sm-12">
                                <table class="table">
                                    <thead>   
                                        <tr>
                                            <th colspan='2'><?php echo gettext('Reksa Dana Saham'); ?></th>
                                        </tr>
                                        <tr>
                                            <th> <a href="produk-simas-syariah-unggulan">Simas Syariah Unggulan </a></th>
                                            <th></th>
                                        </tr>
                                    </thead>    

                                    <tbody>
                                        <tr>
                                            <td>NAB</td>
                                            <td>Return YTD</td>
                                        </tr>

                                        <tr> 
                                            <td id='nab10'></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead> 
                                        <tr>
                                            <th><a href ="produk-simas-danamas-saham">Simas Danamas Saham</th>
                                            <th>  </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab11">  </td>
                                            <td>  </td>
                                        </tr>
                                    </tbody>


                                    <thead> 
                                        <tr>
                                            <th><a href ="produk-simas-saham-unggulan">Simas Saham Unggulan</th>
                                            <th>  </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab12"> </td>
                                            <td>  </td>
                                        </tr>
                                    </tbody>
                                    
                                    <thead> 
                                        <tr>
                                            <th><a href ="produk-simas-saham-bertumbuh">Simas Saham Bertumbuh</th>
                                            <th>  </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab13">  </td>
                                            <td>  </td>
                                        </tr>
                                    </tbody>

                                    <thead> 
                                        <tr>
                                            <th><a href ="produk-simas-saham-maksima">Simas Saham Maksima</th>
                                            <th>  </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody> 
                                        <tr> 
                                            <td> <?php echo dgettext('sidebar', 'NAB'); ?> </td>
                                            <td> Return YTD </td>
                                        </tr>
                                        <tr>
                                            <td id="nab14"></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="interest-title">
                                    <h1> <?php echo dgettext('sidebar', 'Suku Bunga'); ?> </h1>
                                    <span class="update-date-sb"><?php echo dgettext('sidebar', 'Update Terakhir: '); ?> </span>
                                </div>

                                <table class="table table-striped interest-rate">
                                    <thead>
                                        <tr>
                                            <th style="width:75%;"><?php echo dgettext('sidebar', 'Tipe'); ?></th>
                                            <th><?php echo dgettext('sidebar', 'Suku Bunga'); ?> </th>
                                        </tr>
                                    </thead>

                                    <tbody class="body_suku_bunga">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'footer.php' ?>
        </div>
        <?php include 'jsload.php' ?>

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
                        // To center-aligned the title
                        $(".section1 p.MsoNormal").removeAttr("style");
                    });

                    // stop after 3 news!
                    return (i !== 2);

                });
                

            });



        </script>
    </body>
</html>

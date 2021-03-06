<!DOCTYPE html>
<html lang="id">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        
        <?php include "nav_structure.php"; ?>
        
        <?php 
            $domain = array (
                'edu'
            );

            foreach ($domain as $d ) {
                bindtextdomain($d, 'Locale');
                bind_textdomain_codeset($d, 'UTF-8');
            }

            textdomain($domain[0]); // default domain
        ?>

        <div id="page-wrapper">
            <?php include "nav_display.php"; ?>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 col-xs-12">
                            <h1> <?php echo gettext('Glossary'); ?> </h1>
                            <a href="#" class="btn btn-default open-all">Open all</a>
                            <a href="#" class="btn btn-default close-all">Close all</a>
                            <hr>

                            <div class="panel-group" id="accordion_edu">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu1">
                                                <?php echo gettext('Strategi Alokasi Aset'); ?>
                                            </a>
                                        </h3>
                                        
                                    </div>
                                    <div id="edu1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php echo gettext('Strategi alokasi aset adalah salah satu strategi dalam investasi untuk memperoleh imbal hasil (return) yang optimal dengan mempertimbangkan tingkat resiko yang akan di dapat. Metode alokasi asset berpedoman pada pembentukan "base policy mix" atau komposisi dasar portofolio. Base policy mix ini merupakan kombinasi berbagai asset secara proposional berdasarkan tingkat imbal hasil yang diharapkan (expected return). Contohnya, jika saham secara historis memberikan imbal hasil sebesar 20% per tahun sedangkan obligasi memberikan imbal hasil 10% per tahun, maka portofolio dengan komposisi 50% saham dan 50% obligasi dapat diharapkan memberikan imbal hasil (expected return) per tahun sebesar 50% x 20% + 50% x 10% = 15%.'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu2">    
                                                <?php echo gettext('NAB (Nilai Aktiva Bersih)'); ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="edu2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php echo gettext('NAB (Nilai Aktiva Bersih) adalah nilai pasar yang wajar dari suatu Efek dan kekayaan lain dari Reksa Dana dikurangi seluruh kewajibannya. Metode penghitungan Nilai Aktiva Bersih Reksa Dana dihitung dan diumumkan pada setiap Hari Bursa.'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu3">
                                                <?php echo gettext('Manajer Investasi'); ?>
                                            </a>
                                        </h3>
                                    </div>

                                    <div id="edu3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php echo gettext('Manajer Investasi adalah pihak yang kegiatan usahanya mengelola Portofolio Efek untuk para nasabah atau mengelola portofolio investasi kolektif untuk sekelompok nasabah, kecuali perusahaan asuransi, dana pensiun, dan bank yang melakukan sendiri kegiatan usahanya berdasarkan peraturan perundang-undangan yang berlaku.'); ?></p>
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu4">
                                                <?php echo gettext('Bank Kustodian'); ?>
                                            </a>
                                        </h3>
                                    </div>

                                    <div id="edu4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php echo gettext('Bank Kustodian adalah Pihak yang memberikan jasa penitipan kolektif dan harta lainnya yang berkaitan dengan Efek, seperti saham dan obligasi. Bank Kustodian juga melakukan peran administrasi seperti menagih hasil penjualan, menerima deviden, penyelesaian transaksi penjualan dan pembelian, serta menyajikan laporan atas seluruh aktifitas transaksi nasabahnya. Pihak yang dapat melaksanakan kegiatan usaha sebagai Kustodian adalah Perusahaan Efek, atau Bank Umum yang telah mendapat persetujuan dari Bapepam.'); ?></p>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu5">
                                                <?php echo gettext('Agen Penjual'); ?>
                                            </a>
                                        </h3>
                                    </div>

                                    <div id="edu5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php echo gettext('Pihak yang berkompeten (mempunyai izin WAPERD) yang ditunjuk oleh Manajer Investasi untuk memasarkan reksa dana kepada investor.'); ?></p>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel panel-default">
                                    <div class="panel-heading">

                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu6">
                                                <?php echo gettext('Prospektus'); ?>
                                            </a>
                                        </h3>
                                    </div>

                                    <div id="edu6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php echo gettext('Adalah setiap pernyataan yang dicetak, yang digunakan untuk Penawaran Umum Reksa Dana dengan tujuan memberikan informasi kepada calon pemodal / pembeli Unit Penyertaan Reksa Dana, informasi berdasarkan peraturan BAPEPAM dan LK.'); ?></p>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu7">
                                                <?php echo gettext('Unit Penyertaan'); ?>
                                            </a>
                                        </h3>
                                    </div>

                                    <div id="edu7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php echo gettext('Unit Penyertaan adalah satuan ukuran yang menunjukkan bagian kepemilikan unit dalam portofolio investasi kolektif.'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu8">
                                                <?php echo gettext('Mengenal Reksa Dana'); ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="edu8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php echo gettext('Reksa dana merupakan salah satu alternatif investasi bagi masyarakat pemodal, khususnya pemodal kecil dan pemodal yang tidak memiliki banyak waktu untuk memantau investasinya. Reksa Dana dirancang sebagai sarana untuk menghimpun dana dari masyarakat yang memiliki modal, mempunyai keinginan untuk melakukan investasi, namun hanya memiliki waktu dan pengetahuan yang terbatas seputar pasar modal. Selain itu Reksa dana diharapkan dapat meningkatkan peran pemodal lokal untuk berinvestasi di pasar modal Indonesia. Menurut Undang-undang Pasar Modal nomor 8 Tahun 1995 pasal 1, ayat (27) :<br>“<strong>Reksa dana</strong> adalah wadah yang dipergunakan untuk menghimpun dana dari masyarakat pemodal untuk selanjutnya diinvestasikan dalam portofolio Efek oleh Manajer Investasi”. Dengan demikian, dana yang ada dalam Reksa Dana merupakan dana bersama para pemodal, sedangkan Manajer Investasi adalah pihak yang dipercaya untuk mengelola dana tersebut. Pada reksa dana, Manajer Investasi mengelola dana-dana yang ditempatkannya pada surat berharga dan merealisasikan keuntungan ataupun kerugian dan menerima dividen atau bunga yang dibukukannya ke dalam "Nilai Aktiva Bersih" (NAB) reksa dana tersebut. Kekayaan reksa dana yang dikelola oleh manajer investasi tersebut wajib untuk disimpan pada Bank Kustodian yang tidak terafiliasi dengan Manajer Investasi, dimana Bank Kustodian inilah yang akan bertindak sebagai tempat penitipan kolektif dan administrasi.'); ?></p>
                                        </div>
                                    
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu9">
                                                <?php echo gettext('Bentuk Hukum Reksa Dana'); ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="edu9" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php echo gettext('Berdasarkan Undang-undang Pasar Modal Nomor 8 Tahun 1995 pasal 18, ayat (1), bentuk hukum Reksa dana di Indonesia ada dua, yakni Reksa dana berbentuk Perseroan Terbatas dan Reksa dana berbentuk Kontrak Investasi Kolektif (KIK).'); ?></p>
                                            <ol type="1">
                                                <li><?php echo gettext('Reksa Dana Berbentuk Perseroan'); ?>
                                                    <p><?php echo gettext('Reksa Dana Perseroan Terbatas adalah Reksa Dana yang dibentuk dengan mendirikan Perseroan Terbatas. Investor Reksa Dana jenis ini juga merupakan pemegang saham Reksa Dana yang bersangkutan. Sampai dengan saat ini, Bapepam telah memberikan izin usaha Reksa Dana berbentuk Perseroan sebanyak 2, yaitu kepada'); ?>:
                                                        <ol type="a">
                                                            <li>PT BDNI Reksa Dana (<?php echo gettext('tertutup'); ?> ) </li>
                                                            <li>PT Reksa Dana Perdana Tbk </li>
                                                        </ol>
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Kontrak Investasi Kolektif'); ?> (KIK)
                                                    <p><?php echo gettext('Kontrak yang dibuat antara Manajer Investasi dan Bank Kustodian yang juga mengikat pemegang Unit Penyertaan sebagai Investor. Melalui kontrak ini Manajer Investasi diberi wewenang untuk mengelola portofolio efek dan Bank Kustodian diberi wewenang untuk melaksanakan penitipan dan administrasi investasi.'); ?></p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu10">
                                                <?php echo gettext('Karakteristik Reksa Dana'); ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="edu10" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php echo gettext('Berdasarkan karakteristiknya maka reksa dana dapat digolongkan sebagai berikut:'); ?>
                                            <ol type="1">
                                                <li> <?php echo gettext('Reksa Dana Terbuka'); ?>(Open End)
                                                    <p><?php echo gettext('Adalah reksa dana yang dapat dijual kembali kepada Perusahaan Manajer Investasi yang menerbitkannya tanpa melalui mekanisme perdagangan di Bursa efek. Harga jualnya biasanya sama dengan Nilai Aktiva Bersihnya. Sebagai informasi, sebagian besar reksa dana yang ada saat ini adalah merupakan reksa dana terbuka.'); ?> 
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Kontrak Investasi Kolektif'); ?> (KIK)
                                                    <p><?php echo gettext('Kontrak yang dibuat antara Manajer Investasi dan Bank Kustodian yang juga mengikat pemegang Unit Penyertaan sebagai Investor. Melalui kontrak ini Manajer Investasi diberi wewenang untuk mengelola portofolio efek dan Bank Kustodian diberi wewenang untuk melaksanakan penitipan dan administrasi investasi.'); ?>
                                                    </p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu11">
                                                <?php echo gettext('Jenis-Jenis Reksa Dana'); ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="edu11" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol type="1">
                                                <li> <?php echo dgettext('navigation', 'Reksa Dana Pendapatan Tetap'); ?>
                                                    <p><?php echo gettext('Reksa dana yang melakukan investasi sekurang-kurangnya 80% dari dana yang dikelola dalam bentuk efek bersifat utang. Tujuannya adalah untuk menghasilkan tingkat pengembalian yang stabil.'); ?>
                                                    </p>
                                                </li>
                                                <li> <?php echo dgettext('navigation' ,'Reksa Dana Saham'); ?>
                                                    <p><?php echo gettext('Reksa dana yang melakukan investasi sekurang-kurangnya 80% dari dana yang dikelolanya dalam efek bersifat ekuitas.'); ?>
                                                    </p>
                                                </li>
                                                <li> <?php echo dgettext('navigation', 'Reksa Dana Campuran'); ?>
                                                    <p><?php echo gettext('Reksa dana yang dapat melakukan investasi pada efek bersifat utang, ekuitas dan pasar uang. Dengan mempunyai perbandingan target aset alokasi pada efek saham dan pendapatan tetap yang berbeda.'); ?> 
                                                    </p>
                                                </li>
                                                <li> <?php echo dgettext('navigation', 'Reksa Dana Pasar Uang'); ?>
                                                    <p><?php echo gettext('Reksa dana yang investasinya pada efek bersifat hutang dengan jatuh tempo yang kurang dari satu tahun. Tujuannya adalah untuk menjaga likuiditas dan pemeliharaan modal.'); ?>
                                                    </p>
                                                </li>
                                                <li> <?php echo dgettext('navigation', 'Reksa Dana Terproteksi'); ?>
                                                    <p><?php echo gettext('Reksa Dana Terproteksi, memiliki fitur khusus adanya proteksi (namun bukan jaminan) terhadap nilai pokok investasi awal. Reksa Dana terproteksi umumnya dikategorikan sebagai investasi resiko rendah hingga menengah dan umumnya digunakan untuk tujuan investasi jangka panjang. Dalam berinvestasi di reksa dana Terproteksi, umumnya investor harus berkomitmen untuk suatu jangka waktu investasi tertentu untuk mendapatkan manfaat proteksinya misalnya 2 atau 3 tahun tergantung dari portofolio produk yang bersangkutan.'); ?>
                                                    </p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu12">
                                                <?php echo gettext('Keuntungan Berinvestasi pada Reksa Dana'); ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="edu12" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol type="1">
                                                <li> <?php echo gettext('Dikelola oleh Manajer Investasi yang Profesional'); ?>
                                                    <p>
                                                        <?php echo gettext('Pengelolaan portofolio suatu Reksa dana dilaksanakan oleh Manajer Investasi yang memang mengkhususkan keahliannya dalam hal pengelolaan dana. Peran Manajer Investasi sangat penting mengingat Pemodal individu pada umumnya mempunyai keterbatasan waktu, sehingga tidak dapat melakukan riset secara langsung dalam menganalisa harga efek serta mengakses informasi ke pasar modal.'); ?>
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Diversifikasi Investasi'); ?>
                                                    <p>
                                                        <?php echo gettext('Diversifikasi atau penyebaran investasi yang terwujud dalam portofolio akan mengurangi resiko (tetapi tidak dapat menghilangkan), karena dana atau kekayaan Reksa dana diinvestasikan pada berbagai jenis efek sehingga resikonya pun juga tersebar. Dengan kata lain, resikonya tidak sebesar resiko bila seorang membeli satu atau dua jenis saham atau efek secara individu.'); ?>
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Transparansi Informasi'); ?>
                                                    <p>
                                                        <?php echo gettext('Reksa dana wajib memberikan informasi atas perkembangan portofolionya secara berkelanjutan sehingga pemegang Unit Penyertaan dapat memantau pergerakan dari NAB Reksa Dana tersebut. Pengelola Reksa dana wajib mengumumkan Nilai Aktiva Bersih (NAB) nya setiap hari di surat kabar serta menerbitkan Fund Fact Sheet setiap bulannya serta prospektus secara teratur sehingga Investor dapat memonitor perkembangan investasinya secara rutin.'); ?> 
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Likuiditas yang Tinggi'); ?>
                                                    <p>
                                                        <?php echo gettext('Investor dapat mencairkan kembali Unit Penyertaannya setiap saat sesuai ketetapan yang dibuat masing-masing Reksa Dana, sehingga Reksa Dana tersebut dapat dikatakan sangat liquid.'); ?> 
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Biaya Rendah'); ?>
                                                    <p>
                                                        <?php echo gettext('Karena reksa dana merupakan kumpulan dana dari banyak pemodal dan kemudian dikelola secara profesional, maka sejalan dengan besarnya kemampuan untuk melakukan investasi tersebut akan menghasilkan pula efisiensi biaya transaksi. <em><strong>Biaya transaksi akan menjadi lebih tinggi, jika Investor melakukan transaksi secara langsung di bursa.</strong></em>'); ?>
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Potensi Pertumbuhan Nilai Investasi'); ?>
                                                    <p>
                                                        <?php echo gettext('Reksa Dana adalah kumpulan dana dari pemodal yang dikelola secara terarah dan dapat dipertanggungjawabkan. Sehingga dengan akumulasi dana tersebut, Reksa Dana memiliki daya tawar (bargaining power) yang lebih baik dalam memperoleh instrumen investasi yang sulit jika dilakukan secara individual. Hal ini memberikan kesempatan yang sama kepada seluruh Pemegang Unit Penyertaan untuk memperoleh hasil investasi yang relatif baik sesuai tingkat resikonya.'); ?>
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Kemudahan Bertransaksi'); ?>
                                                    <p>
                                                        <?php echo gettext('Pemodal dapat melakukan investasi secara langsung di pasar modal/uang, tanpa melalui prosedur dan persyaratan yang rumit.'); ?> 
                                                    </p>
                                                </li>
                                            
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_edu" href="#edu13">
                                                <?php echo gettext('Resiko Investasi Reksa Dana'); ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="edu13" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol type="1">
                                                <li> <?php echo gettext('Resiko Menurunnya NAB (Nilai Aktiva Bersih) Unit Penyertaan'); ?>
                                                    <p>
                                                        <?php echo gettext('Penurunan ini disebabkan oleh harga pasar dari instrumen investasi yang dimasukkan dalam portofolio Reksa dana tersebut mengalami penurunan dibandingkan dari harga pembelian awal. Penyebab penurunan harga pasar portofolio investasi pada Reksa Dana bisa disebabkan oleh banyak hal, di antaranya sebagai akibat dari situasi politik dan ekonomi yang tidak menentu, dan masih banyak penyebab fundamental lainnya.'); ?>  
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Resiko Likuiditas'); ?>
                                                    <p>
                                                        <?php echo gettext('Potensi resiko likuiditas ini bisa saja terjadi pada suatu reksadana apabila pemegang Unit Penyertaan reksa dana pada salah satu Manajer Investasi tertentu ternyata melakukan penarikkan dana dalam jumlah yang besar pada hari dan waktu yang sama. Sehingga membuat Manajer Investasi harus melakukan pencairan portofolio reksa dana tersebut, dalam kondisi luar biasa (force majure) maka penjualan kembali dapat dihentikan untuk sementara sesuai dengan ketentuan dalam Kontrak Investasi kolektif dan peraturan BAPEPAM dan LK.')  ?>  
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Resiko Pasar'); ?>
                                                    <p>
                                                        <?php echo gettext('Resiko Pasar adalah situasi ketika harga instrumen investasi mengalami kenaikan ataupun penurunan yang disebabkan oleh naik / turunnya kinerja pasar saham atau pasar obligasi. Keadaan pasar sedang mengalami kondisi bearish, yaitu harga - harga saham atau instrumen investasi lainnya mengalami penurunan harga. Sebailknya, pasar akan mengalami bullish, apabila harga saham / obligasi / pasar uang lainnya mengalami kenaikan harga. Resiko pasar yang terjadi secara tidak langsung akan mempengaruhi NAB (Nilai Aktiva Bersih) yang ada pada Unit Penyertaan Reksa Dana.'); ?> 
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Resiko Default'); ?>
                                                    <p>
                                                        <?php echo gettext('Resiko Default terjadi jika pihak Manajer Investasi tersebut membeli obligasi milik emiten yang mengalami kesulitan keuangan padahal sebelumnya kinerja keuangan perusahaan tersebut masih baik-baik saja sehingga pihak emiten tersebut terpaksa tidak membayar kewajibannya. Resiko ini hendaknya dihindari dengan cara memilih Manajer Investasi yang menerapkan strategi pembelian portofolio investasi secara ketat.'); ?>
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Resiko perubahan politik, ekonomi dan peraturan perpajakan'); ?>
                                                    <p>
                                                        <?php echo gettext('Perubahan kondisi politik, ekonomi dan peraturan perpajakan serta peraturan-peraturan lainnya khususnya pada pasar uang dan pasar modal nasional maupun internasional dapat mempengaruhi nilai NAB per unit yang dimiliki oleh Pemegang Unit Penyertaan Reksa Dana.'); ?> 
                                                    </p>
                                                </li>
                                                <li> <?php echo gettext('Resiko fluktuasi nilai tukar dan tingkat suku bunga'); ?>
                                                    <p>
                                                        <?php echo gettext('Investasi yang dilakukan pada Reksa Dana dapat mengalami kenaikan atau penurunan nilai sebagai akibat dari fluktuasi pada nilai tukar antara Rupiah Indonesia dan mata uang asing; maupun suku bunga antara investasi Rupiah Indonesia dan non Rupiah juga dapat menyebabkan perubahan / fluktuasi nilai investasi pada potofolio yang diinvestasikan oleh Manajer Investasi, sehingga pada hasil akhirnya memberi perubahan pada nilai NAB.'); ?>
                                                    </p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        
                        </div>
                    </div>
                </div>
            
            </div>
            <?php include "footer.php"; ?>
        </div>

    <?php include "jsload.php"; ?>
    <script>
        $('.close-all').click(function(){
            $('.panel-collapse.in').collapse('hide');
        });

        $('.open-all').click(function(){
            $('.panel-collapse:not(".in")').collapse('show');
        });
    </script>
    </body>
</html>

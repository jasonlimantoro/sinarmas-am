<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("header.php") ?>
    </head>
    <body>
        <!-- PRIMARY NAVIGATION -->
        <?php 
            include("nav.php");
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
            $domain = array (
                'faq'
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
                    <h1 id="scroll_here"> FAQ Aset Management </h1>
                    <div class="list-group">
                        <a href="#faq1" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apa yang dimaksud dengan Reksa Dana?'); ?>
                        </a>

                        <a href="#faq2" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Bagaimana prosedur pembelian unit Reksa Dana?'); ?>
                        </a>
                        <a href="#faq3" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Bagaimana prosedur penjualan unit Reksa Dana?'); ?>
                        </a>
                        <a href="#faq4" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Reksa Dana apa saja yang ditawarkan oleh PT Sinarmas Asset Management?'); ?>
                        </a>
                        <a href="#faq5" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Berapa lama proses penjualan unit Reksa Dana (redemption) hingga dana diterima oleh Nasabah?'); ?>
                        </a>
                        <a href="#faq6" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Bagaimana jika pada saat penjualan unit Reksa Dana, nomor rekening tujuan (rekening nasabah) sudah tidak aktif lagi?'); ?>
                        </a>
                        <a href="#faq7" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apakah dapat membuat pembukaan rekening Reksa Dana di PT Sinarmas Asset Management atas nama gabungan?'); ?>
                        </a>
                        <a href="#faq8" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apakah jika dibutuhkan, dana di Reksa Dana saya dapat ditransfer ke rekening bank atas nama orang lain?'); ?>
                        </a>
                        <a href="#faq9" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apakah rekening Reksa Dana saya dapat dipindahnamakan?'); ?>
                        </a>
                        <a href="#faq10" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apakah dapat memindahkan dana dari rekening Reksa Dana yang satu ke Reksa Dana yang lain tetapi masih produk?'); ?>
                        </a>

                        <a href="#faq11" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apakah hasil investasi Reksa Dana dikenakan pajak?'); ?>
                        </a>
                        <a href="#faq12" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apakah bukti kepemilikan Reksa Dana di PT Sinarmas Asset Management?'); ?>
                        </a>
                        <a href="#faq13" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Jika sebelumnya sudah pernah membeli Reksa Dana di tahun 2004, tapi sudah lama tidak aktif, apakah rekening Reksa Dana masih bisa digunakan?'); ?>
                        </a>
                        <a href="#faq14" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Siapakah yang ditunjuk untuk menjadi Bank Kustodian dari PT Sinarmas Asset Management?'); ?> 
                        </a>
                        <a href="#faq15" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apa kiat dan strategi dalam berinvestasi di Reksa Dana?'); ?>
                        </a>
                        <a href="#faq16" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apa saja biaya-biaya yang dikenakan jika Nasabah membeli Reksa Dana?'); ?>
                        </a>
                        <a href="#faq17" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apa yang dimaksud dengan Laporan Bulanan Kepemilikan Unit Penyertaan (bisa juga disebut sebagai Laporan Akun)?'); ?>
                        </a>
                        <a href="#faq18" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apa yang dimaksud dengan Formulir Pembelian Unit Penyertaan?'); ?>
                        </a>
                        <a href="#faq19" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apa yang dimaksud dengan Formulir Penjualan Kembali Unit Penyertaan?'); ?>
                        </a>
                        <a href="#faq20" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Apakah jika membeli Reksa Dana secara langsung pada kantor pusat maupun melalui kantor cabang akan memperoleh perlakuan yang sama dengan membeli Reksa Dana melalui bank agen penjual?'); ?>
                        </a>
                        <a href="#faq21" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-down" ></i>
                            <?php echo gettext('Bagaimana cara memilih Manajer Investasi yang baik?'); ?>
                        </a>

                    </div>
        
                    <div class="panel panel-default" id="faq1">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apa yang dimaksud dengan Reksa Dana?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Reksa Dana adalah wadah untuk menghimpun dana dari masyarakat pemodal yang selanjutnya diinvestasikan kembali ke dalam portofolio efek oleh Manajer Investasi.'); ?></p>
                        </div>
                    </div>

                    <div class="panel panel-default" id="faq2">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Bagaimana prosedur pembelian unit Reksa Dana?'); ?> </h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><?php echo gettext('Mengisi formulir pembukaan rekening (untuk nasabah baru)'); ?></li>
                                <li><?php echo gettext('Mengisi dan menandatangani formulir pembelian unit penyertaan Reksa Dana'); ?></li>
                                <li><?php echo gettext('Mengisi dan menandatangani formulir profil pemodal'); ?></li>
                                <li><?php echo gettext('Melampirkan fotokopi kartu identitas terbaru dan NPWP'); ?></li>
                                <li><?php echo gettext('Menyertakan bukti setor / transfer'); ?></li>
                                <li><?php echo gettext('Mengirimkan formulir pembelian unit penyertaan yang telah diisi lengkap ke Manajer Investasi sebelum pukul 12.00 WIB'); ?></li>
                            </ul>
                            <p><?php echo gettext('Kelengkapan formulir tersebut dapat di fax ke <strong>021-392 5539 / 021-392 7177 </strong>  atau kirim ke cabang terdekat, formulir pembelian dapat juga di email ke <a href="mailto:cs@sinarmas-am.co.id">cs@sinarmas-am.co.id</a> dengan subjek <strong> Pembelian Reksa Dana </strong>'); ?></p>
                        </div>
                    </div>
                    
                    <div class="panel panel-default" id="faq3">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Bagaimana prosedur penjualan unit Reksa Dana?'); ?> </h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><?php echo gettext('Mengisi dan menandatangani formulir penjualan unit penyertaan Reksa Dana'); ?></li>
                                <li><?php echo gettext('Mengirimkan formulir penjualan unit penyertaan yang telah diisi lengkap ke Manajer Investasi sebelum pukul 12.00 WIB'); ?></li>
                            </ul>
                            <p><?php echo gettext('Kelengkapan formulir tersebut dapat di fax ke <strong>021-392 5539 / 021-392 7177 </strong> atau kirim ke cabang terdekat, formulir pembelian dapat juga di email ke <a href="mailto:cs@sinarmas-am.co.id">cs@sinarmas-am.co.id</a> dengan subjek <strong> Penjualan Reksa Dana </strong>'); ?></p>

                        </div>
                    </div>
                    <div class="panel panel-default" id="faq4">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Reksa Dana apa saja yang ditawarkan oleh PT Sinarmas Asset Management?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><?php echo dgettext('navigation', 'Reksa Dana Pasar Uang'); ?> 
                                    <ul style="list-style-type:square">
                                        <li>Danamas Rupiah </li>
                                        <li>Danamas Rupiah Plus</li>
                                        <li>Riau Liquid Fund </li>
                                    </ul>
                                </li>
                                <li> <?php echo dgettext('navigation', 'Reksa Dana Pendapatan Tetap'); ?> 
                                    <ul style="list-style-type:square">
                                        <li>Danamas Pasti </li>
                                        <li>Danamas Stabil</li>
                                        <li>Danamas Mantap Plus </li>
                                        <li>Danamas Dollar (<?php echo gettext('mata uang'); ?>: USD) </li>
                                        <li>Riau Income Fund</li>
                                        <li>Simas Danamas Instrumen Negara</li>
                                    </ul>
                                </li>
                                <li> <?php echo dgettext('navigation', 'Reksa Dana Campuran'); ?>
                                    <ul style="list-style-type:square">
                                        <li>Simas Satu</li>
                                        <li>Danamas Fleksi</li>
                                    </ul>
                                </li>
                                <li> <?php echo dgettext('navigation', 'Reksa Dana Saham'); ?>
                                    <ul style="list-style-type:square">
                                        <li>Simas Danamas Saham</li>
                                    </ul>
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default" id="faq5">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Berapa lama proses penjualan unit Reksa Dana (redemption) hingga dana diterima oleh Nasabah?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><?php echo gettext('Untuk dana < Rp. 100.000.000,- T+2, jika formulir penjualan diterima sebelum jam 12.00 WIB.'); ?></li>
                                <li><?php echo gettext('Untuk dana ≥ Rp. 100.000.000,- T+1, jika formulir penjualan diterima sebelum jam 12.00 WIB.'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default" id="faq6">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Bagaimana jika pada saat penjualan unit Reksa Dana, nomor rekening tujuan (rekening nasabah) sudah tidak aktif lagi?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Nasabah harus melakukan perubahan rekening terlebih dahulu dengan mengisi formulir perubahan rekening kemudian menyerahkan formulir asli yang telah di isi dan di tanda tangani diatas materai, copy buku tabungan terbaru, beserta fotocopy identitas nasabah terbaru.<br><strong><em>*Penjualan unit Reksa Dana baru akan diproses setelah proses perubahan rekening selesai.</em></strong>'); ?></p>
                        </div>
                    </div>
                    <div class="panel panel-default" id="faq7">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apakah dapat membuat pembukaan rekening Reksa Dana di PT Sinarmas Asset Management atas nama gabungan?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Pembukaan rekening Reksa Dana sudah tidak bisa menggunakan nama gabungan "AND" dan "OR" tetapi masih bisa menggunakan SA (<em>Sub Account</em>). Sebagai persyaratannya nasabah harus melampirkan fotocopy akte kelahiran anak (dengan catatan anak tersebut masih berusia &lt; 17 tahun).'); ?></p>
                        </div>
                    </div>
                    <div class="panel panel-default" id="faq8">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apakah jika dibutuhkan, dana di Reksa Dana saya dapat ditransfer ke rekening bank atas nama orang lain?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Tidak dapat, setiap penjualan unit Reksa Dana hanya bisa ditransfer pada rekening yang telah terdaftar pada saat pembukaan rekening dan dengan atas nama pemilik Reksa Dana tersebut.'); ?></p>
                        </div>
                    </div>

                    <div class="panel panel-default" id="faq9">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apakah rekening Reksa Dana saya dapat dipindahnamakan?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Rekening Reksa Dana tidak dapat dipindah namakan secara langsung. Sebagai solusi dana dapat dicairkan terlebih dahulu ke rekening nasabah yang bersangkutan, lalu ditransfer ke rekening Reksa Dana PT Sinarmas Asset Management kembali dengan berita nama penerima.'); ?></p>
                        </div>
                    </div>
                    <div class="panel panel-default" id="faq10">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apakah dapat memindahkan dana dari rekening Reksa Dana yang satu ke Reksa Dana yang lain tetapi masih produk?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Hal ini dapat dilakukan dengan cara mengisi formulir penjualan Reksa Dana pada produk yang lama dengan mencantumkan nomor rekening pencairan ke nomor rekening produk baru, kemudian satu hari kerja setelah tanggal transaksi penjualan nasabah wajib menyerahkan formulir pembelian produk yang baru dengan menuliskan keterangan bahwa dana tersebut diperoleh dari hasil penjualan produk yang lama pada hari sebelumnya.'); ?></p>
                        </div>
                    </div>
                    <div class="panel panel-default" id="faq11">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apakah hasil investasi Reksa Dana dikenakan pajak?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Tidak, karena pajak untuk Reksa Dana telah dipotong pada portofolio asset / perhitungan NAB. Hal ini sesuai dengan peraturan perpajakan No.16 tahun 2009, sehingga Nasabah Reksa Dana tidak dibebankan pajak lagi.'); ?></p>
                        </div>
                    </div>
                    <div class="panel panel-default" id="faq12">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apakah bukti kepemilikan Reksa Dana di PT Sinarmas Asset Management?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><?php echo gettext('Konfirmasi Pembelian Reksa Dana'); ?> </li>
                                <li><?php echo gettext('Laporan Akun (Laporan Bulanan)'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default" id="faq13">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Jika sebelumnya sudah pernah membeli Reksa Dana di tahun 2004, tapi sudah lama tidak aktif, apakah rekening Reksa Dana masih bisa digunakan?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Masih bisa di pergunakan, nasabah dapat menghubungi Customer Service : <strong>021-392 5550</strong> atau email : <a href="mailto:cs@sinarmas-am.co.id">cs@sinarmas-am.co.id</a> untuk mendapatkan keterangan lebih lanjut.'); ?></p>
                        </div>
                    </div>

                    <div class="panel panel-default" id="faq14">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Siapakah yang ditunjuk untuk menjadi Bank Kustodian dari PT Sinarmas Asset Management?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Pihak yang di tunjuk sebagai Bank Kustodian adalah Bank CIMB Niaga (untuk semua produk Reksa Dana Sinarmas Asset Management yang berdenominasi Rupiah) dan Bank International Indonesia (untuk produk Reksa Dana yang berdenominasi USD/Dollar).'); ?></p>
                        </div>
                    </div>

                    <div class="panel panel-default" id="faq15">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apa kiat dan strategi dalam berinvestasi di Reksa Dana?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Sebaiknya investor menentukan terlebih dahulu jenis Reksa Dana yang sesuai dengan karakteristik investor dan menyesuaikan jangka waktu Reksa Dana yang sesuai dengan profil keuangan investor serta menentukan tingkat risiko yang akan di terima dengan target tingkat yield yang akan di hasilkan dari Reksa Dana tersebut, apakah sesuai antara risiko dengan tingkat yield yang akan diperoleh. Setelah itu investor dapat memilih jenis Reksa Dana apa yang sesuai dengan karakteristik dan profil keuangan investor tersebut.'); ?></p>
                            <p><?php echo gettext('Kelebihan berinvestasi pada <strong>Reksa Dana Pasar Uang</strong> dikarenakan kemudahan yang diberikan oleh reksa dana ini, dimana nasabah dapat melakukan pembelian dan penjualan Unit Penyertaan setiap saat. Sebagai contoh nasabah melakukan pembelian Unit Penyertaan pada hari ini, pada keesokan harinya nasabah sudah diperkenankan untuk melakukan penjualan atas Unit Penyertaan mereka.'); ?></p>
                            <p><?php echo gettext('Hal ini dapat dilakukan karena Portofolio Reksa Dana Pasar Uang dikelola secara aktif dengan diversifikasi investasi, yakni 100% pada instrumen Pasar Uang dan atau Efek Hutang yang mempunyai jatuh tempo kurang dari 1 tahun yang diterbitkan sesuai dengan peraturan perundang – undangan yang berlaku di Indonesia, termasuk Sertifikat Bank Indonesia dan instrumen Pasar Uang lainnya yang dikeluarkan oleh Pemerintah Indonesia.'); ?></p>
                            <p><?php echo gettext('Kelebihan berinvestasi pada <strong>Reksa Dana Campuran</strong> dikarenakan flexibilitas atas instrumen yang dapat digunakan oleh Manajer Investasi sebagai portofolio asetnya. Sebagai contoh dalam keadaan yang kurang menguntungkan Reksa Dana jenis ini dapat memilih instrumen pasar uang (setara cash) yang boleh dikatakan <em>zero risk / country risk</em> sebagai portofolio asetnya. Dan apabila situasi sudah mendukung atau membaik Reksa Dana ini bisa segera mengubah portofolio asetnya untuk dapat mengambil kesempatan di pasar obligasi maupun pasar saham untuk mendongkrak kinerjanya.'); ?></p>
                            <p><?php echo gettext('Kelebihan berinvestasi pada <strong>Reksa Dana Pendapatan Tetap</strong> dikarenakan pertumbuhan yang stabil, dimana instrumen yang dapat digunakan oleh Manajer Investasi sebagai portofolio asetnya. Sebagai contoh dalam keadaan yang kurang menguntungkan pada pasar saham Reksa Dana jenis ini tidak mendapatkan dampak yang signifikan terhadap volatilitas pasar saham dikarenakan Reksa Dana Pendapatan Tetap menjadikan Obligasi sebagai portofolio asetnya. Selain itu Reksa Dana jenis ini dapat melakukan pembelian pada pasar uang untuk memaksimalkan kinerjanya.'); ?></p>
                            <p><?php echo gettext('Kelebihan berinvestasi pada <strong>Reksa Dana Saham</strong> adalah yield yang cukup menarik seiring dengan pergerakan Indeks Harga Saham Gabungan (IHSG) yang mengalami kenaikan dimana Manajer Investasi dapat memilih instrumen saham yang sesuai dengan kondisi market yang sedang memberikan keuntungan sebagai portofolio pada Reksa Dana tersebut guna memberikan hasil yang maksimal kepada pemegang Unit Penyertaannya.'); ?></p>
                            <p><?php echo gettext('Oleh karena itu pilihlah Reksa Dana yang telah memiliki track record yang baik dan telah terbukti integritasnya (minimal 3 tahun).'); ?> </p>
                        </div>
                    </div>

                    <div class="panel panel-default" id="faq16">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apa saja biaya-biaya yang dikenakan jika Nasabah membeli Reksa Dana?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <ol type="1">
                                <li><strong> <?php echo gettext('Biaya Pembelian'); ?></strong>
                                    <p><?php echo gettext('Biaya yang dikenakan kepada Nasabah pada saat melakukan pembelian Reksa Dana.'); ?></p>
                                </li>
                                <li><strong> <?php echo gettext('Biaya Penjualan'); ?></strong>
                                    <p><?php echo gettext('Biaya yang dikenakan kepada Nasabah pada saat melakukan penjualan Reksa Dana.'); ?></p>
                                </li>
                                <li><strong> <?php echo gettext('Biaya Pengalihan'); ?> </strong>
                                    <p><?php echo gettext('Biaya yang dikenakan kepada Nasabah pada saat melakukan pengalihan dari Reksa Dana satu ke Reksa Dana lain yang dikelola oleh Manajer Investasi yang sama.'); ?> </p>
                                </li>
                                <li><strong> <?php echo gettext('Biaya Transfer'); ?></strong>
                                    <p><?php echo gettext('Biaya yang dikenakan oleh bank saat Nasabah melakukan transfer dari rekening Nasabah ke rekening reksa dana atau sebaliknya.'); ?> </p>
                                </li>
                            </ol>
                        </div>
                    </div>

                    <div class="panel panel-default" id="faq17">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apa yang dimaksud dengan Laporan Bulanan Kepemilikan Unit Penyertaan (bisa juga disebut sebagai Laporan Akun)?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('adalah Laporan Bulanan yang menunjukkan jumlah Unit Penyertaan yang dimiliki oleh Pemegang Unit Penyertaan beserta NAB/unit dan berlaku sebagai bukti kepemilikan Reksa Dana. Laporan Bulanan Kepemilikan Unit Penyertaan akan dikirimkan oleh Bank Kustodian, nasabah juga akan menerima Fund Factsheet yang dilampirkan pada Laporan Bulanan Reksa Dana tersebut.'); ?></p>
                        </div>
                    </div>

                    <div class="panel panel-default" id="faq18">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apa yang dimaksud dengan Formulir Pembelian Unit Penyertaan?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('adalah formulir asli yang dipakai oleh calon pembeli untuk membeli Unit Penyertaan yang diisi, di tanda tangani dan diajukan oleh calon pembeli kepada Manajer Investasi.'); ?></p>
                        </div>
                    </div>

                    <div class="panel panel-default" id="faq19">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apa yang dimaksud dengan Formulir Penjualan Kembali Unit Penyertaan?'); ?> </h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('adalah formulir yang berisi data mengenai penjualan Unit Penyertaan Reksa Dana oleh Pemegang Unit Penyertaan, sebagai persyaratan untuk menjual Unit Penyertaan Reksa Dana kepada Manajer Investasi.'); ?></p>
                        </div>
                    </div>

                    <div class="panel panel-default" id="faq20">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Apakah jika membeli Reksa Dana secara langsung pada kantor pusat maupun melalui kantor cabang akan memperoleh perlakuan yang sama dengan membeli Reksa Dana melalui bank agen penjual?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Pembelian melalui bank yang telah menjadi agen penjual akan memperoleh perlakuan yang sama dengan membeli langsung pada kantor pusat maupun kantor cabang, baik biaya pembelian (subscription fee) dan biaya penjualan (redemption fee) maupun dalam hal akses informasi atas produk dan kinerja produk.'); ?></p>
                        </div>
                    </div>

                    <div class="panel panel-default" id="faq21">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo gettext('Bagaimana cara memilih Manajer Investasi yang baik?'); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><?php echo gettext('Penilaian didasarkan pada'); ?>:</p>
                            <ol type="1">
                                <li><strong> <?php echo gettext('Kepercayaan / Reputasi'); ?> </strong>
                                    <p><?php echo gettext('Nasabah dapat melihat sebuah perusahaan dari reputasi, nama baik dan Group yang ada di belakangnya.'); ?> </p>
                                </li>
                                <li><strong><?php echo gettext('Pengalaman'); ?></strong>
                                    <p><?php echo gettext('Ini mencakup lama waktu keberadaan perusahaan Manajer Investasi dalam mengelola Reksa Dana. Kinerja jangka pendek tidak dapat dijadikan gambaran untuk kinerja masa mendatang.'); ?> </p>
                                </li>
                                <li><strong> <?php echo gettext('Jumlah dana kelolaan yang dikelola oleh Manajer Investasi'); ?></strong>
                                    <p><?php echo gettext('Mencari sumber informasi yang terpercaya dan akurat terhadap total dana kelolaan yang dimiliki oleh Manajer Investasi.'); ?> </p>
                                </li>
                                <li><strong> <?php echo gettext('Stabilitas dari kinerja masa lalu'); ?></strong>
                                    <p><?php echo gettext('Melakukan pengamatan dan analisa terhadap kinerja reksa dana yang dikelola Manajer Investasi sejak peluncuran perdana.'); ?> </p>
                                </li>
                            </ol>
                        </div>
                    </div>
                
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
    <?php include("jsload.php"); ?>
    <script>
        $(document).ready(function(){
            // Add scrollspy to <body>
            $('body').scrollspy({target: ".list-group", offset: 50});   

            // Add smooth scrolling on all links inside the navbar
            $(".list-group a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
            
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
                }  // End if
            });
            $("h3.panel-title").append('<a href="#" class="scroll_to_top"><i class="fa fa-arrow-circle-o-up" style="font-size:24px"></i></a>');

            $(".scroll_to_top").on("click", function(event){
                event.preventDefault();
                $('html,body').animate({ scrollTop: $("#scroll_here").offset().top }, 800);
                return false; 
            })
        });
    </script>
    </body>
</html>

<?php include_once 'koneksi.php'; 
    //check metode bayar
    $met_bayar = $_POST['payment_method'];
    $query="SELECT nama_metode FROM Metode_bayar WHERE kode_metode = '$met_bayar'";
    $hasil=oci_parse($koneksi,$query);
    oci_execute($hasil);

    $metode = oci_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <!-- TITLE -->
    <title>Veteran Airlines</title>
    <link rel="shortcut icon" href="images/icon.png"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/awe-booking-font.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    
    <!-- CSS COLOR -->
    <link id="colorreplace" rel="stylesheet" type="text/css" href="css/colors/blue.css">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->
 

    <!-- PAGE WRAP -->
    <div id="page-wrap">
        <!-- PRELOADER -->
        <div class="preloader"></div>
        <!-- END / PRELOADER -->

        
        <!-- HEADER PAGE -->
        <header id="header-page">
            <div class="header-page__inner">
                <div class="container">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- END / LOGO -->
                    
                    <!-- NAVIGATION -->
                    <nav class="navigation awe-navigation" data-responsive="1200">
                        <ul class="menu-list">
                            <li class="menu-item-has-children current-menu-parent">
                                <a href="index.php">Beranda</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END / NAVIGATION -->
                    
                    <!-- TOGGLE MENU RESPONSIVE -->
                    <a class="toggle-menu-responsive" href="#">
                        <div class="hamburger">
                            <span class="item item-1"></span>
                            <span class="item item-2"></span>
                            <span class="item item-3"></span>
                        </div>
                    </a>
                    <!-- END / TOGGLE MENU RESPONSIVE -->

                </div>
            </div>
        </header>
        <!-- END / HEADER PAGE -->
        
        <section class="checkout-section-demo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="checkout-page__top">
                            <div class="title">
                                <h1 class="text-uppercase">CHECKOUT</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="checkout-page__content">
                            <div class="complete-content">
                                <div class="woocommerce-info">
                                    Kami telah menerima pesanan anda, terimakasih telah memesan.
                                </div>
                                <div id="div1">
                                <div class="your-order">
                                    <h2>Pesanan Anda</h2>
                                    <table class="order-table">
                                        <thead>
                                            <tr>
                                                <th>ID Transaksi</th>
                                                <th>tanggal</th>
                                                <th>Total</th>
                                                <th>Metode Pembayaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php $kd_pesan = "#".substr($_POST['namadepan0'],0,2).substr($_POST['Email0'],0,2).substr($_POST['asal'],0,1).substr($_POST['tujuan'],0,1).substr($_POST['kelas'],0,1).substr($_POST['adult'],0,2).substr($_POST['kids'],0,2); ?>
                                                <td><?php echo $kd_pesan?></td>
                                                <td><?php echo $_POST['tgl']?></td>

                                                <!--RUMUS (harga_jadwal + kelas(10%)) + dewasa(100%) + anak(50%)-->
                                                <?php   
                                                     if ($_POST['kelas']=='ekonomi') {
                                                        $harga_kelas = 10;
                                                    }else if ($_POST['kelas']=='bisnis') {
                                                        $harga_kelas = 20;
                                                    }
                                                    $harga = $_POST['amount'];
                                                    $total_harga = ($harga*$_POST['adult']) + (($harga*(50/100))*$_POST['kids']);
                                                ?>

                                                <td><?php echo "Rp. ".$total_harga?></td>
                                                <td><?php echo $metode[0]?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="billing-info">
                                        <h3>Info Transaksi</h3>
                                        <table class="billing-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h4 class="title">Nama pemesan</h4>
                                                        <p><?php echo $pemesan = $_POST['namadepan0']." ".$_POST['namabelakang0']; ?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="title">E-mail</h4>
                                                        <p><a href="#"><?php echo $emailpemesan = $_POST['Email0']; ?></a></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="title">Phone</h4>
                                                        <p><?php echo $phonepemesan = $_POST['Phone0']; ?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="title">Address</h4>
                                                        <p><?php echo $alamatpemesan = $_POST['alamat0']; ?></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="cart-detail">
                                        <h3>Detail Harga</h3>
                                        <table class="cart-detail-table">
                                            <tbody>
                                                <tr>
                                                    <th>Tiket Dewasa (<?php echo $_POST['adult'] ?>)</th>
                                                    <td><?php echo "Rp. ".($harga*$_POST['adult']);?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tiket Anak (<?php echo $_POST['kids'] ?>)</th>
                                                    <td><?php echo "Rp. ".(($harga*(50/100))*$_POST['kids']);?></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="order-total">
                                                    <th>Order Total</th>
                                                    <td><span class="amount"><?php echo "Rp. ".$total_harga?></span></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                </div>
                                <div class="bank" <?php if($metode[0]!="bank") echo "hidden"; ?>>
                                    <div class="col-lg-3">
                                        <div class="cart-detail1">
                                            <table class="cart-detail-table" align="center">
                                                <tbody>
                                                    <tr>
                                                        <th><img class="img-responsive img-blog" src="images/bca.png" width="100%" alt=""> </th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>Bank BCA</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>9270 123 0099</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>a.n. PT. Veteran Airlines</strong></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="cart-detail1">
                                            <table class="cart-detail-table" align="center">
                                                <tbody>
                                                    <tr>
                                                        <th><img class="img-responsive img-blog" src="images/bni.png" width="100%" alt=""> </th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>Bank BNI</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>123 321 9270</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>a.n. PT. Veteran Airlines</strong></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="cart-detail1">
                                            <table class="cart-detail-table" align="center">
                                                <tbody>
                                                    <tr>
                                                        <th><img class="img-responsive img-blog" src="images/bri.png" width="100%" alt=""> </th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>Bank BRI</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>123 321 213 231</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>a.n. PT. Veteran Airlines</strong></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="cart-detail1">
                                            <table class="cart-detail-table" align="center">
                                                <tbody>
                                                    <tr>
                                                        <th><img class="img-responsive img-blog" src="images/mandiri.png" width="100%" alt=""> </th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>Bank Mandiri</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>9270 123 0099</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th><strong>a.n. PT. Veteran Airlines</strong></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="alfa" <?php if($metode[0]=="bank") echo "hidden"; ?>>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <div class="cart-detail1">
                                        <table class="cart-detail-table" >
                                            <tbody>
                                                <tr>
                                                    <th align="center"><strong>Kode Transakasi</strong></th>
                                                    <td><?php echo $kd_pesan?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p align="justify">Berikan Kode transaksi pada kasir minimarket yang anda pilih pada bagian sebelumnya sebelum melakukan pembayaran dan pastikan total uang yang dibayarkan sama dengan tital tagihan yang ada</p>
                                    </div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>
                                <div class="your-cart-footer text-right">
                                    <button class="awe-btn awe-btn-style3" onclick="printContent('div1')">Cetak Bukti Booking</button>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER PAGE -->
        <footer id="footer-page">
            <div class="container">
                <div class="row">
                    <!-- WIDGET -->
                    <div class="col-md-3">
                        <div class="widget widget_contact_info">
                            <div class="widget_background">
                                <div class="widget_background__half">
                                    <div class="bg"></div>
                                </div>
                                <div class="widget_background__half">
                                    <div class="bg"></div>
                                </div>
                            </div>
                            <div class="logo">
                                <img src="images/logo-footer.png" alt="">
                            </div>
                            <div class="widget_content">
                                <p>Jl. Dr. Setiabudhi No. 229 Bandung 40154 Jawa Barat - Indonesia</p>
                                <p>+62-22-2013161<br>+62-22-2013162<br>+62-22-2013163</p>
                                <a href="#">contact@veteran.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-6">
                        <div class="widget widget_about_us">
                            <h3>Tentang Kami</h3>
                            <div class="widget_content">
                                <p>Maskapai nasional ini adalah perusahaan penerbangan Indonesia pertama yang bergabung dengan SkyTeam. Dengan wilayah terbang yang terus bertambah luas baik di dalam dan luar negeri, Veteran Indonesia terus memperkokoh eksistensi dengan daya saing yang kuat di Asia Tenggara. Bersama aliansi SkyTeam, Veteran Indonesia siap untuk terhubungkan dengan lebih 1.000 kota destinasi di seluruh dunia. Pelanggan dapat menikmati layanan ini mulai bulan Maret 2014.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-3">
                        <div class="widget widget_follow_us">
                            <div class="widget_content">
                                <p>Untuk Layanan Spesial, Telepon</p>
                                <span class="phone">101-110-100</span>
                                <div class="awe-social">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->
                </div>
                <div class="copyright">
                    <p>Copyright 2016 PT Veteran Airlines (Persero) Tbk. All right reserved.</p>
                </div>
            </div>
        </footer>
        <!-- END / FOOTER PAGE -->

    </div>
    <!-- END / PAGE WRAP -->

    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/lib/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.owl.carousel.js"></script>
    <script type='text/javascript' src="js/lib/jquery-ui.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script>
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
    </script>

    <?php
        //pengiriman ke database pelanggan
        $i=0;
        if ($_POST['kelas']=="ekonomi") {
                $id_kelas = '1';
            }else if ($_POST['kelas']=="bisnis") {
                $id_kelas = '2';
            }

        for ($adult=0; $adult < $_POST['adult']; $adult++) {
            $namadepan = $_POST['namadepan'.$i];
            $namabelakang = $_POST['namabelakang'.$i];
            $nama = $namadepan." ".$namabelakang;
            $alamat = $_POST['alamat'.$i];
            $NomorIdentitas = $_POST['NomorIdentitas'.$i];
            $Email = $_POST['Email'.$i];
            $Phone = $_POST['Phone'.$i];
            $Katagori = $_POST['Katagori'.$i];
            
            //penumpang
            $query="INSERT INTO penumpang VALUES (seq_pemesan.nextval,'$NomorIdentitas','$nama','$alamat','$Email','$Phone','$Katagori','$kd_pesan')";
            $hasil=oci_parse($koneksi,$query);
            oci_execute($hasil);

            //ambil id_penumpang
            $query="SELECT id_penumpang FROM penumpang ORDER BY id_penumpang DESC";
            $hasil=oci_parse($koneksi,$query);
            oci_execute($hasil);

            $id_penumpang = oci_fetch_array($hasil);

            //kursi kosong
            $query="SELECT id_kursi FROM kursi where status = 'Kosong' AND id_kelas = '$id_kelas'";
            $hasil=oci_parse($koneksi,$query);
            oci_execute($hasil);

            $id_kursi = oci_fetch_array($hasil);

            //tiket
            $id_jadwal = $_POST['id_jadwal'];
            $now = date("d-m-Y");
            $t_berangkat = $_POST['t_berangkat'];
            $t_tiba = $_POST['t_tiba'];
            $kelas = $_POST['kelas'];

            $query="INSERT INTO tiket VALUES (seq_tiket.nextval,'$id_penumpang[0]','$id_jadwal','$nama','$now','$t_berangkat','$t_tiba','$kelas','$id_kursi[0]','$harga')";
            $hasil=oci_parse($koneksi,$query);
            oci_execute($hasil);

            $i++;

        }

        for ($kids=0; $kids < $_POST['kids']; $kids++) {
            $namadepan = $_POST['namadepan'.$i];
            $namabelakang = $_POST['namabelakang'.$i];
            $nama = $namadepan." ".$namabelakang;
            $alamat = $_POST['alamat'.$i];

            $Email = $_POST['Email'.$i];
            $Phone = $_POST['Phone'.$i];
            $Katagori = $_POST['Katagori'.$i];
            
            //penumpang
            $query="INSERT INTO penumpang VALUES (seq_pemesan.nextval,'','$nama','$alamat','$Email','$Phone','$Katagori','$kd_pesan')";
            $hasil=oci_parse($koneksi,$query);
            oci_execute($hasil);

            //ambil id_penumpang
            $query="SELECT id_penumpang FROM penumpang ORDER BY id_penumpang DESC";
            $hasil=oci_parse($koneksi,$query);
            oci_execute($hasil);

            $id_penumpang = oci_fetch_array($hasil);

            //kursi kosong
            
            $query="SELECT id_kursi FROM kursi where status = 'Kosong' AND id_kelas = '$id_kelas'";
            $hasil=oci_parse($koneksi,$query);
            oci_execute($hasil);

            $id_kursi = oci_fetch_array($hasil);

            //tiket
            $id_jadwal = $_POST['id_jadwal'];
            $now = date("d-m-Y");
            $t_berangkat = $_POST['t_berangkat'];
            $t_tiba = $_POST['t_tiba'];
            $kelas = $_POST['kelas'];
            $harga_kids = $harga * 0.5;
            $query="INSERT INTO tiket VALUES (seq_tiket.nextval,'$id_penumpang[0]','$id_jadwal','$nama','$now','$t_berangkat','$t_tiba','$kelas','$id_kursi[0]','$harga_kids')";
            $hasil=oci_parse($koneksi,$query);
            oci_execute($hasil);
            
            $i++;

        }

        //tagihan
        $query="INSERT INTO bayar VALUES ('$kd_pesan','$met_bayar','$now','','$pemesan','$alamatpemesan','$emailpemesan','$phonepemesan','$total_harga','BELUM LUNAS')";
        $hasil=oci_parse($koneksi,$query);
        oci_execute($hasil);

    ?>
</body>
</html>
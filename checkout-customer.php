<?php include_once 'koneksi.php'; ?>
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
                        <div class="checkout-page__content">
                            <div class="customer-content">
                                <div class="trip-schedule-accordion">
                                    <h3 align="center">Data Pembayaran</h3>
                                    <p align="justify">
                                    Perhatian: Nama Penumpang rute internasional harus tepat dan sesuai Paspor, sedangkan rute domestik dapat sesuai KTP/SIM/Paspor.
                                    </p>
                                    <p>
                                    Data penumpang tidak dapat diubah setelah melewati halaman ini.
                                    </p>
                                    <p>
                                    Veteran Airlines Menerima Pembayaran Melalui Transfer & Minimarket
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <form action="checkout-complete.php" method="POST">
                        <input type="hidden" name="id_jadwal" value=<?php echo $_POST['id_jadwal']?>>
                        <input type="hidden" name="t_berangkat" value=<?php echo $_POST['t_berangkat']?>>
                        <input type="hidden" name="t_tiba" value=<?php echo $_POST['t_tiba']?>>
                        <input type="hidden" name="asal" value=<?php echo $_POST['asal']?>>
                        <input type="hidden" name="tujuan" value=<?php echo $_POST['tujuan']?>>
                        <input type="hidden" name="tgl" value=<?php echo $_POST['tgl']?>>
                        <input type="hidden" name="kelas" value=<?php echo $_POST['kelas']?>>
                        <input type="hidden" name="adult" value=<?php echo $_POST['adult']?>>
                        <input type="hidden" name="kids" value=<?php echo $_POST['kids']?>>
                        <input type="hidden" name="amount" value=<?php echo $_POST['amount']?>>

                        <!--
                        <div class="checkout-page__content" hidden>
                            <div class="customer-content">
                                <div class="woocommerce-shipping-fields">
                                    <div class="shipping_address">
                                        <div class="form-row" id="shipping_first_name_field">
                                            <label>Kode Pesan</label>
                                            <input type="text" name="kd_pesan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        -->

                        <?php 
                        $i=0;
                        for ($adult=0; $adult < $_POST['adult']; $adult++) {
                            $namadepan = "namadepan".$i;
                            $namabelakang = "namabelakang".$i;
                            $alamat = "alamat".$i;
                            $NomorIdentitas = "NomorIdentitas".$i;
                            $Email = "Email".$i;
                            $Phone = "Phone".$i;
                            $Katagori = "Katagori".$i;
                            ?>
                        <div class="checkout-page__content">
                            <div class="customer-content">
                                <div class="woocommerce-shipping-fields">
                                <h3>Dewasa (<?php echo $adult+1; ?>)</h3>
                                    <div class="shipping_address">
                                        <div class="form-row" id="shipping_first_name_field">
                                            <label>Nama Depan *</label>
                                            <input type="text" name=<?php echo $namadepan; ?> required>
                                        </div>
                                        <div class="form-row" id="shipping_last_name_field">
                                            <label>Nama Belakang *</label>
                                            <input type="text" name=<?php echo $namabelakang; ?> required>
                                        </div>
                                        <div class="form-row" id="order_comments_field">
                                            <label>Alamat *</label>
                                            <textarea name=<?php echo $alamat; ?> required></textarea>
                                        </div>
                                        <div class="form-row" id="shipping_company_field">
                                            <label>Nomor Identitas (KTP, Kartu Pelajar, SIM, Passport) *</label>
                                            <input type="text" name=<?php echo $NomorIdentitas; ?> required>
                                        </div>
                                        <div class="form-row" id="shipping_country_field">
                                            <label>E-mail *</label>
                                            <input type="email" name=<?php echo $Email; ?> required>
                                        </div>
                                        <div class="form-row" id="order_comments_field">
                                            <label>Phone *</label>
                                            <input type="number" name=<?php echo $Phone; ?> required>
                                        </div>
                                        <div class="form-row" id="order_comments_field" hidden>
                                            <label>Katagori</label>
                                            <input type="text" name=<?php echo $Katagori; ?> value="dewasa">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                            <?php
                            $i++;
                        } ?>
                        
                        <?php 
                        for ($kids=0; $kids < $_POST['kids']; $kids++) {
                            $namadepan = "namadepan".$i;
                            $namabelakang = "namabelakang".$i;
                            $alamat = "alamat".$i;
                            $NomorIdentitas = "NomorIdentitas".$i;
                            $Email = "Email".$i;
                            $Phone = "Phone".$i;
                            $Katagori = "Katagori".$i;
                            ?>
                            <div class="checkout-page__content">
                            <div class="customer-content">
                                <div class="woocommerce-shipping-fields">
                                <h3>Anak-Anak (<?php echo $kids+1; ?>)</h3>
                                    <div class="shipping_address">
                                        <div class="form-row" id="shipping_first_name_field">
                                            <label>Nama Depan *</label>
                                            <input type="text" name=<?php echo $namadepan; ?> required>
                                        </div>
                                        <div class="form-row" id="shipping_last_name_field">
                                            <label>Nama Belakang *</label>
                                            <input type="text" name=<?php echo $namabelakang; ?> required>
                                        </div>
                                        <div class="form-row" id="order_comments_field">
                                            <label>Alamat *</label>
                                            <textarea name=<?php echo $alamat; ?> required></textarea>
                                        </div>
                                        <div class="form-row" id="shipping_country_field">
                                            <label>E-mail *</label>
                                            <input type="email" name=<?php echo $Email; ?> required>
                                        </div>
                                        <div class="form-row" id="order_comments_field">
                                            <label>Phone *</label>
                                            <input type="number" name=<?php echo $Phone; ?> required>
                                        </div>
                                        <div class="form-row" id="order_comments_field" hidden>
                                            <label>Katagori</label>
                                            <input type="text" name=<?php echo $Katagori; ?> value="anak" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                            <?php
                            $i++;
                        } ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-page__content">
                                    <div class="customer-content">
                                        <div id="payment">
                                            <h3>Metode Pembayaran</h3>
                                            <ul class="payment_methods methods">  
                                                <li class="payment_method_bacs">
                                                    <input id="bank" type="radio" name="payment_method" value="met004" checked="true">
                                                    <label for="bank">Transfer Bank
                                                        <img src="images/paypal0.png" alt="">
                                                    </label>
                                                    <div class="payment_box payment_method_bacs">
                                                        <p>
                                                        Lakukan pembayaran aman dan nyaman via Transfer BCA, BNI, BRI, atau Mandiri setiap hari kapan saja 24 jam.
                                                        </p>
                                                    </div>
                                                </li>                                            
                                                <li class="payment_method_paypal">
                                                    <input id="alfamaret" type="radio" name="payment_method" value="met001">
                                                    <label for="alfamaret">
                                                        Minimarket Alfamart 
                                                        <img src="images/paypal.png" alt="">
                                                    </label>
                                                    <div class="payment_box payment_method_paypal">
                                                        <p>
                                                        Jika Anda tidak memiliki rekening BCA, BNI, BRI, atau Mandiri, lakukan pembayaran melalui Minimarket Alfamaret.
                                                        </p>
                                                    </div>
                                                </li>                                            
                                                <li class="payment_method_paypal">
                                                    <input id="indomaret" type="radio" name="payment_method" value="met003">
                                                    <label for="indomaret">
                                                        Minimarket Indomaret 
                                                        <img src="images/paypal2.png" alt="">
                                                    </label>
                                                    <div class="payment_box payment_method_paypal">
                                                        <p>
                                                        Jika Anda tidak memiliki rekening BCA, BNI, BRI, atau Mandiri, lakukan pembayaran melalui Minimarket Indomaret.
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="form-row place-order">
                                                <input type="submit" class="button alt" id="place_order" value="Pesan tiket">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </div>
            </div>
        </section>
        </form>

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
</body>
</html>
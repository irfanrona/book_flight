<?php 
    include_once 'koneksi.php'; 
    if (isset($_POST['submit'])) {
        if ($_POST['tgl']=='Check in') {
            header('location:index.php');
        }
    }else{
        header('location:Out.php');
    }
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

  
        <section class="filter-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-page__content">

                            <?php
                                $asal = $_POST['asal'];
                                $tujuan = $_POST['tujuan'];
                                $tgl = $_POST['tgl'];
                                
                                $tgl = substr($tgl,3,2)."-".substr($tgl,0,2)."-".substr($tgl,6,4);
                                //echo $tgl;

                                $query="SELECT * FROM jadwal WHERE bandara_awal = '$asal' AND bandara_akhir = '$tujuan' AND waktu_berangkat LIKE '%$tgl%'";

                                $hasil=oci_parse($koneksi,$query);
                                oci_execute($hasil);
                                $row1 = oci_fetch_all($hasil,$x);
                                if($row1 > 0){
                                    oci_execute($hasil);
                                    while ($r = oci_fetch_array($hasil)){
                                        $query1="SELECT nama_bandara FROM bandara WHERE id_bandara = '$r[2]'";

                                        $hasil1=oci_parse($koneksi,$query1);
                                        oci_execute($hasil1);

                                        $bandara_awal = oci_fetch_array($hasil1);

                                        $query1="SELECT nama_bandara FROM bandara WHERE id_bandara = '$r[3]'";

                                        $hasil1=oci_parse($koneksi,$query1);
                                        oci_execute($hasil1);

                                        $bandara_akhir = oci_fetch_array($hasil1);
                                       

                            ?>
                                    
                            <form action="checkout-customer.php" method="POST">
                                <input type="hidden" name="asal" value=<?php echo $_POST['asal']?>>
                                <input type="hidden" name="tujuan" value=<?php echo $_POST['tujuan']?>>
                                <input type="hidden" name="tgl" value=<?php echo $_POST['tgl']?>>
                                <input type="hidden" name="kelas" value=<?php echo $_POST['kelas']?>>
                                <input type="hidden" name="adult" value=<?php echo $_POST['adult']?>>
                                <input type="hidden" name="kids" value=<?php echo $_POST['kids']?>>

                                <?php if ($_POST['kelas']=='ekonomi') {
                                    $harga_kelas = 10;
                                }else if ($_POST['kelas']=='bisnis') {
                                    $harga_kelas = 20;
                                }?>

                                <div class="filter-item-wrapper">
                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/flight/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a>Veteran Airlines : <?php echo $bandara_awal[0]; ?> - <?php echo $bandara_akhir[0]; ?></a>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                                <tr>
                                                    <th class="route">Rute</th>
                                                    <th class="depart">Keberangkatan</th>
                                                    <th class="arrive">Kedatangan</th>
                                                    <th class="duration">Durasi Penerbangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li><?php echo $r[2]; ?> <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li><?php echo $r[3]; ?> <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span><?php echo $t_berangkat = substr($r[4],0,16);?></span>
                                                        <?php $jam1 = substr($r[4],11,2); $menit1 = substr($r[4],14,2);?>
                                                    </td>
                                                    <td class="arrive">
                                                        <span><?php echo $t_tiba = substr($r[5],0,16);?></span>
                                                        <?php $jam2 = substr($r[5],11,2); $menit2 = substr($r[5],14,2);?>
                                                    </td>
                                                    <td class="duration">
                                                        <?php $djam = intval($jam2, 10) - intval($jam1, 10); 
                                                        if(intval($menit2, 10) < intval($menit1, 10)){ 
                                                            $djam--;
                                                            $dmenit = (intval($menit2, 10) + 60) - intval($menit1, 10);
                                                        }else{
                                                            $dmenit = intval($menit2, 10) - intval($menit1, 10);
                                                            
                                                        }?>
                                                        <span><?php echo $djam." Hour(s) ".$dmenit." Minute(s)";?></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span class="amount">Rp. <?php echo $r[6]+($r[6]*($harga_kelas/100));?></span>
                                            <input type="hidden" name="amount" value=<?php echo $r[6]+($r[6]*($harga_kelas/100));?>>
                                            <input type="hidden" name="id_jadwal" value=<?php echo $r[0];?>>
                                            <input type="hidden" name="t_berangkat" value=<?php echo $t_berangkat;?>>
                                            <input type="hidden" name="t_tiba" value=<?php echo $t_tiba;?>>
                                            <?php echo $_POST['kelas']?>
                                        </div>
                                        <input type="submit" class="awe-btn" name="Booknow" style="margin-top:32px;" value="Booking">
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                            </div>
                            </form>
                            <?php
                            }
                                }
                            ?>  
                        </div>
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3"></script>
    <script type="text/javascript" src="js/lib/md-map-extend.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/perfect-scrollbar.min.js"></script>
    <script type='text/javascript' src="js/lib/jquery-ui.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
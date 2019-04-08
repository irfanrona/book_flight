<?php include_once 'koneksi.php'; session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Veteran Airline</title>
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
    <!-- REVOLUTION DEMO -->
    <link rel="stylesheet" type="text/css" href="revslider-demo/css/settings.css">


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
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
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

                    <!-- FLASH DATA -->
                    
                    <!-- END FLASH DATA -->
                    
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
        
        <!-- HERO SECTION -->
        <section class="hero-section">
            <div id="slider-revolution">
                <ul>
                    <li data-slotamount="7" data-masterspeed="500" data-title="Kenyamanan">
                        <img src="images/bg/1.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-1" data-x="500" data-y="230" data-speed="700" data-start="1500" data-easing="easeOutBack">
                          Nyaman Dan Aman
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">Awak kabin Terlatih</div>
                        
                        <a href="#coba" class="tp-caption sfb fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">Pesan Sekarang</a>
                    </li> 

                    <li data-slotamount="7" data-masterspeed="500" data-title="Pengalaman">
                        <img src="images/bg/2.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption  sft fadeout slider-caption-sub slider-caption-sub-2" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                          Pengalaman Terbang Terbaik
                        </div>

                        <div class="tp-caption sft fadeout slider-caption slider-caption-2" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="2000">
                            Percayakan kepada Kami
                        </div>
                        
                        <a href="#coba" class="tp-caption sft fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="370" data-easing="easeOutBack" data-speed="700" data-start="2200">Pesan Sekarang</a>
                    </li>

                    <li data-slotamount="7" data-masterspeed="500" data-title="Kompanion">
                        <img src="images/bg/3.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption lfl fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="1500">
                            Veteran Airlines
                        </div>
                        
                        <div href="#coba" class="tp-caption lfr fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2000">Pelopor Dunia Penerbangan Modern</div>
                    </li> 

                </ul>
            </div>
        </section>
        <!-- END / HERO SECTION -->


        <!-- SEARCH TABS -->
        <section id="coba">
            <div class="container">
                <div class="awe-search-tabs tabs">
                    <ul>
                        <li>
                            <a href="#awe-search-tabs-1">
                                <i class="awe-icon awe-icon-plane"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="awe-search-tabs__content tabs__content">
                        <div id="awe-search-tabs-1" class="search-flight">
                            <h2>pencarian Penerbangan</h2>
                            <form method="POST" action="flight.php">
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>Asal</label>
                                        <div class="form-item">
                                            <select class="awe-select" name="asal">
                                                <option value="BDO">Bandung (BDO), Indonesia</option>
                                                <option value="SUB">Surabaya (SUB), Indonesia</option>
                                                <option value="DPS">Denpasar (DPS), Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>Tujuan</label>
                                        <div class="form-item">
                                            <select class="awe-select" name="tujuan">
                                                <option value="BDO">Bandung (BDO), Indonesia</option>
                                                <option value="SUB">Surabaya (SUB), Indonesia</option>
                                                <option value="DPS">Denpasar (DPS), Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>Tanggal Berangkat</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-calendar"></i>
                                            <input type="text" name="tgl" class="awe-calendar" value="Check in" min="today">
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>Kelas Penerbangan</label>
                                        <div class="form-item">
                                            <select class="awe-select" name="kelas">
                                                <option value="ekonomi">Ekonomi</option>
                                                <option value="bisnis">Bisnis</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>Dewasa</label>
                                        <div class="form-item">
                                            <select class="awe-select" name="adult" required>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>Anak-Anak</label>
                                        <div class="form-item">
                                            <select class="awe-select" name="kids" required>
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                            </select>
                                        </div>
                                        <span>0-11 tahun</span>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Cari" name="submit">
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SEARCH TABS -->

        <section class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-tabs tabs">
                            <ul>
                                <li>
                                    <a href="#tabs-1">Konsep Penerbangan</a>
                                </li>
                                <li>
                                    <a href="#tabs-2">SkyPriority</a>
                                </li>
                                <li>
                                    <a href="#tabs-3">Kualitas</a>
                                </li>
                            </ul>
                            <div class="product-tabs__content">
                                <div id="tabs-1">
                                    <div class="trip-schedule-accordion">
                                        <h3>Keramahtamahan Indonesia Diaplikasikan dalam Ikon</h3>
                                        <p align="justify">
                                        Veteran Indonesia Experience adalah konsep layanan baru yang menyajikan aspek-aspek terbaik dari Indonesia kepada para penumpang. Mulai dari saat reservasi penerbangan hingga tiba di bandara tujuan, para penumpang akan dimanjakan oleh pelayanan yang tulus dan bersahabat yang menjadi ciri keramahtamahan Indonesia, diwakili oleh ‘Salam Veteran Indonesia’ dari para awak kabin. 
                                        </p>
                                        <p align="justify">
                                        Dengan pengenalan konsep Veteran Indonesia Experience, Veteran Indonesia menciptakan ciri khas yang membanggakan, sekaligus meningkatkan citra Indonesia di dunia internasional. Konsep Veteran Indonesia Experience didasarkan pada pancaindra atau “5 senses” (sight, sound, scent, taste, dan touch) dan mencakup 24 “customer touch points”; mulai dari pelayanan pre-journey, pre-flight, in-flight, post-flight dan post-journey. Sejak pertama diluncurkan pada 2009, Veteran Indonesia Experience mengandalkan keramahtamahan Indonesia. Ini sejalan dengan visi Veteran Indonesia, yaitu perusahaan penerbangan yang handal, menawarkan layanan berkualitas bagi masyarakat dunia dengan menggunakan keramahan Indonesia. 
                                        </p>
                                        <p align="justify">
                                        Veteran Indonesia mengemban misi khusus sebagai perusahaan penerbangan pembawa bendera bangsa Indonesia, yang mempromosikan Indonesia kepada dunia. Konsep keramahtamahan Indonesia ini diterjemahkan dalam ikon-ikon yang mengandalkan pancaindra, yang antara lain tercermin dari penggunaan bahan dan ornamen khas Indonesia untuk interior pesawat, aroma wewangian bunga khas Indonesia, musik khas Indonesia, serta cita rasa makanan dan minuman khas Indonesia. Pada 2009, perusahaan melakukan program peremajaan untuk armada-armada lama, Boeing 747-400 dan Airbus 330-300, dengan mengganti interior pesawat dan menambah fasilitas AVOD (Audio and Video on Demand). Langkah yang sesuai dengan konsep layanan Veteran Indonesia Experience. Di samping melibatkan pancaindra, konsep Veteran Indonesia Experience juga harus memiliki nilai-nilai dasar sebagai berikut: tepat waktu dan aman (tentang produk), cepat dan tepat (tentang proses), bersih dan nyaman (tentang bangunan) serta andal, profesional, kompeten dan siap membantu (tentang staf). Konsep ini diterima dengan baik oleh pelanggan Veteran Indonesia.
                                        </p>
                                    </div>
                                </div>
                            </div>

                                <div id="tabs-2">
                                    <div class="trip-schedule-accordion">
                                        <h3>Layanan Karpet Merah untuk Penumpang Istimewa</h3>
                                        <p align="justify">
                                        SkyTeam dengan bangga memperkenalkan SkyPriority untuk semua pelanggan istimewa anggota aliansi berupa layanan karpet merah yang meliputi prioritas area check-in, prioritas drop off bagasi, dan prioritas boarding, yang  dapat dinikmati oleh penumpang Elite Plus, First Class dan Business Class. SkyPriority sengaja dipersiapkan untuk memastikan  konsistensi kualitas layanan bandara utama seluruh anggota aliansi. Terlepas dari maskapai penerbangan atau program frequent flyer, SkyPriority telah dirancang untuk memberikan kemudahan dan bantuan kepada para pelanggan istimewa sehingga mereka dapat menikmati perjalanan bersama maskapai anggota aliansi. 
                                        </p>
                                        <p align="justify">
                                        Indikator SkyPriority pada boarding pass dan tanda-tanda SkyPriority yang dapat ditemukan di seluruh bandara membantu pelanggan menemukan di mana layanan tersebut dapat digunakan. Layanan SkyPriority dapat dinikmati di seluruh bandara SkyTeam di seluruh dunia. Layanan berikut akan ditawarkan kepada pelanggan yang memenuhi syarat: 
                                        </p>
                                    </div>
                                </div>
                                <div id="tabs-3">
                                    <div class="trip-schedule-accordion">
                                        <h3>Revitalisasi Armada</h3>
                                        <p align="justify">
                                        Revitalisasi armada Veteran Indonesia bertujuan untuk memperbarui aset lama dan menyesuaikannya dengan standar modern sebagai salah satu dasar untuk terus mengembangkan modal dan memastikan pertumbuhan di industri penerbangan. 
                                        </p>
                                        <p align="justify">
                                        Kami tengah melakukan program pengembangan armada melalui penambahan pesawat agar dapat lebih maksimal menangkap peluang pertumbuhan di masing-masing segmen pasar yang dilayani. Pada saat bersamaan, Veteran Indonesia juga akan menyederhanakan dan meremajakan pesawat agar dapat meningkatkan kualitas pelayanan dan efisiensi biaya operasi. 
                                        Jenis pesawat yang dipakai akan distandardisasi yaitu jenis Boeing B737-800NG dan Bombardier CRJ1000NextGen untuk rute jarak pendek dan regional, Airbus A330-200/300 untuk rute jarak menengah, Boeing B777-300ER untuk rute jarak jauh, dan Airbus A320-200 untuk Citilink.
                                        </p>
                                        <p align="justify">
                                        *Veteran Indonesia saat ini memiliki lebih dari 100 pesawat baru dengan usia 0-5 tahun yang terdiri dari: Boeing 777-300ER, Boeing 737-800NG, Airbus A330-200, Airbus A330-300, CRJ1000 NextGen, dan ATR 72-600. Pada April 2015, rata-rata usia armada kami adalah 5,4 tahun.
                                        </p>
                                    </div>
                                </div>
                            </div>
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
    <script type="text/javascript" src="js/lib/theia-sticky-sidebar.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type='text/javascript' src="js/lib/jquery-ui.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <!-- REVOLUTION DEMO -->
    <script type="text/javascript" src="revslider-demo/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revslider-demo/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript">
        if($('#slider-revolution').length) {
            $('#slider-revolution').show().revolution({
                ottedOverlay:"none",
                delay:10000,
                startwidth:1600,
                startheight:650,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                                        
                simplifyAll:"off",

                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview4",

                touchenabled:"on",
                onHoverStop:"on",
                nextSlideOnWindowFocus:"off",

                swipe_threshold: 0.7,
                swipe_min_touches: 1,
                drag_block_vertical: false,
                
                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                        
                                        
                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"on",
                fullScreen:"off",

                spinner:"spinner2",
                                        
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",
                
                
                
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0
            });
        }
    </script>

</body>
</html>
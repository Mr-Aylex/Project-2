<!doctype html>
<?php session_start() ?>
<?php $mon_compte=0 ?>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nos Formations</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<?php include "header.php" ?>
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <?php include "header.php" ?>
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area " style="
        background-image: url(../img/banner/formation.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Formations</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- case_study_area  -->
    <div class="case_study_area case_page">
        <div class="container">
            <div class="row">
                    <div class="col-xl-12">
                        <div class="portfolio-menu text-center">
                            <button class="active" data-filter="*">Tout</button>
                            <button data-filter=".cat1">Bac Technologique</button>
                            <button data-filter=".cat2">Bac Pro</button>
                            <button data-filter=".cat3">Secourisme</button>
                            <button data-filter=".cat4">BTS</button>
                        </div>
                    </div>
                </div>
            <div class="row grid">
                <div class="col-xl-4 grid-item cat1">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="../img/case/sti2d.jpg" alt="">
                        </div>
                        <div class="case_heading">
                            <h3><a href="bac_sti2d.php">Bac STI2D</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 grid-item cat2">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="../img/case/tu.jpg" alt="">
                        </div>
                        <div class="case_heading">
                            <h3><a href="bac_pro_tu.php">Bac Pro TU</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 grid-item cat2">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="../img/case/sn.jpg" alt="">
                        </div>
                        <div class="case_heading">
                            <h3><a href="bac_pro_sn.php">Bac Pro SN</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 grid-item cat2">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="../img/case/mei.jpg" alt="">
                        </div>
                        <div class="case_heading">
                            <h3><a href="bac_pro_mei.php">Bac Pro MEI</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 grid-item cat2">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="../img/case/prepa_pro.jpg" alt="">
                        </div>
                        <div class="case_heading">
                            <h3><a href="3eme_prepa_pro.php">3ème Prepa Pro</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 grid-item cat4">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="../img/case/slam.jpg" alt="">
                        </div>
                        <div class="case_heading">
                            <h3><a href="bts_sio_slam.php">BTS SIO option SLAM</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 grid-item cat4">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="../img/case/sisr.jpg" alt="">
                        </div>
                        <div class="case_heading">
                            <h3><a href="bts_sio_sisr.php">BTS SIO option SISR</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 grid-item cat4">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="../img/case/cprp.jpg" alt="">
                        </div>
                        <div class="case_heading">
                            <h3><a href="BTS_CPRP.php">BTS CPRP</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 grid-item cat3">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="../img/case/9.png" alt="">
                        </div>
                        <div class="case_heading">
                            <h3><a href="formation_sst.php">Formation SST</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <!--<div class="more_close_btn text-center">
                        <a href="case_details.html" class="boxed-btn3-line">More Cases</a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- /case_study_area  -->

    <!-- Information_area  -->
    <!--<div class="Information_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-8">
                    <div class="info_text text-center">
                        <h3>For Any Information Call Us</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        <a class="boxed-btn3" href="#">+10 673 763 6786</a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- /Information_area  end -->

    <!-- footer start -->
<?php include "footer.php" ?>
    <!--/ footer end  -->

    <!-- link that opens popup -->


    <!-- JS here -->

</body>

</html>

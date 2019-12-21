<!doctype html>
<?php session_start() ?>
<?php $mon_compte=0 ?>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Acceuil</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
  <!-- <link rel="manifest" href="site.webmanifest"> -->


  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  <style>

  #fils{
    width:450px;
    height:300px;
    margin-right: auto;
    margin-left: -5px;
    margin-top: -35px;
  }

  </style>
</head>

<body>
  <!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- header-start -->
    <?php include "header.php" ?>
  <!-- header-end -->

  <!-- slider_area_start -->
  <div class="slider_area">
    <div class="slider_active owl-carousel">
      <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="slider_text ">
                <h3><i class="fas fa-graduation-cap"></i>Lycée <br>
                  Robert Schuman</h3>
                  <div class="video_service_btn">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2">
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="slider_text ">
                  <h3><i class="fas fa-graduation-cap"></i>Lycée <br>
                    Robert Schuman</h3>
                    <div class="video_service_btn">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
              <div class="row">
                <div class="col-xl-12">
                  <div class="slider_text ">
                    <h3><i class="fas fa-graduation-cap"></i>Lycée <br>
                      Robert Schuman</h3>
                      <div class="video_service_btn">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2">
              <div class="container">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="slider_text ">
                      <h3><i class="fas fa-graduation-cap"></i>Lycée<br>
                        Robert Schuman</h3>
                        <div class="video_service_btn">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- slider_area_end -->

          <!-- about_info_area start  -->
          <div class="about_info_area">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                  <div class="about_text">
                    <h4>Comment inscrire son enfant ?</h4>
                    <p>Inscrivez votre enfant dès maintenant en cliquant ci-dessous.</p>
                    <a href="../page/formulaire/formulaire_inscription_eleve.php" class="boxed-btn3">Inscrire son enfant</a>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <div class="about_thumb">
                    <div class="carroussel1" style="margin-top:60px;">
                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active"style="border-radius:12px;width:670; height:400px;">
                            <img class="d-block w-100" class="image" src="../img/banner/inscription.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item"style="border-radius:12px;width:670; height:400px;">
                            <img class="d-block w-100"  class="image" src="../img/banner/mecanique.jpg" alt="Second slide">
                          </div>
                          <div class="carousel-item"style="border-radius:12px;width:670; height:400px;">
                            <img class="d-block w-100"  class="image" src="../img/banner/avion.jpg" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /about_info_area end  -->

          <!-- counter_area  -->
          <div class="counter_area counter_bg_1 overlay_03">
            <div class="container">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3">
                  <div class="single_counter text-center">
                    <div class="counter_icon">
                      <img src="../img/svg_icon/group.svg" alt="">
                    </div>
                    <h3> <span class="counter">100</span> <span> +</span> </h3>
                    <p>Nombre d'entreprise en partenariat</p>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                  <div class="single_counter text-center">
                    <div class="counter_icon">
                      <img src="../img/svg_icon/cart.svg" alt="">
                    </div>
                    <h3> <span class="counter">95</span> <span>%</span> </h3>
                    <p>Reussite au Bac</p>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                  <div class="single_counter text-center">
                    <div class="counter_icon">
                      <img src="../img/svg_icon/heart.svg" alt="">
                    </div>
                    <h3> <span class="counter">239</span></h3>
                    <p>Nombre d'élves</p>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                  <div class="single_counter text-center">
                    <div class="counter_icon">
                      <img src="../img/svg_icon/respect.svg" alt="">
                    </div>
                    <h3> <span class="counter">1300</span> <span>€</span></h3>
                    <p>Coût de la scolarité</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /counter_area  -->


          <!--Information_area  -->

          <div style="background-color:white; width:100px; height:200px ;"> </div>
          <div class="Information_area overlay">
            <div class="container">
              <div class="row justify-content-center align-items-center">
                <div class="col-xl-8">
                  <div class="info_text text-center">
                    <h3>Pour plus d'information :</h3>
                    <p class="boxed-btn3" > Tel : 01 48 37 74 26</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- footer -->
          <?php include "footer.php" ?>

        </body>

        </html>

<!doctype html>
<?php $mon_compte=0 ?>
<?php session_start() ?>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Projet</title>
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
  <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
  <!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- header-start -->
  <header>
    <div class="header-area ">
      <div class="header-top_area d-none d-lg-block">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-md-5 ">
              <div class="header_left">
                <p>    <a href="index.php">
                  <img style="margin-left:-160px; margin-top:-9px;" src="../img/logo.png" width="80px" height="50px" alt="">
                </a>Bienvenue sur le site du lycée privée et UFA Robert Schuman</p>
              </div>
            </div>
            <div class="col-xl-7 col-md-7">
              <div class="header_right d-flex">
                <div class="short_contact_list">
                  <ul>
                    <li><a href="#"> <i class="fa fa-envelope"></i>administration@lyceerobertschuman.com</a></li>
                    <li><a href="#"> <i class="fa fa-phone"></i>01 48 37 74 26</a></li>
                  </ul>
                </div>
                <div class="social_media_links">
                  <!--<a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>-->
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
                <!--<a href="#">
                <i class="fa fa-google-plus"></i>
              </a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sticky-header" class="main-header-area details_nav">
    <div class="container">
      <div class="header_bottom_border">
        <div class="row align-items-center">
          <div class="col-xl-3 col-lg-2">
            <div class="logo">
            </div>
          </div>
          <div class="">
            <div class="main-menu  d-none d-lg-block">
              <nav>
                <ul id="navigation">
                  <li><i class="fas fa-home" style="color:#1B9CFC;"></i> <a class="active" href="index.php">Menu</a></li>
                  <li><i class="fas fa-heart"  style="color:#1B9CFC;"></i> <a href="#">Vie <i class="ti-angle-down"></i></a>
                    <ul class="submenu">
                      <li><a href="case_details.php"><i class="fas fa-project-diagram" style="color:#1B9CFC;"></i> Projet</a></li>
                      <li><a href="about.php"> <i class="fas fa-route" style="color:#1B9CFC;" ></i>  Voyage</a></li>
                    </ul>
                  </li>
                  <li><i class="fas fa-building"style="color:#1B9CFC;"></i> <a href="services.php">Entreprise</a></li>
                  <li><i class="far fa-archway"style="color:#1B9CFC;"></i> <a href="formation.php">Formation</a></li>
                  <li><i class="fas fa-info"style="color:#1B9CFC;"></i> <a href="#">Informations <i class="ti-angle-down"></i></a>
                    <ul class="submenu">
                      <li><a href="blog.php"><i class="fas fa-file-upload"style="color:#1B9CFC;"></i> Documents </a></li>
                      <li><a href="single-blog.php"><i class="fas fa-table"style="color:#1B9CFC;"></i> Date</a></li>
                    </ul>
                  </li>
                  <!--<li><a href="..\page\formulaire_inscription_eleve.php">Inscrire son enfant</a></li>-->

                </ul>
              </nav>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 d-none d-lg-block">
            <div class="Appointment">
              <?php if (empty($_SESSION)) {?>
                <div class="book_btn d-none d-lg-block">
                  <a  href="../page/formulaire_connexion.php">Se connecter</a>
                </div>
              <?php }
              else {?>
                <div class="book_btn d-none d-lg-block">
                  <a  href="..\traitement\se_deconnecter.php">Se deconnecter</a>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</header>
<!-- header-end -->

<div class="case_details_area">
  <div class="container">
    <div class="border_bottom">
      <div class="row ">
        <div class="col-xl-12">
          <div class="details_title">
            <h3>Projet Educatif</h3>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="case_thumb">
            <img src="../img/banner/projet_educatif.png" alt="">
          </div>
        </div>
        <div class="col-xl-9">
          <div class="details_main_wrap">

            <p class="details_info">

              <a href="#" style="text-decoration:uderline; color:#192a56;">Nos aspirations : </a>  "L’ignorance est au centre de la pauvreté. Un jeune ignorant n’est pas maître de son histoire" Saint Vincent de Paul – 1640".
            </p>
            <ol>

              <li><span style="color:#192a56;">1.</span> Redonner confiance aux jeunes afin qu’ils croient en eux;</li>
              <li><span style="color:#192a56;">2.</span>  Donner du sens aux apprentissages;</li>
              <li><span style="color:#192a56;">3.</span>  Amener les jeunes à un épanouissement personnel;</li>
              <li><span style="color:#192a56;">4.</span>  Faire prendre conscience à chaque personne qu’il fait partie de l’histoire de l’établissement;</li>
              <li><span style="color:#192a56;">5.</span>  Revaloriser les formations professionnelles et techniques ;</li>
              <li><span style="color:#192a56;">6.</span>  Développer l’autonomie et l’esprit d’équipe ;</li>
              <li><span style="color:#192a56;">7.</span>  Ouvrir les jeunes au monde culturel.</li>


            </ol>


            <p class="details_info">

              <a href="#" style="text-decoration:uderline; color:#192a56;">Nos valeurs :</a> "Prendre en compte les différentes intelligences" Saint Ignace de Loyola – 1560
            </p>
            <ol>

              <li><span style="color:#192a56;">1.</span> Prendre en compte les intelligences multiples ;</li>
              <li><span style="color:#192a56;">2.</span> Avoir une équipe animée d’un même esprit de cohésion ;</li>
              <li><span style="color:#192a56;">3.</span>  Transmettre des valeurs de solidarité, de respect de la personne, d’entraide et de partage ;</li>
              <li><span style="color:#192a56;">4.</span>  Amener à la citoyenneté à travers les valeurs de l’évangile et de la république ;</li>
              <li><span style="color:#192a56;">5.</span>  Avoir un regard bienveillant ;</li>
              <li><span style="color:#192a56;">6.</span>  Utiliser l’évaluation positive pour valoriser l’individu ;</li>
              <li><span style="color:#192a56;">7.</span>  Prendre le temps d’accompagner chaque jeune dans son parcours.</li>


            </ol>



            <p class="details_info">

              <a href="#" style="text-decoration:uderline; color:#192a56;">Nos engagements : </a> "Ensemble et par association" Saint Jean- Baptiste de la Salle – 1685
            </p>
            <ol>

              <li><span style="color:#192a56;">1.</span> Valoriser les talents de chaque personne et donner le temps à la construction des apprentissages afin de veiller à la réussite de chacun.</li>
              <li><span style="color:#192a56;">2.</span> Etablir un climat de confiance et de dialogue avec les élèves, être à l’écoute de chaque famille ;</li>
              <li><span style="color:#192a56;">3.</span> Adapter nos enseignements afin de donner du sens à l’enseignement général à travers l’enseignement professionnel ;</li>
              <li><span style="color:#192a56;">4.</span>  Appréhender les réalités du monde professionnel et faire évoluer nos formations en fonctions des besoins ;</li>
              <li><span style="color:#192a56;">5.</span>  Favoriser la poursuite d’études et assurer l’insertion professionnelle de chacun en mettant à la disposition des élèves des outils pédagogiques et techniques performants ;</li>
              <li><span style="color:#192a56;">6.</span>  Développer et faciliter l’accès des jeunes au savoir, à la culture et aux sports</li>


              <div class="single_details mb-60">
                <div style="background-color:white; width:700px; height:200px; "></div>
                <ul>
                  <li>
                    <a href="#"> <i class="fa fa-facebook"></i> Facebook </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-twitter"></i> Twitter </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-pinterest-p"></i> Pinterest </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- case_study_area  -->
  <div class="case_study_area case_page">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title mb-40">
            <h3>Animation</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-md-6 col-lg-4">
          <div class="single_case">
            <div class="case_thumb">
              <img src="../img/banner/animation.jpg" alt="">
            </div>
            <div class="case_heading">
              <span>Journée d'intégration des secondes et des premières STI2D Octobre 2018</span>
              <h3><a href="#">Base de loisir de Cergy Pontoise</a></h3>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 col-lg-4">
          <div class="single_case">
            <div class="case_thumb">
              <img src="../img/banner/cerfal.jpg" alt="">
            </div>
            <div class="case_heading">
              <span>Cerfal</span>
              <h3><a href="#">Engagée Cerfal</a></h3>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 col-lg-4">
          <div class="single_case">
            <div class="case_thumb">
              <img src="../img/banner/tennis_table.jpg" alt="">
            </div>
            <  <div class="case_heading">
              <span>Tennis de table</span>
              <h3><a href="#">Tournoi de tennis de table</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /case_study_area  -->

  <!-- Information_area  -->
  <div style="background-color:white; width:100px; height:200px ;"> </div>
  <div class="Information_area overlay">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-xl-8">
          <div class="info_text text-center">
            <h3>Pour plus d'informations :</h3>
            <a class="boxed-btn3" href="#"> Tel : 01 48 37 74 26</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Information_area  end -->
  <?php
  include "footer.php"
  ?>
  <!-- footer start -->

  <!--<div class="col-xl-2 col-md-6 col-lg-3">
    <div class="footer_widget">
      <h3 class="footer_title">
        Services
      </h3>
      <ul>
        <li><a href="#">Marketing & SEO</a></li>
        <li><a href="#"> Startup</a></li>
        <li><a href="#">Finance solution</a></li>
        <li><a href="#">Food</a></li>
        <li><a href="#">Travel</a></li>
      </ul>

    </div>
  </div>
  <div class="col-xl-2 col-md-6 col-lg-2">
    <div class="footer_widget">
      <h3 class="footer_title">
        Useful Links
      </h3>
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#"> Contact</a></li>
        <li><a href="#">Appointment</a></li>
      </ul>
    </div>
  </div>-->
  <!--div class="col-xl-4 col-md-6 col-lg-4" style="margin-right:auto;">
    <div class="footer_widget">
      <h3 class="footer_title">
        Subscribe
      </h3>
      <form action="#" class="newsletter_form">
        <input type="text" placeholder="Enter your mail">
        <button type="submit">Subscribe</button>
      </form>
      <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.</p>
    </div>
  </div>-->

  <!--/ footer end  -->

  <!-- link that opens popup -->


  <!-- JS here -->
  <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="../js/vendor/jquery-1.12.4.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/isotope.pkgd.min.js"></script>
  <script src="../js/ajax-form.js"></script>
  <script src="../js/waypoints.min.js"></script>
  <script src="../js/jquery.counterup.min.js"></script>
  <script src="../js/imagesloaded.pkgd.min.js"></script>
  <script src="../js/scrollIt.js"></script>
  <script src="../js/jquery.scrollUp.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <script src="../js/nice-select.min.js"></script>
  <script src="../js/jquery.slicknav.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/plugins.js"></script>
  <script src="../js/gijgo.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <!--contact js-->
  <script src="../js/contact.js"></script>
  <script src="../js/jquery.ajaxchimp.min.js"></script>
  <script src="../js/jquery.form.js"></script>
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/mail-script.js"></script>

  <script src="../js/main.js"></script>
</body>

</html>

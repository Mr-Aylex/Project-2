
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
<header>
  <div class="header-area ">
    <div class="header-top_area d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-md-5 ">
            <div class="header_left">

              <a href="index.php">


                <p><img style="margin-left:-60px; margin-top:5px;" src="../img/logo.png" width="75px" height="50px" alt="">Bienvenue sur le site du lycée privée et UFA Robert Schuman</p>
              </a>


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
<div id="sticky-header" class="main-header-area">
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
                <li><i class="fas fa-building"style="color:#1B9CFC;"></i> <a href="entreprise.php">Entreprise</a></li>
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
            <?php
            if (empty($_SESSION['id']) and $mon_compte==0) {?>
              <div class="book_btn d-none d-lg-block">
                <a  href="formulaire_connexion.php">Se connecter</a>
              </div>
              <div class="book_btn d-none d-lg-block">
                <a  href="formulaire_inscription_parent.php">S'Inscrire</a>
              </div>
            <?php }
            elseif($mon_compte==1){?>
              <div class="book_btn d-none d-lg-block">
                <a  href="../traitement/se_deconnecter.php">Se déconnecter</a>
              </div>
            <?php }
            elseif($mon_compte==2){?>
              <div class="book_btn d-none d-lg-block">
                <a  href="formulaire_inscription_parent.php">S'Inscrire</a>
              </div>
            <?php }
            else {?>
              <div class="book_btn d-none d-lg-block">
                <a  href="mon_compte.php">Mon Compte</a>
              </div>
              <div class="book_btn d-none d-lg-block">
                <a  href="../traitement/se_deconnecter.php">Se déconnecter</a>
              </div>
            <?php }?>
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

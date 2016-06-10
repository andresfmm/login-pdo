
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.11.1, https://mobirise.com -->
  <base href="<?php echo APP_URL?>">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.11.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  <title><?php echo APP_TITTLE ?></title>
  <script src="vistas/app/js/generales.js"></script>
</head>




  <section class="engine"><a rel="nofollow" href="https://mobirise.com">Mobirise best free web design software
  </a></section>
  <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-1">
      <div class="mbr-navbar__section mbr-section">
          <div class="mbr-section__container container">
              <div class="mbr-navbar__container">
                  <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                      <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                          <span class="mbr-brand__logo"><a href="https://mobirise.com"><img class="mbr-navbar__brand-img mbr-brand__img" src="assets/images/logo.png" alt="Mobirise"></a></span>
                          <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="#">Meza</a></span>
                      </span>
                  </div>
                  <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                  <div class="mbr-navbar__column mbr-navbar__menu">
                      <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active"><li class="mbr-navbar__item"></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" >INICIO</buttom></li><li class="mbr-navbar__item">


                             <?php
                             

                              if(!isset($_SESSION["app_id"])){

                                echo '<a class="mbr-buttons__link btn text-white" data-toggle="modal" data-target="#myModal">INICIAR SESION</a></li></ul></div>';

                                echo '<div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-danger"  data-toggle="modal" data-target="#registro">REGISTRO</a></li></ul></div>';
                              }else{

                                echo '<a class="mbr-buttons__link btn text-white" data-toggle="modal" data-target="#myModal">'.strtoupper($_SESSION["usuario"]).'</a></li></ul></div>';
                                echo '  <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-danger" href="?view=cuenta">CUENTA</a></li></ul></div>
                            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-primary" href="nucleo/bin/funciones/salir.php">SALIR</a></li></ul></div>';
                                

                              }

                             ?>

                          


                          
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </section>


<?php 
if(!isset($_POST["app_id"])){
 include(HTML_DIR.'public/login.html'); 
 include(HTML_DIR.'public/reg.html'); 
 include(HTML_DIR.'public/lostpass.html');
}
  ?>
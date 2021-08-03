<?php
session_start();
if(isset($_SESSION['user']))
{
require_once '../parameters.php';
include('../connexion/connexion.php');

// 10 mins in seconds
$inactive = 300;
if( !isset($_SESSION['timeout']) )
$_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("location:../login.html");     }

$_SESSION['timeout']=time();

?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Devinbox Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

   <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <!-- Left Social -->
                    <div class="header-left-social">
                        <ul class="header-social">
                            <li><a target="_blank" href="https://web.facebook.com/Devinbox-112170117151430/?"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://api.whatsapp.com/send?phone=261344011755"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/49147337/"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="https://join.skype.com/invite/DVzVjmoEYePm"><i class="fab fa-skype"></i></a></li>
                            <li><a target="_blank" href="https://telegram.me/Devinbox"><i class="fab fa-telegram"></i></a></li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li>devinbox.contact@gmail.com</li>
                                        <li>+261 34 40 117 55</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul>
                                        <li><a href="sidentifier.html"><i class="ti-power"></i>Déconnexion</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <!-- Logo -->
                    <div class="logo d-none d-lg-block">
                        <a href="index.html"><img src="../assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <!-- Logo -->
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="../index.html"><img src="../assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="">Gestion des articles</a></li>
                                        <li><a href="">Gestion des inscriptions</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
                <div class="row contactBox">
                  <div class="col-lg-12">
                    <div class="text-center section-tittle">
                      <h2 class="pb-3">Formulaire d'ajout d'article</h2>
                    </div>
                          <form method="post" class="form-contact contact_form" action="article_insert.php"  id="" enctype="multipart/form-data">
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <div class="form-group">
                                              <label>Titre</label>
                                              <input class="form-control valid" name="titre" id="titre" type="text" required>
                                          </div>
                                      </div>
                                      <div class="col-sm-6">
                                          <div class="form-group">
                                              <label>Fichier</label>
                                              <input class="form-control valid" name="file" id="file" type="file" required>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="form-group">
                                            <label>Contenu de l'article</label>
                                            <textarea class="form-control w-100" name="contenu" id="contenu" cols="30" rows="9"></textarea required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                          <div class="form-group">
                                              <label>Date</label>
                                              <input class="form-control valid" name="date" id="date" type="date" required>
                                          </div>
                                      </div>
                                      <div class="col-sm-6">
                                          <div class="form-group">
                                              <label>Thématique</label>
                                              <input class="form-control valid" name="thematique" id="thematique" type="text" required>
                                          </div>
                                      </div>
                                      <div class="col-sm-6">
                                          <div class="form-group">
                                              <label>Auteur</label>
                                              <input class="form-control valid" name="auteur" id="auteur" type="text" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group mt-3">
                                    <center>
                                      <button type="submit" class="genric-btn success-border radius">Ajouter un article</button>
                                      <a href="../dashboard.php" class="genric-btn danger-border radius">Annuler</a>
                                    </center>
                                  </div>
                              </form>
                          </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->
    </main>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href=""> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/animated.headline.js"></script>

    <!-- Nice-select, sticky -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>

    <!-- contact js -->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

    <!-- SweatAlert -->
    <script src="../assets/js/sweetalert2.all.js"></script>
    <script src="../assets/js/sweetalert2.all.min.js"></script>

    </body>
</html>
<?php
}
else{
    header("location:../login.html");
}

?>

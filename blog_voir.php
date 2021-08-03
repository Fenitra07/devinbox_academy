<?php
  $id = $_GET['id'];
  include('connexion/connexion.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Devinbox Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
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
                                        <li><a href="sidentifier.html"><i class="ti-user"></i>Espace membre</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <!-- Logo -->
                    <div class="logo d-none d-lg-block">
                        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <!-- Logo -->
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Accueil</a></li>
                                        <li><a href="">Nos cours</a>
                                            <ul class="submenu">
                                                <li><a href="cours_en_presentiel.html">En présentiel</a></li>
                                                <li><a href="cours_en_ligne.html">En ligne</a></li>
                                                <li><a href="cours_dentreprise.html">Formation d'entreprise</a></li>
                                                <li><a href="cours_decole.html">Formation en établissement</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="inscription.html">S'inscrire</a></li>
                                        <li><a href="instructor.html">Nos instructeurs</a></li>
                                        <li><a href="blog.php">Blog</a>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            <div class="header-search d-none d-lg-block">
                                <form action="#" class="form-box f-right ">
                                    <input type="text" name="Search" placeholder="Chercher une formation">
                                    <div class="search-icon">
                                        <i class="fas fa-search special-tag"></i>
                                    </div>
                                </form>
                            </div>
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
        <!--? Hero Start -->
        <div class="">
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                              <?php
                                $sql = "SELECT * FROM article WHERE id_article = $id";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                               ?>
                                <h2 style="color: #2db6a7;"><?php echo $row['titre_art']; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--================Blog Area =================-->
        <section class="blog_area" style="padding-top: 40px; padding-bottom: 120px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <h5 style="color: black;"><p>Liste des actualités :</p></h5>
                                <ul>
                                    <?php
                                      $sql = "SELECT * FROM article ORDER BY id_article ASC";
                                      $result = mysqli_query($conn, $sql);

                                      if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                     ?>
                                      <li style="list-style-type: circle;"><a style="color: black;" href="blog_voir.php?id=<?php echo $row['id_article']; ?>"><?php echo $row['titre_art']; ?></a></li>

                                    <?php
                                        }
                                      }
                                    ?>
                                </ul>
                            </aside>
                        </div>
                    </div>

                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">

                    <?php
                      $sql = "SELECT * FROM article WHERE id_article = $id";
                      $result = $conn->query($sql);
                      $row = $result->fetch_assoc();
                     ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="<?php echo 'upload/'.$row['image_art'] ?>" alt="">
                                    <div href="#" class="blog_item_date">
                                        <!-- <h3>Jour</h3> -->
                                        <p><?php echo $row['thematique_art']; ?></p>
                                    </div>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2 class="blog-head" style="color: #2d2d2d;"><?php echo $row['titre_art']; ?></h2>
                                    </a>
                                    <ul class="blog-info-link">
                                        <li><i class="fa fa-user"></i><?php echo $row['auteur_art']; ?></li>
                                        <li><i class="fa fa-calendar"></i> <?php echo $row['date_pub_art']; ?></li>
                                    </ul>
                                    <br>
                                    <p><?php echo $row['contenu_art']; ?></p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- footer Heading -->
                    <div class="footer-heading">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-7 col-md-10">
                                <!-- <div class="footer-tittle2">
                                    <h4>Stay Updated</h4>
                                </div> -->
                                <!-- Form -->
                                <!-- <div class="footer-form mb-50">
                                    <div id="mc_embed_signup">

                                    </div>
                                </div -->>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="footer-tittle2">
                                    <h4>Nos réseaux sociaux</h4>
                                </div>
                                <!-- Footer Social -->
                                <div class="footer-social">
                                    <a target="_blank" href="https://web.facebook.com/Devinbox-112170117151430/?"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/company/49147337/"><i class="fab fa-linkedin"></i></a>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=261344011755"><i class="fab fa-whatsapp"></i></a>
                                    <a target="_blank" href="https://join.skype.com/invite/DVzVjmoEYePm"><i class="fab fa-skype"></i></a>
                                    <a target="_blank" target="_blank" href="https://telegram.me/Devinbox"><i class="fab fa-telegram"></i></a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Devinbox Academy</h4>
                                    <ul>
                                        <li><a href="cours_en_presentiel.html">Nos cours</a></li>
                                        <li><a href="inscription.html">S'inscrire</a></li>
                                        <li><a href="instructor.html">Nos instructeurs</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Nos autres services</h4>
                                    <ul>
                                        <li><a href="">Devinbox Academy</a></li>
                                        <li><a href="">Web Development</a></li>
                                        <li><a href="">Web hosting</a></li>
                                        <li><a href="">Mass email marketing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Types de cours</h4>
                                    <ul>
                                        <li><a href="cours_en_ligne.html">Formation en ligne</a></li>
                                        <li><a href="cours_en_presentiel.html">Formation en présentiel</a></li>
                                        <li><a href="cours_dentreprise.html">Formation d'entreprise</a></li>
                                        <li><a href="cours_decole.html">Formation en établissement</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>À télécharger</h4>
                                    <ul>
                                        <li><a target="_blank" href="assets/img/download/parcoursweb.png"><i class="fa fa-download"></i> Parcours WEB</a></li>
                                        <li><a target="_blank" href="assets/img/download/JAVA.png"><i class="fa fa-download"></i> Parcours JAVA</a></li>
                                        <li><a target="_blank" href="assets/img/download/comingsoon.gif"><i class="fa fa-download"></i> Parcours PYTHON</a></li>
                                        <li><a target="_blank" href="assets/img/download/parcoursweb.png"><i class="fa fa-download"></i> Parcours Wordpress</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Made with passion by <a href="https://www.dev-inbox.com" target="_blank">Devinbox</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    </body>
</html>

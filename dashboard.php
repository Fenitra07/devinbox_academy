<?php
session_start();
if(isset($_SESSION['user']))
{
require_once 'parameters.php';
include('connexion/connexion.php');

// 10 mins in seconds
$inactive = 300;
if( !isset($_SESSION['timeout']) )
$_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("location:login.html");     }

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
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
</head>
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
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <!-- Logo -->
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="">Gestion des articles</a></li>
                                        <!-- <li><a href="">Gestion des inscriptions</a></li> -->
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
                <div class="container">
            <h2 class="pb-3">Gestion des actualités </h2>
            <table id="table_id" class="display table-striped table table-bordered dt-responsive">
                <thead>
                  <tr>
                    <th style="width:20%;">Date de publication</th>
                    <th style="width:40%;">Titre</th>
                    <th style="width:20%;">Thématique</th>
                    <th style="width:20%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM article ORDER BY date_pub_art ASC";

                    $resultat = mysqli_query($conn, $sql);

                    if($resultat){
                      if(mysqli_num_rows($resultat)>0){
                        while ($row = mysqli_fetch_assoc($resultat)){

                  ?>

                  <tr data-id="<?php echo $row['id_article']; ?>">
                    <td><?php echo $row['date_pub_art']; ?></td>
                    <td><?php echo $row['titre_art']; ?></td>
                    <td><?php echo $row['thematique_art']; ?></td>
                    <td>
                      <center>
                        <a href="traitement/delete.php?id=<?php echo $row["id_article"] ?>" class="genric-btn danger radius" onclick="return confirm('Please confirm!')"><i class="fa fa-trash"></i></a>
                        <a href="traitement/article_create.php" class="genric-btn info radius"><i class="fa fa-plus"></i></a>
                      </center>
                    </td>
                  </tr>
                </tbody>
                <?php
                      }
                    }
                  }
                ?>

            </table>
            <!-- Ajout -->
            <a href="traitement/article_create.php" class="genric-btn success radius"><i class="fa fa-plus"></i> Ajouter un article</a>
            <!-- Ajout -->
          </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->
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
                                        <li><a href="cours_decole.html">Formation d'école</a></li>
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
<?php
}
else{
    header("location:login.html");
}

?>

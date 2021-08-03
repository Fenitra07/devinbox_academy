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
        <!-- SweatAlert -->
    <script src="../js/sweetalert2.all.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
</head>
<body>


<?php
// require_once '../parameters.php';
include('../connexion/connexion.php');

if(
  isset($_POST["titre"])
  && isset($_FILES["file"])
  && isset($_POST["contenu"])
  && isset($_POST["date"])
  && isset($_POST["thematique"])
  && isset($_POST["auteur"])
  )

  $titre = addslashes(trim($_POST["titre"]));

  $file_name = $_FILES['file']['name'];
  $file_tmp_name = $_FILES['file']['tmp_name'];
  $file_destination = "../upload/".$file_name;

  $contenu = addslashes(trim($_POST["contenu"]));
  $date = trim($_POST["date"]);
  $thematique = trim($_POST["thematique"]);
  $auteur = trim($_POST["auteur"]);

// var_dump($titre);die();

$sql ="INSERT INTO article(titre_art, image_art, contenu_art, date_pub_art, thematique_art, auteur_art) VALUES ('$titre', '$file_name', '$contenu', '$date', '$thematique', '$auteur')";

// var_dump($sql);die();

if (mysqli_query($conn, $sql)) {
    if(move_uploaded_file($file_tmp_name, $file_destination)){
      echo "<script type='text/javascript'>
       Swal.fire(
      'Article ajouté !',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../dashboard.php';
                })
            }
    </script>";
   } else {
    echo "<script type='text/javascript'>
       Swal.fire(
      'Oops...Une erreur s'est produite !',
      'Veuillez entrer à nouveau les informations',
      'error'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../dashboard.php';
                })
            }
    </script>";
   }

   echo "<script type='text/javascript'>
       Swal.fire(
      'Article ajouté !',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../dashboard.php';
                })
            }
    </script>";

} else {
    echo "<script type='text/javascript'>
       Swal.fire(
      'Oops...Une erreur s'est produite !',
      'Veuillez entrer à nouveau les informations',
      'error'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../dashboard.php';
                })
            }
    </script>";
}

mysqli_close($conn);

 ?>

    <!-- JS here -->

    <!-- <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script> -->
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<!--     <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script> -->
    <!-- Jquery Mobile Menu -->
    <!-- <script src="../assets/js/jquery.slicknav.min.js"></script> -->

    <!-- Jquery Slick , Owl-Carousel Plugins -->
<!--     <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script> -->
    <!-- One Page, Animated-HeadLin -->
    <!-- <script src="../assets/js/wow.min.js"></script> -->
    <!-- <script src="../assets/js/animated.headline.js"></script> -->

    <!-- Nice-select, sticky -->
<!--     <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script> -->

    <!-- contact js -->
    <!-- <script src="../assets/js/contact.js"></script> -->
<!--     <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script> -->
    <!-- <script src="../assets/js/mail-script.js"></script> -->
    <!-- <script src="../assets/js/jquery.ajaxchimp.min.js"></script> -->

    <!-- Jquery Plugins, main Jquery -->
<!--     <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script> -->

    <!-- SweatAlert -->
    <script src="../js/sweetalert2.all.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>

    </body>
</html>

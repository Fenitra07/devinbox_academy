<?php
session_start();
if(isset($_SESSION['user']))
{
  session_destroy();
}

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
</head>
<body>
<?php
  if (isset($_POST['identifiant'])&& isset($_POST['password'])) {
    $login = $_POST['identifiant'];
    $mdp = $_POST['password'];

  // require_once '../parameters.php';
  include('../connexion/connexion.php');

  $sql = "SELECT * FROM login WHERE login_identifiant = '$login' AND login_password='$mdp'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if ($row) {
    $_SESSION['user'] = 'devinbox007@';
    header("location:../dashboard.php");
  }else{
    echo "<script type='text/javascript'>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Veuillez contacter l \'administrateur du site!'
        });
        var btnSwalls = document.getElementsByClassName('swal2-confirm');
        for(var i = 0; i<btnSwalls.length; i++)
        {
          btnSwalls[i].addEventListener('click', function(e){
            e.preventDefault();
            window.location = '../login.html';
            })
        }
      </script>";
  }
  }
  else
  {
    header("location:../login.html");
  }
  mysqli_close($conn);
 ?>


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


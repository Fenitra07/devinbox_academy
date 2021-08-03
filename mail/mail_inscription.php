<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Devinbox Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <!-- SweatAlert -->
    <script src="../js/sweetalert2.all.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
</head>
<body>


<?php
    require_once '../parameters.php';
  if (!empty($_POST['nom']) && !empty($_POST["prenom"])  && !empty($_POST['telephone']) && !empty($_POST['email']) && !empty($_POST['module']) && !empty($_POST['typecours']) && !empty($_POST['daterentree']) && !empty($_POST['formation'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $module = $_POST['module'];
    $typecours = $_POST['typecours'];
    $daterentree = $_POST['daterentree'];
    $formation = $_POST['formation'];



//  include("setting_mail.php");
        require_once '../vendor/autoload.php';
// Create the Transport
        try {

            $transport = (new Swift_SmtpTransport(PARAMS['mailer_host'], PARAMS['mailer_port']))
//    ->setUsername('no-reply@go-dominican-republic.com')
//    ->setPassword('A741852*/')
            ;

// Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

// Create a message
            $message = (new Swift_Message(("$email (Inscription au cours)")))
                ->setFrom(['devinbox.contact@gmail.com' => 'Devinbox'])
                ->setTo([PARAMS['contact_mail']])
                ->setBody("<b>Nom :</b> ".$nom."<br>"."<b>Prenom : </b>".$prenom."<br>"."<b>Telephone : </b>".$telephone."<br>". "<b>Email : </b>".$email."<br>"."<b>Module : </b>".$module."<br>"."<b>Type de cours : </b>".$typecours."<br>"."<b>Date rentrée : </b>".$daterentree."<br>"."<b>Formation : </b>".$formation."<br>", 'text/html')
            ;

// Send the message
            try {

                $result = $mailer->send($message);
                echo "<script type='text/javascript'>
                   Swal.fire(
                  'Message envoyé!',
                  'Veuillez cliquer sur le boutton ci-dessous !',
                  'success'
                );
                var btnSwalls = document.getElementsByClassName('swal2-confirm');
                        for(var i = 0; i<btnSwalls.length; i++)
                        {
                          btnSwalls[i].addEventListener('click', function(e){
                            e.preventDefault();
                            window.location = '../inscription.html';
                            })
                        }
                </script>";
            } catch (Swift_TransportException $exception) {
                echo "<script type='text/javascript'>
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...Une erreur s\'est produite',
                      text: 'Veuillez actualiser la page et ressaisir les informations!'
                    });
                    var btnSwalls = document.getElementsByClassName('swal2-confirm');
                    for(var i = 0; i<btnSwalls.length; i++)
                    {
                        btnSwalls[i].addEventListener('click', function(e){
                            e.preventDefault();
                            window.location = '../inscription.html';
                            })
                    }
                </script>";
            }

        } catch (Exception $exception) {
            var_dump($exception);die;
        }


  }
 ?>
 </body>
</html>
